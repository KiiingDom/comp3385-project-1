<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TransferImages extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images:transfer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Transfer images from storage/app/public/photos to public/property_pictures';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $files = Storage::files('public/photos');

        foreach ($files as $file) {
            $newPath = str_replace('public/photos', 'public/property_pictures', $file);
            Storage::move($file, $newPath);
        }

        $this->info('Images transferred successfully.');
    }
}
