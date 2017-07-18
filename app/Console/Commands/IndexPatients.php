<?php

namespace App\Console\Commands;

use Config;
use Illuminate\Console\Command;
use TeamTNT\TNTSearch\TNTSearch;

class IndexPatients extends Command {  

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'index:patients';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index the patients table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $tnt = new TNTSearch;

        $tnt->loadConfig([
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'biovita',
            'username' => 'root',
            'password' => 'milica',
            'storage' => storage_path(),
        ]);

        $indexer = $tnt->createIndex('patients.index');
        $indexer->query('SELECT id, name, date_of_birth, address, place, phone,  blood_type FROM patients;');
        $indexer->run();
    }

}
