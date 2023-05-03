<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
    

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
    margin-left:auto;
    margin-right:auto;
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-left:auto;
        margin-right:auto;    
    }
}

:root {
    --highlighted-color:#9DBE38 ; 
    --topnav-color: #E4E7DB;
    --search-bar-precolour:#E4E7DB;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'nahida' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #9DBE38b6, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/<?php echo $fetch['url']?>/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title"><?php echo $fetch['name']?></p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/<?php echo $fetch['rarity']?>-stars.png" alt="">

                                <div tooltip="<?php echo $fetch['element']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_<?php echo $fetch['element']?>.png" >
                                </div>
                                <div tooltip="<?php echo $fetch['weapon']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_<?php echo $fetch['weapon']?>.png" alt="">
                                </div>
                                <div tooltip="<?php echo $fetch['region']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_<?php echo $fetch['region']?>.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A caged bird secluded within the confines of the Sanctuary of Surasthana who can only see the world in her dreams.



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
                            <td>Elemental Mastery</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>10360</td>
                            <td>299</td>
                            <td>630</td>
                            <td>115</td>

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
                                    <p class="talent-card-title">Normal Attack: Akara</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 attacks that deal Dendro DMG to opponents in front of her.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">68.5%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">62.9%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">78%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">99.3%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to deal AoE Dendro DMG to opponents in front of her after a short casting time.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">224.4%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">50</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Calling upon the might of Dendro, Nahida plunges towards the ground from mid-air, damaging all opponents in her path. Deals AoE Dendro DMG upon impact with the ground.</p>
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
                                    <p class="talent-card-title">Elemental Skill: All Schemes to Know</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Sends forth karmic bonds of wood and tree from her side, dealing AoE Dendro DMG and marking up to 8 opponents hit with the Seed of Skandha.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Press DMG</td>
                                            <td style="text-align:right;">167.3%</td>
                                        </tr>
                                        <tr>
                                            <td>Press CD</td>
                                            <td style="text-align:right;">5s</td>
                                        </tr>


                                    </table>
                                    <h1>Hold</h1>
                                    <p>Enters Aiming Mode, which will allow you to select a limited number of opponents within a limited area. During this time, Nahida's resistance to interruption will be increased.</p>
                                    <p>When released, this skill deals Dendro DMG to these opponents and marks them with the Seed of Skandha.</p>
                                    <p>Aiming Mode will last up to 5s and can select a maximum of 8 opponents.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Hold DMG</td>
                                            <td style="text-align:right;">221.7%</td>
                                        </tr>
                                        <tr>
                                            <td>Hold CD</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>
                                    </table>

                                    <h1>Seed of Skandha</h1>
                                    <p>Opponents who have been marked by the Seed of Skandha will be linked to one another up till a certain distance.</p>
                                    <p>After you trigger Elemental Reactions on opponents who are affected by the Seeds of Skandha or when they take DMG from Dendro Cores (including Burgeon and Hyperbloom DMG), Nahida will unleash Tri-Karma Purification on the opponents and all connected opponents, dealing Dendro DMG based on her ATK and Elemental Mastery.</p>
                                    <p>You can trigger at most 1 Tri-Karma Purification within a short period of time.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Tri-Karma Purification DMG</td>
                                            <td style="text-align:right;">175.4% ATK+350.9% Elemental Mastery</td>
                                        </tr>
                                        <tr>
                                            <td>Tri-Karma Purification Trigger Interval</td>
                                            <td style="text-align:right;">2.5s</td>
                                        </tr>
                                        <tr>
                                            <td>Seed of Skandha Duration</td>
                                            <td style="text-align:right;">25s</td>
                                        </tr>
                                    </table>



                                    <p><i>Lo, the god of grass and trees shines her ultimate truth into the void, illuminating the origin and destruction of the three karmas.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Illusory Heart</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                                <p>Manifests the Court of Dreams and expands the Shrine of Maya.</p>
                                
                                <table class="scalingtable">

                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">15s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">13.5s</td>
                                        </tr>
                                        <tr>
                                            <td>Energy Cost</td>
                                            <td style="text-align:right;">50</td>
                                        </tr>

                                    </table>
                                <p>When the Shrine of Maya field is unleashed, the following effects will be separately unleashed based on the Elemental Types present within the party.</p>
                                <li>Pyro: While Nahida remains within the Shrine of Maya, the DMG dealt by Tri-Karma Purification from "All Schemes to Know" is increased.</li>
                                                                    
                                <table class="scalingtable">
                                    <tr>
                                        <td>Pyro: DMG Bonus</td>
                                        <td style="text-align:right;">1 Character 25.3%</td>
                                    </tr>
                                    <tr>
                                        <td>Pyro: DMG Bonus</td>
                                        <td style="text-align:right;">2 Characters 37.9%</td>
                                    </tr>
                                </table>

                                <li>Electro: While Nahida remains within the Shrine of Maya, the interval between each Tri-Karma Purification from "All Schemes to Know" is decreased.</li>


                                <table class="scalingtable">
                                    <tr>
                                        <td>Electro: Trigger Interval Decrease</td>
                                        <td style="text-align:right;">1 Character 0.42s</td>
                                    </tr>
                                    <tr>
                                        <td>Electro: Trigger Interval Decrease</td>
                                        <td style="text-align:right;">2 Characters 0.63s</td>
                                    </tr>
                                </table>

                                <li>Hydro: The Shrine of Maya's duration is increased.</li>

                                <table class="scalingtable">
                                    <tr>
                                        <td>Hydro: Duration Extension</td>
                                        <td style="text-align:right;">1 Character 5.68s</td>
                                    </tr>
                                    <tr>
                                        <td>Hydro: Duration Extension</td>
                                        <td style="text-align:right;">2 Characters 8.53s</td>
                                    </tr>
                                </table>

                                <p>If there are at least 2 party members of the aforementioned Elemental Types present when the field is deployed, the aforementioned effects will be increased further.</p>
                                <p>Even if Nahida is not on the field, these bonuses will still take effect so long as party members are within the Shrine of Maya.</p>


                                    <p><i>Perhaps all that dwell under the bowers of trees are naught but a fleeting upside-down dream in the eyes of the God of Wisdom.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>On All Things Meditated</h1>
                                <p>Nahida can use All Schemes to Know to interact with some harvestable items within a fixed AoE.</p>
                                <p>This skill may even have some other effects...</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Compassion Illuminated</h1>
                                <p>When unleashing Illusory Heart, the Shrine of Maya will gain the following effects:</p>
                                <p>The Elemental Mastery of the active character within the field will be increased by 25% of the Elemental Mastery of the party member with the highest Elemental Mastery.</p>
                                <p>You can gain a maximum of 250 Elemental Mastery in this manner.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Awakening Elucidated</h1>
                                <p>Each point of Nahida's Elemental Mastery beyond 200 will grant 0.1% Bonus DMG and 0.03% CRIT Rate to Tri-Karma Purification from All Schemes to Know.</p>
                                <p>A maximum of 80% Bonus DMG and 24% CRIT Rate can be granted to Tri-Karma Purification in this manner.</p>
                               
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
                                    <h1>C1: The Seed of Stored Knowledge</h1>
                                    <p>When the Shrine of Maya is unleashed and the Elemental Types of the party members are being tabulated, the count will add 1 to the number of Pyro, Electro, and Hydro characters respectively.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: The Root of All Fullness</h1>
                                    <p>Opponents that are marked by Seeds of Skandha applied by Nahida herself will be affected by the following effects:</p>
                                    <li>Burning, Bloom, Hyperbloom, and Burgeon Reaction DMG they receive can score CRIT Hits. CRIT Rate and CRIT DMG are fixed at 20% and 100% respectively.</li>
                                    <li>Within 8s of being affected by Quicken, Aggravate, Spread, DEF is decreased by 30%.</li>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: The Shoot of Conscious Attainment</h1>
                                    <p>Increases the Level of All Schemes to Know by 3.</p>
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
                                    <h1>C4: The Stem of Manifest Inference</h1>
                                    <p>When 1/2/3/4 (or more) nearby opponents are affected by All Schemes to Know's Seeds of Skandha, Nahida's Elemental Mastery will be increased by 100/120/140/160.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: The Leaves of Enlightening Speech</h1>
                                    <p>Increases the Level of Illusory Heart by 3.</p>
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
                                    <h1>C6: The Fruit of Reason's Culmination</h1>
                                    <p>When Nahida hits an opponent affected by All Schemes to Know's Seeds of Skandha with Normal or Charged Attacks after unleashing Illusory Heart, she will use Tri-Karma Purification: Karmic Oblivion on this opponent and all connected opponents, dealing Dendro DMG based on 200% of Nahida's ATK and 400% of her Elemental Mastery.</p>
                                    <p>DMG dealt by Tri-Karma Purification: Karmic Oblivion is considered Elemental Skill DMG and can be triggered once every 0.2s.</p>
                                    <p>This effect can last up to 10s and will be removed after Nahida has unleashed 6 instances of Tri-Karma Purification: Karmic Oblivion.</p>
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
    $("#<?php echo $fetch['url']?>-button").addClass("active");
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
<?php
    }
?>
</body>