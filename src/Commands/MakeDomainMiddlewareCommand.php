<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\MailMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainMailCommand extends MailMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:mail';

    protected $description = 'Create a new domain email class';

    protected $type = 'Mails';
}
