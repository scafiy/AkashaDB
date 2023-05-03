<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Tighnari - Akasha</title>
    

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
    --highlighted-color: #388D56; 
    --topnav-color: #DDE4E0;
    --search-bar-precolour:#DDE4E0;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'tighnari' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #388D5675, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Tighnari/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Tighnari</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Dendro" flow="up">
                                    <img class="icons" src="../images/icons/b_Dendro.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Sumeru" flow="up">
                                    <img class="icons" src="../images/icons/b_Sumeru.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A young researcher well-versed in botany who currently serves as a Forest Watcher in Avidya Forest. He is a straight shooter with a warm heart - and a dab hand at guiding even the dullest of pupils.

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
                            <td>Dendro DMG Bonus</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>10850</td>
                            <td>268</td>
                            <td>630</td>
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
                                    <p class="talent-card-title">Normal Attack: Khanda Barrier-Buster</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">82%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">77.1%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">48.6%x2</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">126.1%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, the power of Dendro will accumulate on the arrowhead before the arrow is fired. Has different effects based on how long the energy has been charged:</p>
                                    <li>Charge Level 1: Fires off an arrow carrying the power of flora that deals Dendro DMG.</li>
                                    <li>Charge Level 2: Fires off a Wreath Arrow that deals Dendro DMG. Upon hit, the Wreath Arrow will create 4 Clusterbloom Arrows that will track nearby opponents automatically and deal Dendro DMG.</li>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Aimed Shot</td>
                                            <td style="text-align:right;">80.6%</td>
                                        </tr>
                                        <tr>
                                            <td>Level 1 Aimed Shot</td>
                                            <td style="text-align:right;">211%</td>
                                        </tr>
                                        <tr>
                                            <td>Wreath Arrow DMG</td>
                                            <td style="text-align:right;">148.2%</td>
                                        </tr>
                                        <tr>
                                            <td>Clusterbloom Arrow DMG</td>
                                            <td style="text-align:right;">65.6%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Vijnana-Phala Mine</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Tighnari throws a Vijnana Stormheart ahead that deals AoE Dendro DMG, creating a Vijnana-Khanda Field that creates mysterious illusions that taunt opponents and draw their fire.</p>
                                <p>Additionally, Tighnari gains the Vijnana Suffusion effect, which will decrease the Wreath Arrow's charging time by 2.4s. This effect will dissipate once the skill duration ends or after Tighnari has fired 3 Wreath Arrows.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">254.3%</td>
                                        </tr>
                                        <tr>
                                            <td>Vijnana-Khanda Field Duration</td>
                                            <td style="text-align:right;">8s</td>
                                        </tr>
                                        <tr>
                                            <td>Vijnana Suffusion Duration</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>

                                    </table>
                                    <p><i>"If seeds wither apart from the soil, they will remain a single seed. But if returned to the soil, they shall multiply ten-million fold."</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Fashioner's Tanglevine Shaft</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Combines the power of all seeds to fire 6 Tanglevine Shafts that can track opponents and deal Dendro DMG.</p>

                                <p>After they hit, the Tanglevine Shafts will create a secondary wave of Tanglevine Shafts that can also track nearby opponents and deal Dendro DMG on hit.</p>



                            
                                <table class="scalingtable">
                                        <tr>
                                            <td>Tanglevine Shaft DMG</td>
                                            <td style="text-align:right;">94.6%</td>
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
                                <p>After they hit, the Tanglevine Shafts will create a secondary wave of Tanglevine Shafts that can also track nearby opponents and deal Dendro DMG on hit.</p>

                                <table class="scalingtable">
                                        <tr>
                                            <td>Secondary Tanglevine Shaft DMG</td>
                                            <td style="text-align:right;">115.6%</td>
                                        </tr>


                                </table>
                                    <p><i>"Do not seek to escape so easily. The vines grow and regrow ever on. Things might get dicey if you don't clear every last one of them out."</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Encyclopedic Knowledge</h1>
                                <p>Displays the location of nearby resources unique to Sumeru on the mini-map.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Keen Sight</h1>
                                <p>After Tighnari fires a Wreath Arrow, his Elemental Mastery is increased by 50 for 4s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Scholarly Blade</h1>
                                <p>For every point of Elemental Mastery Tighnari possesses, his Charged Attack and Fashioner's Tanglevine Shaft DMG are increased by 0.06%.</p>
                                <p>The maximum DMG Bonus obtainable this way is 60%.</p>
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
                                    <h1>C1: Beginnings Determined at the Roots</h1>
                                    <p>Tighnari's Charged Attack CRIT Rate is increased by 15%.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Origins Known From the Stem</h1>
                                    <p>When there are opponents within the Vijnana-Khanda Field created by Vijnana-Phala Mine, Tighnari gains 20% Dendro DMG Bonus.</p>
                                    <p>The effect will last up to 6s if the field's duration ends or if it no longer has opponents within it.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Fortunes Read Amongst the Branches</h1>
                                    <p>Increases the Level of Fashioner's Tanglevine Shaft by 3.</p>
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
                                    <h1>C4: Withering Glimpsed in the Leaves</h1>
                                    <p>When Fashioner's Tanglevine Shaft is unleashed, all nearby party members gain 60 Elemental Mastery for 8s. If the Fashioner's Tanglevine Shaft triggers a Burning, Bloom, Quicken, or Spread reaction, their Elemental Mastery will be further increased by 60. This latter case will also refresh the buff state's duration.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Comprehension Amidst the Flowers</h1>
                                    <p>Increases the Level of Vijnana-Phala Mine by 3.</p>
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
                                    <h1>C6: Karma Adjudged From the Leaden Fruit</h1>
                                    <p>Wreath Arrow's charging time is decreased by 0.9s, and will produce 1 additional Clusterbloom Arrow upon hit. This arrow deals 150% of Tighnari's ATK as DMG.</p>
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
    $("#tighnari-button").addClass("active");
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

