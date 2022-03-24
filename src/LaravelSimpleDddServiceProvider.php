<?php

namespace LSNepomuceno\LaravelSimpleDdd;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use ReflectionClass;
use ReflectionException;
use Symfony\Component\Finder\Finder;

class LaravelSimpleDddServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }


    /**
     * @throws ReflectionException
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                $this->autoLoadCommands(__DIR__ . '/Commands')
            );
        }
    }

    /**
     * @throws ReflectionException
     */
    protected function autoLoadCommands($paths): array
    {
        $paths = array_unique(Arr::wrap($paths));

        $paths = array_filter($paths, function ($path) {
            return is_dir($path);
        });

        if (empty($paths)) {
            return [];
        }

        $namespace = __NAMESPACE__ . '\Commands\\';
        $commands = [];

        foreach ((new Finder)->in($paths)->files() as $command) {
            $command = $namespace . str_replace(
                    ['/', '.php'],
                    ['\\', ''],
                    $command->getFilename()
                );

            try {
                if (is_subclass_of($command, Command::class) &&
                    !(new ReflectionClass($command))->isAbstract()) {
                    $commands[] = $command;
                }
            } catch (ReflectionException $e) {
                throw new $e;
            }
        }

        return $commands;
    }
}
