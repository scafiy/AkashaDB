<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Venti - Akasha</title>
    

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
    --highlighted-color:#6AD6B8 ; 
    --topnav-color:#DFE9E6 ;
    --search-bar-precolour:#DFE9E6;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'venti' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #6ad6b736, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Venti/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Venti</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Anemo" flow="up">
                                    <img class="icons" src="../images/icons/b_Anemo.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_Mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">One of the many bards of Mondstadt, who freely wanders the city's streets and alleys.
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
                            <td>Energy Recharge</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>10531</td>
                            <td>263</td>
                            <td>669</td>
                            <td>32.0%</td>

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
                                    <p class="talent-card-title">Normal Attack: Divine Marksmanship</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 6 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">37.4%+37.4%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">81.5%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">96.2%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">47.9%+47.9%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">93.1%</td>
                                        </tr>
                                        <tr>
                                            <td>6-Hit DMG</td>
                                            <td style="text-align:right;">130%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, favorable winds will accumulate on the arrowhead. A fully charged wind arrow will deal Anemo DMG.</p>
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

                                    <h1>Plunging Attack</h1>
                                    <p>Fires off a shower of arrows in mid-air before falling and striking the ground, dealing AoE DMG upon impact.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Skyward Sonnet</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>O wind upon which all hymns and songs fly, bear these earth-walkers up into the sky!</p>
                                <h1>Press</h1>
                                <p>Summons a Wind Domain at the opponent's location, dealing AoE Anemo DMG and launching opponents into the air.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Press DMG</td>
                                            <td style="text-align:right;">469%</td>
                                        </tr>
                                        <tr>
                                            <td>Press CD</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>
    
    
                                    </table>

                                <h1>Hold</h1>
                                <p>Summons an even larger Wind Domain with Venti as the epicenter, dealing AoE Anemo DMG and launching affected opponents into the air.</p>
                                <p>After unleashing the Hold version of this ability, Venti rides the wind into the air.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Hold DMG</td>
                                            <td style="text-align:right;">646%</td>
                                        </tr>
                                        <tr>
                                            <td>Hold CD</td>
                                            <td style="text-align:right;">15s</td>
                                        </tr>
    
    
                                    </table>

                                <p>Opponents hit by Skyward Sonnet will fall to the ground slowly.</p>



                                    <p><i>In the days when gods and men walked the earth together, the heavens were filled with countless songs. This melody has long since been forgotten.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Wind's Grand Ode</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Fires off an arrow made of countless coalesced winds, creating a huge Stormeye that sucks in opponents and deals continuous Anemo DMG.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>DoT</td>
                                            <td style="text-align:right;">63.9%</td>
                                        </tr>
                                        <tr>
                                            <td>DoT Instances</td>
                                            <td style="text-align:right;">20</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">8s</td>
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
                                <p>If the Stormeye comes into contact with Hydro/Pyro/Cryo/Electro, it will deal additional elemental DMG of that type.</p>
                                <p>Elemental Absorption may only occur once per use.</p>

                                <table class="scalingtable">
                                        <tr>
                                            <td>Additional Elemental DMG</td>
                                            <td style="text-align:right;">32%</td>
                                        </tr>
                                        <tr>
                                            <td>Additional Elemental DMG Instances</td>
                                            <td style="text-align:right;">15</td>
                                        </tr>


                                </table>
                                <p>Absorption priority: Pyro > Hydro > Electro > Cryo</p>


                                    <p><i>Many hymns written in praise of the Anemo Archon have been lost to time. This one sings of his mastery over the wind.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Windrider</h1>
                                <p>Decreases gliding Stamina consumption for your own party members by 20%.</p>
                                <p>Not stackable with Passive Talents that provide the exact same effects.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Embrace of Winds</h1>
                                <p>Holding Skyward Sonnet creates an upcurrent that lasts for 20s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Stormeye</h1>
                                <p>Regenerates 15 Energy for Venti after the effects of Wind's Grand Ode end.</p>
                                <p>If an Elemental Absorption occurred, this also restores 15 Energy to all characters of that corresponding element in the party.</p>

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
                                    <h1>C1: Splitting Gales</h1>
                                    <p>Fires 2 additional arrows per Aimed Shot, each dealing 33% of the original arrow's DMG.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Breeze of Reminiscence</h1>
                                    <p>Skyward Sonnet decreases opponents' Anemo RES and Physical RES by 12% for 10s.</p>
                                    <p>Opponents launched by Skyward Sonnet suffer an additional 12% Anemo RES and Physical RES decrease while airborne.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Ode to Thousand Winds</h1>
                                    <p>Increases the Level of Wind's Grand Ode by 3.</p>
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
                                    <h1>C4: Hurricane of Freedom</h1>
                                    <p>When Venti picks up an Elemental Orb or Particle, he receives a 25% Anemo DMG Bonus for 10s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Concerto dal Cielo</h1>
                                    <p>Increases the Level of Skyward Sonnet by 3.</p>
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
                                    <h1>C6: Storm of Defiance</h1>
                                    <p>Targets who take DMG from Wind's Grand Ode have their Anemo RES decreased by 20%.</p>
                                    <p>If an Elemental Absorption occurred, then their RES towards the corresponding Element is also decreased by 20%.</p>
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
    $("#venti-button").addClass("active");
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
