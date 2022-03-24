<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\CastMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainCastCommand extends CastMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:cast';

    protected $description = 'Create a new domain custom Eloquent cast class';

    protected $type = 'Casts';
}
