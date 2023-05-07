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
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'baizhu' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>
<title><?php echo $fetch['name']?> - Akasha</title>
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
    --highlighted-color:<?php echo $fetch['primarycolor']?> ; 


}
</style>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #AFDEB3b6, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
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
                            <p class="banner-description">
                                <?php echo $fetch['description']?>
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
                                <td>13348</td>
                                <td>193</td>
                                <td>500</td>
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
                                    <p class="talent-card-title">Normal Attack: The Classics of Acupuncture</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p>Performs up to 4 attacks that deal Dendro DMG to opponents in front of him.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">63.5%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">61.9%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">38.3%*2</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">92%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to deal AoE Dendro DMG to opponents in front of him after a short casting time.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Aimed Shot</td>
                                            <td style="text-align:right;">205.8%</td>
                                        </tr>
                                        <tr>
                                            <td>Fully-Charged Aimed Shot</td>
                                            <td style="text-align:right;">50</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Calling upon the might of Dendro, Baizhu plunges towards the ground from mid-air, damaging all opponents in his path. Deals AoE Dendro DMG upon impact with the ground.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Universal Diagnosis</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Controls a Gossamer Sprite that cruises and attacks nearby opponents, dealing Dendro DMG.</p>
                                <p>After it performs 3 attacks or if there are no opponents nearby, the Sprite will return, healing all nearby party members based on Baizhu's Max HP.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Skill DMG</td>
                                        <td style="text-align:right;">134.6%</td>
                                    </tr>
                                    <tr>
                                        <td>Healing</td>
                                        <td style="text-align:right;">13.6% Max HP+1566</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">10s</td>
                                    </tr>

                                </table>

                                    <p><i>Those in the medical field who can read true signs of illness from false ones may even cure people before any symptoms can show.
</i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Holistic Revivification</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Enters the Pulsing Clarity state, creating a Seamless Shield that absorbs Dendro DMG with 250% effectiveness.</p>
                                <p>While in this state, Baizhu will generate a new Seamless Shield every 2.5s.</p>
                                <br>
                                <p>The Seamless Shield will heal your own active character based on Baizhu's Max HP and attack opponents by unleashing Spiritveins, dealing Dendro DMG under the following circumstances:</p>
                                <li>When a character is under the protection of a Seamless Shield and a new Seamless Shield is generated.</li>
                                <li>When the Seamless Shield's effects expire, or when it is shattered.</li>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Seamless Shield DMG Absorption</td>
                                        <td style="text-align:right;">1.36% Max HP+156</td>
                                    </tr>
                                    <tr>
                                        <td>Seamless Shield Duration</td>
                                        <td style="text-align:right;">2.5s</td>
                                    </tr>
                                    <tr>
                                        <td>Seamless Shield Healing</td>
                                        <td style="text-align:right;">8.84% Max HP+1018</td>
                                    </tr>
                                    <tr>
                                        <td>Spiritvein DMG</td>
                                        <td style="text-align:right;">165%</td>
                                    </tr>
                                    <tr>
                                        <td>Pulsing Clarity Duration</td>
                                        <td style="text-align:right;">14s</td>
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
                                <p><i>If you can perceive the heavens and the earth, defend against malignant auras with the flow of qi, and keep your mind clear, surely nothing can hinder you.</i></p>
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                            
                                <h1>Herbal Nourishment</h1>
                                <p>When Baizhu is in the party, interacting with certain harvestable items will heal your current active character for 2.5% of Baizhu's Max HP.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Five Fortunes Forever</h1>
                                <p>Baizhu gains different effects according to the current HP of your current active character:</p>
                                <li>When their HP is less than 50%, Baizhu gains 20% Healing Bonus.</li>
                                <li>When their HP is equal to or more than 50%, Baizhu gains 25% Dendro DMG Bonus.</li>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>All Things Are of the Earth</h1>
                                <p>Characters who are healed by Seamless Shields will gain the Year of Verdant Favor effect: Each 1,000 Max HP that Baizhu possesses that does not exceed 50,000 will increase the Burning, Bloom, Hyperbloom, and Burgeon reaction DMG dealt by these characters by 2%, while the Aggravate and Spread reaction DMG dealt by these characters will be increased by 0.8%. This effect lasts 6s.</p>
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
                                    <h1>C1: Attentive Observation</h1>
                                    <p>Universal Diagnosis gains 1 additional charge.</p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Incisive Discernment</h1>
                                    <p>When your own active character hits a nearby opponent with their attacks, Baizhu will unleash a Gossamer Sprite: Splice.</p>
                                    <p>Gossamer Sprite: Splice will initiate 1 attack before returning, dealing 250% of Baizhu's ATK as Dendro DMG and healing for 20% of Universal Diagnosis's Gossamer Sprite's normal healing.</p>
                                    <p>DMG dealt this way is considered Elemental Skill DMG.</p>
                                    <p>This effect can be triggered once every 5s.</p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: All Aspects Stabilized</h1>
                                    <p>Increases the Level of Holistic Revivification by 3.</p>
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
                                    <h1>C4: Ancient Art of Perception</h1>
                                    <p>For 15s after Holistic Revivification is used, Baizhu will increase all nearby party members' Elemental Mastery by 80.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: The Hidden Ebb and Flow</h1>
                                    <p>Increases the Level of Universal Diagnosis by 3.</p>
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
                                    <h1>C6: Elimination of Malicious Qi</h1>
                                    <p>Increases the DMG dealt by Holistic Revivification's Spiritveins by 8% of Baizhu's Max HP.</p>
                                    <p>Additionally, when a Gossamer Sprite or Gossamer Sprite: Splice hits opponents, there is a 100% chance of generating one of Holistic Revivification's Seamless Shields. This effect can only be triggered once by each Gossamer Sprite or Gossamer Sprite: Splice.</p>
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
<?php
    }
?>
</body>