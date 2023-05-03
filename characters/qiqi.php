<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Qiqi - Akasha</title>
    

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
    --highlighted-color: #A193D2; 
    --topnav-color:#E6E5EB ;
    --search-bar-precolour:#E6E5EB;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'qiqi' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #A193D275, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Qiqi/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Qiqi</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Cryo" flow="up">
                                    <img class="icons" src="../images/icons/b_Cryo.png" >
                                </div>
                                <div tooltip="Sword" flow="up">
                                    <img class="icons" src="../images/icons/b_Sword.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">An apprentice and herb gatherer at Bubu Pharmacy. An undead with a bone-white complexion, she seldom has much in the way of words or emotion.
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
                            <td>Healing Bonus</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>12368</td>
                            <td>287</td>
                            <td>922</td>
                            <td>22.1%</td>

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
                                    <p class="talent-card-title">Normal Attack: Ancient Sword Art</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 rapid strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">69.4%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">71.4%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">44.4%+44.4%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">45.3%+45.3%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">116%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to unleash 2 rapid sword strikes.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">118%+118%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">20</td>
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
                                    <p class="talent-card-title">Elemental Skill: Adeptus Art: Herald of Frost</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Using the Icevein Talisman, Qiqi brings forth the Herald of Frost, dealing Cryo DMG to surrounding opponents.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">163%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">15s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">30s</td>
                                        </tr>

                                    </table>

                                    <h1>Herald of Frost</h1>
                                    <li>On hit, Qiqi's Normal and Charged Attacks regenerate HP for your own party members and nearby teammates. Healing scales based on Qiqi's ATK.</li>

                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Regeneration on Hit</td>
                                            <td style="text-align:right;">17.95% ATK+137</td>
                                        </tr>

                                    </table>

                                    <li>Periodically regenerates your active character's HP.</li>

                                    
                                    <table class="scalingtable">

                                        <tr>
                                            <td>Continuous Regeneration</td>
                                            <td style="text-align:right;">118.32% ATK+916</td>
                                        </tr>
                                        <tr>
                                            <td>Instances</td>
                                            <td style="text-align:right;">3</td>
                                        </tr>


                                    </table>


                                    <li>Follows the character around, dealing Cryo DMG to opponents in their path.</li>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Herald of Frost DMG</td>
                                            <td style="text-align:right;">61.2%</td>
                                        </tr>
                                        <tr>
                                            <td>Instances</td>
                                            <td style="text-align:right;">9</td>
                                        </tr>


                                    </table>
                                    <p><i>I use this to prevent warming and rot... of Dr. Bai's precious ingredients. Yes.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Adeptus Art: Preserver of Fortune</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Qiqi releases the adeptus power sealed within her body, marking nearby opponents with a Fortune-Preserving Talisman that deals Cryo DMG.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">484%</td>
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
                                    <h1>Fortune-Preserving Talisman</h1>
                                    <p>When opponents affected by this Talisman take DMG, the character that dealt this DMG regenerates HP.</p>

                                    <table class="scalingtable">

                                        <tr>
                                            <td>Healing</td>
                                            <td style="text-align:right;">153% ATK+1174</td>
                                        </tr>

                                    </table>

                                    <p><i>"I am the Fortune Preserver, the Maiden of Resurrection."</i></p>
                                    <p><i>— Qiqi does not remember these words.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Former Life Memories</h1>
                                <p>Displays the location of nearby resources unique to Liyue on the mini-map.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Life-Prolonging Methods</h1>
                                <p>When a character under the effects of Adeptus Art: Herald of Frost triggers an Elemental Reaction, their Incoming Healing Bonus is increased by 20% for 8s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>A Glimpse Into Arcanum</h1>
                                <p>When Qiqi hits opponents with her Normal and Charged Attacks, she has a 50% chance to apply a Fortune-Preserving Talisman to them for 6s. This effect can only occur once every 30s.</p>
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
                                    <h1>C1: Ascetics of Frost</h1>
                                    <p>When the Herald of Frost hits an opponent marked by a Fortune-Preserving Talisman, Qiqi regenerates 2 Energy.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Frozen to the Bone</h1>
                                    <p>Qiqi's Normal and Charge Attack DMG against opponents affected by Cryo is increased by 15%.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Ascendant Praise</h1>
                                    <p>Increases the Level of Adeptus Art: Preserver of Fortune by 3.</p>
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
                                    <h1>C4: Divine Suppression</h1>
                                    <p>Targets marked by the Fortune-Preserving Talisman have their ATK decreased by 20%.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Crimson Lotus Bloom</h1>
                                    <p>Increases the Level of Adeptus Art: Herald of Frost by 3.</p>
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
                                    <h1>C6: Rite of Resurrection</h1>
                                    <p>Using Adeptus Art: Preserver of Fortune revives all fallen party members nearby and regenerates 50% of their HP.</p>
                                    <p>This effect can only occur once every 15 mins.</p>
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
    $("#qiqi-button").addClass("active");
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