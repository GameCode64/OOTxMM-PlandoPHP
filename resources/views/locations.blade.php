<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <style>
        .TableHead {
            font-size: 24px;
            font-weight: 900;
            line-height: 50px;
            border: solid #000000 1px;
            text-align: center;
        }

        table {
            width: 50%;
            margin: 0 auto 0 auto;
            border-collapse: collapse;
            background: #f0f0f0;
        }

        td {
            border: solid #000000 1px;
        }

        select {
            width: 100%;
            min-width: 300px;
        }

        h2 {
            text-align: center;
            font-size: 35px;
        }

        .Button-Container {
            width: 50%;
        }

        .Save-btn {
            background: #0055bb;
            height: 60px;
            width: 200px;
            border: none;
            border-radius: 0;
            color: #f0f0f0;
            font-weight: 900;
            cursor: pointer;
        }

        .Reset-btn {
            background: #cc3300;
            height: 60px;
            width: 200px;
            border: none;
            border-radius: 0;
            color: #f0f0f0;
            font-weight: 900;
            cursor: pointer;
        }

        .Save-btn:hover {
            background: #0099ff;
        }

        .Reset-btn:hover {
            background: #ff0000;
        }

        .Save-btn:active {
            background: #002299;
        }

        .Reset-btn:active {
            background: #990000;
        }

        .Plando {
            position: relative;
            margin-top: 10px;
        }

        .Index {
            width: 200px;
            float: left;
            position: -webkit-sticky;
            position: fixed;
            top: 100px;
            left: 50px;
            border: 1px #000000 solid;
            z-index: 2;
        }

        .IndexHeader {
            font-size: 16px;
            font-weight: 900;
            text-align: center;
        }

        .IndexTable {
            width: 100% !important;
        }

        .txt-danger {
            color: #a01010;
        }

        a:visited {
            color: #0055bb;
        }

        .clear {
            clear: left;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>OOTxMM Rando Plando generator</title>
</head>
<h1>Plando maker</h1>
<form method="post">
    <div class="Index">
        <table class="IndexTable">
            <tr>
                <td class="IndexHeader">
                    Page Index
                </td>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>
                            <a href="#Notes">Notes</a>
                        </li>
                        <li>
                            <a href="#OOT">OOT locations</a>
                        </li>
                        <li>
                            <a href="#MM">MM locations</a>
                        </li>
                        <li>
                            <a href="#Entrances" class="txt-danger">Entrances</a>
                        </li>
                        <li>
                            <a href="#Boss" class="txt-danger">Boss Entrances</a>
                        </li>
                        <li>
                            <a href="#Gossip" class="txt-danger">Custom Gossips</a>
                        </li>

                    </ul>
                </td>
            </tr>
        </table>
        <div class="Button-Container">
            <button class="Save-btn" type="submit" name="Save">Export</button>
            <button class="Reset-btn" type="reset" onclick='location.href="/reset"' name="Reset">Reset</button>
        </div>
    </div>
    @csrf
    <div class="Plando clear">
        <div class="Notes">
            <h2 id="Notes">Notes</h2>
            <table>
                <tr>
                    <td>
                        Welcome. This is just a crude way to make a plando for OOTxMM randomizer.<br>
                        There are some things you need to keep in mind: <br>
			<ul>
                            <li>
                                <b>you can currently only use this plando with my branch untill it is implemented in the web interface</b><br>
				<a href="https://github.com/GameCode64/MMOOTr/tree/plandov1" target="_blank">https://github.com/GameCode64/MMOOTr/tree/plandov1</a>
				<ul>
					<li>
						You need to run the randomizer with the generated "plando.json" in its rootfolder. And create a "config.yml" file with the lines below (and change it accordingly to your <u>plando</u> and your whishes):<br>then run the randomizer with "npm run start:debug"
						<div style="border: 1px #000000 solid; padding: 5px; width: 300px; margin: 0 auto;">
							songs: anywhere
							<br>goldSkulltulaTokens: anywhere
							<br>housesSkulltulaTokens: anywhere
							<br>mapCompassShuffle: ownDungeon
							<br>smallKeyShuffle: overworld
							<br>smallKeyShuffleHideout: overworld
							<br>bossKeyShuffle: overworld
							<br>townFairyShuffle: vanilla
							<br>strayFairyShuffle: mixed
							<br>ganonBossKey: removed
							<br>dungeonRewardShuffle: anywhere
							<br>cowShuffleOot: true
							<br>cowShuffleMm: true
							<br>shopShuffleOot: full
							<br>shopShuffleMm: full
							<br>shuffleMasterSword: true
							<br>shuffleGerudoCard: true
							<br>eggShuffle: true
							<br>doorOfTime: open
							<br>crossWarpOot: true
							<br>crossWarpMm: adult
							<br>erBoss: none
							<br>erDungeons: none
							<br>erSpiderHouses: false
							<br>erMinorDungeons: false
							<br>progressiveShieldsOot: separate
							<br>progressiveSwordsOot: goron
							<br>progressiveShieldsMm: start
							<br>progressiveGoronLullaby: progressive
							<br>fairyOcarinaMm: false
							<br>shortHookshotMm: false
							<br>sharedNutsSticks: false
							<br>sharedBows: false
							<br>sharedBombBags: false
							<br>sharedMagic: false
							<br>sharedMagicArrows: false
							<br>sharedSongs: false
							<br>sharedHookshot: false
							<br>sharedLens: false
							<br>sharedOcarina: false
							<br>sharedMasks: false
							<br>sharedWallets: false
							<br>sharedHealth: false
							<br>csmc: true
							<br>logic: allLocations
							<br>plando: true
							<br>generateSpoilerLog: true							
							<br>startingItems: []#this is to prevent the debug starter items

						</div>
					</li>
				</ul>
                            </li>
                            <li>
                                this plandomizer <b><u>does not</u></b> keep track of logic. So you are responsible to
                                make the seed work!<br> <b>It is possible to generate logic around, if you are keeping logic in the plando!</b>
                            </li>
                            <li>
                                Entrances plando is <b><u>not</u></b> available (yet)
                            </li>
                            <li>
                                Boss plando is <b><u>not</u></b> available (yet)
                            </li>
                            <li>
                                Gossip hint plando is <b><u>not</u></b> available (yet)
                            </li>
                            <li>
                                This site might change apearance and functionality.
			    </li>
     			</ul>
                        <br>And make some fun seeds😁!
                        <br>(Plando and this locations selector has been prototyped by me GameCode64)
                        <br><br>
                        <b>my socials:</b>
                        <ul>
                            <li>
                                Discord: GameCode64#1337
                            </li>
                            <li>
                                Github: <a href="https://github.com/GameCode64" target="_blank"
                                    rel="noopener noreferrer">GameCode64</a>
                            </li>
                            <li>
                                Twitch: <a href="https://www.twitch.tv/gamecode64" target="_blank"
                                    rel="noopener noreferrer">GameCode64</a>
                            </li>
                        </ul>
                        <br><br>
                        <b>Credits:</b>
                        <ul>
                            <li>
                                Randomizer + Randomizer engine: <a href="https://github.com/Nax" target="_blank" rel="noopener noreferrer">Nax</a>
                            </li>
                            <li>
                                Link to OOTxMM rando discord: <a href="https://discord.gg/HHhAQvBryy" target="_blank" rel="noopener noreferrer">OOTxMM</a>
                            </li>
                            <li>
                                All further right to their respective owners!
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        <div class="OOT">
            <h2 id="OOT">OOT</h2>
            <table>
                <th>
                    <tr>
                        <td class="TableHead">Location</td>
                        <td class="TableHead">Item</td>
                    </tr>
                </th>

                @foreach ($LocationPools['OOTLocations'] as $OOTLoc)
                    <tr>
                        <td>{{ $OOTLoc }}</td>
                        <td>
                            <select name="Items[{{ $OOTLoc }}]" id="">
                                <option value="NONE_NONE_NONE" selected>Unassigned</option>
                            </select>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="MM">
            <h2 id="MM">MM</h2>
            <table>
                <th>
                    <tr>
                        <td class="TableHead">Location</td>
                        <td class="TableHead">Item</td>
                    </tr>
                </th>

                @foreach ($LocationPools['MMLocations'] as $MMLoc)
                    <tr>
                        <td>{{ $MMLoc }}</td>
                        <td>
                            <select name="Items[{{ $MMLoc }}]" id="">
                                <option value="NONE_NONE_NONE" selected>Unassigned</option>
                            </select>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
</form>
<script>
    $(document).ready(function() {
        $.ajax({
            type: 'GET',
            url: '/reset',
            success: function(data) {

            }
        });
    });
    $("select").on("focus", function() {
        var clickedDropdown = $(this);
        var selectedValue = clickedDropdown.val();
        var OldItem = clickedDropdown.data('old-value');
        console.log("new: " + selectedValue);
        console.log("old: " + OldItem);
        console.log("name: " + this.name);
        clickedDropdown.empty();
        $.ajax({
            type: 'GET',
            url: '/api/itemlist',
            success: function(data) {
                clickedDropdown.append('<option value="NONE_NONE_NONE" >Unassigned</option>');
                for (var i = 0; i < data.length; i++) {
                    clickedDropdown.append('<option id=' + data[i].Item + ' value=' + data[i].Item +
                        '>' + data[i].Title + '</option>');
                }
                clickedDropdown.val(selectedValue);
                clickedDropdown.data('old-value', selectedValue);
            }
        });
    });
    $("select").on('change', function() {
        var clickedDropdown = $(this);
        var OldItem = clickedDropdown.data('old-value');
        var selectedValue = clickedDropdown.val();
        clickedDropdown.data('new-value', clickedDropdown.val());
        $.ajax({
            type: 'PATCH',
            url: '/api/itemlist',
            data: {
                OldItem: OldItem,
                NewItem: clickedDropdown.val(),
                Name: this.name,
            },
            success: function(result) {
                console.log("RESULT FROM SERVER: " + result);
            },
            error: function(error) {
                // handle error
            }
        });
        clickedDropdown.blur();
    });
</script>

</html>
