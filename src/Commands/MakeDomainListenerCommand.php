<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\ListenerMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainListenerCommand extends ListenerMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:listener';

    protected $description = 'Create a new domain listener class';

    protected $type = 'Listeners';
}
