<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\ConsoleMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainConsoleCommand extends ConsoleMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:command';

    protected $description = 'Create a new domain Artisan command';

    protected $type = 'Commands';
}
