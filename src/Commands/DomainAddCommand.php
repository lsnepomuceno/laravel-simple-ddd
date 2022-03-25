<?php

namespace LSNepomuceno\LaravelSimpleDdd\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DomainAddCommand extends Command
{
    protected $signature = 'domain:add
                                    {domainName : The name of the domain folder}
    ';

    protected $description = 'Create a new domain folders architecture';

    protected array $children = ['Actions', 'Controllers', 'Models', 'Repositories'];

    protected string $baseDomainDirName;

    public function handle(): int
    {
        $domainName = formatDomainNameDir($this->argument(key: 'domainName'));
        $this->baseDomainDirName = app_path("Domain/{$domainName}");

        if (File::exists($this->baseDomainDirName)) {
            $this->askIfItIsToDeleteTheDirectory();
        }

        return $this->createDirectoryAndChildren();
    }

    private function askIfItIsToDeleteTheDirectory(): void
    {
        $confirme = $this->choice(
            'This domain already exists, do you want to delete all content?',
            ['No', 'Yes'],
            0
        );

        if (strtolower($confirme) === 'no') {
            $this->info('Operation canceled');
            die;
        }

        File::deleteDirectory($this->baseDomainDirName);
    }

    private function createDirectoryAndChildren(): int
    {
        if (File::makeDirectory($this->baseDomainDirName)) {
            foreach ($this->children as $child) {
                File::makeDirectory("{$this->baseDomainDirName}/{$child}");
            }
            $this->info('Domain created successfully');
            return self::SUCCESS;
        }

        $this->error('Unable to create the given domain, please try again.');
        return self::FAILURE;
    }
}
