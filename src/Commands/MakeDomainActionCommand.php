<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Console\GeneratorCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainStubResolverTrait;

class MakeDomainActionCommand extends GeneratorCommand
{
    use DomainDefaultSettingsTrait, DomainStubResolverTrait;

    protected $name = 'domain:make:action';

    protected $description = 'Create a new domain action';

    protected $type = 'Actions';

    protected string $stub = 'action';
}
