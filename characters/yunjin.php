<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Yun Jin - Akasha</title>
    

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
    margin-left:100px;
    margin-right:0px;
}

:root {
    --highlighted-color:#5A5179 ; 
    --topnav-color:#E0DFE3 ;
    --search-bar-precolour:#E0DFE3;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'yunjin' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #5A517975, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/YunJin/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Yun Jin</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Geo" flow="up">
                                    <img class="icons" src="../images/icons/b_Geo.png" >
                                </div>
                                <div tooltip="Polearm" flow="up">
                                    <img class="icons" src="../images/icons/b_Polearm.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A renowned Liyue opera singer who is skilled in both playwriting and singing. Her style is one-of-a-kind, exquisite and delicate, much like the person herself.
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
                            <td>Energy Recharge</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>10657</td>
                            <td>191</td>
                            <td>734</td>
                            <td>26.7%</td>

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
                                    <p class="talent-card-title">Normal Attack: Cloud-Grazing Strike</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 consecutive spear strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">74.4%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">73.9%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">42.2%+50.6%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">44.1%+52.9%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">123.7%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to lunge forward, dealing damage to opponents along the way.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack</td>
                                            <td style="text-align:right;">223.6%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Opening Flourish</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                                <p>Ms. Yun may just be acting out fights on stage, but her skills with the spear are real enough to defend against her foes.</p>
                                <h1>Press</h1>
                                <p>Flourishes her polearm in a cloud-grasping stance, dealing Geo DMG.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Press DMG</td>
                                            <td style="text-align:right;">253.5% DEF</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">9s</td>
                                        </tr>
                                    </table>

                                    <h1>Hold</h1>
                                    <p>Takes up the Opening Flourish stance and charges up, forming a shield. DMG Absorption is based on Yun Jin's Max HP and has 150% effectiveness against all Elemental DMG and Physical DMG. The shield lasts until she finishes unleashing her Elemental Skill.</p>
                                    <p>When the skill is released, when its duration ends, or when the shield breaks, Yun Jin will unleash the charged energy as an attack, dealing Geo DMG.</p>
                                    <p>Based on the time spent charging, it will either unleash an attack at Charge Level 1 or Level 2.</p>
                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charge Level 1 DMG</td>
                                            <td style="text-align:right;">443.6% DEF</td>
                                        </tr>
                                        <tr>
                                            <td>Charge Level 2 DMG</td>
                                            <td style="text-align:right;">633.8% DEF</td>
                                        </tr>
                                        <tr>
                                            <td>Shield DMG Absorption</td>
                                            <td style="text-align:right;">20% Max HP+2349</td>
                                        </tr>
                                    </table>



                                    <p><i>One glorious moment on-stage, a decade of preparation behind it.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Cliffbreaker's Banner</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                                <p>Deals AoE Geo DMG and grants all nearby party members a Flying Cloud Flag Formation.</p>
                                
                                
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">415%</td>
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

                                <h1>Flying Cloud Flag Formation</h1>
                                <p>When Normal Attack DMG is dealt to opponents, Bonus DMG will be dealt based on Yun Jin's current DEF.</p>


                                <table class="scalingtable">
                                        <tr>
                                            <td>DMG Increase</td>
                                            <td style="text-align:right;">55% DEF</td>
                                        </tr>

                                </table>

                                <p>The effects of this skill will be cleared after a set duration or after being triggered a specific number of times.</p>


                                <table class="scalingtable">
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>
                                        <tr>
                                            <td>Trigger Quota</td>
                                            <td style="text-align:right;">30</td>
                                        </tr>
                                </table>

                                <p>When one Normal Attack hits multiple opponents, the effect is triggered multiple times according to the number of opponents hit. The number of times that the effect is triggered is counted independently for each member of the party with Flying Cloud Flag Formation.</p>





                                <p><i>As the drums resound, as swords and halberds weave and clash, the doyenne is transformed into a mighty general.</i></p>
                                <p><i>As the instruments on stage strum in unison, lo, see how she vanquishes these demons!</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Light Nourishment</h1>
                                <p>When Perfect Cooking is achieved on Food with Adventure-related effects, there is a 12% chance to obtain double the product.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>True to Oneself</h1>
                                <p>Using Opening Flourish at the precise moment when Yun Jin is attacked will unleash its Level 2 Charged (Hold) form.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Breaking Conventions</h1>
                                <p>The Normal Attack DMG Bonus granted by Flying Cloud Flag Formation is further increased by 2.5%/5%/7.5%/11.5% of Yun Jin's DEF when the party contains characters of 1/2/3/4 Elemental Types, respectively.</p>
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
                                    <h1>C1: Thespian Gallop</h1>
                                    <p>Opening Flourish's CD is decreased by 18%.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Myriad Mise-En-Scène</h1>
                                    <p>After Cliffbreaker's Banner is unleashed, all nearby party members' Normal Attack DMG is increased by 15% for 12s.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Seafaring General</h1>
                                    <p>Increases the Level of Cliffbreaker's Banner by 3.</p>
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
                                    <h1>C4: Flower and a Fighter</h1>
                                    <p>When Yun Jin triggers the Crystallize Reaction, her DEF is increased by 20% for 12s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Famed Throughout the Land</h1>
                                    <p>Increases the Level of Opening Flourish by 3.</p>
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
                                    <h1>C6: Decorous Harmony</h1>
                                    <p>Characters under the effects of the Flying Cloud Flag Formation have their Normal ATK SPD increased by 12%.</p>
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
    $("#yunjin-button").addClass("active");
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
