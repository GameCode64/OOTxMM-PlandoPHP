# OOTxMM Plando selector



## All credits for the randomizer project it self goes to [NAX](https://github.com/Nax). <br>I'm just someone who wanted to add a plandomizer function 😉

<br><br>


This tooling is a crude prototype for the OOTxMM randomizer plando to generate the plando.json

here are some things you need to keep in mind:


you can currently only use this plando with my branch untill it is implemented in the web interface</b><br>
				[https://github.com/GameCode64/MMOOTr/tree/plandov1](https://github.com/GameCode64/MMOOTr/tree/plandov1)
<ul>
					<li>
						You need to run the randomizer with the generated "plando.json" in its rootfolder. And create a "config.yml" file with the lines below (and change it accordingly to your <u>plando</u> and your whishes):<br>then run the randomizer with "npm run start:debug"
						<div style="border: 1px #000000 solid; padding: 15px;">
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

# Installation and running
- Clone the repository

- run composer install in the directory

- ~~run php artisan migrate~~

- run php artisan serve

- visit on http://127.0.0.1:8000


# Requirements
- PHP 8.1+
- [Composer](https://getcomposer.org/download/)
