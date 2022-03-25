<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\RequestMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainRequestCommand extends RequestMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:request';

    protected $description = 'Create a new domain request class';

    protected $type = 'Requests';
}
