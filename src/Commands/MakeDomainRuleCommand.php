<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\ResourceMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainResourceCommand extends ResourceMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:resource';

    protected $description = 'Create a new domain resource class';

    protected $type = 'Resources';
}
