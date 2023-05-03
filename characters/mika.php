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
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'mika' ") or die(mysqli_error());
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
                <div class="banner" style="background-image: linear-gradient(to left, #DED18D75, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
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
 
                <div class="sources">
                    <p>Sources:</p>
                    <a href="https://genshin-impact.fandom.com/wiki/<?php echo $fetch['name']?>" target="_blank">
                        <img src="../images/icons/fandom.svg" alt="">
                        Fandom Wiki</a>
                    <a href="https://keqingmains.com/<?php echo $fetch['url']?>" target="_blank">
                        <img src="../images/icons/kqm.png" alt="">
                        KQM Guide</a>
                    <a href="https://library.keqingmains.com/characters/<?php echo strtolower($fetch['element'])?>/<?php echo $fetch['url']?>" target="_blank">
                        <img src="../images/icons/kqm.png" alt="">
                        KQM TCL</a>


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
                                <td>12506</td>
                                <td>223</td>
                                <td>713</td>
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
                                    <p class="talent-card-title">Normal Attack: Spear of Favonius - Arrow's Passage</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p>Performs up to 5 consecutive strikes using his crossbow and spear.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">79.5%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">76.2%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">100.1%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">50.7%+50.7%</td>
                                        </tr>

                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">130.2%</td>
                                        </tr>
                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to lunge forward, dealing damage to opponents along the way.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">207.1%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Starfrost Swirl</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Mika uses his crossbow to attack, granting all nearby characters in your party Soulwind. When characters in the Soulwind state are on the field, their ATK SPD will be increased.</p>
                                <p>Will take effect in different ways if Tapped or Held.</p>
                                <h1>Tap</h1>
                                <p>Fires a Flowfrost Arrow that can pierce through opponents, dealing Cryo DMG to enemies it comes into contact with.</p>
                               
                                <table class="scalingtable">
                                    <tr>
                                        <td>Flowfrost Arrow DMG</td>
                                        <td style="text-align:right;">114.24%</td>
                                    </tr>
                                    <tr>
                                        <td>ATK SPD Bonus</td>
                                        <td style="text-align:right;">21%</td>
                                    </tr>
                                    <tr>
                                        <td>Soulwind Duration</td>
                                        <td style="text-align:right;">12s</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">15s</td>
                                    </tr>
                                </table>

                                <h1>Hold</h1>
                                <p>Goes into Aiming Mode, locking on to an opponent and firing a Rimestar Flare at them, dealing Cryo DMG. When the Rimestar Flare hits, it will rise before exploding, launching Rimestar Shards into a maximum of 3 other opponents, dealing Cryo DMG.</p>


                                <table class="scalingtable">
                                    <tr>
                                        <td>Rimestar Flare DMG</td>
                                        <td style="text-align:right;">142.8%</td>
                                    </tr>
                                    <tr>
                                        <td>Rimestar Shard DMG</td>
                                        <td style="text-align:right;">42.84%</td>
                                    </tr>
                                </table>

                                    <p><i>Stars burst 'neath the frosted skies.</i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Skyfeather Song</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Derives the ability to spur his teammates on from the recited prayers of the knightly order, regenerating HP for all nearby party members. This healing is based on Mika's Max HP and will grant them the Eagleplume state.</p>
                                <h1>Eagleplume</h1>
                                <p>When the Normal Attacks of active characters affected by Eagleplume hit an opponent, Mika will help them regenerate HP based on his Max HP.</p>
                                <p>Characters affected by this state can only regenerate HP in this way once per short interval of time.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Cast Healing</td>
                                        <td style="text-align:right;">20.7% Max HP+2383</td>
                                    </tr>
                                    <tr>
                                        <td>Eagleplume Healing</td>
                                        <td style="text-align:right;">4.1% Max HP+475</td>
                                    </tr>
                                    <tr>
                                        <td>Eagleplume Healing Interval</td>
                                        <td style="text-align:right;">2.5s</td>
                                    </tr>
                                    <tr>
                                        <td>Eagleplume Duration</td>
                                        <td style="text-align:right;">15s</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">18s</td>
                                    </tr>
                                    <tr>
                                        <td>Energy Cost</td>
                                        <td style="text-align:right;">70</td>
                                    </tr>


                                </table>
                                <p><i></i></p>
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                            
                                <h1>Demarcation</h1>
                                <p>Displays the location of nearby resources unique to Mondstadt on the mini-map.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Suppressive Barrage</h1>
                                <p>Per the following circumstances, the Soulwind state caused by Starfrost Swirl will grant characters the Detector effect, increasing their Physical DMG by 10% when they are on the field.</p>
                                <li>If the Flowfrost Arrow hits more than one opponent, each additional opponent hit will generate 1 Detector stack.</li>
                                <li>When a Rimestar Shard hits an opponent, it will generate 1 Detector stack. Each Rimestar Shard can trigger the effect 1 time.</li>
                                <p>The Soulwind state can have a maximum of 3 Detector stacks, and if Starfrost Swirl is cast again during this duration, the pre-existing Soulwind state and all its Detector stacks will be cleared.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Topographical Mapping</h1>
                                <p>When an active character affected by both Skyfeather Song's Eagleplume and Starfrost Swirl's Soulwind at once scores a CRIT Hit with their attacks, Soulwind will grant them 1 stack of Detector from Suppressive Barrage. During a single instance of Soulwind, 1 Detector stack can be gained in this manner.</p>
                                <p>Additionally, the maximum number of stacks that can be gained through Soulwind alone is increased by 1.</p>
                                <p>Requires Suppressive Barrage to be unlocked first.</p>
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
                                    <h1>C1: Factor Confluence</h1>
                                    <p>The Soulwind state of Starfrost Swirl can decrease the healing interval between instances caused by Skyfeather Song's Eagleplume state. This decrease percentage is equal to the ATK SPD increase provided by Soulwind.</p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Companion's Ingress</h1>
                                    <p>When Starfrost Swirl's Flowfrost Arrow first hits an opponent, or its Rimestar Flare hits an opponent, 1 Detector stack from Passive Talent "Suppressive Barrage" will be generated.</p>
                                    <p>You must have unlocked the Passive Talent "Suppressive Barrage" first.</p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Reconnaissance Experience</h1>
                                    <p>Increases the Level of Skyfeather Song by 3.</p>
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
                                    <h1>C4: Sunfrost Encomium</h1>
                                    <p>When Mika's own Skyfeather Song's Eagleplume state heals party members, this will restore 3 Energy to Mika. This form of Energy restoration can occur 5 times during the Eagleplume state created by 1 use of Skyfeather Song.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Signal Arrow</h1>
                                    <p>Increases the Level of Starfrost Swirl by 3.</p>
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
                                    <h1>C6: Companion's Counsel</h1>
                                    <p>The maximum number of Detector stacks that Starfrost Swirl's Soulwind can gain is increased by 1. You need to have unlocked the Passive Talent "Suppressive Barrage" first.</p>
                                    <p>Additionally, active characters affected by Soulwind will deal 60% more Physical CRIT DMG.</p>
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
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>
<?php
    }
?>
</body>