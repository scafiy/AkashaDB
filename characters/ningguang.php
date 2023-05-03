<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Ningguang - Akasha</title>
    

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
    --highlighted-color:#F3CC57 ; 
    --topnav-color: #ECE8DE;
    --search-bar-precolour:#ECE8DE;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'ningguang' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #F3CC5775, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Ningguang/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Ningguang</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Geo" flow="up">
                                    <img class="icons" src="../images/icons/b_Geo.png" >
                                </div>
                                <div tooltip="Catalyst" flow="up">
                                    <img class="icons" src="../images/icons/b_Catalyst.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">The Tianquan of the Liyue Qixing. Her wealth is unsurpassed in all of Teyvat.
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
                            <td>Geo DMG Bonus</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>9787</td>
                            <td>212</td>
                            <td>573</td>
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
                                    <p class="talent-card-title">Normal Attack: Sparkling Scatter</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Shoots gems that deal Geo DMG.</p>
                                <p>Upon hit, this grants Ningguang 1 Star Jade.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Normal Attack DMG</td>
                                            <td style="text-align:right;">47.6%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of stamina to fire off a giant gem that deals Geo DMG.</p>
                                    <p>If Ningguang has any Star Jades, unleashing a Charged Attack will cause the Star Jades to be fired at the enemy as well, dealing additional DMG.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">296%</td>
                                        </tr>
                                        <tr>
                                            <td>DMG per Star Jade</td>
                                            <td style="text-align:right;">84.3%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">50</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Gathering the might of Geo, Ningguang plunges towards the ground from mid-air, damaging all opponents in her path. Deals AoE Geo DMG upon impact with the ground.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Jade Screen</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Ningguang creates a Jade Screen out of gold, obsidian and her great opulence, dealing AoE Geo DMG.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">392%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>
                                    </table>
                                    <h1>Jade Screen</h1>
                                    <li>Blocks opponents' projectiles.</li>
                                    <li>Endurance scales based on Ningguang's Max HP.</li>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Inherited HP</td>
                                            <td style="text-align:right;">77.7%</td>
                                        </tr>

                                    </table>
                                    <p>Jade Screen is considered a Geo Construct and can be used to block certain attacks, but cannot be climbed. Only one Jade Screen may exist at any one time.</p>


                                    <p><i>The canvas of stars is written upon this jade screen.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Starshatter</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Gathering a great number of gems, Ningguang scatters them all at once, sending homing projectiles at her opponents that deal massive Geo DMG.</p>
                                <p>If Starshatter is cast when a Jade Screen is nearby, the Jade Screen will fire additional gem projectiles at the same time.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>DMG Per Gem</td>
                                            <td style="text-align:right;">148%</td>
                                        </tr>

                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>
                                        <tr>
                                            <td>Energy Cost</td>
                                            <td style="text-align:right;">40</td>
                                        </tr>

                                    </table>
                                    <p><i>Stars shatter. Silence falls.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Trove of Marvelous Treasures</h1>
                                <p>Displays the location of nearby ore veins used in forging on the mini-map.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Backup Plan</h1>
                                <p>When Ningguang is in possession of Star Jades, her Charged Attack does not consume Stamina.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Strategic Reserve</h1>
                                <p>A character that passes through the Jade Screen will gain a 12% Geo DMG Bonus for 10s.</p>
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
                                    <h1>C1: Piercing Fragments</h1>
                                    <p>When a Normal Attack hits, it deals AoE DMG.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Shock Effect</h1>
                                    <p>When Jade Screen is shattered, its CD will reset.</p>
                                    <p>Can occur once every 6s.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Majesty Be the Array of Stars</h1>
                                    <p>Increases the Level of Starshatter by 3.</p>
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
                                    <h1>C4: Exquisite be the Jade, Outshining All Beneath</h1>
                                    <p>Jade Screen increases nearby characters' Elemental RES by 10%.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Invincible Be the Jade Screen</h1>
                                    <p>Increases the Level of Jade Screen by 3.</p>
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
                                    <h1>C6: Grandeur Be the Seven Stars</h1>
                                    <p>When Starshatter is used, Ningguang gains 7 Star Jades.</p>
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
    $("#ningguang-button").addClass("active");
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