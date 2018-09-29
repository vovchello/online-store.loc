<?php

namespace App\Console\Commands;

use App\Contracts\FileStorageInterface;
use Illuminate\Console\Command;
use App\Servises\Filestorage\S3Filestorage;

/**
 * Class FileStorage
 * @package App\Console\Commands
 */
class FileStorage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'file:store';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    private $filestorage;


    /**
     * FileStorage constructor.
     * @param S3Filestorage $filestorage
     */
    public function __construct(FileStorageInterface $filestorage)
    {
        parent::__construct();

        $this->filestorage = $filestorage;
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $filestorage = $this->filestorage;

        dd($filestorage->upload());

    }

}
