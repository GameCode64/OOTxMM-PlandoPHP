<?php

namespace App\Console\Commands;

use App\Models\ItemList;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ExportDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:dbdump';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Exporting Database to json';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $JsonOut = array();

        foreach(ItemList::all() as $Item)
        {
            $JsonOut["ItemList"][] = [
                "Name" => $Item->Item,
                "Title" => $Item->Title,
                "RenewableMax" => $Item->RenewableMax
            ];
        }
        file_put_contents("dump.json", json_encode($JsonOut, JSON_PRETTY_PRINT));
        return COMMAND::SUCCESS;
    }
}
