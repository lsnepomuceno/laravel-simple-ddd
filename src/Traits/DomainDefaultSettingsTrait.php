<?php

namespace LSNepomuceno\LaravelSimpleDdd\Traits;

use Symfony\Component\Console\Input\InputOption;

trait DomainGetOptionsTrait
{
    protected function getOptions(): array
    {
        $options = parent::getOptions();
        $options[] = ['domain', null, InputOption::VALUE_REQUIRED, 'Manually specify the domain.'];
        return $options;
    }
}
