<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\ChannelMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainChannelCommand extends ChannelMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:channel';

    protected $description = 'Create a new domain channel class';

    protected $type = 'Channels';
}
