<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\RuleMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainRuleCommand extends RuleMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:rule';

    protected $description = 'Create a new domain validation rule';

    protected $type = 'Rules';
}
