<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\PolicyMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainPolicyCommand extends PolicyMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:policy';

    protected $description = 'Create a new domain policy class';

    protected $type = 'Policies';
}
