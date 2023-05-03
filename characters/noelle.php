<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Noelle - Akasha</title>
    

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
    --highlighted-color:#F3D996 ; 
    --topnav-color: #EEEBE6;
    --search-bar-precolour:#EEEBE6;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'noelle' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #F3D99675, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Noelle/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Noelle</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Geo" flow="up">
                                    <img class="icons" src="../images/icons/b_Geo.png" >
                                </div>
                                <div tooltip="Claymore" flow="up">
                                    <img class="icons" src="../images/icons/b_Claymore.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_Mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A maid who faithfully serves the Knights of Favonius. She dreams of joining their ranks someday.
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
                            <td>12071</td>
                            <td>191</td>
                            <td>799</td>
                            <td>30.0%</td>

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
                                    <p class="talent-card-title">Normal Attack: Favonius Bladework - Maid</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">145%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">135%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">158%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">208%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;"></td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Drains Stamina over time to perform continuous spinning attacks against all nearby opponents.</p>
                                    <p>At the end of the sequence, performs a more powerful slash.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack Cyclic DMG</td>
                                            <td style="text-align:right;">93.2%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Final DMG</td>
                                            <td style="text-align:right;">166%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">40/s</td>
                                        </tr>
                                        <tr>
                                            <td>Max Duration</td>
                                            <td style="text-align:right;">5s</td>
                                        </tr>



                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Plunges from mid-air to strike the ground below, damaging opponents along the path and dealing AoE DMG upon impact.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Collision Plunge DMG</td>
                                            <td style="text-align:right;">137%</td>
                                        </tr>
                                        <tr>
                                            <td>Low/High Plunge DMG</td>
                                            <td style="text-align:right;">274%/342%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Breastplate</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Summons protective stone armor, dealing Geo DMG to surrounding opponents and creating a shield. The shield's DMG Absorption scales based on Noelle's DEF.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">204% DEF</td>
                                        </tr>
                                        <tr>
                                            <td>DMG Absorption</td>
                                            <td style="text-align:right;">272% DEF+1565</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">24s</td>
                                        </tr>
                                    </table>
                                    <p>The shield has the following properties:</p>
                                    <li>When Noelle's Normal and Charged Attacks hit a target, they have a certain chance to regenerate HP for all characters.</li>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Healing</td>
                                            <td style="text-align:right;">36.2% DEF+208</td>
                                        </tr>
                                        <tr>
                                            <td>Healing Triggering Chance</td>
                                            <td style="text-align:right;">58%</td>
                                        </tr>
                                    </table>
                                    <li>Possesses 150% DMG Absorption efficiency against all Elemental and Physical DMG.</li>

                                    <p>The amount of HP healed when regeneration is triggered scales based on Noelle's DEF.</p>
                                    <p><i>Noelle is both a dutiful maid and a valiant knight.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Sweeping Time</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Gathering the strength of stone around her weapon, Noelle strikes the opponents surrounding her within a large AoE, dealing Geo DMG.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Burst DMG</td>
                                            <td style="text-align:right;">114%</td>
                                        </tr>
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">158%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">15s</td>
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
                                    <p>Afterwards, Noelle gains the following effects:</p>
                                    <li>Larger attack AoE.</li>
                                    <li>Converts attack DMG to Geo DMG that cannot be overridden by any other elemental infusion.</li>


                                    <li>Increased ATK that scales based on her DEF.</li>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>ATK Bonus</td>
                                            <td style="text-align:right;">68% DEF</td>
                                        </tr>

                                    </table>


                                    <p><i>Sometimes, it's not just dust that needs sweeping...</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Maid's Knighthood</h1>
                                <p>When a Perfect Cooking is achieved on a DEF-boosting dish, Noelle has a 12% chance to obtain double the product.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Devotion</h1>
                                <p>When Noelle is in the party but not on the field, this ability triggers automatically when your active character's HP falls below 30%:</p>
                                <p>Creates a shield for your active character that lasts for 20s and absorbs DMG equal to 400% of Noelle's DEF.</p>
                                <p>The shield has a 150% DMG Absorption effectiveness against all Elemental and Physical DMG.</p>
                                <p>This effect can only occur once every 60s.</p>

                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Nice and Clean</h1>
                                <p>Noelle will decrease the CD of Breastplate by 1s for every 4 Normal or Charged Attack hits she scores on opponents.</p>
                                <p>One hit may be counted every 0.1s.</p>
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
                                    <h1>C1: I Got Your Back</h1>
                                    <p>While Sweeping Time and Breastplate are both in effect, the chance of Breastplate's healing effects activating is increased to 100%.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Combat Maid</h1>
                                    <p>Decreases the Stamina Consumption of Noelle's Charged Attacks by 20% and increases her Charged Attack DMG by 15%.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Invulnerable Maid</h1>
                                    <p>Increases the Level of Breastplate by 3.</p>
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
                                    <h1>C4: To Be Cleaned</h1>
                                    <p>When Breastplate's duration expires or it is destroyed by DMG, it will deal 400% ATK of Geo DMG to surrounding opponents.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Favonius Sweeper Master</h1>
                                    <p>Increases the Level of Sweeping Time by 3.</p>
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
                                    <h1>C6: Must Be Spotless</h1>
                                    <p>Sweeping Time increases Noelle's ATK by an additional 50% of her DEF.</p>
                                    <p>Additionally, every opponent defeated during the skill's duration adds 1s to the duration, up to 10s.</p>
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
    $("#noelle-button").addClass("active");
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

</body>

<?php
    }
?>
