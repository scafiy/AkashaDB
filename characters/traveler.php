<head>
<?php 
    session_start();
    include '../includes/head.php';
?>
</head>
<nav class="nav">
    <?php 
        include '../includes/nav.php';
        ?>
</nav>
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/characterpagestyle.css">
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'traveler' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>
<title><?php echo $fetch['name']?> - Akasha</title>
<style>
.splash-art{
    top:;
    margin-left:auto;
    margin-right:auto;
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-left:auto;
        margin-right:auto;    
    }
}

:root {
    --highlighted-color:<?php echo $fetch['primarycolor']?> ; 


}
</style>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, transparent, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/<?php echo $fetch['url']?>/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title"><?php echo $fetch['name']?></p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/<?php echo $fetch['rarity']?>-stars.png" alt="">

                                <div tooltip="<?php echo $fetch['element']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_anemo.png" >
                                </div>
                                <div tooltip="<?php echo $fetch['element']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_geo.png" >
                                </div>
                                <div tooltip="<?php echo $fetch['element']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_electro.png" >
                                </div>
                                <div tooltip="<?php echo $fetch['element']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_dendro.png" >
                                </div>


                                <div tooltip="<?php echo $fetch['weapon']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_<?php echo $fetch['weapon']?>.png" alt="">
                                </div>

                            </div>
                            <p class="banner-description">
                                <?php echo $fetch['description']?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="information">
                    <div class="base-stat-table">
                        <div class="talent-card-heading">
                            <p class="title">Base Stats</p>
                        </div>
                        <table class="scalingtable">
                            <tr>
                                <td>Level</td>
                                <td>Base HP</td>
                                <td>Base ATK</td>
                                <td>Base DEF</td>
                                <td><?php echo $fetch['stat']?>%</td>
                            </tr>
                            <tr>
                                <td>90/90</td>
                                <td>10875</td>
                                <td>212 + 3</td>
                                <td>683</td>
                                <td>24.0%</td>
                            </tr>
                        </table>
                    </div>


                    <div class="elementtoggle">
                        <p class="title">Resonate with:</p>
                        <button id="anemo" class="active">Anemo</button>
                        <button id="geo" class="">Geo</button>
                        <button id="electro" class="">Electro</button>
                        <button id="dendro" class="">Dendro</button>
                    </div>

                    <p class="title">Talents</p>
                    <div class="talent-deck">
                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/na.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Normal Attack</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p>Performs up to 5 rapid strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">81.7%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">79.8%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">97.3%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">107%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">130%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to unleash 2 rapid sword strikes.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Aether: Charged Attack DMG</td>
                                            <td style="text-align:right;">103%+112%</td>
                                        </tr>
                                        <tr>
                                            <td>Lumine: Charged Attack DMG</td>
                                            <td style="text-align:right;">103%+133%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">20</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Plunges from mid-air to strike the ground below, damaging opponents along the path and dealing AoE DMG upon impact.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Collision Plunge DMG</td>
                                            <td style="text-align:right;">117.5%</td>
                                        </tr>
                                        <tr>
                                            <td>Low/High Plunge DMG</td>
                                            <td style="text-align:right;">235%/293%</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

<div class="anemotalents flex">

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/anemoskill.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Skill: Palm Vortex</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Grasping the wind's might, you form a vortex of vacuum in your palm, causing continuous Anemo DMG to opponents in front of you.</p>
                                <p>The vacuum vortex explodes when the skill duration ends, causing a greater amount of Anemo DMG over a larger area.</p>
                                
                                <table class="scalingtable">
                                    <tr>
                                        <td>Initial Storm DMG</td>
                                        <td style="text-align:right;">299%</td>
                                    </tr>

                                    <tr>
                                        <td>Base CD</td>
                                        <td style="text-align:right;">5s</td>
                                    </tr>

                                </table>

                                <h1>Hold</h1>
                                <p>DMG and AoE will gradually increase.</p>
                                
                                <table class="scalingtable">
                                    <tr>
                                        <td>Initial Cutting DMG</td>
                                        <td style="text-align:right;">20.4% x 2</td>
                                    </tr>
                                    <tr>
                                        <td>Max Cutting DMG</td>
                                        <td style="text-align:right;">8.56% x 4</td>
                                    </tr>
                                    <tr>
                                        <td>Initial Storm DMG</td>
                                        <td style="text-align:right;">299%</td>
                                    </tr>
                                    <tr>
                                        <td>Max Storm DMG</td>
                                        <td style="text-align:right;">326%</td>
                                    </tr>
                                    <tr>
                                        <td>Base CD</td>
                                        <td style="text-align:right;">5s</td>
                                    </tr>
                                    <tr>
                                        <td>Max Charging CD</td>
                                        <td style="text-align:right;">8s</td>
                                    </tr>
                                </table>

                                <h1>Elemental Absorption</h1>
                                <p>If the vortex comes into contact with Hydro/Pyro/Cryo/Electro, it will deal additional elemental DMG of that type.</p>
                                <p>Elemental Absorption may only occur once per use.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Initial Cutting DMG</td>
                                        <td style="text-align:right;">5.1% x 1</td>
                                    </tr>
                                    <tr>
                                        <td>Max Cutting DMG</td>
                                        <td style="text-align:right;">7.14% x 4</td>
                                    </tr>
                                    <tr>
                                        <td>Initial Storm DMG</td>
                                        <td style="text-align:right;">74.80%</td>
                                    </tr>
                                    <tr>
                                        <td>Max Storm DMG</td>
                                        <td style="text-align:right;">81.60%</td>
                                    </tr>

                                </table>

                                <p>Absorption priority: Cryo > Pyro > Hydro > Electro</p>




                                <p><i>You discussed the way to grasp the formless wind with Paimon.</i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/anemoburst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Gust Surge</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                                <p>Guiding the path of the wind currents, you summon a forward-moving tornado that pulls objects and opponents towards itself, dealing continuous Anemo DMG.</p>

                            
                                <table class="scalingtable">
                                    <tr>
                                        <td>Tornado DMG</td>
                                        <td style="text-align:right;">137%</td>
                                    </tr>
                                    <tr>
                                        <td>Duration</td>
                                        <td style="text-align:right;">6s</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">15s</td>
                                    </tr>
                                    <tr>
                                        <td>Energy Cost</td>
                                        <td style="text-align:right;">60</td>
                                    </tr>
                                </table>

                                <h1>Elemental Absorption</h1>
                                <p>If the tornado comes into contact with Hydro/Pyro/Cryo/Electro, it will deal additional elemental DMG of that type.</p>
                                <p>Elemental Absorption may only occur once per use.</p>

                                <table class="scalingtable">
                                    <tr>
                                        <td>Additional Elemental DMG</td>
                                        <td style="text-align:right;">42.2%</td>
                                    </tr>

                                </table>

                                <p>Absorption priority: Cryo > Pyro > Hydro > Electro</p>



                                <p><i>You and Paimon studied the flapping of a butterfly's wings.</i></p>
                            </div>
                        </div>

</div>


<div class="geotalents flex hide">

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoskill.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Skill: Starfell Sword</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>You disgorge a meteorite from the depths of the earth, dealing AoE Geo DMG.</p>

                                <table class="scalingtable">
                                    <tr>
                                        <td>Skill DMG</td>
                                        <td style="text-align:right;">422%</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">8s</td>
                                    </tr>

                                </table>
                                <p>The meteorite is considered a Geo Construct, and can be climbed or used to block attacks.</p>

                                <p>The meteorite is considered a Geo Construct, and can be climbed or used to block attacks.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Meteorite Duration</td>
                                        <td style="text-align:right;">30s</td>
                                    </tr>

                                </table>

                                <h1>Hold</h1>
                                <p>This skill's positioning may be adjusted.</p>
                                    <p><i>You spoke with Paimon about the final destination of falling stars.</i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoburst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Wake of Earth</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Energizing the Geo deep underground, you set off expanding shockwaves.</p>

                                <p>Launches surrounding opponents back and deals AoE Geo DMG.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>DMG Per Shockwave</td>
                                        <td style="text-align:right;">252%</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">15s</td>
                                    </tr>
                                    <tr>
                                        <td>Energy Cost</td>
                                        <td style="text-align:right;">60</td>
                                    </tr>
                                </table>
                                <p>A stone wall is erected at the edges of the shockwave.</p>
                                <p>The stone wall is considered a Geo Construct, and may be used to block attacks.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Stonewall Duration</td>
                                        <td style="text-align:right;">15s</td>
                                    </tr>


                                </table>

                                <p><i>You and Paimon studied the pulse of the mountains.</i></p>
                            </div>
                        </div>

</div>

<div class="electrotalents flex hide">

<div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/traveler/electroskill.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Skill: Lightning Blade</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                            <p>Unleashes three swift thunder shadows that deal Electro DMG to opponents and leave an Abundance Amulet behind after hitting an opponent.</p>
                            <table class="scalingtable">
                                    <tbody><tr>
                                        <td>Skill DMG</td>
                                        <td style="text-align:right;">134% x 3</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">13.5s</td>
                                    </tr>


                                </tbody></table>
                            
                            <p>2 Abundance Amulets can be created initially. Using this skill will reset any Abundance Amulets that were generated.</p>
                            <h1>Abundance Amulets</h1>
                            <p>When a character is near an Abundance Amulet, they will absorb it and obtain the following effects:</p>
                            <li>Restores Elemental Energy</li>
                            <li>Increases Energy Recharge during the Abundance Amulet's duration.</li>
                                <table class="scalingtable">
                                    <tbody><tr>
                                        <td>Energy Regeneration</td>
                                        <td style="text-align:right;">4 Per Amulet</td>
                                    </tr>
                                    <tr>
                                        <td>Energy Recharge Increase</td>
                                        <td style="text-align:right;">20%</td>
                                    </tr>
                                    <tr>
                                        <td>Duration</td>
                                        <td style="text-align:right;">6s</td>
                                    </tr>
                                    <tr>
                                        <td>Abundance Amulet Duration</td>
                                        <td style="text-align:right;">15</td>
                                    </tr>

                                </tbody></table>


                                    <p><i>You and Paimon discuss the paths by which electricity might flow.</i></p>
                            </div>
                        </div>
                        
                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/traveler/electroburst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Bellowing Thunder</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>You call upon the protection of lightning, knocking nearby opponents back and dealing Electro DMG to them.</p>

                            
                                <table class="scalingtable">
                                    <tbody><tr>
                                        <td>Skill DMG</td>
                                        <td style="text-align:right;">194.5%</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">20s</td>
                                    </tr>
                                    <tr>
                                        <td>Energy Cost</td>
                                        <td style="text-align:right;">80</td>
                                    </tr>
                                </tbody></table>
                                <h1>Lightning Shroud</h1>
                                <p>When your active character's Normal or Charged Attacks hit opponents, they will call Falling Thunder forth, dealing Electro DMG.</p>
                                <p>One instance of Falling Thunder can be generated every 0.5s.</p>
                                <table class="scalingtable">
                                    <tbody><tr>
                                        <td>Falling Thunder DMG</td>
                                        <td style="text-align:right;">55.8%</td>
                                    </tr>
                                    <tr>
                                        <td>Energy Regeneration</td>
                                        <td style="text-align:right;">1</td>
                                    </tr>
                                    <tr>
                                        <td>Duration</td>
                                        <td style="text-align:right;">12s</td>
                                    </tr>

                                </tbody></table>
                                <p><i>You and Paimon studied the light that flashes through the clouds.</i></p>
                            </div>
                        </div></div>





<div class="dendrotalents flex hide">

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroskill.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Skill: Razorgrass Blade</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>With a flourish of your blade, you unleash a spray of razor-sharp leaves that go before you and deal Dendro DMG.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Skill DMG</td>
                                        <td style="text-align:right;">392%</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">8s</td>
                                    </tr>
                                </table>

                                    <p><i>You and Paimon observed the flowing edges of grass and leaf.</i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroburst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Surgent Manifestation</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Calling upon the might of the flora all around you, you create a Lea Lotus Lamp.</p>
                                <p>This Lamp will deal continuous Dendro DMG to opponents within its AoE.</p>
                                
                                <h1>Lotuslight Transfiguration</h1>
                                <p>The Lea Lotus Lamp will undergo the following changes after it comes into contact with Hydro/Electro/Pyro:</p>
                                <li>Hydro: the Lamp's AoE and the AoE of its attacks are increased.</li>
                                <li>Electro: the Lamp's ATK SPD is increased.</li>
                                <li>Pyro: the Lamp will explode after a short delay and then disappear, dealing AoE Dendro DMG.</li>
                                <p>The Lea Lotus Lamp can only undergo one Lotuslight Transfiguration in its duration.</p>
                                <p>Only one Lamp created by the Traveler can exist at any one time.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Lea Lotus Lamp Attack DMG</td>
                                        <td style="text-align:right;">136.3%</td>
                                    </tr>
                                    <tr>
                                        <td>Lea Lotus Lamp Duration</td>
                                        <td style="text-align:right;">12s</td>
                                    </tr>
                                    <tr>
                                        <td>Explosion DMG</td>
                                        <td style="text-align:right;">681.4%</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">20s</td>
                                    </tr>
                                    <tr>
                                        <td>Energy Cost</td>
                                        <td style="text-align:right;">80</td>
                                    </tr>

                                </table>



                                <p><i>You and Paimon studied the sounds of plants that sprout after the rain.</i></p>
                            </div>
                        </div>

</div>



                    


                </div>
                    <p class="title">Passives</p>
                    <div class="passive-deck anemopassive">
                        <div class="passive-deck-wrapper">

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/anemoa1.png" alt="">
                                </div> 
                                <h1>Slitting Wind</h1>
                                <p>The last hit of a Normal Attack combo unleashes a wind blade, dealing 60% of ATK as Anemo DMG to all opponents in its path.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/anemoa4.png" alt="">
                                </div> 
                                <h1>Second Wind</h1>
                                <p>Palm Vortex kills regenerate 2% HP for 5s.</p>
                                <p>This effect can only occur once every 5s.</p>
                            </div>
                            </div>

                    </div>



                    <div class="passive-deck geopassive hide">
                        <div class="passive-deck-wrapper">

                
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoa1.png" alt="">
                                </div> 
                                <h1>Shattered Darkrock</h1>
                                <p>Reduces Starfell Sword's CD by 2s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoa4.png" alt="">
                                </div> 
                                <h1>Frenzied Rockslide</h1>
                                <p>The final hit of a Normal Attack combo triggers a collapse, dealing 60% of ATK as AoE Geo DMG.</p>
                            </div>
                            </div>

                    </div>

                    <div class="passive-deck electropassive hide">
                        <div class="passive-deck-wrapper">

                


                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroa1.png" alt="">
                                </div> 
                                <h1>Thunderflash</h1>
                                <p>When another nearby character in the party obtains an Abundance Amulet created by Lightning Blade, Lightning Blade's CD is decreased by 1.5s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroa4.png" alt="">
                                </div> 
                                <h1>Resounding Roar</h1>
                                <p>Increases the Energy Recharge effect granted by Lightning Blade's Abundance Amulet by 10% of the Traveler's Energy Recharge.</p>
                            </div>
                            </div>

                    </div>


                    <div class="passive-deck dendropassive hide">
                        <div class="passive-deck-wrapper">

            
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroa1.png" alt="">
                                </div> 
                                <h1>Verdant Overgrowth</h1>
                                <p>Lea Lotus Lamp will obtain one level of Overflowing Lotuslight every second it is on the field, increasing the Elemental Mastery of active character(s) within its AoE by 6. Overflowing Lotuslight has a maximum of 10 stacks.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroa4.png" alt="">
                                </div> 
                                <h1>Verdant Luxury</h1>
                                <p>Every point of Elemental Mastery the Traveler possesses increases the DMG dealt by Razorgrass Blade by 0.15% and the DMG dealt by Surgent Manifestation by 0.1%.</p>
                            </div>
                            </div>

                    </div>

                    





                    <p class="title">Constellations</p>

                    <div class="constellations anemocons">
                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/anemoc1.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C1: Raging Vortex</h1>
                                    <p>Palm Vortex pulls in opponents and objects within a 5m radius.</p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/anemoc2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Uprising Whirlwind</h1>
                                    <p>Increases Energy Recharge by 16%.</p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/anemoc3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Sweeping Gust</h1>
                                    <p>Increases the Level of Gust Surge by 3.</p>
                                    <p>Maximum upgrade level is 15.</p>
                                </div>
                            </div>
                    
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/anemoc4.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C4: Cherishing Breezes</h1>
                                    <p>Reduces DMG taken while casting Palm Vortex by 10%.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/anemoc5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Vortex Stellaris</h1>
                                    <p>Increases the Level of Palm Vortex by 3.</p>
                                    <p>Maximum upgrade level is 15.</p>
                                </div>
                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/anemoc6.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C6: Intertwined Winds</h1>
                                    <p>Targets who take DMG from Gust Surge have their Anemo RES decreased by 20%.</p>
                                    <p>If an Elemental Absorption occurred, then their RES towards the corresponding Element is also decreased by 20%.</p>
                                </div>
                            </div>
                        </div>
    
                    </div>



                    <div class="constellations geocons hide">
                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoc1.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C1: Invincible Stonewall</h1>
                                    <p>Party members within the radius of Wake of Earth have their CRIT Rate increased by 10% and have increased resistance against interruption.</p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoc2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Rockcore Meltdown</h1>
                                    <p>When the meteorite created by Starfell Sword is destroyed, it will also explode, dealing additional AoE Geo DMG equal to the amount of damage dealt by Starfell Sword.</p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoc3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Will of the Rock</h1>
                                    <p>Increases the Level of Wake of Earth by 3.</p>
                                    <p>Maximum upgrade level is 15.</p>
                                </div>
                            </div>
                    
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoc4.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C4: Reaction Force</h1>
                                    <p>The shockwave triggered by Wake of Earth regenerates 5 Energy for every opponent hit.</p>
                                    <p>A maximum of 25 Energy can be regenerated in this manner at any one time.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoc5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Meteorite Impact</h1>
                                    <p>Increases the Level of Starfell Sword by 3.</p>
                                    <p>Maximum upgrade level is 15.</p>
                                </div>
                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoc6.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C6: Everlasting Boulder</h1>
                                    <p>The barrier created by Wake of Earth lasts 5s longer.</p>
                                    <p>The meteorite created by Starfell Sword lasts 10s longer.</p>
                                </div>
                            </div>
                        </div>
    
                    </div>


                    <div class="constellations electrocons hide">
                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroc1.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C1: Spring Thunder of Fertility</h1>
                                    <p>The number of Abundance Amulets that can be generated using Lightning Blade is increased to 3.</p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroc2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Violet Vehemence</h1>
                                    <p>When Falling Thunder created by Bellowing Thunder hits an opponent, it will decrease their Electro RES by 15% for 8s.</p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroc3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Distant Crackling</h1>
                                    <p>Increases the Level of Bellowing Thunder by 3.</p>
                                    <p>Maximum upgrade level is 15.</p>
                                </div>
                            </div>
                    
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroc4.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C4: Fickle Cloudstrike</h1>
                                    <p>When a character obtains Abundance Amulets generated by Lightning Blade, if this character's Energy is less than 35%, the Energy restored by the Abundance Amulets is increased by 100%.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroc5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Clamor in the Wilds</h1>
                                    <p>Increases the Level of Lightning Blade by 3.</p>
                                    <p>Maximum upgrade level is 15.</p>
                                </div>
                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroc6.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C6: World-Shaker</h1>
                                    <p>Every 2 Falling Thunder attacks triggered by Bellowing Thunder will greatly increase the DMG dealt by the next Falling Thunder, which will deal 200% of its original DMG and will restore an additional 1 Energy to the current character.</p>
                                </div>
                            </div>
                        </div>
    
                    </div>


                    <div class="constellations dendrocons hide">
                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroc1.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C1: Symbiotic Creeper</h1>
                                    <p>After Razorgrass Blade hits an opponent, it will regenerate 3.5 Energy for the Traveler.</p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroc2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Green Resilience</h1>
                                    <p>Lea Lotus Lamp's duration is increased by 3s.</p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroc3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Whirling Weeds</h1>
                                    <p>Increases the Level of Razorgrass Blade by 3.</p>
                                    <p>Maximum upgrade level is 15.</p>
                                </div>
                            </div>
                    
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroc4.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C4: Treacle Grass</h1>
                                    <p>After the Lea Lotus Lamp triggers a Lotuslight Transfiguration, it will obtain 5 stacks of the Overflowing Lotuslight effect from the Passive Talent "Verdant Overgrowth."</p>
                                    <p>You must have unlocked this Passive Talent first.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroc5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Viridian Transience</h1>
                                    <p>Increases the Level of Surgent Manifestation by 3.</p>
                                    <p>Maximum upgrade level is 15.</p>
                                </div>
                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroc6.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C6: Withering Aggregation</h1>
                                    <p>The Dendro DMG Bonus of the character under the effect of Overflowing Lotuslight as created by the Lea Lotus Lamp is increased by 12%. If the Lamp has experienced a Lotuslight Transfiguration previously, the character will also gain 12% DMG Bonus for the corresponding element.</p>
                                </div>
                            </div>
                        </div>
    
                    </div>


                </div> 




                </div>
            </div>
        </div>
    </div>
    
<script type="text/javascript">
$(window).on("load", function() {
    $("#<?php echo $fetch['url']?>-button").addClass("active");
    $("#character-dropdown-icon").addClass("active-dropdown-icon");
    $("#character-dropdown-content").addClass("active-dropdown-content");
    $("#<?php echo $fetch['url']?>-button").addClass("dark");

    $('html, body, .sidenav').animate({
        scrollTop: $("#<?php echo $fetch['url']?>-button").offset().top - 50
    }, 600);
 });
</script>
<script>
$("#anemo").click(function(){
    $("#anemo").addClass("active");
    $("#geo").removeClass("active");
    $("#electro").removeClass("active");
    $("#dendro").removeClass("active");

    $(".anemotalents").removeClass("hide");
    $(".geotalents").addClass("hide");
    $(".electrotalents").addClass("hide");
    $(".dendrotalents").addClass("hide");

    $(".anemocons").removeClass("hide");
    $(".geocons").addClass("hide");
    $(".electrocons").addClass("hide");
    $(".dendrocons").addClass("hide");

    $(".anemopassive").removeClass("hide");
    $(".geopassive").addClass("hide");
    $(".electropassive").addClass("hide");
    $(".dendropassive").addClass("hide");

});
$("#geo").click(function(){
    $("#anemo").removeClass("active");
    $("#geo").addClass("active");
    $("#electro").removeClass("active");
    $("#dendro").removeClass("active");

    $(".anemotalents").addClass("hide");
    $(".geotalents").removeClass("hide");
    $(".electrotalents").addClass("hide");
    $(".dendrotalents").addClass("hide");


    $(".anemocons").addClass("hide");
    $(".geocons").removeClass("hide");
    $(".electrocons").addClass("hide");
    $(".dendrocons").addClass("hide");

    $(".anemopassive").addClass("hide");
    $(".geopassive").removeClass("hide");
    $(".electropassive").addClass("hide");
    $(".dendropassive").addClass("hide");

});

$("#electro").click(function(){
    $("#anemo").removeClass("active");
    $("#geo").removeClass("active");
    $("#electro").addClass("active");
    $("#dendro").removeClass("active");

    $(".anemotalents").addClass("hide");
    $(".geotalents").addClass("hide");
    $(".electrotalents").removeClass("hide");
    $(".dendrotalents").addClass("hide");

    $(".anemocons").addClass("hide");
    $(".geocons").removeClass("hide");
    $(".electrocons").addClass("hide");
    $(".dendrocons").addClass("hide");

    $(".anemopassive").addClass("hide");
    $(".geopassive").addClass("hide");
    $(".electropassive").removeClass("hide");
    $(".dendropassive").addClass("hide");

});

$("#dendro").click(function(){
    $("#anemo").removeClass("active");
    $("#geo").removeClass("active");
    $("#electro").removeClass("active");
    $("#dendro").addClass("active");

    $(".anemotalents").addClass("hide");
    $(".geotalents").addClass("hide");
    $(".electrotalents").addClass("hide");
    $(".dendrotalents").removeClass("hide");

    $(".anemocons").addClass("hide");
    $(".geocons").addClass("hide");
    $(".electrocons").addClass("hide");
    $(".dendrocons").removeClass("hide");

    $(".anemopassive").addClass("hide");
    $(".geopassive").addClass("hide");
    $(".electropassive").addClass("hide");
    $(".dendropassive").removeClass("hide");

});



</script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>
<?php
    }
?>
</body>