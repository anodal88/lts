<?php

namespace App\Console\Commands\Sabre;

use App\Company;
use App\SabrePropertyConfiguration;
use database\types\ModeType;
use Illuminate\Console\Command;

class SabrePropertyConfigInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sabre:default-config:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Using the environment variables create Sabre property config record and assign it to the default company';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $spc = new SabrePropertyConfiguration();
        $spc->domain_dev = env('DOMAIN');
        $spc->organization_dev = env('ORGANIZATION');
        $spc->username_dev = env('USERNAME');
        $spc->password_dev = env('PASSWORD');
        $spc->mode = ModeType::MODE_DEV;
        $spc->logs_enabled =true;
        $spc->company_id = env('DEFAULT_COMPANY');
        $spc->save();

        $this->info("Default configuration created successfully!!");
    }
}
