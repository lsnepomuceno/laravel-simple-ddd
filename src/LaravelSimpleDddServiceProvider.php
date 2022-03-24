<?php

namespace LSNepomuceno\LaravelSimpleDdd;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use ReflectionClass;
use ReflectionException;

class LaravelSimpleDddServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                $this->autoLoadCommands(__DIR__ . '/Commands')
            );
        }
    }

    protected function autoLoadCommands(string $path): array
    {
        if (empty($path)) {
            return [];
        }

        $namespace = __NAMESPACE__ . '\Commands\\';
        $commands = [];

        foreach (File::allFiles($path) as $command) {
            $command = $namespace . str_replace(['/', '.php'], ['\\', ''], $command->getFilename());

            try {
                if (is_subclass_of($command, Command::class) &&
                    !(new ReflectionClass($command))->isAbstract()) {
                    $commands[] = $command;
                }
            } catch (ReflectionException $e) {
                Log::error("There was an error registering the command {$command}: {$e->getMessage()}");;
            }
        }

        return $commands;
    }
}
