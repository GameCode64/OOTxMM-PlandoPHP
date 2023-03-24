<?php

namespace App\Http\Controllers;

use App\Addons\Locations;
use App\Models\ItemList;
use Illuminate\Http\Request;

class Plando extends Controller
{
    public static function Index()
    {
        // retrurning the Blade view
        return view("locations", ["LocationPools" => Locations::$ItemLocationPools]);
    }

    public static function A_items()
    {
        // Outputting the Items to the Async
        return ItemList::where([["Renewable", ">", 0]])->orderby("Title")->get(["Item", "Title"]);
    }

    public static function A_updateItem($NewItem, $OldItem, $Name)
    {
        // Updating the items in the database
        $ItemsListNew = ItemList::where([["Item", "=", "$NewItem"]]);
        $ItemsListNew->decrement("Renewable");
        $ItemsListNew->update(["BoundLocation" => $Name]);

        $ItemsListOld = ItemList::where([["Item", "=", "$OldItem"]]);
        $ItemsListOld->increment("Renewable");
        $ItemsListOld->update(["BoundLocation" => null]);
    }

    public static function ResetItems(int $ResetLevel = 0)
    {
        // Reseting the full table
        if ($ResetLevel >= 4) {
            ItemList::truncate();
            ItemList::upsert(Locations::$ItemList, ["Item", "Title"]);
        }

        // Reinserting the item list with titlenames
        if ($ResetLevel >= 2) {
            foreach (Locations::$ItemList as $Item) {
                ItemList::updateOrCreate(
                    [
                        "Item" => $Item["Item"]
                    ],
                    [
                        "Title" => $Item["Title"]
                    ]
                );
            }
        }

        // Cleaning bound locations
        $ItemsList = ItemList::where([["BoundLocation", "!=", null]]);
        $ItemsList->update(["BoundLocation" => null]);

        // Resetting the used Renewable counters to the Max defined in the table
        foreach (ItemList::all() as $Item) {
            $Item->update(["Renewable" => $Item->RenewableMax]);
        }

        //returning to root of the site
        return redirect("/");
    }

    public static function Generate()
    {
        if (isset($_POST["Items"])) {
            $Output = array();
            foreach ($_POST["Items"] as $Location => $Item) {
                if ($Item != "NONE_NONE_NONE") {
                    $Output["ItemLocations"][] = array(
                        "Item" => $Item,
                        "Location" => $Location,
                    );
                }
            }
            return $Output;
        }
    }
}
