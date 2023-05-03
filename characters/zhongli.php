<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Zhongli - Akasha</title>
    

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
    margin-left:-10px;
    margin-right:20px;
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-left:0px;
    margin-right:-20px;    
}
}

:root {
    --highlighted-color:#F8DC8C ; 
    --topnav-color:#EDE8DA ;
    --search-bar-precolour:#EDE8DA;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'zhongli' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #F8DC8C75, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Zhongli/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Zhongli</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

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
                            <p class="banner-description">A mysterious expert contracted by the Wangsheng Funeral Parlor. Extremely knowledgeable in all things.
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
                        <td>14695</td>
                        <td>251</td>
                        <td>738</td>
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
                                <p class="talent-card-title">Normal Attack: Rain of Stone</p>
                                <p class="level">Lv.9</p>
                            </div>
                        </div>

                        <div class="talent-card-description">
                            <h1 class="">Normal Attack</h1>
                            <p class="">Performs up to 6 consecutive spear strikes.</p>
                            <table class="scalingtable">
                                    <tr>
                                        <td>1-Hit DMG</td>
                                        <td style="text-align:right;">56.5%</td>
                                    </tr>
                                    <tr>
                                        <td>2-Hit DMG</td>
                                        <td style="text-align:right;">57.2%</td>
                                    </tr>
                                    <tr>
                                        <td>3-Hit DMG</td>
                                        <td style="text-align:right;">70.9%</td>
                                    </tr>
                                    <tr>
                                        <td>4-Hit DMG</td>
                                        <td style="text-align:right;">78.9%</td>
                                    </tr>
                                    <tr>
                                        <td>5-Hit DMG</td>
                                        <td style="text-align:right;">19.8%x4</td>
                                    </tr>
                                    <tr>
                                        <td>6-Hit DMG</td>
                                        <td style="text-align:right;">100.1%</td>
                                    </tr>

                                </table>

                                <h1>Charged Attack</h1>
                                <p>Consumes a certain amount of Stamina to lunge forward, causing stone spears to fall along his path.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Charged Attack DMG</td>
                                        <td style="text-align:right;">204%</td>
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
                                <p class="talent-card-title">Elemental Skill: Dominus Lapidis</p>
                                <p class="level">Lv.9</p>
                            </div>
                        </div>

                        <div class="talent-card-description">

                            <p>Every mountain, rock and inch of land is filled with the power of Geo, but those who can wield such powers freely are few and far between.</p>
                            <h1>Press</h1>
                            <p>Commands the power of earth to create a Stone Stele.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Stone Stele DMG</td>
                                        <td style="text-align:right;">27.2%</td>
                                    </tr>
                                    <tr>
                                        <td>Press CD</td>
                                        <td style="text-align:right;">4s</td>
                                    </tr>

                                </table>

                            <h1>Hold</h1>
                            <p>Causes nearby Geo energy to explode, causing the following effects:</p>
                            <li>If their maximum number hasn't been reached, creates a Stone Stele.</li>
                            <li>Creates a shield of jade. The shield's DMG Absorption scales based on Zhongli's Max HP.</li>
                            <li>Deals AoE Geo DMG.</li>
                            <li>If there are nearby targets with the Geo element, it will drain a large amount of Geo element from a maximum of 2 such targets. This effect does not cause DMG.</li>
                            <table class="scalingtable">
                                    <tr>
                                        <td>Hold DMG</td>
                                        <td style="text-align:right;">136%</td>
                                    </tr>
                                    <tr>
                                        <td>Hold CD</td>
                                        <td style="text-align:right;">12s</td>
                                    </tr>

                                </table>
                            <h1>Stone Stele</h1>
                            <p>When created, deals AoE Geo DMG.</p>
                            <p>Additionally, it will intermittently resonate with other nearby Geo constructs, dealing Geo DMG to nearby opponents.</p>
                            <p>The Stone Stele is considered a Geo construct that can both be climbed and used to block attacks.</p>
                            <p>Only one Stele created by Zhongli himself may initially exist at any one time.</p>
                            <table class="scalingtable">
                                    <tr>
                                        <td>Stone Stele DMG</td>
                                        <td style="text-align:right;">27.2%</td>
                                    </tr>
                                    <tr>
                                        <td>Resonance DMG</td>
                                        <td style="text-align:right;">54.4%</td>
                                    </tr>

                            </table>

                            <h1>Jade Shield</h1>
                            <p>Possesses 150% DMG Absorption against all Elemental and Physical DMG.</p>
                            <p>Characters protected by the Jade Shield will decrease the Elemental RES and Physical RES of opponents in a small AoE by 20%. This effect cannot be stacked.</p>




                                <table class="scalingtable">
                                    <tr>
                                        <td>Shield Base Absorption</td>
                                        <td style="text-align:right;">2506</td>
                                    </tr>
                                    <tr>
                                        <td>Additional Shield Absorption</td>
                                        <td style="text-align:right;">21.8% Max HP</td>
                                    </tr>
                                    <tr>
                                        <td>Shield Duration</td>
                                        <td style="text-align:right;">20s</td>
                                    </tr>

                                </table>

                                <p><i>A true master of stone may carve jade and shape gold.</i></p>
                            </div>
                        </div>

                    <div class="talent-card">
                        <div class="talent-card-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                            </div>

                            <div class="talent-card-heading-text">
                                <p class="talent-card-title">Elemental Burst: Planet Befall</p>
                                <p class="level">Lv.9</p>
                            </div>
                        </div>

                        <div class="talent-card-description">

                            <p>Brings a falling meteor down to earth, dealing massive Geo DMG to opponents caught in its AoE and applying the Petrification status to them.</p>
                            <table class="scalingtable">
                                    <tr>
                                        <td>Skill DMG</td>
                                        <td style="text-align:right;">835%</td>
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
                            <h1>Petrification</h1>
                            <p>Opponents affected by the Petrification status cannot move.</p>
                            
                            <table class="scalingtable">
                                    <tr>
                                        <td>Petrification Duration</td>
                                        <td style="text-align:right;">3.9s</td>
                                    </tr>
                            </table>


                                <p><i>The falling meteor punishes the unjust.</i></p>

                            
                        </div>
                </div>


                

                <p class="title">Passives</p>

                <div class="passive-deck">
                    <div class="passive-deck-wrapper">

                
                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                            </div>                        
                            
                            <h1>Arcanum of Crystal</h1>
                            <p>Refunds 15% of the ore used when crafting Polearm-type weapons.</p>
                        </div>

                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                            </div> 
                            <h1>Resonant Waves</h1>
                            <p>When the Jade Shield takes DMG, it will Fortify:</p>
                            <li>Fortified characters have 5% increased Shield Strength.</li>
                            <p>Can stack up to 5 times, and lasts until the Jade Shield disappears.</p>
                        </div>

                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                            </div> 
                            <h1>Dominance of Earth</h1>
                            <p>Zhongli deals bonus DMG based on his Max HP:</p>
                            <li>Normal Attack, Charged Attack, and Plunging Attack DMG is increased by 1.39% of Max HP.</li>
                            <li>Dominus Lapidis' Stone Stele, resonance, and hold DMG is increased by 1.9% of Max HP.</li>
                            <li>Planet Befall's DMG is increased by 33% of Max HP.</li>
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
                                <h1>C1: Rock, the Backbone of Earth</h1>
                                <p>Increases the maximum number of Stone Steles created by Dominus Lapidis that may exist simultaneously to 2.</p>
                            </div>

                        </div>
                    </div>



                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                            </div>
                            <div class="constellation-text">
                                <h1>C2: Stone, the Cradle of Jade</h1>
                                <p>Planet Befall grants nearby characters on the field a Jade Shield when it descends.</p>
                            </div>
                        </div>
                    </div>




                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                            </div>

                            <div class="constellation-text">
                                <h1>C3: Jade, Shimmering through Darkness</h1>
                                <p>Increases the Level of Dominus Lapidis by 3.</p>
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
                                <h1>C4: Topaz, Unbreakable and Fearless</h1>
                                <p>Increases Planet Befall's AoE by 20% and increases the duration of Planet Befall's Petrification effect by 2s.</p>
                            </div>

                        </div>
                    </div>


                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                            </div>
                            <div class="constellation-text">
                                <h1>C5: Lazuli, Herald of the Order</h1>
                                <p>Increases the Level of Planet Befall by 3.</p>
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
                                <h1>C6: Chrysos, Bounty of Dominator</h1>
                                <p>When the Jade Shield takes DMG, 40% of that incoming DMG is converted to HP for the current character.</p>
                                <p>A single instance of regeneration cannot exceed 8% of that character's Max HP.</p>
                                <li>Healing is not triggered by environmental damage or Corrosion.</li>
                                <li>Healing does not have an ICD.</li>
                                <li>Healing triggers 4-Piece Ocean-Hued Clam.</li>

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
    $("#zhongli-button").addClass("active");
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

