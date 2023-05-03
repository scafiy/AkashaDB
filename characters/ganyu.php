<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Ganyu - Akasha</title>
    

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
    --highlighted-color:#DFF6FC ; 
    --topnav-color: #E9EDEE;
    --search-bar-precolour:#E9EDEE;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'ganyu' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #DFF6FC75, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Ganyu/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Ganyu</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Cryo" flow="up">
                                    <img class="icons" src="../images/icons/b_Cryo.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">The secretary at Yuehai Pavilion. The blood of the qilin, an illuminated beast, flows within her veins.
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
                            <td>Crit DMG</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>9797</td>
                            <td>335</td>
                            <td>630</td>
                            <td>88.4%</td>

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
                                    <p class="talent-card-title">Normal Attack: Liutian Archery</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 6 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">58.3%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">65.4%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">83.6%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">83.6%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">88.6%</td>
                                        </tr>
                                        <tr>
                                            <td>6-Hit DMG</td>
                                            <td style="text-align:right;">105.9%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, an icy aura will accumulate on the arrowhead before the arrow is fired. Has different effects based on how long the energy has been charged:</p>
                                    <li>Charge Level 1: Fires off an icy arrow that deals Cryo DMG.</li>
                                    <li>Charge Level 2: Fires off a Frostflake Arrow that deals Cryo DMG. The Frostflake Arrow blooms after hitting its target, dealing AoE Cryo DMG.</li>


                                    <table class="scalingtable">
                                        <tr>
                                            <td>Aimed Shot</td>
                                            <td style="text-align:right;">80.6%</td>
                                        </tr>
                                        <tr>
                                            <td>Aimed Shot Charge Level 1</td>
                                            <td style="text-align:right;">211%</td>
                                        </tr>
                                        <tr>
                                            <td>Frostflake Arrow DMG</td>
                                            <td style="text-align:right;">218%</td>
                                        </tr>
                                        <tr>
                                            <td>Frostflake Arrow Bloom DMG</td>
                                            <td style="text-align:right;">370%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Trail of the Qilin</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                                <p>Leaving a single Ice Lotus behind, Ganyu dashes backward, shunning all impurity and dealing AoE Cryo DMG.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Skill DMG</td>
                                        <td style="text-align:right;">224%</td>
                                    </tr>
                                    <tr>
                                        <td>Duration</td>
                                        <td style="text-align:right;">6s</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">10s</td>
                                    </tr>

                                </table>


                                <h1>Ice Lotus</h1>
                                <li>Continuously taunts surrounding opponents, attracting them to attack it.</li>
                                <li>Endurance scales based on Ganyu's Max HP.</li>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Inherited HP</td>
                                        <td style="text-align:right;">204%</td>
                                    </tr>
                                </table>
                                <li>Blooms profusely when destroyed or once its duration ends, dealing AoE Cryo DMG.</li>


                                    <p><i>"You saw me, you say? You must be mistaken. I was working overtime then."</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Celestial Shower</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Coalesces atmospheric frost and snow to summon a Sacred Cryo Pearl that exorcises evil.</p>
                                <p>During its ability duration, the Sacred Cryo Pearl will continuously rain down shards of ice, striking opponents within an AoE and dealing Cryo DMG.</p>

                                <table class="scalingtable">
                                        <tr>
                                            <td>Ice Shard DMG</td>
                                            <td style="text-align:right;">119%</td>
                                        </tr>
                                        <tr>
                                            <td>Waves</td>
                                            <td style="text-align:right;">10</td>
                                        </tr>
                                        <tr>
                                            <td>Ice Shards per Wave</td>
                                            <td style="text-align:right;">5</td>
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
                                    <p><i>Ganyu can bring down sweet rains as a matter of course. But against demons and heretics, they become bitter, freezing snow.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Preserved for the Hunt</h1>
                                <p>Refunds 15% of the ore used when crafting Bow-type weapons.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Undivided Heart</h1>
                                <p>After firing a Frostflake Arrow, the CRIT Rate of subsequent Frostflake Arrows and their resulting bloom effects is increased by 20% for 5s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Harmony Between Heaven and Earth</h1>
                                <p>Celestial Shower grants a 20% Cryo DMG Bonus to active party members in the AoE.</p>
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
                                    <h1>C1: Dew-Drinker</h1>
                                    <p>Charge Level 2 Frostflake Arrows or Frostflake Arrow Blooms decrease opponents' Cryo RES by 15% for 6s upon hit.</p>
                                    <p>A hit also regenerates 2 Energy for Ganyu. This effect can only occur once per Charge Level 2 Frostflake Arrow, regardless if Frostflake Arrow itself or its Bloom hits the target.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: The Auspicious</h1>
                                    <p>Trail of the Qilin gains 1 additional charge.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Cloud-Strider</h1>
                                    <p>Increases the Level of Celestial Shower by 3.</p>
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
                                    <h1>C4: Westward Sojourn</h1>
                                    <p>Opponents standing within the AoE of Celestial Shower take increased DMG. This effect strengthens over time.</p>
                                    <p>Increased DMG taken begins at 5% and increases by 5% every 3s, up to a maximum of 25%.</p>
                                    <p>The effect lingers for 3s after the opponent leaves the AoE.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: The Merciful</h1>
                                    <p>Increases the Level of Trail of the Qilin by 3.</p>
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
                                    <h1>C6: The Clement</h1>
                                    <p>Using Trail of the Qilin causes the next Frostflake Arrow shot within 30s to not require charging.</p>
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
    $("#ganyu-button").addClass("active");
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