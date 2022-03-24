<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainModelCommand extends ModelMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:model';

    protected $description = 'Create a new domain Eloquent model class';

    protected $type = 'Models';
}
