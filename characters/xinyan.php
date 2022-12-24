<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Xinyan - Akasha</title>
    

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
    --highlighted-color: #B12521; 
    --topnav-color: #E8DBDB;
    --search-bar-precolour:#E8DBDB;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'xinyan' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #B1252175, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Xinyan/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Xinyan</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Pyro" flow="up">
                                    <img class="icons" src="../images/icons/b_Pyro.png" >
                                </div>
                                <div tooltip="Claymore" flow="up">
                                    <img class="icons" src="../images/icons/b_Claymore.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">Liyue's sole rock 'n' roll musician. She rebels against ossified prejudices using her music and passionate singing.
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
                            <td>11201</td>
                            <td>249</td>
                            <td>799</td>
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
                                    <p class="talent-card-title">Normal Attack: Dance on Fire</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">140.6%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">135.9%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">175.4%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">212.8%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Drains Stamina over time to perform continuous spinning attacks against all nearby opponents.</p>
                                    <p>At the end of the sequence, performs a more powerful slash.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack Cyclic DMG</td>
                                            <td style="text-align:right;"></td>
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
                                    <p class="talent-card-title">Elemental Skill: Sweeping Fervor</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Xinyan brandishes her instrument, dealing Pyro DMG on nearby opponents, forming a shield made out of her audience's passion.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Swing DMG</td>
                                            <td style="text-align:right;">288%</td>
                                        </tr>

                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">18s</td>
                                        </tr>
                                </table>
                                <p>The shield's DMG Absorption scales based on Xinyan's DEF and on the number of opponents hit.</p>
                                <li>Hitting 0-1 opponents grants Shield Level 1: Ad Lib.</li>
                                <li>Hitting 2 opponents grants Shield Level 2: Lead-In.</li>
                                <li>Hitting 3 or more opponents grants Shield Level 3: Rave, which will also deal intermittent Pyro DMG to nearby opponents.</li>
                                

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Shield Level 1 DMG Absorption</td>
                                            <td style="text-align:right;">176.9% DEF+1017</td>
                                        </tr>

                                        <tr>
                                            <td>Shield Level 2 DMG Absorption</td>
                                            <td style="text-align:right;">208.1% DEF+1197</td>
                                        </tr>
                                        <tr>
                                            <td>Shield Level 3 DMG Absorption</td>
                                            <td style="text-align:right;">244.8% DEF+1408</td>
                                        </tr>
                                        <tr>
                                            <td>DoT</td>
                                            <td style="text-align:right;">57.1%</td>
                                        </tr>
                                        <tr>
                                            <td>Dot Instances</td>
                                            <td style="text-align:right;">6</td>
                                        </tr>
                                        <tr>
                                            <td>Shield Duration</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>

                                    </table>
                                    <p>The shield has the following special properties:</p>
                                    <li>When unleashed, it infuses Xinyan with Pyro.</li>
                                    <li>It has 250% DMG Absorption effectiveness against Pyro DMG.</li>


                                    <p><i>Xinyan insists that these pyrotechnics are the apex of performative art, and that they are physical phenomena that have nothing to do with her Vision.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Riff Revolution</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Strumming rapidly, Xinyan launches nearby opponents and deals Physical DMG to them, hyping up the crowd.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">579%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">2s</td>
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
                                <p>The sheer intensity of the atmosphere will cause explosions that deal Pyro DMG to nearby opponents.</p>
                                <table class="scalingtable">

                                        <tr>
                                            <td>Pyro DoT</td>
                                            <td style="text-align:right;">68%</td>
                                        </tr>
                                        <tr>
                                            <td>Pyro DoT Instances</td>
                                            <td style="text-align:right;">7</td>
                                        </tr>


                                    </table>
                                <p><i>Xinyan used to end all her performances with this move. She didn't stop because it was dangerous, however, but because she didn't have a more epic finale in case someone shouted "Encore!"</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>A Rad Recipe</h1>
                                <p>When a Perfect Cooking is achieved on a DEF-boosting dish, Xinyan has a 12% chance to obtain double the product.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>"The Show Goes On, Even Without an Audience..."</h1>
                                <p>Decreases the number of opponents Sweeping Fervor must hit to trigger each level of shielding.</p>
                                <li>Shield Level 2: Lead-In requirement reduced to 1 opponent hit.</li>
                                <li>Shield Level 3: Rave requirement reduced to 2 opponents hit or more.</li>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>"...Now That's Rock 'N' Roll!"</h1>
                                <p>Characters shielded by Sweeping Fervor deal 15% increased Physical DMG.</p>
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
                                    <h1>C1: Fatal Acceleration</h1>
                                    <p>Upon scoring a CRIT Hit, increases ATK SPD of Xinyan's Normal and Charged Attacks by 12% for 5s.</p>
                                    <p>Can only occur once every 5s.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Impromptu Opening</h1>
                                    <p>Riff Revolution's Physical DMG has its CRIT Rate increased by 100%, and will form a shield at Shield Level 3: Rave when cast.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Double-Stop</h1>
                                    <p>Increases the Level of Sweeping Fervor by 3.</p>
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
                                    <h1>C4: Wildfire Rhythm</h1>
                                    <p>Sweeping Fervor's swing DMG decreases opponent's Physical RES by 15% for 12s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Screamin' for an Encore</h1>
                                    <p>Increases the Level of Riff Revolution by 3.</p>
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
                                    <h1>C6: Rockin' in a Flaming World</h1>
                                    <p>Decreases the Stamina Consumption of Xinyan's Charged Attacks by 30%. Additionally, Xinyan's Charged Attacks gain an ATK Bonus equal to 50% of her DEF.</p>
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
    $("#xinyan-button").addClass("active");
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

