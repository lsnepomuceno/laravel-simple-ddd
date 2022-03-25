<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\ProviderMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainProviderCommand extends ProviderMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:provider';

    protected $description = 'Create a new domain service provider class';

    protected $type = 'Providers';
}
