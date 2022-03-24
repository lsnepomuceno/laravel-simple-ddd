<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\NotificationMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainNotificationCommand extends NotificationMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:notification';

    protected $description = 'Create a new domain notification class';

    protected $type = 'Notifications';
}
