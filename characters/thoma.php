<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Thoma - Akasha</title>
    

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
    --highlighted-color: #AC3638; 
    --topnav-color:#E7DCDD ;
    --search-bar-precolour:#E7DCDD;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'thoma' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #AC363875, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Thoma/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Thoma</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Pyro" flow="up">
                                    <img class="icons" src="../images/icons/b_Pyro.png" >
                                </div>
                                <div tooltip="Polearm" flow="up">
                                    <img class="icons" src="../images/icons/b_Polearm.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">The Kamisato Clan's housekeeper. A well-known "fixer" in Inazuma.
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
                            <td>10331</td>
                            <td>202</td>
                            <td>751</td>
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
                                    <p class="talent-card-title">Normal Attack: Swiftshatter Spear</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive spear strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">81.6%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">80.2%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">49.2%x2</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">123.7%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to lunge forward, dealing damage to opponents along the way.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">207%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Blazing Blessing</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Thoma vaults forward with his polearm and delivers a flame-filled flying kick that deals AoE Pyro DMG, while also summoning a defensive Blazing Barrier. At the moment of casting, Thoma's Elemental Skill applies Pyro to himself.</p>
                                <p>The DMG Absorption of the Blazing Barrier scales off Thoma's Max HP.</p>
                                <p>The Blazing Barrier has the following traits:</p>
                                <li>Absorbs Pyro DMG 250% more effectively.</li>
                                <li>When a new Blazing Barrier is obtained, the remaining DMG Absorption of an existing Blazing Barrier will stack and its duration will be refreshed.</li>
                                <p>The maximum DMG Absorption of the Blazing Barrier will not exceed a certain percentage of Thoma's Max HP.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">249%</td>
                                        </tr>
                                        <tr>
                                            <td>Shield DMG Absorption</td>
                                            <td style="text-align:right;">12.2% Max HP+1409</td>
                                        </tr>
                                        <tr>
                                            <td>Shield Duration</td>
                                            <td style="text-align:right;">8s</td>
                                        </tr>
                                        <tr>
                                            <td>Max Shield DMG Absorption</td>
                                            <td style="text-align:right;">33.3% Max HP+3838</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">15s</td>
                                        </tr>

                                </table>



                                    <p><i>As a guest from afar, only the most burning passion would allow one to master the pure and precise spear arts of Inazuma. Thoma's mastery, indeed, is not limited to being the "swiftest-studying student" or "a master of the spear," but he has imbued his will to protect others and fend off foes into his art as well.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Crimson Ooyoroi</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Thoma spins his polearm, slicing at his foes with roaring flames that deal AoE Pyro DMG and weave themselves into a Scorching Ooyoroi.</p>
                                <h1>Ooyoroi</h1>
                                <p>While Scorching Ooyoroi is in effect, the active character's Normal Attacks will trigger Fiery Collapse, dealing AoE Pyro DMG and summoning a Blazing Barrier.</p>
                                <p>Fiery Collapse can be triggered once every 1s.</p>
                                <p>Except for the amount of DMG they can absorb, the Blazing Barriers created in this way are identical to those created by Thoma's Elemental Skill, Blazing Blessing:</p>
                                <li>Absorbs Pyro DMG 250% more effectively.</li>
                                <li>When a new Blazing Barrier is obtained, the remaining DMG Absorption of an existing Blazing Barrier will stack and its duration will be refreshed.</li>
                                <p>The maximum DMG Absorption of the Blazing Barrier will not exceed a certain percentage of Thoma's Max HP.</p>
                                <p>If Thoma falls, the effects of Scorching Ooyoroi will be cleared.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">150%</td>
                                        </tr>
                                        <tr>
                                            <td>Fiery Collapse DMG</td>
                                            <td style="text-align:right;">99%</td>
                                        </tr>
                                        <tr>
                                            <td>Shield DMG Absorption</td>
                                            <td style="text-align:right;">1.9% Max HP+223</td>
                                        </tr>
                                        <tr>
                                            <td>Shield Duration</td>
                                            <td style="text-align:right;">8s</td>
                                        </tr>
                                        <tr>
                                            <td>Scorching Ooyoroi Duration</td>
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
                                    <p><i>"I will not forget my initial promise. Let this burning flame protect those I cherish, and may it never be extinguished."</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Snap and Swing</h1>
                                <p>When you fish successfully in Inazuma, Thoma's help grants a 20% chance of scoring a double catch.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Imbricated Armor</h1>
                                <p>When your current active character obtains or refreshes a Blazing Barrier, this character's Shield Strength will increase by 5% for 6s.</p>
                                <p>This effect can be triggered once every 0.3s seconds. Max 5 stacks.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Flaming Assault</h1>
                                <p>DMG dealt by Crimson Ooyoroi's Fiery Collapse is increased by 2.2% of Thoma's Max HP.</p>
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
                                    <h1>C1: A Comrade's Duty</h1>
                                    <p>When a character protected by Thoma's own Blazing Barrier (Thoma excluded) is attacked, Thoma's own Blazing Blessing CD is decreased by 3s, while his own Crimson Ooyoroi's CD is decreased by 3s.</p>
                                    <p>This effect can be triggered once every 20s.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: A Subordinate's Skills</h1>
                                    <p>Crimson Ooyoroi's duration is increased by 3s.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Fortified Resolve</h1>
                                    <p>Increases the Level of Blazing Blessing by 3.</p>
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
                                    <h1>C4: Long-Term Planning</h1>
                                    <p>After using Crimson Ooyoroi, 15 Energy will be restored to Thoma.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Raging Wildfire</h1>
                                    <p>Increases the Level of Crimson Ooyoroi by 3.</p>
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
                                    <h1>C6: Burning Heart</h1>
                                    <p>When a Blazing Barrier is obtained or refreshed, the DMG dealt by all party members' Normal, Charged, and Plunging Attacks is increased by 15% for 6s.</p>
                                </div>
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
    $("#thoma-button").addClass("active");
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