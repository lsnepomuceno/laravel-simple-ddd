<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Routing\Console\MiddlewareMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainMiddlewareCommand extends MiddlewareMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:middleware';

    protected $description = 'Create a new domain middleware class';

    protected $type = 'Middleware';
}
