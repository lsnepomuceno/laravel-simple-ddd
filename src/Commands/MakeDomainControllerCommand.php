<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Routing\Console\ControllerMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainControllerCommand extends ControllerMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:controller';

    protected $description = 'Create a new domain controller class';

    protected $type = 'Controllers';
}
