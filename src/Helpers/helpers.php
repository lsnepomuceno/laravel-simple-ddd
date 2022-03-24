<?php

use Illuminate\Support\Str;

if (!function_exists('formatPathNameSlashes')) {
    function formatPathNameSlashes(string $path): string
    {
        return str_replace('\\', '/', $path);
    }
}

if (!function_exists('formatDomainNameDir')) {
    function formatDomainNameDir(string $domainName): string
    {
        $domainName = formatPathNameSlashes($domainName);
        $directories = explode('/', $domainName);

        return collect($directories)
            ->map(fn($dir) => Str::studly($dir))
            ->join('/');
    }
}
