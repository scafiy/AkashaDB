<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Klee - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include '../includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/characterpagestyle.css">

<style>
.splash-art{
    top:;
    margin-left:50px;
    margin-right:-50px;
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-top:-30px;
        margin-right:-50px;
    }
}

:root {
    --highlighted-color: #CE3E10; 
    --topnav-color:#E8DBD7 ;
    --search-bar-precolour:#E8DBD7;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'klee' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #CE3E1075, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Klee/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Klee</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Pyro" flow="up">
                                    <img class="icons" src="../images/icons/b_Pyro.png" >
                                </div>
                                <div tooltip="Catalyst" flow="up">
                                    <img class="icons" src="../images/icons/b_Catalyst.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_Mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">An explosives expert and a regular at the Knights of Favonius' confinement room. Also known as Fleeing Sunlight.
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
                        <td>Pyro DMG Bonus</td>

                    </tr>

                    <tr>
                        <td>90/90</td>
                        <td>10287</td>
                        <td>311</td>
                        <td>615</td>
                        <td>28.8%</td>

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
                                <p class="talent-card-title">Normal Attack: Kaboom!</p>
                                <p class="level">Lv.9</p>
                            </div>
                        </div>

                        <div class="talent-card-description">
                            <h1 class="">Normal Attack</h1>
                            <p class="">Throws things that go boom when they hit things! Performs up to 3 explosive attacks, dealing AoE Pyro DMG.</p>
                            <table class="scalingtable">
                                    <tr>
                                        <td>1-Hit DMG</td>
                                        <td style="text-align:right;">123%</td>
                                    </tr>
                                    <tr>
                                        <td>2-Hit DMG</td>
                                        <td style="text-align:right;">106%</td>
                                    </tr>
                                    <tr>
                                        <td>3-Hit DMG</td>
                                        <td style="text-align:right;">153%</td>
                                    </tr>


                                </table>

                                <h1>Charged Attack</h1>
                                <p>Consumes a certain amount of Stamina and deals AoE Pyro DMG to opponents after a short casting time.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Charged Attack DMG</td>
                                        <td style="text-align:right;">268%</td>
                                    </tr>
                                    <tr>
                                        <td>Charged Attack Stamina Cost</td>
                                        <td style="text-align:right;">50</td>
                                    </tr>


                                </table>

                                <h1>Plunging Attack</h1>
                                <p>Gathering the power of Pyro, Klee plunges towards the ground from mid-air, damaging all opponents in her path. Deals AoE Pyro DMG upon impact with the ground.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Collision Plunge DMG</td>
                                        <td style="text-align:right;">104.4%</td>
                                    </tr>
                                    <tr>
                                        <td>Low/High Plunge DMG</td>
                                        <td style="text-align:right;">209%/261%</td>
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
                                <p class="talent-card-title">Elemental Skill: Jumpy Dumpty</p>
                                <p class="level">Lv.9</p>
                            </div>
                        </div>

                        <div class="talent-card-description">
                            <p>Jumpy Dumpty is tons of boom-bang-fun!</p>
                            <p>When thrown, Jumpy Dumpty bounces thrice, igniting and dealing AoE Pyro DMG with every bounce.</p>
                            
                            <table class="scalingtable">
                                    <tr>
                                        <td>Jumpy Dumpty DMG</td>
                                        <td style="text-align:right;">162%</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">20s</td>
                                    </tr>
                            </table>
                            <p>On the third bounce, the bomb splits into many mines.</p>
                            <p>The mines will explode upon contact with opponents, or after a short period of time, dealing AoE Pyro DMG.</p>


                            <table class="scalingtable">
                                    <tr>
                                        <td>Mine DMG</td>
                                        <td style="text-align:right;">55.8%</td>
                                    </tr>
                                    <tr>
                                        <td>Mine Duration</td>
                                        <td style="text-align:right;">15s</td>
                                    </tr>
                            </table>
                            <p>Starts with 2 charges.</p>


                                <p><i>Jumpy Dumpty is Klee's good friend! She can't help but introduce him to everyone.</i></p>
                            </div>
                        </div>

                    <div class="talent-card">
                        <div class="talent-card-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                            </div>

                            <div class="talent-card-heading-text">
                                <p class="talent-card-title">Elemental Burst: Sparks 'n' Splash</p>
                                <p class="level">Lv.9</p>
                            </div>
                        </div>

                        <div class="talent-card-description">
                            <p class="">Klee's Blazing Delight! For the duration of this ability, continuously summons Sparks 'n' Splash to attack nearby opponents, dealing AoE Pyro DMG.</p>
                            <table class="scalingtable">
                                    <tr>
                                        <td>Sparks 'n' Splash DMG</td>
                                        <td style="text-align:right;">72.5%</td>
                                    </tr>
                                    <tr>
                                        <td>Duration</td>
                                        <td style="text-align:right;">10s</td>
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
                                <p><i>The knights all believe that Klee must have a lucky star watching over her to have never been hurt by any of her own bombs...</i></p>

                            
                        </div>
                </div>


                

                <p class="title">Passives</p>

                <div class="passive-deck">
                    <div class="passive-deck-wrapper">

                
                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                            </div>                        
                            
                            <h1>All Of My Treasures!</h1>
                            <p>Displays the location of nearby resources unique to Mondstadt on the mini-map.</p>
                        </div>

                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                            </div> 
                            <h1>Pounding Surprise</h1>
                            <p>When Jumpy Dumpty and Normal Attacks deal DMG, Klee has a 50% chance to obtain an Explosive Spark.</p>
                            <p>This Explosive Spark is consumed by the next Charged Attack, which costs no Stamina and deals 50% increased DMG.</p>
                        </div>

                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                            </div> 
                            <h1>Sparkling Burst</h1>
                            <p>When Klee's Charged Attack results in a CRIT Hit, all party members gain 2 Elemental Energy.</p>
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
                                <h1>C1: Chained Reactions</h1>
                                <p>Attacks and Skills have a certain chance to summon sparks that bombard opponents, dealing DMG equal to 120% of Sparks 'n' Splash's DMG.</p>
                            </div>

                        </div>
                    </div>



                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                            </div>
                            <div class="constellation-text">
                                <h1>C2: Explosive Frags</h1>
                                <p>Being hit by Jumpy Dumpty's mines decreases opponents' DEF by 23% for 10s.</p>
                            </div>
                        </div>
                    </div>




                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                            </div>

                            <div class="constellation-text">
                                <h1>C3: Exquisite Compound</h1>
                                <p>Increases the Level of Jumpy Dumpty by 3.</p>
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
                                <h1>C4: Sparkly Explosion</h1>
                                <p>If Klee leaves the field during the duration of Sparks 'n' Splash, her departure triggers an explosion that deals 555% of her ATK as AoE Pyro DMG.</p>
                            </div>

                        </div>
                    </div>


                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                            </div>
                            <div class="constellation-text">
                                <h1>C5: Nova Burst</h1>
                                <p>Increases the Level of Sparks 'n' Splash by 3.</p>
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
                                <h1>C6: Blazing Delight</h1>
                                <p>While under the effects of Sparks 'n' Splash, Klee will regenerate 3 Energy for all members of the party (excluding Klee) every 3s.</p>
                                <p>When Sparks 'n' Splash is used, all party members will gain a 10% Pyro DMG Bonus for 25s.</p>
                            </div>
                        </div>
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
    $("#klee-button").addClass("active");
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

</body>

                        
<?php
    }
?>
