<?php

namespace App\Console\Commands;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command Setup the migration & Seeding';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->confirm("This action will wipe Database, Continue  🤔?")) {

            Artisan::call('migrate:fresh');
            $this->info("🧹🧹🧹 ~ Database Scaffolded");

            $this->info("⚙️ 🛠️ 🔧  ~ Setup Started");

            (new DatabaseSeeder)->run();

            $this->info("🚀🚀🚀 ~ Application is Live");
        } else {
            $this->info("😅😅😅 ~ Setup Cancelled");
        }
    }
}
