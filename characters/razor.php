<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Razor - Akasha</title>
    

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
    --highlighted-color:#907CED ; 
    --topnav-color:#E3E1EB ;
    --search-bar-precolour:#E3E1EB;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'razor' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #907CED75, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Razor/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Razor</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Electro" flow="up">
                                    <img class="icons" src="../images/icons/b_Electro.png" >
                                </div>
                                <div tooltip="Claymore" flow="up">
                                    <img class="icons" src="../images/icons/b_Claymore.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_Mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A boy who lives among the wolves in Wolvendom of Mondstadt, away from human civilization. As agile as lightning.
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
                            <td>Physical DMG Bonus</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>11962</td>
                            <td>234</td>
                            <td>751</td>
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
                                    <p class="talent-card-title">Normal Attack: Steel Fang</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">161%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">139%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">174%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">229%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Drains Stamina over time to perform continuous spinning attacks against all nearby opponents.</p>
                                    <p>At the end of the sequence, performs a more powerful slash.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack Cyclic DMG</td>
                                            <td style="text-align:right;">115%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Final DMG</td>
                                            <td style="text-align:right;">208%</td>
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
                                            <td style="text-align:right;">150.7%</td>
                                        </tr>
                                        <tr>
                                            <td>Low/High Plunge DMG</td>
                                            <td style="text-align:right;">301%/376%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Claw and Thunder</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Hunts his prey using the techniques taught to him by his master and his lupical.</p>
                                <h1>Press</h1>
                                <p>Swings the Thunder Wolf Claw, dealing Electro DMG to opponents in front of Razor.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Press Skill DMG</td>
                                            <td style="text-align:right;">339%</td>
                                        </tr>
                                        <tr>
                                            <td>Press CD</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>

                                </table>
                                <p>Upon striking an opponent, Razor will gain an Electro Sigil, which increases his Energy Recharge rate.</p>
                                <p>Razor can have up to 3 Electro Sigils simultaneously, and gaining a new Electro Sigil refreshes their duration.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Energy Recharge Bonus</td>
                                            <td style="text-align:right;">20% per Electro Sigil</td>
                                        </tr>
                                        <tr>
                                            <td>Electro Sigil duration</td>
                                            <td style="text-align:right;">18s</td>
                                        </tr>

                                </table>

                                <h1>Hold</h1>
                                <p>Gathers Electro energy to unleash a lightning storm over a small AoE, causing massive Electro DMG, and clears all of Razor's Electro Sigils.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Hold Skill DMG</td>
                                            <td style="text-align:right;">502%</td>
                                        </tr>
                                        <tr>
                                            <td>Hold CD</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>


                                </table>
                                <p>Each Electro Sigil cleared in this manner will be converted into Energy for Razor.</p>

                                <table class="scalingtable">
                                        <tr>
                                            <td>Energy Regenerated</td>
                                            <td style="text-align:right;">5 per Electro Sigil Absorbed</td>
                                        </tr>


                                </table>



                                    
                                    <p><i>In the moment when lightning strikes, you can sometimes glimpse the look of a predator sizing up his prey deep within Razor's eyes.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Lightning Fang</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                                <p>Summons the Wolf Within, which deals Electro DMG to all nearby opponents. This clears all of Razor's Electro Sigils, which will be converted into Elemental Energy for him.</p>
                                <p>The Wolf Within will fight alongside Razor for the skill's duration.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Burst DMG</td>
                                            <td style="text-align:right;">272%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">15s</td>
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


                                    <h1>The Wolf Within</h1>
                                    <li>Strikes alongside Razor's normal attacks, dealing Electro DMG.</li>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Soul Companion DMG</td>
                                            <td style="text-align:right;">40.8% Normal Attack DMG</td>
                                        </tr>

                                    </table>
                                    <li>Raises Razor's ATK SPD and Electro RES.</li>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Normal ATK SPD Bonus</td>
                                            <td style="text-align:right;">39%</td>
                                        </tr>
                                        <tr>
                                            <td>Electro RES Bonus</td>
                                            <td style="text-align:right;">80%</td>
                                        </tr>
                                    </table>
                                    <li>Causes Razor to be immune to DMG inflicted by the Electro-Charged status.</li>
                                    <li>Disables Razor's Charged Attacks.</li>
                                    <li>Increases Razor's resistance to interruption.</li>
                                    <p>These effects end when Razor leaves the battlefield.</p>
                                    <p>When Razor leaves the field, a maximum of 10 Energy will be returned to him based off the duration remaining on this skill.</p>
                                    
                                    
                                    
                                    
                                    <p><i>The wolf has awoken. The hunt is on.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Wolvensprint</h1>
                                <p>Decreases sprinting Stamina consumption for your own party members by 20%.</p>
                                <p>Not stackable with Passive Talents that provide the exact same effects.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Awakening</h1>
                                <p>Decreases Claw and Thunder's CD by 18%.</p>
                                <p>Using Lightning Fang resets the CD of Claw and Thunder.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Hunger</h1>
                                <p>When Razor's Energy is below 50%, increases Energy Recharge by 30%.</p>
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
                                    <h1>C1: Wolf's Instinct</h1>
                                    <p>Picking up an Elemental Orb or Particle increases Razor's DMG by 10% for 8s.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Suppression</h1>
                                    <p>Increases CRIT Rate against opponents with less than 30% HP by 10%.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Soul Companion</h1>
                                    <p>Increases the Level of Lightning Fang by 3.</p>
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
                                    <h1>C4: Bite</h1>
                                    <p>When casting Claw and Thunder (Press), opponents hit will have their DEF decreased by 15% for 7s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Sharpened Claws</h1>
                                    <p>Increases the Level of Claw and Thunder by 3.</p>
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
                                    <h1>C6: Lupus Fulguris</h1>
                                    <p>Every 10s, Razor's sword charges up, causing the next Normal Attack to release lightning that deals 100% of Razor's ATK as Electro DMG.</p>
                                    <p>When Razor is not using Lightning Fang, a lightning strike on an opponent will grant Razor an Electro Sigil for Claw and Thunder.</p>
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
    $("#razor-button").addClass("active");
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
