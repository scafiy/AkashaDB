<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Tartaglia - Akasha</title>
    

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
    --highlighted-color:#C2C0C6 ; 
    --topnav-color: #E7E7E8;
    --search-bar-precolour:#E7E7E8;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'tartaglia' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #C2C0C675, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Tartaglia/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Tartaglia</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Hydro" flow="up">
                                    <img class="icons" src="../images/icons/b_Hydro.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">No. 11 of The Harbingers, also known as “Childe.” His name is highly feared onthe battlefield.
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
                            <td>Hydro DMG Bonus</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>13103</td>
                            <td>301</td>
                            <td>815</td>
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
                                    <p class="talent-card-title">Normal Attack: Cutting Torrent</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 6 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">75.8%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">85%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">101.8%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">104.8%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">111.9%</td>
                                        </tr>
                                        <tr>
                                            <td>6-Hit DMG</td>
                                            <td style="text-align:right;">133.7%</td>
                                        </tr>
                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, the power of Hydro will accumulate on the arrowhead. An arrow fully charged with the torrent will deal Hydro DMG and apply the Riptide status.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Aimed Shot</td>
                                            <td style="text-align:right;">80.6%</td>
                                        </tr>
                                        <tr>
                                            <td>Fully-Charged Aimed Shot</td>
                                            <td style="text-align:right;">211%</td>
                                        </tr>


                                    </table>

                                    <h1>Riptide</h1>
                                    <p>Opponents affected by Riptide will suffer from AoE Hydro DMG effects when attacked by Tartaglia in various ways. DMG dealt in this way is considered Normal Attack DMG.</p>
                                    <li>Riptide Flash: A fully-charged Aimed Shot that hits an opponent affected by Riptide deals consecutive bouts of AoE DMG. Can occur once every 0.7s.</li>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Riptide Flash DMG</td>
                                            <td style="text-align:right;">21.1%x3</td>
                                        </tr>
                                    </table>

                                    <li>Riptide Burst: Defeating an opponent affected by Riptide creates a Hydro burst that inflicts the Riptide status on nearby opponents hit.</li>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Riptide Burst DMG</td>
                                            <td style="text-align:right;">105.4%</td>
                                        </tr>
                                    </table>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Riptide Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Fires off a shower of arrows in mid-air before falling and striking the ground, dealing AoE DMG upon impact.</p>
                                    <p>When Tartaglia is in Foul Legacy: Raging Tide's Melee Stance, he cannot perform a plunging attack.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Foul Legacy: Raging Tide</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Unleashes a set of weaponry made of pure water, dealing Hydro DMG to surrounding opponents and entering Melee Stance.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Stance Change DMG</td>
                                            <td style="text-align:right;">122%</td>
                                        </tr>

                                </table>
                                <p>In this Stance, Tartaglia's Normal and Charged Attacks are converted to Hydro DMG that cannot be overridden by any other elemental infusion and change as follows:</p>
                                
                                <h1>Normal Attack</h1>
                                <p>Performs up to 6 consecutive Hydro strikes.</p>
                                
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">71.4%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">76.5%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">103.5%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">110.1%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">101.6%</td>
                                        </tr>
                                        <tr>
                                            <td>6-Hit DMG</td>
                                            <td style="text-align:right;">65.1%+69.2%</td>
                                        </tr>

                                </table>

                                <h1>Charged Attack</h1>
                                <p>Consumes a certain amount of Stamina to unleash a cross slash, dealing Hydro DMG.</p>

                                <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">110.6%+132.2%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">20</td>
                                        </tr>

                                </table>
                            
                                <h1>Riptide Slash</h1>
                                <p>Hitting an opponent affected by Riptide with a melee attack unleashes a Riptide Slash that deals AoE Hydro DMG. DMG dealt in this way is considered Elemental Skill DMG, and can only occur once every 1.5s.</p>

                                <table class="scalingtable">
                                        <tr>
                                            <td>Riptide Slash</td>
                                            <td style="text-align:right;">111%</td>
                                        </tr>

                                </table>

                                <p>After 30s, or when the ability is unleashed again, this skill will end. Tartaglia will return to his Ranged Stance and this ability will enter CD. The longer Tartaglia stays in his Melee Stance, the longer the CD.</p>
                                <p>If the return to a ranged stance occurs automatically after 30s, the CD is even longer.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Max Duration</td>
                                            <td style="text-align:right;">30s</td>
                                        </tr>
                                        <tr>
                                            <td>Preemptive CD</td>
                                            <td style="text-align:right;">6-36s</td>
                                        </tr>
                                        <tr>
                                            <td>Max CD</td>
                                            <td style="text-align:right;">45s</td>
                                        </tr>


                                </table>


                                    <p><i>He chose the bow as his weapon precisely to overcome his weakness with it. But a serious fight demands that he gets serious...</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Havoc: Obliteration</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Performs different attacks based on what stance Tartaglia is in when casting.</p>
                                <h1>Ranged Stance: Flash of Havoc</h1>
                                <p>Swiftly fires a Hydro-imbued magic arrow, dealing AoE Hydro DMG and applying the Riptide status.</p>
                                <p>Returns a portion of its Energy Cost after use.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG: Ranged</td>
                                            <td style="text-align:right;">643%</td>
                                        </tr>
                                        <tr>
                                            <td>Energy Return</td>
                                            <td style="text-align:right;">20</td>
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

                                    <h1>Melee Stance: Light of Obliteration</h1>
                                    <p>Performs a slash with a large AoE, dealing massive Hydro DMG to all surrounding opponents, which triggers Riptide Blast.</p>


                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG: Melee</td>
                                            <td style="text-align:right;">789%</td>
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

                                    <h1>Riptide Blast</h1>
                                    <p>When the obliterating waters hit an opponent affected by Riptide, it clears their Riptide status and triggers a Hydro Explosion that deals AoE Hydro DMG.</p>
                                    <p>DMG dealt in this way is considered Elemental Burst DMG.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Riptide Blast DMG</td>
                                            <td style="text-align:right;">204%</td>
                                        </tr>

                                    </table>


                                    <p><i>Rushing waters are rarely seen in his snowy homeland. Perhaps his ability to command water is due to his understanding of just how precious it is.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Master of Weaponry</h1>
                                <p>Increases your own party members' Normal Attack Level by 1.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Never Ending</h1>
                                <p>Extends Riptide duration by 8s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Sword of Torrents</h1>
                                <p>When Tartaglia is in Foul Legacy: Raging Tide's Melee Stance, on dealing a CRIT hit, Normal and Charged Attacks apply the Riptide status effect to opponents.</p>
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
                                    <h1>C1: Foul Legacy: Tide Withholder</h1>
                                    <p>Decreases the CD of Foul Legacy: Raging Tide by 20%</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Foul Legacy: Understream</h1>
                                    <p>When opponents affected by Riptide are defeated, Tartaglia regenerates 4 Elemental Energy.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Abyssal Mayhem: Vortex of Turmoil</h1>
                                    <p>Increases the Level of Foul Legacy: Raging Tide by 3.</p>
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
                                    <h1>C4: Abyssal Mayhem: Hydrospout</h1>
                                    <p>If Tartaglia is in Foul Legacy: Raging Tide's Melee Stance, triggers Riptide Slash against opponents on the field affected by Riptide every 4s, otherwise, triggers Riptide Flash.</p>
                                    <p>Riptide Slashes and Riptide Flashes triggered by this Constellation effect are not subject to the time intervals that would typically apply to these two Riptide effects, nor do they have any effect on those time intervals.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Havoc: Formless Blade</h1>
                                    <p>Increases the Level of Havoc: Obliteration by 3.</p>
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
                                    <h1>C6: Havoc: Annihilation</h1>
                                    <p>When Havoc: Obliteration is cast in Melee Stance, the CD of Foul Legacy: Raging Tide is reset.</p>
                                    <p>This effect will only take place once Tartaglia returns to his Ranged Stance.</p>
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
    $("#tartaglia-button").addClass("active");
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
