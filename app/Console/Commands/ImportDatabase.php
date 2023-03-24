<?php

namespace App\Console\Commands;

use App\Models\ItemList;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:dbdump';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importing raw sql dump';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $JsonIN = json_decode(file_get_contents("dump.json"));
        foreach($JsonIN->ItemList as $Item)
        {
            ItemList::create(
                [
                    "Item" => $Item->Name,
                    "Title" => $Item->Title,
                    "RenewableMax" => $Item->RenewableMax,
                    "Renewable" => $Item->RenewableMax,
                ]
                );
        }
        return Command::SUCCESS;
    }
}
