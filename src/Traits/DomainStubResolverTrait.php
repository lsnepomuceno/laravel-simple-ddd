<?php

namespace LSNepomuceno\LaravelSimpleDdd\Traits;

trait DomainStubResolverTrait
{
    protected function getStub(): string
    {
        return $this->resolveStubPath("/Stubs/{$this->stub}.stub");
    }

    protected function resolveStubPath($stub): string
    {
        $customPath = $this->laravel->basePath(trim($stub, '/'));
        return file_exists($customPath)
            ? $customPath
            : dirname(__DIR__) . $stub;
    }
}
