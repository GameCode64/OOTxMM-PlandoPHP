<?php

namespace App\Addons;

use Illuminate\Http\Request;

class Locations
{

    static public $ItemLocationPools  = [
        "OOTLocations" => [
            "OOT Hatch Chicken",
            "OOT Hatch Pocket Cucco",
            "OOT Kokiri Forest Mido Top Left",
            "OOT Kokiri Forest Mido Top Right",
            "OOT Kokiri Forest Mido Bottom Left",
            "OOT Kokiri Forest Mido Bottom Right",
            "OOT Kokiri Forest Kokiri Sword Chest",
            "OOT Kokiri Forest Storms Grotto",
            "OOT Kokiri Forest GS Soil",
            "OOT Kokiri Forest GS Night Child",
            "OOT Kokiri Forest GS Night Adult",
            "OOT Kokiri Forest Cow",
            "OOT Kokiri Shop Item 1",
            "OOT Kokiri Shop Item 2",
            "OOT Kokiri Shop Item 3",
            "OOT Kokiri Shop Item 4",
            "OOT Kokiri Shop Item 5",
            "OOT Kokiri Shop Item 6",
            "OOT Kokiri Shop Item 7",
            "OOT Kokiri Shop Item 8",
            "OOT Malon Egg",
            "OOT Zelda's Letter",
            "OOT Zelda's Song",
            "OOT Lost Woods Gift from Saria",
            "OOT Lost Woods Target",
            "OOT Lost Woods Skull Kid",
            "OOT Lost Woods Memory Game",
            "OOT Lost Woods Scrub Sticks Upgrade",
            "OOT Lost Woods Odd Mushroom",
            "OOT Lost Woods Poacher's Saw",
            "OOT Lost Woods Grotto Scrub Nuts Upgrade",
            "OOT Lost Woods Grotto Generic",
            "OOT Lost Woods GS Soil Bridge",
            "OOT Lost Woods GS Soil Theater",
            "OOT Lost Woods GS Bean Ride",
            "OOT Deku Theater Sticks Upgrade",
            "OOT Deku Theater Nuts Upgrade",
            "OOT Saria's Song",
            "OOT Sacred Meadow Sheik Song",
            "OOT Sacred Meadow Grotto",
            "OOT Sacred Meadow GS Night Adult",
            "OOT Kakariko Anju Bottle",
            "OOT Kakariko Anju Egg",
            "OOT Kakariko Anju Cojiro",
            "OOT Kakariko Song Shadow",
            "OOT Kakariko Man on Roof",
            "OOT Kakariko Impa House HP",
            "OOT Kakariko Grotto Front",
            "OOT Kakariko Grotto Back",
            "OOT Kakariko GS Roof",
            "OOT Kakariko GS Shooting Gallery",
            "OOT Kakariko GS Tree",
            "OOT Kakariko GS House of Skulltula",
            "OOT Kakariko GS Bazaar",
            "OOT Kakariko GS Ladder",
            "OOT Kakariko Potion Shop Odd Potion",
            "OOT Kakariko Cow",
            "OOT Kakariko Bazaar Item 1",
            "OOT Kakariko Bazaar Item 2",
            "OOT Kakariko Bazaar Item 3",
            "OOT Kakariko Bazaar Item 4",
            "OOT Kakariko Bazaar Item 5",
            "OOT Kakariko Bazaar Item 6",
            "OOT Kakariko Bazaar Item 7",
            "OOT Kakariko Bazaar Item 8",
            "OOT Kakariko Potion Shop Item 1",
            "OOT Kakariko Potion Shop Item 2",
            "OOT Kakariko Potion Shop Item 3",
            "OOT Kakariko Potion Shop Item 4",
            "OOT Kakariko Potion Shop Item 5",
            "OOT Kakariko Potion Shop Item 6",
            "OOT Kakariko Potion Shop Item 7",
            "OOT Kakariko Potion Shop Item 8",
            "OOT Graveyard Dampe Game",
            "OOT Graveyard ReDead Tomb",
            "OOT Graveyard Royal Tomb Song",
            "OOT Graveyard Royal Tomb Chest",
            "OOT Graveyard Fairy Tomb",
            "OOT Graveyard Dampe Tomb Reward 1",
            "OOT Graveyard Dampe Tomb Reward 2",
            "OOT Graveyard Crate HP",
            "OOT Graveyard GS Soil",
            "OOT Graveyard GS Wall",
            "OOT Death Mountain Chest",
            "OOT Death Mountain HP",
            "OOT Death Mountain Prescription",
            "OOT Death Mountain Claim Check",
            "OOT Death Mountain Biggoron Sword",
            "OOT Death Mountain Grotto",
            "OOT Death Mountain GS Entrance",
            "OOT Death Mountain GS Soil",
            "OOT Death Mountain GS Above Dodongo",
            "OOT Death Mountain GS Before Climb",
            "OOT Death Mountain Cow",
            "OOT Darunia",
            "OOT Goron City Maze Center 1",
            "OOT Goron City Maze Center 2",
            "OOT Goron City Maze Left",
            "OOT Goron City Big Pot HP",
            "OOT Goron City Tunic",
            "OOT Goron City Bomb Bag",
            "OOT Goron City Medigoron Giant Knife",
            "OOT Goron City GS Platform",
            "OOT Goron City GS Maze",
            "OOT Goron Shop Item 1",
            "OOT Goron Shop Item 2",
            "OOT Goron Shop Item 3",
            "OOT Goron Shop Item 4",
            "OOT Goron Shop Item 5",
            "OOT Goron Shop Item 6",
            "OOT Goron Shop Item 7",
            "OOT Goron Shop Item 8",
            "OOT Death Mountain Crater Alcove HP",
            "OOT Death Mountain Crater Volcano HP",
            "OOT Death Mountain Crater Sheik Song",
            "OOT Death Mountain Crater Grotto",
            "OOT Death Mountain Crater GS Soil",
            "OOT Death Mountain Crater GS Crate",
            "OOT Zora River HP Pillar",
            "OOT Zora River HP Platform",
            "OOT Zora River Bean Seller",
            "OOT Zora River Frogs Storms",
            "OOT Zora River Frogs Game",
            "OOT Zora River Grotto",
            "OOT Zora River GS Tree",
            "OOT Zora River GS Ladder",
            "OOT Zora River GS Near Grotto",
            "OOT Zora River GS Near Bridge",
            "OOT Zora Domain Waterfall Chest",
            "OOT Zora Domain Diving Game",
            "OOT Zora Domain Tunic",
            "OOT Zora Domain Eyeball Frog",
            "OOT Zora Domain GS Waterfall",
            "OOT Zora Shop Item 1",
            "OOT Zora Shop Item 2",
            "OOT Zora Shop Item 3",
            "OOT Zora Shop Item 4",
            "OOT Zora Shop Item 5",
            "OOT Zora Shop Item 6",
            "OOT Zora Shop Item 7",
            "OOT Zora Shop Item 8",
            "OOT Zora Fountain Iceberg HP",
            "OOT Zora Fountain Bottom HP",
            "OOT Zora Fountain GS Wall",
            "OOT Zora Fountain GS Tree",
            "OOT Zora Fountain GS Upper",
            "OOT Lake Hylia Underwater Bottle",
            "OOT Lake Hylia Fire Arrow",
            "OOT Lake Hylia HP",
            "OOT Lake Hylia GS Lab Wall",
            "OOT Lake Hylia GS Island",
            "OOT Lake Hylia GS Soil",
            "OOT Lake Hylia GS Big Tree",
            "OOT Laboratory Dive",
            "OOT Laboratory Eye Drops",
            "OOT Laboratory GS Crate",
            "OOT Fishing Pond Child",
            "OOT Fishing Pond Adult",
            "OOT Lon Lon Ranch Malon Song",
            "OOT Lon Lon Ranch Silo HP",
            "OOT Lon Lon Ranch Talon Bottle",
            "OOT Lon Lon Ranch GS Tree",
            "OOT Lon Lon Ranch GS House",
            "OOT Lon Lon Ranch GS Rain Shed",
            "OOT Lon Lon Ranch GS Back Wall",
            "OOT Lon Lon Ranch Stables Cow Left",
            "OOT Lon Lon Ranch Stables Cow Right",
            "OOT Lon Lon Ranch Silo Cow Front",
            "OOT Lon Lon Ranch Silo Cow Back",
            "OOT Hyrule Field Ocarina of Time",
            "OOT Hyrule Field Song of Time",
            "OOT Hyrule Field Grotto Scrub HP",
            "OOT Hyrule Field Grotto Southeast",
            "OOT Hyrule Field Grotto Open",
            "OOT Hyrule Field Grotto Market",
            "OOT Hyrule Field Grotto Tektite HP",
            "OOT Hyrule Field Grotto Near Kakariko GS",
            "OOT Hyrule Field Grotto Near Gerudo GS",
            "OOT Hyrule Field Cow",
            "OOT Market Dog Lady HP",
            "OOT Market Pot House Big Poes",
            "OOT Market Pot House GS",
            "OOT Market Bazaar Item 1",
            "OOT Market Bazaar Item 2",
            "OOT Market Bazaar Item 3",
            "OOT Market Bazaar Item 4",
            "OOT Market Bazaar Item 5",
            "OOT Market Bazaar Item 6",
            "OOT Market Bazaar Item 7",
            "OOT Market Bazaar Item 8",
            "OOT Market Potion Shop Item 1",
            "OOT Market Potion Shop Item 2",
            "OOT Market Potion Shop Item 3",
            "OOT Market Potion Shop Item 4",
            "OOT Market Potion Shop Item 5",
            "OOT Market Potion Shop Item 6",
            "OOT Market Potion Shop Item 7",
            "OOT Market Potion Shop Item 8",
            "OOT Market Bombchu Shop Item 1",
            "OOT Market Bombchu Shop Item 2",
            "OOT Market Bombchu Shop Item 3",
            "OOT Market Bombchu Shop Item 4",
            "OOT Market Bombchu Shop Item 5",
            "OOT Market Bombchu Shop Item 6",
            "OOT Market Bombchu Shop Item 7",
            "OOT Market Bombchu Shop Item 8",
            "OOT Bombchu Bowling Reward 1",
            "OOT Bombchu Bowling Reward 2",
            "OOT Treasure Game HP",
            "OOT Shooting Gallery Child",
            "OOT Shooting Gallery Adult",
            "OOT Hyrule Castle GS Tree",
            "OOT Hyrule Castle GS Grotto",
            "OOT Ganon Castle Exterior GS",
            "OOT Temple of Time Master Sword",
            "OOT Temple of Time Medallion",
            "OOT Temple of Time Sheik Song",
            "OOT Temple of Time Light Arrows",
            "OOT Windmill HP",
            "OOT Windmill Song of Storms",
            "OOT Gerudo Valley Chest",
            "OOT Gerudo Valley Crate HP",
            "OOT Gerudo Valley Waterfall HP",
            "OOT Gerudo Valley Broken Goron Sword",
            "OOT Gerudo Valley GS Soil",
            "OOT Gerudo Valley GS Wall",
            "OOT Gerudo Valley GS Tent",
            "OOT Gerudo Valley GS Pillar",
            "OOT Gerudo Valley Cow",
            "OOT Gerudo Fortress Chest",
            "OOT Gerudo Fortress Archery Reward 1",
            "OOT Gerudo Fortress Archery Reward 2",
            "OOT Gerudo Fortress GS Wall",
            "OOT Gerudo Fortress GS Target",
            "OOT Haunted Wasteland Chest",
            "OOT Haunted Wasteland GS",
            "OOT Desert Colossus HP",
            "OOT Desert Colossus Song Spirit",
            "OOT Desert Colossus GS Soil",
            "OOT Desert Colossus GS Tree",
            "OOT Desert Colossus GS Plateau",
            "OOT Skulltula House 10 Tokens",
            "OOT Skulltula House 20 Tokens",
            "OOT Skulltula House 30 Tokens",
            "OOT Skulltula House 40 Tokens",
            "OOT Skulltula House 50 Tokens",
            "OOT Great Fairy Magic Upgrade",
            "OOT Great Fairy Magic Upgrade 2",
            "OOT Great Fairy Defense Upgrade",
            "OOT Great Fairy Din's Fire",
            "OOT Great Fairy Farore's Wind",
            "OOT Great Fairy Nayru's Love",
            "OOT Deku Tree Map Chest",
            "OOT Deku Tree Compass Chest",
            "OOT Deku Tree Compass Room Side Chest",
            "OOT Deku Tree Slingshot Chest",
            "OOT Deku Tree Slingshot Side Chest",
            "OOT Deku Tree Basement Chest",
            "OOT Deku Tree GS Compass",
            "OOT Deku Tree GS Basement Vines",
            "OOT Deku Tree GS Basement Gate",
            "OOT Deku Tree GS Basement Back Room",
            "OOT Deku Tree Boss Container",
            "OOT Deku Tree Boss",
            "OOT Dodongo Cavern Map Chest",
            "OOT Dodongo Cavern Compass Chest",
            "OOT Dodongo Cavern Bomb Bag Side Chest",
            "OOT Dodongo Cavern Bomb Bag Chest",
            "OOT Dodongo Cavern Bridge Chest",
            "OOT Dodongo Cavern GS Side Room",
            "OOT Dodongo Cavern GS Stairs Vines",
            "OOT Dodongo Cavern GS Stairs Top",
            "OOT Dodongo Cavern GS Scarecrow",
            "OOT Dodongo Cavern GS Near Boss",
            "OOT Dodongo Cavern Boss Chest",
            "OOT Dodongo Cavern Boss Container",
            "OOT Dodongo Cavern Boss",
            "OOT Jabu-Jabu Map Chest",
            "OOT Jabu-Jabu Compass Chest",
            "OOT Jabu-Jabu Boomerang Chest",
            "OOT Jabu-Jabu GS Water Switch",
            "OOT Jabu-Jabu GS Bottom Lower",
            "OOT Jabu-Jabu GS Bottom Upper",
            "OOT Jabu-Jabu GS Near Boss",
            "OOT Jabu-Jabu Boss Container",
            "OOT Jabu-Jabu Boss",
            "OOT Forest Temple Tree Small Key",
            "OOT Forest Temple Mini-Boss Key",
            "OOT Forest Temple Map",
            "OOT Forest Temple Maze",
            "OOT Forest Temple Garden",
            "OOT Forest Temple Well",
            "OOT Forest Temple Poe Key",
            "OOT Forest Temple Bow",
            "OOT Forest Temple Compass",
            "OOT Forest Temple Checkerboard",
            "OOT Forest Temple Boss Key",
            "OOT Forest Temple Floormaster",
            "OOT Forest Temple Antichamber",
            "OOT Forest Temple GS Entrance",
            "OOT Forest Temple GS Main",
            "OOT Forest Temple GS Garden West",
            "OOT Forest Temple GS Garden East",
            "OOT Forest Temple GS Antichamber",
            "OOT Forest Temple Boss Container",
            "OOT Forest Temple Boss",
            "OOT Fire Temple Jail 1 Chest",
            "OOT Fire Temple Boss Key Side Chest",
            "OOT Fire Temple Boss Key Chest",
            "OOT Fire Temple Jail 2 Chest",
            "OOT Fire Temple Jail 3 Chest",
            "OOT Fire Temple Maze Chest",
            "OOT Fire Temple Jail 4 Chest",
            "OOT Fire Temple Map",
            "OOT Fire Temple Above Maze Chest",
            "OOT Fire Temple Below Maze Chest",
            "OOT Fire Temple Compass",
            "OOT Fire Temple Hammer",
            "OOT Fire Temple Ring Jail",
            "OOT Fire Temple Scarecrow Chest",
            "OOT Fire Temple GS Lava Side Room",
            "OOT Fire Temple GS Hammer Statues",
            "OOT Fire Temple GS Maze",
            "OOT Fire Temple GS Scarecrow Wall",
            "OOT Fire Temple GS Scarecrow Top",
            "OOT Fire Temple Boss Container",
            "OOT Fire Temple Boss",
            "OOT Ice Cavern Iron Boots",
            "OOT Ice Cavern Map",
            "OOT Ice Cavern Compass",
            "OOT Ice Cavern HP",
            "OOT Ice Cavern Sheik Song",
            "OOT Ice Cavern GS Scythe Room",
            "OOT Ice Cavern GS HP Room",
            "OOT Ice Cavern GS Block Room",
            "OOT Water Temple Under Center",
            "OOT Water Temple Compass",
            "OOT Water Temple Longshot",
            "OOT Water Temple Dragon Chest",
            "OOT Water Temple Boss Key Chest",
            "OOT Water Temple Bombable Chest",
            "OOT Water Temple Shell Chest",
            "OOT Water Temple Map",
            "OOT Water Temple Corridor Chest",
            "OOT Water Temple River Chest",
            "OOT Water Temple GS River",
            "OOT Water Temple GS Center",
            "OOT Water Temple GS Large Pit",
            "OOT Water Temple GS Waterfalls",
            "OOT Water Temple GS Cage",
            "OOT Water Temple Boss HC",
            "OOT Water Temple Boss",
            "OOT Bottom of the Well Compass",
            "OOT Bottom of the Well Under Debris",
            "OOT Bottom of the Well Back West",
            "OOT Bottom of the Well East",
            "OOT Bottom of the Well Front West",
            "OOT Bottom of the Well Underwater",
            "OOT Bottom of the Well East Cage",
            "OOT Bottom of the Well Blood Chest",
            "OOT Bottom of the Well Underwater 2",
            "OOT Bottom of the Well Map",
            "OOT Bottom of the Well Coffin",
            "OOT Bottom of the Well Pits",
            "OOT Bottom of the Well Lens",
            "OOT Bottom of the Well Lens Side Chest",
            "OOT Bottom of the Well GS East Cage",
            "OOT Bottom of the Well GS Inner West",
            "OOT Bottom of the Well GS Inner East",
            "OOT Shadow Temple Map",
            "OOT Shadow Temple Hover Boots",
            "OOT Shadow Temple Silver Rupees",
            "OOT Shadow Temple Compass",
            "OOT Shadow Temple Falling Spikes Lower",
            "OOT Shadow Temple Falling Spikes Upper 1",
            "OOT Shadow Temple Falling Spikes Upper 2",
            "OOT Shadow Temple Invisible Spike Room",
            "OOT Shadow Temple Boss Key Room 1",
            "OOT Shadow Temple Boss Key Room 2",
            "OOT Shadow Temple Skull",
            "OOT Shadow Temple Spinning Blades Visible",
            "OOT Shadow Temple Spinning Blades Invisible",
            "OOT Shadow Temple Invisible Floormaster",
            "OOT Shadow Temple Wind Room Hint",
            "OOT Shadow Temple After Wind",
            "OOT Shadow Temple After Wind Invisible",
            "OOT Shadow Temple GS Invisible Scythe",
            "OOT Shadow Temple GS Skull Pot",
            "OOT Shadow Temple GS Triple Skull Pot",
            "OOT Shadow Temple GS Near Boat",
            "OOT Shadow Temple GS Falling Spikes",
            "OOT Shadow Temple Boss HC",
            "OOT Shadow Temple Boss",
            "OOT Gerudo Fortress Jail 1",
            "OOT Gerudo Fortress Jail 2",
            "OOT Gerudo Fortress Jail 3",
            "OOT Gerudo Fortress Jail 4",
            "OOT Gerudo Member Card",
            "OOT Spirit Temple Child First Chest",
            "OOT Spirit Temple Child Second Chest",
            "OOT Spirit Temple Child Climb 1",
            "OOT Spirit Temple Child Climb 2",
            "OOT Spirit Temple Statue Base",
            "OOT Spirit Temple Statue Hands",
            "OOT Spirit Temple Statue Upper Right",
            "OOT Spirit Temple Sun Block Room Torches",
            "OOT Spirit Temple Adult Silver Rupees",
            "OOT Spirit Temple Adult Lullaby",
            "OOT Spirit Temple Adult Suns on Wall 1",
            "OOT Spirit Temple Adult Suns on Wall 2",
            "OOT Spirit Temple Adult Invisible 1",
            "OOT Spirit Temple Adult Invisible 2",
            "OOT Spirit Temple Adult Late Sun on Wall",
            "OOT Spirit Temple Adult Boss Key Chest",
            "OOT Spirit Temple Adult Topmost Sun on Wall",
            "OOT Spirit Temple GS Child Climb",
            "OOT Spirit Temple GS Child Fence",
            "OOT Spirit Temple GS Iron Knuckle",
            "OOT Spirit Temple GS Boulders",
            "OOT Spirit Temple GS Statue",
            "OOT Spirit Temple Silver Gauntlets",
            "OOT Spirit Temple Mirror Shield",
            "OOT Spirit Temple Boss HC",
            "OOT Spirit Temple Boss",
            "OOT Gerudo Training Grounds Entrance 1",
            "OOT Gerudo Training Grounds Entrance 2",
            "OOT Gerudo Training Grounds Stalfos",
            "OOT Gerudo Training Grounds Near Block",
            "OOT Gerudo Training Grounds Behind Block Invisible",
            "OOT Gerudo Training Grounds Behind Block Visible 1",
            "OOT Gerudo Training Grounds Behind Block Visible 2",
            "OOT Gerudo Training Grounds Behind Block Visible 3",
            "OOT Gerudo Training Grounds Eye Statue",
            "OOT Gerudo Training Grounds Hammer Room Switch",
            "OOT Gerudo Training Grounds Hammer Room",
            "OOT Gerudo Training Grounds Lizalfos",
            "OOT Gerudo Training Water",
            "OOT Gerudo Training Freestanding Key",
            "OOT Gerudo Training Maze Upper Cage",
            "OOT Gerudo Training Maze Upper Fake Ceiling",
            "OOT Gerudo Training Maze Side Chest 1",
            "OOT Gerudo Training Maze Side Chest 2",
            "OOT Gerudo Training Maze Chest 1",
            "OOT Gerudo Training Maze Chest 2",
            "OOT Gerudo Training Maze Chest 3",
            "OOT Gerudo Training Maze Chest 4",
            "OOT Ganon Castle Water Chest 1",
            "OOT Ganon Castle Water Chest 2",
            "OOT Ganon Castle Forest Chest",
            "OOT Ganon Castle Light Chest Center",
            "OOT Ganon Castle Light Chest Around 1",
            "OOT Ganon Castle Light Chest Around 2",
            "OOT Ganon Castle Light Chest Around 3",
            "OOT Ganon Castle Light Chest Around 4",
            "OOT Ganon Castle Light Chest Around 5",
            "OOT Ganon Castle Light Chest Around 6",
            "OOT Ganon Castle Light Chest Lullaby",
            "OOT Ganon Castle Shadow Chest 1",
            "OOT Ganon Castle Shadow Chest 2",
            "OOT Ganon Castle Spirit Chest 1",
            "OOT Ganon Castle Spirit Chest 2",
            "OOT Ganon Castle Boss Key"
        ],
        "MMLocations" => [
            "MM Initial Song of Healing",
            "MM Clock Town South Chest Lower",
            "MM Clock Town South Chest Upper",
            "MM Clock Town Platform HP",
            "MM Clock Town Business Scrub",
            "MM Clock Town Post Box",
            "MM Clock Town Tree HP",
            "MM Clock Town Bomber Notebook",
            "MM Clock Town Blast Mask",
            "MM Clock Town Keaton HP",
            "MM Clock Town Silver Rupee Chest",
            "MM Clock Town Postman Hat",
            "MM Clock Town Bank Reward 1",
            "MM Clock Town Bank Reward 2",
            "MM Clock Town Bank Reward 3",
            "MM Clock Town Rosa Sisters HP",
            "MM Clock Town Guru Guru Mask Bremen",
            "MM Clock Town Stray Fairy",
            "MM Clock Town Great Fairy",
            "MM Clock Town Great Fairy Alt",
            "MM Clock Tower Roof Skull Kid Ocarina",
            "MM Clock Tower Roof Skull Kid Song of Time",
            "MM Mayor's Office Kafei's Mask",
            "MM Mayor's Office HP",
            "MM Milk Bar Troupe Leader Mask",
            "MM Milk Bar Madame Aroma Bottle",
            "MM Town Archery Reward 1",
            "MM Town Archery Reward 2",
            "MM Chest Game HP",
            "MM Honey & Darling Reward 1",
            "MM Honey & Darling Reward 2",
            "MM Stock Pot Inn Guest Room Chest",
            "MM Stock Pot Inn Staff Room Chest",
            "MM Stock Pot Inn Room Key",
            "MM Stock Pot Inn Letter to Kafei",
            "MM Stock Pot Inn Couple's Mask",
            "MM Stock Pot Inn Grandma HP 1",
            "MM Stock Pot Inn Grandma HP 2",
            "MM Stock Pot Inn ??? HP",
            "MM Astral Observatory Passage Chest",
            "MM Astral Observatory Moon Tear",
            "MM Trading Post Item 1",
            "MM Trading Post Item 2",
            "MM Trading Post Item 3",
            "MM Trading Post Item 4",
            "MM Trading Post Item 5",
            "MM Trading Post Item 6",
            "MM Trading Post Item 7",
            "MM Trading Post Item 8",
            "MM Bomb Shop Item 1",
            "MM Bomb Shop Item 2",
            "MM Bomb Shop Bomb Bag",
            "MM Bomb Shop Bomb Bag 2",
            "MM Curiosity Shop All-Night Mask",
            "MM Curiosity Shop Back Room Pendant of Memories",
            "MM Curiosity Shop Back Room Owner Reward 1",
            "MM Curiosity Shop Back Room Owner Reward 2",
            "MM Post Office HP",
            "MM Swordsman School HP",
            "MM Deku Playground Reward 1",
            "MM Deku Playground Reward 2",
            "MM Termina Field Water Chest",
            "MM Termina Field Tall Grass Chest",
            "MM Termina Field Tree Stump Chest",
            "MM Termina Field Kamaro Mask",
            "MM Termina Field Tall Grass Grotto",
            "MM Termina Field Pillar Grotto",
            "MM Termina Field Peahat Grotto",
            "MM Termina Field Dodongo Grotto",
            "MM Termina Field Bio Baba Grotto",
            "MM Termina Field Scrub",
            "MM Termina Field Gossip Stones HP",
            "MM Termina Field Cow Front",
            "MM Termina Field Cow Back",
            "MM Road to Southern Swamp HP",
            "MM Road to Southern Swamp Grotto",
            "MM Southern Swamp HP",
            "MM Southern Swamp Scrub Deed",
            "MM Southern Swamp Song of Soaring",
            "MM Southern Swamp Grotto",
            "MM Woods of Mystery Grotto",
            "MM Swamp Archery Reward 1",
            "MM Swamp Archery Reward 2",
            "MM Swamp Potion Shop Kotake",
            "MM Swamp Potion Shop Item 1",
            "MM Swamp Potion Shop Item 2",
            "MM Swamp Potion Shop Item 3",
            "MM Tourist Information Pictobox",
            "MM Tourist Information Boat Cruise",
            "MM Tourist Information Tingle Picture",
            "MM Deku Palace HP",
            "MM Deku Palace Sonata of Awakening",
            "MM Deku Palace Grotto Chest",
            "MM Deku Shrine Mask of Scents",
            "MM Woodfall Near Owl Chest",
            "MM Woodfall Entrance Chest",
            "MM Woodfall HP Chest",
            "MM Woodfall Great Fairy",
            "MM Swamp Spider House Mask of Truth",
            "MM Swamp Skulltula Main Room Near Ceiling",
            "MM Swamp Skulltula Main Room Lower Right Soft Soil",
            "MM Swamp Skulltula Main Room Lower Left Soft Soil",
            "MM Swamp Skulltula Main Room Upper Soft Soil",
            "MM Swamp Skulltula Main Room Upper Pillar",
            "MM Swamp Skulltula Main Room Pillar",
            "MM Swamp Skulltula Main Room Water",
            "MM Swamp Skulltula Main Room Jar",
            "MM Swamp Skulltula Gold Room Near Ceiling",
            "MM Swamp Skulltula Gold Room Pillar",
            "MM Swamp Skulltula Gold Room Wall",
            "MM Swamp Skulltula Gold Room Hive",
            "MM Swamp Skulltula Tree Room Hive",
            "MM Swamp Skulltula Tree Room Grass 1",
            "MM Swamp Skulltula Tree Room Grass 2",
            "MM Swamp Skulltula Tree Room Tree 1",
            "MM Swamp Skulltula Tree Room Tree 2",
            "MM Swamp Skulltula Tree Room Tree 3",
            "MM Swamp Skulltula Monument Room Lower Wall",
            "MM Swamp Skulltula Monument Room On Monument",
            "MM Swamp Skulltula Monument Room Crate 1",
            "MM Swamp Skulltula Monument Room Crate 2",
            "MM Swamp Skulltula Monument Room Torch",
            "MM Swamp Skulltula Pot Room Hive 1",
            "MM Swamp Skulltula Pot Room Hive 2",
            "MM Swamp Skulltula Pot Room Behind Vines",
            "MM Swamp Skulltula Pot Room Pot 1",
            "MM Swamp Skulltula Pot Room Pot 2",
            "MM Swamp Skulltula Pot Room Jar",
            "MM Swamp Skulltula Pot Room Wall",
            "MM Mountain Village Waterfall Chest",
            "MM Mountain Village Don Gero Mask",
            "MM Mountain Village Frog Choir HP",
            "MM Mountain Village Tunnel Grotto",
            "MM Blacksmith Razor Blade",
            "MM Blacksmith Gilded Sword",
            "MM Lone Peak Shrine Lens Chest",
            "MM Lone Peak Shrine Boulder Chest",
            "MM Lone Peak Shrine Invisible Chest",
            "MM Goron Graveyard Mask",
            "MM Twin Islands Underwater Chest 1",
            "MM Twin Islands Underwater Chest 2",
            "MM Twin Islands Frozen Grotto Chest",
            "MM Twin Islands Ramp Grotto Chest",
            "MM Goron Elder",
            "MM Goron Baby",
            "MM Goron Shop Item 1",
            "MM Goron Shop Item 2",
            "MM Goron Shop Item 3",
            "MM Goron Village HP",
            "MM Goron Village Scrub Deed",
            "MM Goron Village Scrub Bomb Bag",
            "MM Goron Powder Keg",
            "MM Path to Snowhead HP",
            "MM Path to Snowhead Grotto",
            "MM Snowhead Great Fairy",
            "MM Goron Race Reward",
            "MM Romani Ranch Epona Song",
            "MM Romani Ranch Aliens",
            "MM Romani Ranch Cremia Escort",
            "MM Romani Ranch Barn Cow Left",
            "MM Romani Ranch Barn Cow Right Front",
            "MM Romani Ranch Barn Cow Right Back",
            "MM Cucco Shack Bunny Mask",
            "MM Doggy Racetrack Chest",
            "MM Doggy Racetrack HP",
            "MM Great Bay Coast Zora Mask",
            "MM Great Bay Coast HP",
            "MM Great Bay Coast Fisherman HP",
            "MM Great Bay Coast Fisherman Grotto",
            "MM Great Bay Coast Cow Front",
            "MM Great Bay Coast Cow Back",
            "MM Zora Cape Ledge Chest 1",
            "MM Zora Cape Ledge Chest 2",
            "MM Zora Cape Underwater Chest",
            "MM Zora Cape Waterfall HP",
            "MM Zora Cape Grotto",
            "MM Great Bay Great Fairy",
            "MM Zora Hall Scrub Deed",
            "MM Zora Hall Scrub HP",
            "MM Zora Hall Evan HP",
            "MM Zora Hall Scene Lights",
            "MM Zora Shop Item 1",
            "MM Zora Shop Item 2",
            "MM Zora Shop Item 3",
            "MM Pinnacle Rock Chest 1",
            "MM Pinnacle Rock Chest 2",
            "MM Pinnacle Rock HP",
            "MM Laboratory Zora Song",
            "MM Laboratory Fish HP",
            "MM Ocean Spider House Wallet",
            "MM Ocean Spider House Chest HP",
            "MM Ocean Skulltula Entrance Right Wall",
            "MM Ocean Skulltula Entrance Left Wall",
            "MM Ocean Skulltula Entrance Web",
            "MM Ocean Skulltula 2nd Room Ceiling Edge",
            "MM Ocean Skulltula 2nd Room Ceiling Plank",
            "MM Ocean Skulltula 2nd Room Jar",
            "MM Ocean Skulltula 2nd Room Webbed Hole",
            "MM Ocean Skulltula 2nd Room Webbed Pot",
            "MM Ocean Skulltula 2nd Room Upper Pot",
            "MM Ocean Skulltula 2nd Room Lower Pot",
            "MM Ocean Skulltula 2nd Room Behind Skull 1",
            "MM Ocean Skulltula 2nd Room Behind Skull 2",
            "MM Ocean Skulltula Storage Room Behind Boat",
            "MM Ocean Skulltula Storage Room Ceiling Web",
            "MM Ocean Skulltula Storage Room Behind Crate",
            "MM Ocean Skulltula Storage Room Crate",
            "MM Ocean Skulltula Storage Room Jar",
            "MM Ocean Skulltula Library Hole Behind Picture",
            "MM Ocean Skulltula Library Hole Behind Cabinet",
            "MM Ocean Skulltula Library On Corner Bookshelf",
            "MM Ocean Skulltula Library Ceiling Edge",
            "MM Ocean Skulltula Library Behind Picture",
            "MM Ocean Skulltula Library Behind Bookcase 1",
            "MM Ocean Skulltula Library Behind Bookcase 2",
            "MM Ocean Skulltula Colored Skulls Ceiling Edge",
            "MM Ocean Skulltula Colored Skulls Chandelier 1",
            "MM Ocean Skulltula Colored Skulls Chandelier 2",
            "MM Ocean Skulltula Colored Skulls Chandelier 3",
            "MM Ocean Skulltula Colored Skulls Behind Picture",
            "MM Ocean Skulltula Colored Skulls Pot",
            "MM Waterfall Rapids Beaver Race 1",
            "MM Waterfall Rapids Beaver Race 2",
            "MM Road to Ikana Chest",
            "MM Road to Ikana Grotto",
            "MM Road to Ikana Stone Mask",
            "MM Gorman Track Garo Mask",
            "MM Ikana Graveyard Captain Mask",
            "MM Ikana Graveyard Grotto",
            "MM Beneath The Graveyard Chest",
            "MM Beneath The Graveyard Song of Storms",
            "MM Beneath The Graveyard HP",
            "MM Beneath The Graveyard Dampe Chest",
            "MM Ikana Valley Scrub Rupee",
            "MM Ikana Valley Scrub HP",
            "MM Ikana Valley Grotto",
            "MM Ikana Great Fairy",
            "MM Ghost Hut HP",
            "MM Music Box House Gibdo Mask",
            "MM Stone Tower Inverted Chest 1",
            "MM Stone Tower Inverted Chest 2",
            "MM Stone Tower Inverted Chest 3",
            "MM Oath to Order",
            "MM Woodfall Temple Entrance Chest",
            "MM Woodfall Temple Water Chest",
            "MM Woodfall Temple Map",
            "MM Woodfall Temple Compass",
            "MM Woodfall Temple Dark Chest",
            "MM Woodfall Temple Center Chest",
            "MM Woodfall Temple Bow",
            "MM Woodfall Temple Boss Key Chest",
            "MM Woodfall Temple SF Entrance",
            "MM Woodfall Temple SF Main Pot",
            "MM Woodfall Temple SF Main Deku Baba",
            "MM Woodfall Temple SF Main Bubble",
            "MM Woodfall Temple SF Maze Skulltula",
            "MM Woodfall Temple SF Maze Beehive",
            "MM Woodfall Temple SF Maze Bubble",
            "MM Woodfall Temple SF Water Room Beehive",
            "MM Woodfall Temple SF Pre-Boss Bottom Right",
            "MM Woodfall Temple SF Pre-Boss Left",
            "MM Woodfall Temple SF Pre-Boss Top Right",
            "MM Woodfall Temple SF Pre-Boss Pillar",
            "MM Woodfall Temple Boss Container",
            "MM Woodfall Temple Boss",
            "MM Snowhead Temple Compass Room Ledge",
            "MM Snowhead Temple Compass",
            "MM Snowhead Temple Bridge Room",
            "MM Snowhead Temple Block Room",
            "MM Snowhead Temple Block Room Ledge",
            "MM Snowhead Temple Central Room Bottom",
            "MM Snowhead Temple Boss Key",
            "MM Snowhead Temple Central Room Alcove",
            "MM Snowhead Temple Pillars Room",
            "MM Snowhead Temple Fire Arrow",
            "MM Snowhead Temple Icicle Room Alcove",
            "MM Snowhead Temple Icicle Room",
            "MM Snowhead Temple Map",
            "MM Snowhead Temple Map Alcove",
            "MM Snowhead Temple SF Bridge Under Platform",
            "MM Snowhead Temple SF Bridge Pillar",
            "MM Snowhead Temple SF Map Room",
            "MM Snowhead Temple SF Compass Room Crate",
            "MM Snowhead Temple SF Dual Switches",
            "MM Snowhead Temple SF Snow Room",
            "MM Snowhead Temple SF Dinolfos 1",
            "MM Snowhead Temple SF Dinolfos 2",
            "MM Snowhead Temple Boss HC",
            "MM Snowhead Temple Boss",
            "MM Pirate Fortress Entrance Chest 1",
            "MM Pirate Fortress Entrance Chest 2",
            "MM Pirate Fortress Entrance Chest 3",
            "MM Pirate Fortress Sewers Chest 1",
            "MM Pirate Fortress Sewers Chest 2",
            "MM Pirate Fortress Sewers Chest 3",
            "MM Pirate Fortress Sewers HP",
            "MM Pirate Fortress Interior Hookshot",
            "MM Pirate Fortress Interior Aquarium",
            "MM Pirate Fortress Interior Silver Rupee Chest",
            "MM Pirate Fortress Interior Lower Chest",
            "MM Pirate Fortress Interior Upper Chest",
            "MM Great Bay Temple Map",
            "MM Great Bay Temple Baba Chest",
            "MM Great Bay Temple Boss Key",
            "MM Great Bay Temple Compass",
            "MM Great Bay Temple Compass Room Underwater",
            "MM Great Bay Temple Ice Arrow",
            "MM Great Bay Temple Green Pipe 1 Chest",
            "MM Great Bay Temple Green Pipe 2 Lower Chest",
            "MM Great Bay Temple Green Pipe 2 Upper Chest",
            "MM Great Bay Temple Green Pipe 3 Chest",
            "MM Great Bay Temple Entrance Chest",
            "MM Great Bay Temple SF Water Wheel Platform",
            "MM Great Bay Temple SF Water Wheel Skulltula",
            "MM Great Bay Temple SF Central Room Barrel",
            "MM Great Bay Temple SF Central Room Underwater Pot",
            "MM Great Bay Temple SF Map Room Pot",
            "MM Great Bay Temple SF Compass Room Pot",
            "MM Great Bay Temple SF Green Pipe 3 Barrel",
            "MM Great Bay Temple SF Pre-Boss Above Water",
            "MM Great Bay Temple SF Pre-Boss Underwater",
            "MM Great Bay Temple Boss HC",
            "MM Great Bay Temple Boss",
            "MM Beneath the Well Skulltulla Chest",
            "MM Beneath the Well Keese Chest",
            "MM Beneath the Well Mirror Shield",
            "MM Beneath the Well Cow",
            "MM Ancient Castle of Ikana HP",
            "MM Ancient Castle of Ikana Song Emptiness",
            "MM Stone Tower Temple Entrance Chest",
            "MM Stone Tower Temple Entrance Switch Chest",
            "MM Stone Tower Temple Under West Garden Ledge Chest",
            "MM Stone Tower Temple Under West Garden Lava Chest",
            "MM Stone Tower Temple Map",
            "MM Stone Tower Temple Center Sun Block Chest",
            "MM Stone Tower Temple Center Across Water Chest",
            "MM Stone Tower Temple Compass",
            "MM Stone Tower Temple Water Sun Switch Chest",
            "MM Stone Tower Temple Mirrors Room Center Chest",
            "MM Stone Tower Temple Mirrors Room Right Chest",
            "MM Stone Tower Temple Wind Room Ledge Chest",
            "MM Stone Tower Temple Wind Room Jail Chest",
            "MM Stone Tower Temple Light Arrow",
            "MM Stone Tower Temple Before Water Bridge Chest",
            "MM Stone Tower Temple Water Bridge Chest",
            "MM Stone Tower Temple Inverted Entrance Chest",
            "MM Stone Tower Temple Inverted East Lower Chest",
            "MM Stone Tower Temple Inverted East Middle Chest",
            "MM Stone Tower Temple Inverted East Upper Chest",
            "MM Stone Tower Temple Inverted Wizrobe Chest",
            "MM Stone Tower Temple Inverted Under Wizrobe Chest",
            "MM Stone Tower Temple Inverted Boss Key",
            "MM Stone Tower Temple Inverted Giant Mask",
            "MM Stone Tower Boss HC",
            "MM Stone Tower Boss",
            "MM Secret Shrine Boss 1 Chest",
            "MM Secret Shrine Boss 2 Chest",
            "MM Secret Shrine Boss 3 Chest",
            "MM Secret Shrine Boss 4 Chest",
            "MM Secret Shrine HP Chest",
            "MM Moon Trial Deku HP",
            "MM Moon Trial Goron HP",
            "MM Moon Trial Zora HP",
            "MM Moon Trial Link Chest 1",
            "MM Moon Trial Link Chest 2",
            "MM Moon Trial Link HP",
            "MM Moon Fierce Deity Mask",
        ]
    ];
    static public $ItemList = [
        [
            "Item" => "MM_ARROW_FIRE",
            "Title" => "Fire Arrows (MM)"
        ],
        [
            "Item" => "MM_ARROW_ICE",
            "Title" => "Ice Arrows (MM)"
        ],
        [
            "Item" => "MM_ARROW_LIGHT",
            "Title" => "Light Arrows (MM)"
        ],
        [
            "Item" => "MM_ARROWS_30",
            "Title" => "30 Arrows (MM)"
        ],
        [
            "Item" => "MM_BOMB_BAG",
            "Title" => "Bomb Bag (MM)"
        ],
        [
            "Item" => "MM_BOMBCHU",
            "Title" => "1 Bombchu (MM)"
        ],
        [
            "Item" => "MM_BOMBCHU_10",
            "Title" => "10 Bombchu (MM)"
        ],
        [
            "Item" => "MM_BOMBCHU_5",
            "Title" => "5 Bombchu (MM)"
        ],
        [
            "Item" => "MM_BOMBER_NOTEBOOK",
            "Title" => "Bombers' Notebook"
        ],
        [
            "Item" => "MM_BOSS_KEY_GB",
            "Title" => "Boss Key (Great Bay Temple)"
        ],
        [
            "Item" => "MM_BOSS_KEY_SH",
            "Title" => "Boss Key (Snowhead Temple)"
        ],
        [
            "Item" => "MM_BOSS_KEY_ST",
            "Title" => "Boss Key (Stone Tower Temple)"
        ],
        [
            "Item" => "MM_BOSS_KEY_WF",
            "Title" => "Boss Key (Woodfall Temple)"
        ],
        [
            "Item" => "MM_BOTTLE_CHATEAU",
            "Title" => "Bottle of Chateau Romani"
        ],
        [
            "Item" => "MM_BOTTLE_EMPTY",
            "Title" => "Empty Bottle"
        ],
        [
            "Item" => "MM_BOTTLED_GOLD_DUST",
            "Title" => "Bottle of Gold Dust"
        ],
        [
            "Item" => "MM_BOTTLE_MILK",
            "Title" => "Bottle of Milk (MM)"
        ],
        [
            "Item" => "MM_BOTTLE_POTION_RED",
            "Title" => "Bottle of Red Potion (MM)"
        ],
        [
            "Item" => "MM_BOW",
            "Title" => "Hero's Bow (MM)"
        ],
        [
            "Item" => "MM_COMPASS_GB",
            "Title" => "Compass (Great Bay Temple)"
        ],
        [
            "Item" => "MM_COMPASS_SH",
            "Title" => "Compass (Snowhead Temple)"
        ],
        [
            "Item" => "MM_COMPASS_ST",
            "Title" => "Compass (Stone Tower Temple)"
        ],
        [
            "Item" => "MM_COMPASS_WF",
            "Title" => "Compass (Woodfall Temple)"
        ],
        [
            "Item" => "MM_DEED_LAND",
            "Title" => "Land Title Deed"
        ],
        [
            "Item" => "MM_DEED_MOUNTAIN",
            "Title" => "Mountain Title Deed"
        ],
        [
            "Item" => "MM_DEED_OCEAN",
            "Title" => "Ocean Title Deed"
        ],
        [
            "Item" => "MM_DEED_SWAMP",
            "Title" => "Swamp Title Deed"
        ],
        [
            "Item" => "MM_DEFENSE_UPGRADE",
            "Title" => "Double Defense (MM)"
        ],
        [
            "Item" => "MM_GREAT_FAIRY_SWORD",
            "Title" => "Great Fairy's Sword"
        ],
        [
            "Item" => "MM_GS_TOKEN_OCEAN",
            "Title" => "Ocean Skulltula Token"
        ],
        [
            "Item" => "MM_GS_TOKEN_SWAMP",
            "Title" => "Swamp Skulltula Token"
        ],
        [
            "Item" => "MM_HEART_CONTAINER",
            "Title" => "Heart Container (MM)"
        ],
        [
            "Item" => "MM_HEART_PIECE",
            "Title" => "Piece of Heart (MM)"
        ],
        [
            "Item" => "MM_HOOKSHOT",
            "Title" => "Hookshot (MM)"
        ],
        [
            "Item" => "MM_LENS",
            "Title" => "Lens of Truth (MM)"
        ],
        [
            "Item" => "MM_LETTER_TO_KAFEI",
            "Title" => "Letter to Kafei"
        ],
        [
            "Item" => "MM_LETTER_TO_MAMA",
            "Title" => "Letter to Mama"
        ],
        [
            "Item" => "MM_MAGIC_BEAN",
            "Title" => "Magic Bean (MM)"
        ],
        [
            "Item" => "MM_MAGIC_UPGRADE",
            "Title" => "Magic Upgrade (MM)"
        ],
        [
            "Item" => "MM_MAP_GB",
            "Title" => "Map (Great Bay Temple)"
        ],
        [
            "Item" => "MM_MAP_SH",
            "Title" => "Map (Snowhead Temple)"
        ],
        [
            "Item" => "MM_MAP_ST",
            "Title" => "Map (Stone Tower Temple)"
        ],
        [
            "Item" => "MM_MAP_WF",
            "Title" => "Map (Woodfall Temple)"
        ],
        [
            "Item" => "MM_MASK_ALL_NIGHT",
            "Title" => "All-Night Mask"
        ],
        [
            "Item" => "MM_MASK_BLAST",
            "Title" => "Blast Mask"
        ],
        [
            "Item" => "MM_MASK_BREMEN",
            "Title" => "Bremen Mask"
        ],
        [
            "Item" => "MM_MASK_BUNNY",
            "Title" => "Bunny Hood (MM)"
        ],
        [
            "Item" => "MM_MASK_CAPTAIN",
            "Title" => "Captain's Hat"
        ],
        [
            "Item" => "MM_MASK_COUPLE",
            "Title" => "Couple's Mask"
        ],
        [
            "Item" => "MM_MASK_DEKU",
            "Title" => "Deku Mask"
        ],
        [
            "Item" => "MM_MASK_DON_GERO",
            "Title" => "Don Gero's Mask"
        ],
        [
            "Item" => "MM_MASK_FIERCE_DEITY",
            "Title" => "Fierce Deity's Mask"
        ],
        [
            "Item" => "MM_MASK_GARO",
            "Title" => "Garo's Mask"
        ],
        [
            "Item" => "MM_MASK_GIANT",
            "Title" => "Giant's Mask"
        ],
        [
            "Item" => "MM_MASK_GIBDO",
            "Title" => "Gibdo Mask"
        ],
        [
            "Item" => "MM_MASK_GORON",
            "Title" => "Goron Mask (MM)"
        ],
        [
            "Item" => "MM_MASK_GREAT_FAIRY",
            "Title" => "Great Fairy's Mask"
        ],
        [
            "Item" => "MM_MASK_KAFEI",
            "Title" => "Kafei's Mask"
        ],
        [
            "Item" => "MM_MASK_KAMARO",
            "Title" => "Kamaro's Mask"
        ],
        [
            "Item" => "MM_MASK_KEATON",
            "Title" => "Keaton Mask"
        ],
        [
            "Item" => "MM_MASK_POSTMAN",
            "Title" => "Postman's Hat"
        ],
        [
            "Item" => "MM_MASK_ROMANI",
            "Title" => "Romani's Mask"
        ],
        [
            "Item" => "MM_MASK_SCENTS",
            "Title" => "Mask of Scents"
        ],
        [
            "Item" => "MM_MASK_STONE",
            "Title" => "Stone Mask"
        ],
        [
            "Item" => "MM_MASK_TROUPE_LEADER",
            "Title" => "Circus Leader's Mask"
        ],
        [
            "Item" => "MM_MASK_TRUTH",
            "Title" => "Mask of Truth (MM)"
        ],
        [
            "Item" => "MM_MASK_ZORA",
            "Title" => "Zora Mask (MM)"
        ],
        [
            "Item" => "MM_MILK",
            "Title" => "Romani Milk"
        ],
        [
            "Item" => "MM_MOON_TEAR",
            "Title" => "Moon's Tear"
        ],
        [
            "Item" => "MM_OCARINA",
            "Title" => "Ocarina (MM)"
        ],
        [
            "Item" => "MM_PENDANT_OF_MEMORIES",
            "Title" => "Pendant of Memories"
        ],
        [
            "Item" => "MM_PICTOGRAPH_BOX",
            "Title" => "Pictograph Box"
        ],
        [
            "Item" => "MM_POWDER_KEG",
            "Title" => "Powder Keg"
        ],
        [
            "Item" => "MM_REMAINS_GOHT",
            "Title" => "Goht's Remains"
        ],
        [
            "Item" => "MM_REMAINS_GYORG",
            "Title" => "Gyorg's Remains"
        ],
        [
            "Item" => "MM_REMAINS_ODOLWA",
            "Title" => "Odolwa's Remains"
        ],
        [
            "Item" => "MM_REMAINS_TWINMOLD",
            "Title" => "Twinmold's Remains"
        ],
        [
            "Item" => "MM_ROOM_KEY",
            "Title" => "Room Key"
        ],
        [
            "Item" => "MM_RUPEE_BLUE",
            "Title" => "Blue Rupee (MM)"
        ],
        [
            "Item" => "MM_RUPEE_GOLD",
            "Title" => "Gold Rupee (MM)"
        ],
        [
            "Item" => "MM_RUPEE_GREEN",
            "Title" => "Green Rupee (MM)"
        ],
        [
            "Item" => "MM_RUPEE_PURPLE",
            "Title" => "Purple Rupee (MM)"
        ],
        [
            "Item" => "MM_RUPEE_RED",
            "Title" => "Red Rupee (MM)"
        ],
        [
            "Item" => "MM_RUPEE_SILVER",
            "Title" => "Silver Rupee (MM)"
        ],
        [
            "Item" => "MM_SHIELD",
            "Title" => "Progressive Shield (MM)"
        ],
        [
            "Item" => "MM_SHIELD_MIRROR",
            "Title" => "Mirror Shield (MM)"
        ],
        [
            "Item" => "MM_SMALL_KEY_GB",
            "Title" => "Small Key (Great Bay Temple)"
        ],
        [
            "Item" => "MM_SMALL_KEY_SH",
            "Title" => "Small Key (Snowhead Temple)"
        ],
        [
            "Item" => "MM_SMALL_KEY_ST",
            "Title" => "Small Key (Stone Tower Temple)"
        ],
        [
            "Item" => "MM_SMALL_KEY_WF",
            "Title" => "Small Key (Woodfall Temple)"
        ],
        [
            "Item" => "MM_SONG_AWAKENING",
            "Title" => "Sonata of Awakening"
        ],
        [
            "Item" => "MM_SONG_EMPTINESS",
            "Title" => "Elegy of Emptiness"
        ],
        [
            "Item" => "MM_SONG_EPONA",
            "Title" => "Epona's Song (MM)"
        ],
        [
            "Item" => "MM_SONG_GORON",
            "Title" => "Goron Lullaby"
        ],
        [
            "Item" => "MM_SONG_GORON_HALF",
            "Title" => "Progressive Goron Lullaby"
        ],
        [
            "Item" => "MM_SONG_HEALING",
            "Title" => "Song of Healing"
        ],
        [
            "Item" => "MM_SONG_ORDER",
            "Title" => "Oath to Order"
        ],
        [
            "Item" => "MM_SONG_SOARING",
            "Title" => "Song of Soaring"
        ],
        [
            "Item" => "MM_SONG_STORMS",
            "Title" => "Song of Storms (MM)"
        ],
        [
            "Item" => "MM_SONG_TIME",
            "Title" => "Song of Time (MM)"
        ],
        [
            "Item" => "MM_SONG_ZORA",
            "Title" => "New Wave Bossa Nova"
        ],
        [
            "Item" => "MM_SPIN_UPGRADE",
            "Title" => "Spin Attack"
        ],
        [
            "Item" => "MM_STRAY_FAIRY_GB",
            "Title" => "Stray Fairy (Great Bay Temple)"
        ],
        [
            "Item" => "MM_STRAY_FAIRY_SH",
            "Title" => "Stray Fairy (Snowhead Temple)"
        ],
        [
            "Item" => "MM_STRAY_FAIRY_ST",
            "Title" => "Stray Fairy (Stone Tower Temple)"
        ],
        [
            "Item" => "MM_STRAY_FAIRY_TOWN",
            "Title" => "Stray Fairy (Clock Town)"
        ],
        [
            "Item" => "MM_STRAY_FAIRY_WF",
            "Title" => "Stray Fairy (Woodfall Temple)"
        ],
        [
            "Item" => "MM_SWORD",
            "Title" => "Progressive Sword (MM)"
        ],
        [
            "Item" => "MM_WALLET",
            "Title" => "Progressive Wallet (MM)"
        ],
        [
            "Item" => "OOT_ARROW_FIRE",
            "Title" => "Fire Arrows (OoT)"
        ],
        [
            "Item" => "OOT_ARROW_ICE",
            "Title" => "Ice Arrows (OoT)"
        ],
        [
            "Item" => "OOT_ARROW_LIGHT",
            "Title" => "Light Arrows (OoT)"
        ],
        [
            "Item" => "OOT_ARROWS_10",
            "Title" => "10 Arrows (OoT)"
        ],
        [
            "Item" => "OOT_ARROWS_30",
            "Title" => "30 Arrows (OoT)"
        ],
        [
            "Item" => "OOT_ARROWS_5",
            "Title" => "5 Arrows (OoT)"
        ],
        [
            "Item" => "OOT_BLUE_FIRE",
            "Title" => "Bottle - Blue Fire"
        ],
        [
            "Item" => "OOT_BOMBCHU_10",
            "Title" => "10 Bombchu (OoT)"
        ],
        [
            "Item" => "OOT_BOMBCHU_20",
            "Title" => "20 Bombchu (OoT)"
        ],
        [
            "Item" => "OOT_BOMBCHU_5",
            "Title" => "5 Bombchu (OoT)"
        ],
        [
            "Item" => "OOT_BOMB_BAG",
            "Title" => "Bomb Bag (OoT)"
        ],
        [
            "Item" => "OOT_BOMBS_10",
            "Title" => "10 Bombs (OoT)"
        ],
        [
            "Item" => "OOT_BOMBS_20",
            "Title" => "20 Bombs (OoT)"
        ],
        [
            "Item" => "OOT_BOMBS_5",
            "Title" => "5 Bombs (OoT)"
        ],
        [
            "Item" => "OOT_BOOMERANG",
            "Title" => "Boomerang"
        ],
        [
            "Item" => "OOT_BOOTS_HOVER",
            "Title" => "Hover Boots"
        ],
        [
            "Item" => "OOT_BOOTS_IRON",
            "Title" => "Iron Boots"
        ],
        [
            "Item" => "OOT_BOSS_KEY_FIRE",
            "Title" => "Boss Key (Fire Temple)"
        ],
        [
            "Item" => "OOT_BOSS_KEY_FOREST",
            "Title" => "Boss Key (Forest Temple)"
        ],
        [
            "Item" => "OOT_BOSS_KEY_GANON",
            "Title" => "Boss Key (Ganon's Castle)"
        ],
        [
            "Item" => "OOT_BOSS_KEY_SHADOW",
            "Title" => "Boss Key (Shadow Temple)"
        ],
        [
            "Item" => "OOT_BOSS_KEY_SPIRIT",
            "Title" => "Boss Key (Spirit Temple)"
        ],
        [
            "Item" => "OOT_BOSS_KEY_WATER",
            "Title" => "Boss Key (Water Temple)"
        ],
        [
            "Item" => "OOT_BOTTLE_EMPTY",
            "Title" => "Empty Bottle (OoT)"
        ],
        [
            "Item" => "OOT_BOTTLE_MILK",
            "Title" => "Bottle of Milk (OoT)"
        ],
        [
            "Item" => "OOT_BOW",
            "Title" => "Fairy Bow (OoT)"
        ],
        [
            "Item" => "OOT_BROKEN_GORON_SWORD",
            "Title" => "Broken Goron's Sword"
        ],
        [
            "Item" => "OOT_BUG",
            "Title" => "Bottle - Bugs (OoT)"
        ],
        [
            "Item" => "OOT_CHICKEN",
            "Title" => "Chicken"
        ],
        [
            "Item" => "OOT_CLAIM_CHECK",
            "Title" => "Claim Check"
        ],
        [
            "Item" => "OOT_COJIRO",
            "Title" => "Cojiro"
        ],
        [
            "Item" => "OOT_COMPASS_BOTW",
            "Title" => "Compass (Bottom of the Well)"
        ],
        [
            "Item" => "OOT_COMPASS_DC",
            "Title" => "Compass (Dodongo's Cavern)"
        ],
        [
            "Item" => "OOT_COMPASS_DT",
            "Title" => "Compass (Deku Tree)"
        ],
        [
            "Item" => "OOT_COMPASS_FIRE",
            "Title" => "Compass (Fire Temple)"
        ],
        [
            "Item" => "OOT_COMPASS_FOREST",
            "Title" => "Compass (Forest Temple)"
        ],
        [
            "Item" => "OOT_COMPASS_IC",
            "Title" => "Compass (Ice Cavern)"
        ],
        [
            "Item" => "OOT_COMPASS_JJ",
            "Title" => "Compass (Jabu-Jabu's Belly)"
        ],
        [
            "Item" => "OOT_COMPASS_SHADOW",
            "Title" => "Compass (Shadow Temple)"
        ],
        [
            "Item" => "OOT_COMPASS_SPIRIT",
            "Title" => "Compass (Spirit Temple)"
        ],
        [
            "Item" => "OOT_COMPASS_WATER",
            "Title" => "Compass (Water Temple)"
        ],
        [
            "Item" => "OOT_DEFENSE_UPGRADE",
            "Title" => "Double Defense (OoT)"
        ],
        [
            "Item" => "OOT_DEKU_SEEDS_30",
            "Title" => "Deku Seeds Bullet Bag"
        ],
        [
            "Item" => "OOT_EYE_DROPS",
            "Title" => "Eye Drops"
        ],
        [
            "Item" => "OOT_EYEBALL_FROG",
            "Title" => "Eyeball Frog"
        ],
        [
            "Item" => "OOT_FAIRY",
            "Title" => "Fairy (OoT)"
        ],
        [
            "Item" => "OOT_FISH",
            "Title" => "Fish (OoT)"
        ],
        [
            "Item" => "OOT_GERUDO_CARD",
            "Title" => "Gerudo's Membership Card"
        ],
        [
            "Item" => "OOT_GS_TOKEN",
            "Title" => "Gold Skulltula Token"
        ],
        [
            "Item" => "OOT_HAMMER",
            "Title" => "Megaton Hammer"
        ],
        [
            "Item" => "OOT_HEART_CONTAINER",
            "Title" => "Heart Container (OoT)"
        ],
        [
            "Item" => "OOT_HEART_PIECE",
            "Title" => "Piece of Heart (OoT)"
        ],
        [
            "Item" => "OOT_HOOKSHOT",
            "Title" => "Progressive Hookshot (OoT)"
        ],
        [
            "Item" => "OOT_ICE_TRAP",
            "Title" => "Ice Trap (OoT)"
        ],
        [
            "Item" => "OOT_LENS",
            "Title" => "Lens of Truth (OoT)"
        ],
        [
            "Item" => "OOT_MAGIC_BEAN",
            "Title" => "Magic Beans (OoT)"
        ],
        [
            "Item" => "OOT_MAGIC_UPGRADE",
            "Title" => "Magic Upgrade (OoT)"
        ],
        [
            "Item" => "OOT_MAP_BOTW",
            "Title" => "Map (Bottom of the Well)"
        ],
        [
            "Item" => "OOT_MAP_DC",
            "Title" => "Map (Dodongo's Cavern)"
        ],
        [
            "Item" => "OOT_MAP_DT",
            "Title" => "Map (Deku Tree)"
        ],
        [
            "Item" => "OOT_MAP_FIRE",
            "Title" => "Map (Fire Temple)"
        ],
        [
            "Item" => "OOT_MAP_FOREST",
            "Title" => "Map (Forest Temple)"
        ],
        [
            "Item" => "OOT_MAP_IC",
            "Title" => "Map (Ice Cavern)"
        ],
        [
            "Item" => "OOT_MAP_JJ",
            "Title" => "Map (Jabu-Jabu's Belly)"
        ],
        [
            "Item" => "OOT_MAP_SHADOW",
            "Title" => "Map (Shadow Temple)"
        ],
        [
            "Item" => "OOT_MAP_SPIRIT",
            "Title" => "Map (Spirit Temple)"
        ],
        [
            "Item" => "OOT_MAP_WATER",
            "Title" => "Map (Water Temple)"
        ],
        [
            "Item" => "OOT_MASK_BUNNY",
            "Title" => "Bunny Hood (OoT)"
        ],
        [
            "Item" => "OOT_MASK_GERUDO",
            "Title" => "Gerudo Mask"
        ],
        [
            "Item" => "OOT_MASK_GORON",
            "Title" => "Goron Mask (OoT)"
        ],
        [
            "Item" => "OOT_MASK_KEATON",
            "Title" => "Keaton Mask (OoT)"
        ],
        [
            "Item" => "OOT_MASK_SKULL",
            "Title" => "Skull Mask"
        ],
        [
            "Item" => "OOT_MASK_SPOOKY",
            "Title" => "Spooky Mask"
        ],
        [
            "Item" => "OOT_MASK_TRUTH",
            "Title" => "Mask of Truth (OoT)"
        ],
        [
            "Item" => "OOT_MASK_ZORA",
            "Title" => "Zora Mask (OoT)"
        ],
        [
            "Item" => "OOT_MEDALLION_FIRE",
            "Title" => "Fire Medallion"
        ],
        [
            "Item" => "OOT_MEDALLION_FOREST",
            "Title" => "Forest Medallion"
        ],
        [
            "Item" => "OOT_MEDALLION_LIGHT",
            "Title" => "Light Medallion"
        ],
        [
            "Item" => "OOT_MEDALLION_SHADOW",
            "Title" => "Shadow Medallion"
        ],
        [
            "Item" => "OOT_MEDALLION_SPIRIT",
            "Title" => "Spirit Medallion"
        ],
        [
            "Item" => "OOT_MEDALLION_WATER",
            "Title" => "Water Medallion"
        ],
        [
            "Item" => "OOT_MILK",
            "Title" => "Lon Lon Milk (OoT)"
        ],
        [
            "Item" => "OOT_NUT_UPGRADE",
            "Title" => "Deku Nut Upgrade"
        ],
        [
            "Item" => "OOT_NUTS_10",
            "Title" => "10 Deku Nuts (OoT)"
        ],
        [
            "Item" => "OOT_OCARINA",
            "Title" => "Progressive Ocarina (OoT)"
        ],
        [
            "Item" => "OOT_ODD_MUSHROOM",
            "Title" => "Odd Mushroom"
        ],
        [
            "Item" => "OOT_ODD_POTION",
            "Title" => "Odd Potion"
        ],
        [
            "Item" => "OOT_POACHER_SAW",
            "Title" => "Poacher's Saw"
        ],
        [
            "Item" => "OOT_POCKET_CUCCO",
            "Title" => "Pocket Cucco"
        ],
        [
            "Item" => "OOT_POCKET_EGG",
            "Title" => "Pocket Egg"
        ],
        [
            "Item" => "OOT_POE",
            "Title" => "Poe Spirit (OoT)"
        ],
        [
            "Item" => "OOT_POTION_BLUE",
            "Title" => "Blue Potion (OoT)"
        ],
        [
            "Item" => "OOT_POTION_GREEN",
            "Title" => "Green Potion (OoT)"
        ],
        [
            "Item" => "OOT_POTION_RED",
            "Title" => "Red Potion (OoT)"
        ],
        [
            "Item" => "OOT_PRESCRIPTION",
            "Title" => "Prescription"
        ],
        [
            "Item" => "OOT_RECOVERY_HEART",
            "Title" => "Recovery Heart (OoT)"
        ],
        [
            "Item" => "OOT_RUPEE_BLUE",
            "Title" => "Blue Rupee (OoT)"
        ],
        [
            "Item" => "OOT_RUPEE_GREEN",
            "Title" => "Green Rupee (OoT)"
        ],
        [
            "Item" => "OOT_RUPEE_HUGE",
            "Title" => "Gold Rupee (OoT)"
        ],
        [
            "Item" => "OOT_RUPEE_PURPLE",
            "Title" => "Purple Rupee (OoT)"
        ],
        [
            "Item" => "OOT_RUPEE_RED",
            "Title" => "Red Rupee (OoT)"
        ],
        [
            "Item" => "OOT_RUTO_LETTER",
            "Title" => "Ruto's Letter"
        ],
        [
            "Item" => "OOT_SCALE",
            "Title" => "Progressive Scale"
        ],
        [
            "Item" => "OOT_SHIELD",
            "Title" => "Progressive Shield (OoT)"
        ],
        [
            "Item" => "OOT_SHIELD_DEKU",
            "Title" => "Deku Shield"
        ],
        [
            "Item" => "OOT_SHIELD_HYLIAN",
            "Title" => "Hylian Shield"
        ],
        [
            "Item" => "OOT_SHIELD_MIRROR",
            "Title" => "Mirror Shield"
        ],
        [
            "Item" => "OOT_SLINGSHOT",
            "Title" => "Fairy Slingshot"
        ],
        [
            "Item" => "OOT_SMALL_KEY_BOTW",
            "Title" => "Small Key (Bottom of the Well)"
        ],
        [
            "Item" => "OOT_SMALL_KEY_FIRE",
            "Title" => "Small Key (Fire Temple)"
        ],
        [
            "Item" => "OOT_SMALL_KEY_FOREST",
            "Title" => "Small Key (Forest Temple)"
        ],
        [
            "Item" => "OOT_SMALL_KEY_GANON",
            "Title" => "Small Key (Ganon's Castle)"
        ],
        [
            "Item" => "OOT_SMALL_KEY_GF",
            "Title" => "Small Key (Gerudo's Fortress)"
        ],
        [
            "Item" => "OOT_SMALL_KEY_GTG",
            "Title" => "Small Key (Gerudo's Training Ground)"
        ],
        [
            "Item" => "OOT_SMALL_KEY_SHADOW",
            "Title" => "Small Key (Shadow Temple)"
        ],
        [
            "Item" => "OOT_SMALL_KEY_SPIRIT",
            "Title" => "Small Key (Spirit Temple)"
        ],
        [
            "Item" => "OOT_SMALL_KEY_WATER",
            "Title" => "Small Key (Water Temple)"
        ],
        [
            "Item" => "OOT_SONG_EPONA",
            "Title" => "Epona's Song (OoT)"
        ],
        [
            "Item" => "OOT_SONG_SARIA",
            "Title" => "Saria's Song"
        ],
        [
            "Item" => "OOT_SONG_STORMS",
            "Title" => "Song of Storms (OoT)"
        ],
        [
            "Item" => "OOT_SONG_SUN",
            "Title" => "Sun's Song"
        ],
        [
            "Item" => "OOT_SONG_TIME",
            "Title" => "Song of Time (OoT)"
        ],
        [
            "Item" => "OOT_SONG_TP_FIRE",
            "Title" => "Bolero of Fire"
        ],
        [
            "Item" => "OOT_SONG_TP_FOREST",
            "Title" => "Minuet of Forest"
        ],
        [
            "Item" => "OOT_SONG_TP_LIGHT",
            "Title" => "Prelude of Light"
        ],
        [
            "Item" => "OOT_SONG_TP_SHADOW",
            "Title" => "Nocturne of Shadow"
        ],
        [
            "Item" => "OOT_SONG_TP_SPIRIT",
            "Title" => "Requiem of Spirit"
        ],
        [
            "Item" => "OOT_SONG_TP_WATER",
            "Title" => "Serenade of Water"
        ],
        [
            "Item" => "OOT_SONG_ZELDA",
            "Title" => "Zelda's Lullaby"
        ],
        [
            "Item" => "OOT_SPELL_FIRE",
            "Title" => "Din's Fire"
        ],
        [
            "Item" => "OOT_SPELL_LOVE",
            "Title" => "Nayru's Love"
        ],
        [
            "Item" => "OOT_SPELL_WIND",
            "Title" => "Farore's Wind"
        ],
        [
            "Item" => "OOT_STICK_UPGRADE",
            "Title" => "Deku Stick Upgrade"
        ],
        [
            "Item" => "OOT_STONE_EMERALD",
            "Title" => "Kokiri's Emerald"
        ],
        [
            "Item" => "OOT_STONE_OF_AGONY",
            "Title" => "Stone of Agony"
        ],
        [
            "Item" => "OOT_STONE_RUBY",
            "Title" => "Goron's Ruby"
        ],
        [
            "Item" => "OOT_STONE_SAPPHIRE",
            "Title" => "Zora's Sapphire"
        ],
        [
            "Item" => "OOT_STRENGTH",
            "Title" => "Progressive Strength"
        ],
        [
            "Item" => "OOT_SWORD",
            "Title" => "Progressive Sword (OoT)"
        ],
        [
            "Item" => "OOT_SWORD_BIGGORON",
            "Title" => "Biggoron's Sword"
        ],
        [
            "Item" => "OOT_SWORD_GORON",
            "Title" => "Progressive Goron Sword"
        ],
        [
            "Item" => "OOT_SWORD_KNIFE",
            "Title" => "Giant's Knife"
        ],
        [
            "Item" => "OOT_SWORD_KOKIRI",
            "Title" => "Kokiri Sword (OoT)"
        ],
        [
            "Item" => "OOT_SWORD_MASTER",
            "Title" => "Master Sword"
        ],
        [
            "Item" => "OOT_TUNIC_GORON",
            "Title" => "Goron Tunic"
        ],
        [
            "Item" => "OOT_TUNIC_ZORA",
            "Title" => "Zora Tunic"
        ],
        [
            "Item" => "OOT_WALLET",
            "Title" => "Progressive Wallet (OoT)"
        ],
        [
            "Item" => "OOT_WEIRD_EGG",
            "Title" => "Weird Egg"
        ],
        [
            "Item" => "OOT_ZELDA_LETTER",
            "Title" => "Zelda's Letter"
        ],
        [
            "Item" => "SHARED_ARROW_FIRE",
            "Title" => "Shared Fire Arrows"
        ],
        [
            "Item" => "SHARED_ARROW_ICE",
            "Title" => "Shared Ice Arrows"
        ],
        [
            "Item" => "SHARED_ARROW_LIGHT",
            "Title" => "Shared Light Arrows"
        ],
        [
            "Item" => "SHARED_ARROWS_10",
            "Title" => "Shared 10 Arrows"
        ],
        [
            "Item" => "SHARED_ARROWS_30",
            "Title" => "Shared 30 Arrows"
        ],
        [
            "Item" => "SHARED_ARROWS_40",
            "Title" => "Shared 40 Arrows"
        ],
        [
            "Item" => "SHARED_ARROWS_5",
            "Title" => "Shared 5 Arrows"
        ],
        [
            "Item" => "SHARED_BOMB",
            "Title" => "Shared 1 Bomb"
        ],
        [
            "Item" => "SHARED_BOMB_BAG",
            "Title" => "Shared Bomb Bag"
        ],
        [
            "Item" => "SHARED_BOMBS_10",
            "Title" => "Shared 10 Bombs"
        ],
        [
            "Item" => "SHARED_BOMBS_20",
            "Title" => "Shared 20 Bombs"
        ],
        [
            "Item" => "SHARED_BOMBS_30",
            "Title" => "Shared 30 Bombs"
        ],
        [
            "Item" => "SHARED_BOMBS_5",
            "Title" => "Shared 5 Bombs"
        ],
        [
            "Item" => "SHARED_BOW",
            "Title" => "Shared Bow"
        ],
        [
            "Item" => "SHARED_DEFENSE_UPGRADE",
            "Title" => "Shared Double Defense"
        ],
        [
            "Item" => "SHARED_HEART_CONTAINER",
            "Title" => "Shared Heart Container"
        ],
        [
            "Item" => "SHARED_HEART_PIECE",
            "Title" => "Shared Piece of Heart"
        ],
        [
            "Item" => "SHARED_HOOKSHOT",
            "Title" => "Shared Progressive Hookshot"
        ],
        [
            "Item" => "SHARED_LENS",
            "Title" => "Shared Lens of Truth"
        ],
        [
            "Item" => "SHARED_MAGIC_UPGRADE",
            "Title" => "Shared Magic Upgrade"
        ],
        [
            "Item" => "SHARED_MASK_BUNNY",
            "Title" => "Shared Bunny Hood"
        ],
        [
            "Item" => "SHARED_MASK_GORON",
            "Title" => "Shared Goron Mask"
        ],
        [
            "Item" => "SHARED_MASK_KEATON",
            "Title" => "Shared Keaton Mask"
        ],
        [
            "Item" => "SHARED_MASK_TRUTH",
            "Title" => "Shared Mask of Truth"
        ],
        [
            "Item" => "SHARED_MASK_ZORA",
            "Title" => "Shared Zora Mask"
        ],
        [
            "Item" => "SHARED_OCARINA",
            "Title" => "Shared Progressive Ocarina"
        ],
        [
            "Item" => "SHARED_RECOVERY_HEART",
            "Title" => "Shared Recovery Heart"
        ],
        [
            "Item" => "SHARED_RUPEE_BLUE",
            "Title" => "Shared Blue Rupee"
        ],
        [
            "Item" => "SHARED_RUPEE_GOLD",
            "Title" => "Shared Gold Rupee"
        ],
        [
            "Item" => "SHARED_RUPEE_GREEN",
            "Title" => "Shared Green Rupee"
        ],
        [
            "Item" => "SHARED_RUPEE_PURPLE",
            "Title" => "Shared Purple Rupee"
        ],
        [
            "Item" => "SHARED_RUPEE_RED",
            "Title" => "Shared Red Rupee"
        ],
        [
            "Item" => "SHARED_RUPEE_SILVER",
            "Title" => "Shared Silver Rupee"
        ],
        [
            "Item" => "SHARED_SONG_EPONA",
            "Title" => "Shared Epona's Song"
        ],
        [
            "Item" => "SHARED_SONG_STORMS",
            "Title" => "Shared Song of Storms"
        ],
        [
            "Item" => "SHARED_SONG_TIME",
            "Title" => "Shared Song of Time"
        ],
        [
            "Item" => "SHARED_WALLET",
            "Title" => "Shared Progressive Wallet"
        ],
            ];
    
}
