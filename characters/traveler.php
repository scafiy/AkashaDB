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
                                    <p class="talent-card-title">Elemental Skill: </p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1></h1>
                                <p></p>
                                <table class="scalingtable">
                                    <tr>
                                        <td></td>
                                        <td style="text-align:right;"></td>
                                    </tr>

                                </table>

                                    <p><i></i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoburst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: </p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1></h1>
                                <p></p>
                            
                                <table class="scalingtable">
                                    <tr>
                                        <td></td>
                                        <td style="text-align:right;"></td>
                                    </tr>

                                </table>
                                <p><i></i></p>
                            </div>
                        </div>

</div>


<div class="electrotalents flex hide">

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroskill.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Skill: </p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1></h1>
                                <p></p>
                                <table class="scalingtable">
                                    <tr>
                                        <td></td>
                                        <td style="text-align:right;"></td>
                                    </tr>

                                </table>

                                    <p><i></i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroburst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: </p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1></h1>
                                <p></p>
                            
                                <table class="scalingtable">
                                    <tr>
                                        <td></td>
                                        <td style="text-align:right;"></td>
                                    </tr>

                                </table>
                                <p><i></i></p>
                            </div>
                        </div>

</div>

<div class="dendroalents flex hide">

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroskill.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Skill: </p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1></h1>
                                <p></p>
                                <table class="scalingtable">
                                    <tr>
                                        <td></td>
                                        <td style="text-align:right;"></td>
                                    </tr>

                                </table>

                                    <p><i></i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroburst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: </p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1></h1>
                                <p></p>
                            
                                <table class="scalingtable">
                                    <tr>
                                        <td></td>
                                        <td style="text-align:right;"></td>
                                    </tr>

                                </table>
                                <p><i></i></p>
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
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geopassive.png" alt="">
                                </div>                        
                            
                                <h1></h1>
                                <p></p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoa1.png" alt="">
                                </div> 
                                <h1></h1>
                                <p></p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoa4.png" alt="">
                                </div> 
                                <h1></h1>
                                <p></p>
                            </div>
                            </div>

                    </div>

                    <div class="passive-deck electropassive hide">
                        <div class="passive-deck-wrapper">

                
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electropassive.png" alt="">
                                </div>                        
                            
                                <h1></h1>
                                <p></p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroa1.png" alt="">
                                </div> 
                                <h1></h1>
                                <p></p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroa4.png" alt="">
                                </div> 
                                <h1></h1>
                                <p></p>
                            </div>
                            </div>

                    </div>


                    <div class="passive-deck dendropassive hide">
                        <div class="passive-deck-wrapper">

                
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendropassive.png" alt="">
                                </div>                        
                            
                                <h1></h1>
                                <p></p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroa1.png" alt="">
                                </div> 
                                <h1></h1>
                                <p></p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroa4.png" alt="">
                                </div> 
                                <h1></h1>
                                <p></p>
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
                                    <h1>C1: </h1>
                                    <p></p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoc2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: </h1>
                                    <p></p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoc3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: </h1>
                                    <p></p>
                                    <p></p>
                                </div>
                            </div>
                    
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoc4.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C4: </h1>
                                    <p></p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoc5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: </h1>
                                    <p></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/geoc6.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C6: </h1>
                                    <p></p>
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
                                    <h1>C1: </h1>
                                    <p></p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroc2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: </h1>
                                    <p></p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroc3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: </h1>
                                    <p></p>
                                    <p></p>
                                </div>
                            </div>
                    
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroc4.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C4: </h1>
                                    <p></p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroc5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: </h1>
                                    <p></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/electroc6.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C6: </h1>
                                    <p></p>
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
                                    <h1>C1: </h1>
                                    <p></p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroc2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: </h1>
                                    <p></p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroc3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: </h1>
                                    <p></p>
                                    <p></p>
                                </div>
                            </div>
                    
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroc4.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C4: </h1>
                                    <p></p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroc5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: </h1>
                                    <p></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/dendroc6.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C6: </h1>
                                    <p></p>
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
    $(".electrotalents").removeClass("hide");
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