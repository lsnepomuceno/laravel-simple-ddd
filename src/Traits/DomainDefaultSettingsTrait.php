<?php

namespace LSNepomuceno\LaravelSimpleDdd\Traits;

use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

trait DomainDefaultSettingsTrait
{
    protected function getDefaultNamespace($rootNamespace): string
    {
        $domain = formatDomainNameDir($this->option('domain'));
        return "{$rootNamespace}\Domain\\{$domain}\\{$this->type}";
    }

    protected function getOptions(): array
    {
        $options = parent::getOptions() ?? [];
        $options[] = ['domain', null, InputOption::VALUE_REQUIRED, 'Manually specify the domain.'];
        return $options;
    }
}
