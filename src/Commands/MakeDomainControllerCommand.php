<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Routing\Console\ControllerMakeCommand;
use Symfony\Component\Console\Input\InputOption;

class MakeDomainControllerCommand extends ControllerMakeCommand
{
    protected $name = 'domain:make:controller';

    protected $description = 'Create a new domain controller class';

    protected function getDefaultNamespace($rootNamespace): string
    {
        $domain = $this->option('domain');
        return "{$rootNamespace}\Domain\\{$domain}\Controllers";
    }


    protected function getOptions(): array
    {
        $options = parent::getOptions();
        $options[] = ['domain', null, InputOption::VALUE_REQUIRED, 'Manually specify the controller domain.'];
        return $options;
    }

}
