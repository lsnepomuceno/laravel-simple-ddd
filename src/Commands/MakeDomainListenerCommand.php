<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\JobMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainJobCommand extends JobMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:job';

    protected $description = 'Create a new domain job class';

    protected $type = 'Jobs';
}
