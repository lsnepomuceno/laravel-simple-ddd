<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Console\GeneratorCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainStubResolverTrait;

class MakeDomainTraitCommand extends GeneratorCommand
{
    use DomainDefaultSettingsTrait, DomainStubResolverTrait;

    protected $name = 'domain:make:trait';

    protected $description = 'Create a new domain trait';

    protected $type = 'Traits';

    protected string $stub = 'trait';
}
