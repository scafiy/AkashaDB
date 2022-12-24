<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Dori - Akasha</title>
    

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
    margin-right:50px;
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-right:-15px;
    }
}

:root {
    --highlighted-color:#EAA7E3 ; 
    --topnav-color: #EBE5EA;
    --search-bar-precolour:#EBE5EA;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'dori' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #EAA7E375, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Dori/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Dori</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Electro" flow="up">
                                    <img class="icons" src="../images/icons/b_Electro.png" >
                                </div>
                                <div tooltip="Claymore" flow="up">
                                    <img class="icons" src="../images/icons/b_Claymore.png" alt="">
                                </div>
                                <div tooltip="Sumeru" flow="up">
                                    <img class="icons" src="../images/icons/b_Sumeru.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">An elusive merchant who has a fondness for glittering Mora.</p>
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
                            <td>12397</td>
                            <td>223</td>
                            <td>723</td>
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
                                    <p class="talent-card-title">Normal Attack: Marvelous Sword-Dance (Modified)</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 3 consecutive strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">165.7%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">75.5%+79.2%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">75.5%+79.2%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Drains Stamina over time to perform continuous spinning attacks against all nearby opponents.</p>
                                    <p>At the end of the sequence, performs a more powerful slash.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td></td>
                                            <td style="text-align:right;">114.9%</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="text-align:right;">208%</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="text-align:right;">40/s</td>
                                        </tr>
                                        <tr>
                                            <td></td>
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
                                    <p class="talent-card-title">Elemental Skill: Spirit-Warding Lamp: Troubleshooter Cannon</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="talent-card-text"></p>  
                                    <p>Directs a Spirit-Warding Lamp to fire off a Troubleshooter Shot at opponents, dealing Electro DMG.</p>                          
                                    <p>After the Troubleshooter Shot hits, it will create 2 After-Sales Service Rounds that will automatically track nearby opponents and deal Electro DMG.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Troubleshooter Shot DMG</td>
                                            <td style="text-align:right;">250.4%</td>
                                        </tr>
                                        <tr>
                                            <td>After-Sales Service Round DMG</td>
                                            <td style="text-align:right;">53.7%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">9s</td>
                                        </tr>
                                    </table>
                                    <p><i>It is said that Dori can fix any problem for you... for the right price.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Alcazarzaray's Exactitude</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Summons forth the Jinni within the lamp to give the client various kinds of aid.</p>
                                <h1>Jinni</h1>
                                <p>Connects to a nearby character. The connected character will:</p>
                                <li>Continuously restore HP based on Dori's Max HP.</li>
                                <li>Continuously regenerate Energy.</li>
                                <li>Be affected by Electro.</li>
                                <p>When the connector between the Jinni and the character touches opponents, it will deal one instance of Electro DMG to them every 0.4s.</p>
                                <p class="">Only one Jinni can exist at one time.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Connector DMG</td>
                                            <td style="text-align:right;">27%</td>
                                        </tr>
                                        <tr>
                                            <td>Continuous Healing</td>
                                            <td style="text-align:right;">11.3% Max HP+1305</td>
                                        </tr>
                                        <tr>
                                            <td>Energy Regeneration</td>
                                            <td style="text-align:right;">2.4</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">12s</td>
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
                                    <p><i>"Hmm? You'll pick this lamp, will you? Oh my, you've got good taste! Unfortunately, there's no price on this treasure — comparable, I'd say, to how you will not sell that mascot by your side for any price in the world."</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Unexpected Order</h1>
                                <p>Has a 25% chance to recover some of the materials used when crafting Character and Weapon Materials.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>An Eye for Gold</h1>
                                <p>After a character connected to the Jinni triggers an Electro-Charged, Superconduct, Overloaded, Quicken, Aggravate, Hyperbloom, or an Electro Swirl or Crystallize reaction, the CD of Spirit-Warding Lamp: Troubleshooter Cannon is decreased by 1s.</p>
                                <p>This effect can be triggered once every 3s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Compound Interest</h1>
                                <p>When the Troubleshooter Shots or After-Sales Service Rounds from Spirit-Warding Lamp: Troubleshooter Cannon hit opponents, Dori will restore 5 Elemental Energy for every 100% Energy Recharge possessed.</p>
                                <p>Per Spirit-Warding Lamp: Troubleshooter Cannon, only one instance of Energy restoration can be triggered and a maximum of 15 Energy can be restored this way.</p>
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
                                    <h1>C1: Additional Investment</h1>
                                    <p>The number of After-Sales Service Rounds created by Troubleshooter Shots is increased by 1.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Special Franchise</h1>
                                    <p>When you are in combat and the Jinni heals the character it is connected to, it will fire a Jinni Toop from that character's position that deals 50% of Dori's ATK DMG.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Wonders Never Cease</h1>
                                    <p>Increases the Level of Alcazarzaray's Exactitude by 3.</p>
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
                                    <h1>C4: Discretionary Supplement</h1>
                                    <p>The character connected to the Jinni will obtain the following buffs based on their current HP and Energy:</p>
                                    <li>When their HP is lower than 50%, they gain 50% Incoming Healing Bonus.</li>
                                    <li>When their Energy is less than 50%, they gain 30% Energy Recharge.</li>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Value for Mora</h1>
                                    <p>Increases the Level of Spirit-Warding Lamp: Troubleshooter Cannon by 3.</p>
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
                                    <h1>C6: Sprinkling Weight</h1>
                                    <p>Dori gains the following effects for 3s after using Spirit-Warding Lamp: Troubleshooter Cannon:</p>
                                    <li>Electro Infusion.</li>
                                    <li>When Normal Attacks hit opponents, all nearby party members will heal HP equivalent to 4% of Dori's Max HP. This type of healing can occur once every 0.1s.</li>
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
    $("#dori-button").addClass("active");
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


</div>   

                        
<?php
    }
?>