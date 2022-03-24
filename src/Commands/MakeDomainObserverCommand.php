<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Foundation\Console\ObserverMakeCommand;
use LSNepomuceno\LaravelSimpleDdd\Traits\DomainDefaultSettingsTrait;

class MakeDomainObserverCommand extends ObserverMakeCommand
{
    use DomainDefaultSettingsTrait;

    protected $name = 'domain:make:observer';

    protected $description = 'Create a new domain observer class';

    protected $type = 'Observers';

    protected ?string $modelName;

    protected function buildClass($name): string
    {
        $stub = parent::buildClass($name);

        $this->modelName = $this->option('model');

        if (!$this->modelName) {
            $this->askIfItIsToUseTheDomainModel();
        }

        return $this->modelName ? $this->replaceModel($stub, $this->modelName) : $stub;
    }

    protected function askIfItIsToUseTheDomainModel(): void
    {
        $confirme = $this->choice(
            'Do you want to use a model available in this domain?',
            ['No', 'Yes'],
            1
        );

        if (strtolower($confirme) === 'yes') {
            $this->validateOrCreateTheModel();
        }
    }

    protected function validateOrCreateTheModel()
    {
        $domain = formatDomainNameDir($this->option('domain'));
    }
}
