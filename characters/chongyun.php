<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Chongyun - Akasha</title>
    

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
    --highlighted-color:#9AE1F7 ; 
    --topnav-color:#E5ECEF ;
    --search-bar-precolour:#E5ECEF;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'chongyun' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #9AE1F775, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Chongyun/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Chongyun</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Cryo" flow="up">
                                    <img class="icons" src="../images/icons/b_Cryo.png" >
                                </div>
                                <div tooltip="Claymore" flow="up">
                                    <img class="icons" src="../images/icons/b_Claymore.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A young exorcist from a family of exorcists. He does everything he can to suppress his abundance of yang energy.
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
                            <td>10984</td>
                            <td>223</td>
                            <td>648</td>
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
                                    <p class="talent-card-title">Normal Attack: Demonbane</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">129%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">116%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">148%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">186%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Drains Stamina over time to perform continuous spinning attacks against all nearby opponents.</p>
                                    <p>At the end of the sequence, performs a more powerful slash.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack Cyclic DMG</td>
                                            <td style="text-align:right;">103%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Final DMG</td>
                                            <td style="text-align:right;">187%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Spirit Blade: Chonghua's Layered Frost</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="talent-card-text"></p>     
                                
                                <p>Chongyun strikes the ground with his greatsword, causing a Cryo explosion in a circular AoE in front of him that deals Cryo DMG.</p>
                                <p>After a short delay, the cold air created by the Cryo explosion will coalesce into a Chonghua Frost Field, within which all Sword, Claymore and Polearm-wielding characters' weapons will be infused with Cryo.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">292%</td>
                                        </tr>
                                        <tr>
                                            <td>Infusion Duration</td>
                                            <td style="text-align:right;">2.8s</td>
                                        </tr>
                                        <tr>
                                            <td>Field Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">15s</td>
                                        </tr>


                                    </table>
                                    <p><i>"A crystal-clear ring, and all is silent. The rivers move not, and the clouds are heavy with frost. The altar gates open, and evil is banished."</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Spirit Blade: Cloud-Parting Star</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Performing the secret hand seals, Chongyun summons 3 giant spirit blades in mid-air that fall to the earth one by one after a short delay, exploding as they hit the ground.</p>
                                <p>When the spirit blades explode, they will deal AoE Cryo DMG and launch opponents.</p>

                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">242%</td>
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
                                    <p><i>"As ice doth give the biting frost birth, My transcendent blade shakes heaven and earth. Heed my summons and come hence!"</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Gallant Journey</h1>
                                <p>When dispatched on an expedition in Liyue, time consumed is reduced by 25%.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Steady Breathing</h1>
                                <p>Sword, Claymore, or Polearm-wielding characters within the field created by Spirit Blade: Chonghua's Layered Frost have their Normal ATK SPD increased by 8%.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Rimechaser Blade</h1>
                                <p>When the field created by Spirit Blade: Chonghua's Layered Frost disappears, another spirit blade will be summoned to strike nearby opponents, dealing 100% of Chonghua's Layered Frost's Skill DMG as AoE Cryo DMG. Opponents hit by this blade will have their Cryo RES decreased by 10% for 8s.
</p>
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
                                    <h1>C1: Ice Unleashed</h1>
                                    <p>The last attack of Chongyun's Normal Attack combo releases 3 ice blades. Each blade deals 50% of Chongyun's ATK as Cryo DMG to all opponents in its path.
</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Atmospheric Revolution</h1>
                                    <p>Elemental Skills and Elemental Bursts cast within the Frost Field created by Spirit Blade: Chonghua's Layered Frost have their CD time decreased by 15%.
</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Cloudburst</h1>
                                    <p>Increases the Level of Spirit Blade: Cloud-Parting Star by 3.</p>
                                    <p>Maximum upgrade level is 15.
</p>
                                </div>
                            </div>
                    
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c4.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C4: Frozen Skies</h1>
                                    <p>Chongyun regenerates 1 Energy every time he hits an opponent affected by Cryo.</p>
                                    <p>This effect can only occur once every 2s.
</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: The True Path</h1>
                                    <p>Increases the Level of Spirit Blade: Chonghua's Layered Frost by 3.</p>
                                    <p>Maximum upgrade level is 15.
</p>
                                </div>
                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c6.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C6: Rally of Four Blades</h1>
                                    <p>Spirit Blade: Cloud-Parting Star deals 15% more DMG to opponents with a lower percentage of their Max HP remaining than Chongyun.</p>
                                    <p>This skill will also summon 1 additional spirit blade.
</p>
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
    $("#chongyun-button").addClass("active");
    $("#<?php echo $fetch['url']?>-button").addClass("dark");
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