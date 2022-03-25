<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Console\GeneratorCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainTraitCommand extends GeneratorCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:trait';

    protected $description = 'Create a new domain trait';

    protected $type = 'Traits';

    protected function getStub(): string
    {
        return $this->resolveStubPath('/Stubs/trait.stub');
    }

    protected function resolveStubPath($stub): string
    {
        $customPath = $this->laravel->basePath(trim($stub, '/'));
        return file_exists($customPath)
            ? $customPath
            : dirname(__DIR__) . $stub;
    }
}
