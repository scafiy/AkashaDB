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
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'yaoyao' ") or die(mysqli_error());
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
                                    <img class="icons" src="../images/icons/b_<?php echo $fetch['element']?>.png" >
                                </div>
                                <div tooltip="<?php echo $fetch['weapon']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_<?php echo $fetch['weapon']?>.png" alt="">
                                </div>
                                <div tooltip="<?php echo $fetch['region']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_<?php echo $fetch['region']?>.png" alt="">
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
                                <td><?php echo $fetch['stat']?></td>
                            </tr>
                            <tr>
                                <td>90/90</td>
                                <td>12289</td>
                                <td>212</td>
                                <td>751</td>
                                <td>24.0%</td>
                            </tr>
                        </table>
                    </div>

                    <p class="title">Talents</p>
                    <div class="talent-deck">
                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/na.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Normal Attack: Toss 'N' Turn Spear</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p>Performs up to 4 consecutive spear strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">93.7%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">87.2%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">57.6%+60.5%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">143.2%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to lunge forward, dealing damage to opponents along the way.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">207%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">25</td>
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


                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/skill.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Skill: Raphanus Sky Cluster</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Calls upon "Yuegui: Throwing Mode," a special device created by a certain adeptus to help Yaoyao solve her problems.</p>
                                <p>This skill will be used differently in Holding Mode.</p>

                                <table class="scalingtable">
                                    <tr>
                                        <td>Yuegui: Throwing Mode Duration</td>
                                        <td style="text-align:right;">10s</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">15s</td>
                                    </tr>
                                </table>

                                <h1>Hold</h1>
                                <p>Enters Aiming Mode to adjust the throw direction.</p>
                                
                                <h1>Yuegui: Throwing Mode</h1>
                                <p>Throws out White Jade Radishes that will explode upon hitting characters or opponents, dealing Dendro DMG to opponents within a certain AoE, and healing characters within that same AoE based on Yaoyao's Max HP. If a radish does not hit either an opponent or a character, the radish will remain where it is and explode on contact with a character or opponent, or will explode after its duration expires.</p>
                                <p>Yuegui: Throwing Mode will choose its radish-throw targets.</p>
                                <li>If all nearby characters have more than 70% HP remaining, then it will throw the radish at a nearby opponent.</li>
                                <li>If nearby characters have 70% or less HP remaining, it will throw a radish at the character with the lowest HP percentage remaining. If no opponents exist nearby, Yuegui will also throw White Jade Radishes at characters if they all have more than 70% HP and less than 100% HP remaining. Otherwise, it will throw radishes into the area at random.</li>
                                
                                <table class="scalingtable">
                                    <tr>
                                        <td>White Jade Radish DMG</td>
                                        <td style="text-align:right;">50.9%</td>
                                    </tr>
                                    <tr>
                                        <td>White Jade Radish Healing</td>
                                        <td style="text-align:right;">2.91% Max HP+335</td>
                                    </tr>
                                    <tr>
                                        <td>White Jade Radish Duration</td>
                                        <td style="text-align:right;">5s</td>
                                    </tr>


                                </table>

                                <p>A maximum of 2 instances of Yuegui: Throwing Mode can exist at any one time.</p>


                                    <p><i>"A radish a day keeps trouble away! ... Oh, this isn't about a radish's medical properties, exactly, but it does have some health benefits, yeah!"</i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Moonjade Descent</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                            <p>At the enjoinment of a certain adeptus, Yuegui's full potential can be unleashed in an emergency, dealing Dendro DMG to nearby opponents and entering an (in some sense) unsurpassed Adeptal Legacy state.</p>

                            
                                <table class="scalingtable">
                                    <tr>
                                        <td>Skill DMG</td>
                                        <td style="text-align:right;">194.8%</td>
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

                                <h1>Adeptal Legacy</h1>

                                <li>White Jade Radishes generated will be changed to heal and deal DMG according to this skill. Explosions will heal all nearby party members, and the Dendro DMG that they deal will be viewed as Elemental Burst DMG instead.</li>
                                <li>Summons "Yuegui: Jumping Mode" at intervals until their limit has been reached. The behavior of this version of Yuegui is the same as that of "Yuegui: Throwing Mode" in the Elemental Skill, Raphanus Sky Cluster. A maximum of 3 Yuegui: Jumping Mode can exist at any one time.</li>
                                <li>Yaoyao's Movement SPD is increased by 15%.</li>
                                <li>Yaoyao's Dendro RES will be increased.</li>
                                
                                <table class="scalingtable">
                                    <tr>
                                        <td>Adeptal Legacy White Jade Radish DMG</td>
                                        <td style="text-align:right;">122.7%</td>
                                    </tr>
                                    <tr>
                                        <td>Adeptal Legacy White Jade Radish Healing</td>
                                        <td style="text-align:right;">3.43% Max HP+394</td>
                                    </tr>
                                    <tr>
                                        <td>Dendro RES Bonus</td>
                                        <td style="text-align:right;">50%</td>
                                    </tr>
                                    <tr>
                                        <td>Adeptal Legacy Duration</td>
                                        <td style="text-align:right;">5s</td>
                                    </tr>


                                </table>

                                <p>The Adeptal Legacy state will end once Yaoyao is off-field, and all remaining Yuegui: Jumping Mode will be cleared once this state ends.</p>

                                <p><i>"Eh? Which one of these is actually Yuegui, you ask? Aren't they all Yuegui?"</i></p>
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                            
                                <h1>Tailing on Tiptoes</h1>
                                <p>When Yaoyao is in the party, your characters will not startle Crystalflies and certain other animals when getting near them.</p>
                                <p>Check the "Other" sub-category of the "Living Beings / Wildlife" section in the Archive for creatures this skill works on.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Starscatter</h1>
                                <p>While affected by the Adeptal Legacy state caused by Moonjade Descent, Yaoyao will constantly throw White Jade Radishes at nearby opponents when she is sprinting, jumping, or running. She can throw 1 White Jade Radish this way once every 0.6s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>In Others' Shoes</h1>
                                <p>When White Jade Radishes explode, active characters within their AoE will regain HP every 1s based on 0.8% of Yaoyao's Max HP. This effect lasts 5s.</p>
                            </div>
                            </div>

                    </div>





                    <p class="title">Constellations</p>
                    <div class="constellations">
                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c1.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C1: Adeptus' Tutelage</h1>
                                    <p>When White Jade Radishes explode, active characters within their AoE will gain 15% Dendro DMG Bonus for 8s and have 15 Stamina restored to them. This form of Stamina Restoration can only be triggered every 5s.</p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Innocent</h1>
                                    <p>While affected by the Adeptal Legacy state caused by Moonjade Descent, if White Jade Radish explosions hit opponents, 3 Energy will be restored to Yaoyao. This form of Energy regeneration can occur once every 0.8s.</p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Loyal and Kind</h1>
                                    <p>Increases the Level of Raphanus Sky Cluster by 3.</p>
                                    <p>Maximum upgrade level is 15.</p>
                                </div>
                            </div>
                    
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c4.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C4: Winsome</h1>
                                    <p>After using Raphanus Sky Cluster or Moonjade Descent, Yaoyao's Elemental Mastery will be increased based on 0.3% of her Max HP for 8s. The maximum Elemental Mastery she can gain this way is 120.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Compassionate</h1>
                                    <p>Increases the Level of Moonjade Descent by 3.</p>
                                    <p>Maximum upgrade level is 15.</p>
                                </div>
                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c6.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C6: Beneficent</h1>
                                    <p>For every 2 White Jade Radishes Yuegui: Throwing Mode throws out, the next throw will also release a Mega Radish that will have a larger AoE than the standard White Jade Radish and have the following effects upon exploding:</p>
                                    <li>Deals AoE Dendro DMG based on 75% of Yaoyao's ATK.</li>
                                    <li>Restores HP for the active character based on 7.5% of Yaoyao's Max HP.</li>
                                    <p>Every Yuegui: Throwing Mode can throw out a maximum of 2 Mega Radishes.</p>
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

    $('html, body, .sidenav').animate({
        scrollTop: $("#<?php echo $fetch['url']?>-button").offset().top - 50
    }, 600);
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