<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title> Shikanoin Heizou - Akasha</title>
    

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
    margin-left:0px;
    margin-right:0px;
}

:root {
    --highlighted-color:#705247 ; 
    --topnav-color:#E0DDDC ;
    --search-bar-precolour:#E0DDDC;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'heizou' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #70524775, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Heizou/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Shikanoin Heizou</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Anemo" flow="up">
                                    <img class="icons" src="../images/icons/b_Anemo.png" >
                                </div>
                                <div tooltip="Catalyst" flow="up">
                                    <img class="icons" src="../images/icons/b_Catalyst.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A young prodigy detective from the Tenryou Commission. His senses are sharp and his thoughts are clear.
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
                            <td>Anemo DMG Bonus</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>10657</td>
                            <td>225</td>
                            <td>684</td>
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
                                    <p class="talent-card-title">Normal Attack: Fudou Style Martial Arts</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 fisticuffs empowered by a mighty wind, dealing Anemo DMG.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">63.7%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">62.6%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">86.8%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">25.1%+27.6%+32.7%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">104.5%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina and performs a sweeping kick that deals Anemo DMG.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack</td>
                                            <td style="text-align:right;">124.1%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">25</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Calling upon the surging wind, Heizou plunges towards the ground from mid-air, damaging all opponents in his path. Deals AoE Anemo DMG upon impact with the ground.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Heartstopper Strike</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1>Tap</h1>
                                <p>Wields the swift winds to launch a Heartstopper Strike that deals Anemo DMG.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">386.8%</td>
                                        </tr>
                                        <table class="scalingtable">
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>

                                    </table>
                                <h1>Hold</h1>
                                <p>Charges energy to unleash an even stronger blow. He will obtain the Declension effect while charging, which will increase the power of the Heartstopper Strike. When the skill button is released or the skill finishes charging, he will strike forward, dealing Anemo DMG.</p>
                                <h1>Declension</h1>
                                <p>Increases the power of the next Heartstopper Strike. Max 4 stacks.</p>
                                <p>When you possess 4 Declension stacks, the Conviction effect will be produced, which will cause the next Heartstopper Strike to be even stronger and have a larger AoE.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Declension DMG Bonus</td>
                                            <td style="text-align:right;">96.7%/stack</td>
                                        </tr>
                                        <tr>
                                            <td>Conviction DMG Bonus</td>
                                            <td style="text-align:right;">193.4%</td>
                                        </tr>
                                        <tr>
                                            <td>Declension Duration</td>
                                            <td style="text-align:right;">60s</td>
                                        </tr>

                                    </table>

                                    <p><i>This seemingly ordinary strike contains Heizou's desire for criminals to honestly confess and repent.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Windmuster Kick</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Leaps into the air and uses the Fudou Style Vacuum Slugger and kicks his opponent. The Vacuum Slugger will explode upon hit and create an Arresting Windtunnel that pulls in nearby objects and opponents, dealing AoE Anemo DMG.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Fudou Style Vacuum Slugger DMG</td>
                                            <td style="text-align:right;">535%</td>
                                        </tr>

                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>
                                        <tr>
                                            <td>Energy Cost</td>
                                            <td style="text-align:right;">40</td>
                                        </tr>
                                </table>
                                <p>When Vacuum Slugger hits opponents affected by Hydro/Pyro/Cryo/Electro, these opponents will be afflicted with Windmuster Iris. This Windmuster Iris will explode after a moment and dissipate, dealing AoE DMG of the corresponding aforementioned elemental type.</p>
                                <p>Vacuum Slugger can afflict a maximum of 4 opponents with the Windmuster Iris. A single opponent cannot be under the effect of Windmuster Irises of different elements at the same time.</p>
                                <table class="scalingtable">

                                        <tr>
                                            <td>Windmuster Iris DMG</td>
                                            <td style="text-align:right;">36.5%</td>
                                        </tr>
                                </table>
                                    <p><i>A unique technique that gathers Anemo in one place before unleashing it all in one kick. Is always there in a pinch to land on some criminal's fleeing back.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Pre-Existing Guilt</h1>
                                <p>Decreases sprinting Stamina consumption for your own party members by 20%.</p>
                                <p>Not stackable with Passive Talents that provide the exact same effects.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Paradoxical Practice</h1>
                                <p>When Shikanoin Heizou activates a Swirl reaction while on the field, he will gain 1 Declension stack for Heartstopper Strike. This effect can be triggered once every 0.1s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Penetrative Reasoning</h1>
                                <p>After Shikanoin Heizou's Heartstopper Strike hits an opponent, increases all party members' (excluding Shikanoin Heizou) Elemental Mastery by 80 for 10s.</p>
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
                                    <h1>C1: Named Juvenile Casebook</h1>
                                    <p>For 5s after Shikanoin Heizou takes the field, his Normal Attack SPD is increased by 15%. He also gains 1 Declension stack for Heartstopper Strike. This effect can be triggered once every 10s.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Investigative Collection</h1>
                                    <p>The pull effect of the Arresting Windtunnel created by Windmuster Kick is enhanced, and its duration is increased to 1s.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Esoteric Puzzle Book</h1>
                                    <p>Increases the Level of Heartstopper Strike by 3.</p>
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
                                    <h1>C4: Tome of Lies</h1>
                                    <p>The first Windmuster Iris explosion in each Windmuster Kick will regenerate 9 Elemental Energy for Shikanoin Heizou. Every subsequent explosion in that Windmuster Kick will each regenerate an additional 1.5 Energy for Heizou.</p>
                                    <p>One Windmuster Kick can regenerate a total of 13.5 Energy for Heizou in this manner.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Secret Archive</h1>
                                    <p>Increases the Level of Windmuster Kick by 3.</p>
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
                                    <h1>C6: Curious Casefiles</h1>
                                    <p>Each Declension stack will increase the CRIT Rate of the Heartstopper Strike unleashed by 4%. When Heizou possesses Conviction, this Heartstopper Strike's CRIT DMG is increased by 32%.</p>
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
    $("#heizou-button").addClass("active");
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