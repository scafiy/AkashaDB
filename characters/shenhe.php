<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Shenhe - Akasha</title>
    

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
    --highlighted-color: #BEE1F2; 
    --topnav-color: #E9ECEE;
    --search-bar-precolour:#E9ECEE;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'shenhe' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #BEE1F275, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Shenhe/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Shenhe</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Cryo" flow="up">
                                    <img class="icons" src="../images/icons/b_Cryo.png" >
                                </div>
                                <div tooltip="Polearm" flow="up">
                                    <img class="icons" src="../images/icons/b_Polearm.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">An adepti disciple with a most unusual air about her. Having spent much time cultivating in isolation in Liyue's mountains, she has become every bit as cool and distant as the adepti themselves.
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
                            <td>12993</td>
                            <td>304</td>
                            <td>830</td>
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
                                    <p class="talent-card-title">Normal Attack: Dawnstar Piercer</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 consecutive spear strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">79.5%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">73.9%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">98%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">48.3%+48.3%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">120.6%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to lunge forward, dealing damage to opponents along the way.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">203.3%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Spring Spirit Summoning</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>The frosted dew, silvery and dense, shall exorcise all demons.</p>
                                <p>Grants all nearby party members the Icy Quill effect and deals Cryo DMG in different ways based on whether it is pressed or held.</p>
                                <h1>Press</h1>
                                <p>Rushes forward together with a Talisman Spirit, dealing Cryo DMG to opponents along the path.</p>


                                    <table class="scalingtable">
                                        <tr>
                                            <td>Press Skill DMG</td>
                                            <td style="text-align:right;">237%</td>
                                        </tr>
                                        <tr>
                                            <td>Press CD</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>


                                    </table>
                                <h1>Hold</h1>
                                <p>Commands the Talisman Spirit to deal AoE Cryo DMG.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Hold Skill DMG</td>
                                            <td style="text-align:right;">321%</td>
                                        </tr>
                                        <tr>
                                            <td>Hold CD</td>
                                            <td style="text-align:right;">15s</td>
                                        </tr>
                                    </table>
                                <h1>Icy Quill</h1>
                                <p>When Normal, Charged, and Plunging Attacks, Elemental Skills, and Elemental Bursts deal Cryo DMG to opponents, the DMG dealt is increased based on Shenhe's current ATK.</p>
                                <p>The Icy Quill's effects will be cleared once its duration ends or after being triggered a certain number of times. When held rather than pressed, the Icy Quill's effect lasts longer and can be triggered more times.</p>
                                <p>When one Cryo DMG instance strikes multiple opponents, the effect is triggered multiple times based on the number of opponents hit. The number of times the effect is triggered is calculated independently for each party member with the Icy Quill.</p> 
                                    <table class="scalingtable">
                                        <tr>
                                            <td>DMG Bonus</td>
                                            <td style="text-align:right;">77.6% ATK</td>
                                        </tr>
                                        <tr>
                                            <td>Press/Hold Duration</td>
                                            <td style="text-align:right;">10s/15s</td>
                                        </tr>
                                        <tr>
                                            <td>Press/Hold Trigger Quota</td>
                                            <td style="text-align:right;">5/7</td>
                                        </tr>
                                    </table>


                                    <p><i>The power of the spirits is no falsehood. Burdened with her orders, the divine maiden hurries on!</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Divine Maiden's Deliverance</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="">Unleashes the power of the Talisman Spirit, allowing it to roam free in this plane, dealing AoE Cryo DMG.</p>
                                <p>The Talisman Spirit then creates a field that decreases the Cryo RES and Physical RES of opponents within it. It also deals periodic Cryo DMG to opponents within the field.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">171%</td>
                                        </tr>
                                        <tr>
                                            <td>RES Decrease</td>
                                            <td style="text-align:right;">14%</td>
                                        </tr>
                                        <tr>
                                            <td>DoT</td>
                                            <td style="text-align:right;">56.3%</td>
                                        </tr>
                                        <tr>
                                            <td>Dot Instances</td>
                                            <td style="text-align:right;">12</td>
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
                                    <p><i>The way of the adepti is not defined only by the mysterious and fantastical. Only by observing the changes in the heavens and the earth, and understanding the laws of cause and effect in this realm, may its essence be understood.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Precise Comings and Goings</h1>
                                <p>Gains 25% more rewards when dispatched on a Liyue Expedition for 20 hours.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Deific Embrace</h1>
                                <p>An active character within the field created by Divine Maiden's Deliverance gains 15% Cryo DMG Bonus.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Spirit Communion Seal</h1>
                                <p>After Shenhe uses Spring Spirit Summoning, she will grant all nearby party members the following effects:</p>
                                <li>Press: Elemental Skill and Elemental Burst DMG increased by 15% for 10s.</li>
                                <li>Hold: Normal, Charged, and Plunging Attack DMG increased by 15% for 15s.</li>
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
                                    <h1>C1: Clarity of Heart</h1>
                                    <p>Spring Spirit Summoning can be used 1 more time.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Centered Spirit</h1>
                                    <p>Divine Maiden's Deliverance lasts for 6 seconds longer. Active characters within the skill's field deal 15% increased Cryo CRIT DMG.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Seclusion</h1>
                                    <p>Increases the Level of Spring Spirit Summoning by 3.</p>
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
                                    <h1>C4: Insight</h1>
                                    <p>When characters under the effect of Icy Quill applied by Shenhe trigger its DMG Bonus effects, Shenhe will gain a Skyfrost Mantra stack:</p>
                                    <li>When Shenhe uses Spring Spirit Summoning, she will consume all stacks of Skyfrost Mantra, increasing the DMG of that Spring Spirit Summoning by 5% for each stack consumed.</li>
                                    <li>Max 50 stacks. Stacks last for 60s.</li>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Divine Attainment</h1>
                                    <p>Increases the Level of Divine Maiden's Deliverance by 3.</p>
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
                                    <h1>C6: Mystical Abandon</h1>
                                    <p>When characters trigger Icy Quill's effects using Normal and Charged Attack DMG, it does not count toward the Trigger Quota.</p>
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
    $("#shenhe-button").addClass("active");
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