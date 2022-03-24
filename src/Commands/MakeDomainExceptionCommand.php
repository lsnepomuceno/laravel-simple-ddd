<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\ExceptionMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainExceptionCommand extends ExceptionMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:exception';

    protected $description = 'Create a new domain custom exception class';

    protected $type = 'Exceptions';
}
