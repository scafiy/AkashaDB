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
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'alhaitham' ") or die(mysqli_error());
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
                <div class="banner" style="background-image: linear-gradient(to left, transparent, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
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
                                <td>13348</td>
                                <td>313</td>
                                <td>782</td>
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
                                    <p class="talent-card-title">Normal Attack: Abductive Reasoning</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p>Performs up to 5 rapid strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">91.0%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">93.2%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">62.8% + 62.8%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">122.7%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">154.1%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to unleash 2 rapid sword strikes.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">101.5% + 101.5%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Universality: An Elaboration on Form</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            

                            <div class="talent-card-description">
                                <p>Rushes forward, dealing Dendro DMG to nearby opponents when the rush ends, causing a Chisel-Light Mirror to form.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Rush Attack DMG</td>
                                        <td style="text-align:right;">329.1% ATK+263.3% Elemental Mastery</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">18s</td>
                                    </tr>

                                </table>

                                <p>Holding this skill will cause it to behave differently.</p>
                                <h1>Hold</h1>
                                <p>Enters Aiming Mode to adjust the direction of Alhaitham's rush attack.</p>




                                <h1>Chisel-Light Mirror</h1>
                                <p>When this skill is unleashed, Alhaitham will generate 1 Chisel-Light Mirror. If there are no Mirrors at this time, he will generate 1 additional Mirror. Chisel-Light Mirrors will have the following properties:</p>
                                <li>When he possesses Chisel-Light Mirrors, Alhaitham's Normal, Charged, and Plunging Attacks will be converted to Dendro DMG. This cannot be overridden.</li>
                                <li>When attacks of the aforementioned kind hit opponents, the Chisel-Light Mirrors will unleash a Projection Attack that deals AoE Dendro DMG based on the number of Mirrors on the field.</li>
                                <li>A total of 3 Chisel-Light Mirrors can exist at once.</li>
                                <li>The Chisel-Light Mirrors will disappear one after the other over time, and will all disappear when Alhaitham leaves the field.</li>
                                
                                <table class="scalingtable">
                                    <tr>
                                        <td>Projection Attack Interval</td>
                                        <td style="text-align:right;">1.6s</td>
                                    </tr>
                                    <tr>
                                        <td>1-Mirror Projection Attack DMG</td>
                                        <td style="text-align:right;">114.2% ATK+228.5% Elemental Mastery</td>
                                    </tr>
                                    <tr>
                                        <td>2-Mirror Projection Attack DMG</td>
                                        <td style="text-align:right;">(114.2% ATK+228.5% Elemental Mastery)×2</td>
                                    </tr>
                                    <tr>
                                        <td>3-Mirror Projection Attack DMG</td>
                                        <td style="text-align:right;">(114.2% ATK+228.5% Elemental Mastery)×3</td>
                                    </tr>
                                    <tr>
                                        <td>Chisel-Light Mirror Removal Interval</td>
                                        <td style="text-align:right;">4s</td>
                                    </tr>
                                </table>



                                    <p><i>"Truth inherently exists amidst uncertainty. Even the greatest of scholars are not immune to error."</i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Particular Field: Fetters of Phenomena</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Creates a Particular Binding Field and deals multiple instances of AoE Dendro DMG.</p>
                            
                                <table class="scalingtable">
                                    <tr>
                                        <td>Single-Instance DMG</td>
                                        <td style="text-align:right;">206.7% ATK+165.4% Elemental Mastery</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">18s</td>
                                    </tr>
                                    <tr>
                                        <td>Energy Cost</td>
                                        <td style="text-align:right;">70</td>
                                    </tr>
                                </table>

                                <p>If Chisel-Light Mirrors exist when this ability is unleashed, all such Mirrors will be consumed and increase the number of DMG instances dealt.</p>
                                <p>2s after this ability is unleashed, if 0/1/2/3 Mirrors were consumed, Alhaitham will generate 3/2/1/0 new Mirrors in turn.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Basic Attack Instances</td>
                                        <td style="text-align:right;">4</td>
                                    </tr>
                                    <tr>
                                        <td>1-Mirror Attack Instances</td>
                                        <td style="text-align:right;">6</td>
                                    </tr>
                                    <tr>
                                        <td>2-Mirror Attack Instances</td>
                                        <td style="text-align:right;">8</td>
                                    </tr>
                                    <tr>
                                        <td>3-Mirror Attack Instances</td>
                                        <td style="text-align:right;">10</td>
                                    </tr>
                                </table>

                                <p><i>"If a researcher makes wisdom their goal, then they should be prepared to make an enemy of every word they read. Only then can they avoid bias."</i></p>
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                            
                                <h1>Law of Reductive Overdetermination</h1>
                                <p>When Alhaitham crafts Weapon Ascension Materials, he has a 10% chance to receive double the product.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Four-Causal Correction</h1>
                                <p>When Alhaitham's Charged or Plunging Attacks hit opponents, they will generate 1 Chisel-Light Mirror. This effect can be triggered once every 12s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Mysteries Laid Bare</h1>
                                <p>Each point of Alhaitham's Elemental Mastery will increase the DMG dealt by Projection Attacks and Particular Field: Fetters of Phenomena by 0.1%.</p>
                                <p>The DMG of both aforementioned abilities can be increased by a maximum of 100% this way.</p>
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
                                    <h1>C1: Intuition</h1>
                                    <p>When a Projection Attack hits an opponent, Universality: An Elaboration on Form's CD is decreased by 1.2s. This effect can be triggered once every 1s.</p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Debate</h1>
                                    <p>When Alhaitham generates a Chisel-Light Mirror, his Elemental Mastery will be increased by 50 for 8 seconds, max 4 stacks. Each stack's duration is counted independently. This effect can be triggered even when the maximum number of Chisel-Light Mirrors has been reached.</p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Negation</h1>
                                    <p>Increases the Level of Universality: An Elaboration on Form by 3.</p>
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
                                    <h1>C4: Elucidation</h1>
                                    <p>When Particular Field: Fetters of Phenomena is unleashed, the following effects will become active based on the number of Chisel-Light Mirrors consumed and created this time around:</p>
                                    <li>Each Mirror consumed will increase the Elemental Mastery of all other nearby party members by 30 for 15s.</li>
                                    <li>Each Mirror generated will grant Alhaitham a 10% Dendro DMG Bonus for 15s.</li>
                                    <p>The pre-existing duration of the aforementioned effects will be cleared if you use Particular Field: Fetters of Phenomena again while they are in effect.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Sagacity</h1>
                                    <p>Increases the Level of Particular Field: Fetters of Phenomena by 3.</p>
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
                                    <h1>C6: Structuration</h1>
                                    <p>Alhaitham gains the following effects:</p>
                                    <li>2 seconds after Particular Field: Fetters of Phenomena is unleashed, he will generate 3 Chisel-Light Mirrors regardless of the number of mirrors consumed.</li>
                                    <li>If Alhaitham generates Chisel-Light Mirrors when their numbers have already maxed out, his CRIT Rate and CRIT DMG will increase by 10% and 70% respectively for 6s. If this effect is triggered again during its initial duration, the duration remaining will be increased by 6s.</li>
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