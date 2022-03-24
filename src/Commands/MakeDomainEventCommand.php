<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\EventMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainEventCommand extends EventMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:event';

    protected $description = 'Create a new domain event class';

    protected $type = 'Events';
}
