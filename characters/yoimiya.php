<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Yoimiya - Akasha</title>
    

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
    --highlighted-color: #CF573D; 
    --topnav-color:#EADFDE ;
    --search-bar-precolour:#EADFDE;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'yoimiya' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #CF573D75, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Yoimiya/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Yoimiya</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Pyro" flow="up">
                                    <img class="icons" src="../images/icons/b_Pyro.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">Owner of Naganohara Fireworks. Known as the "Queen of the Summer Festival," she excels in her craft of creating fireworks that symbolize people's hopes and dreams.</p>
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
                            <td>Crit Rate</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>10164</td>
                            <td>323</td>
                            <td>615</td>
                            <td>24.2%</td>

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
                                    <p class="talent-card-title">Normal Attack: Firework Flare-Up</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">59.9%x2</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">115%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">149.5%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">78.1%x2</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">178%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, flames will accumulate on the arrowhead before being fired off as an attack. Has different effects based on how long the energy has been charged:</p>
                                    <li>Charge Level 1: Fires off a flaming arrow that deals Pyro DMG.</li>
                                    <li>Charge Level 2: Generates a maximum of 3 Kindling Arrows based on time spent charging, releasing them as part of this Aimed Shot. Kindling Arrows will home in on nearby opponents, dealing Pyro DMG on hit.</li>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Aimed Shot</td>
                                            <td style="text-align:right;">80.6%</td>
                                        </tr>
                                        <tr>
                                            <td>Fully-Charged Aimed Shot</td>
                                            <td style="text-align:right;">211%</td>
                                        </tr>
                                        <tr>
                                            <td>Kindling Arrow DMG</td>
                                            <td style="text-align:right;">28%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Niwabi Fire-Dance</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Yoimiya waves a sparkler and causes a ring of saltpeter to surround her.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">18s</td>
                                        </tr>

                                    </table>

                                    <h1>Niwabi Enshou</h1>
                                    <p>During this time, arrows fired by Yoimiya's Normal Attack will be Blazing Arrows, and their DMG will be increased and converted to Pyro DMG. During this time, Normal Attack: Firework Flare-Up will not generate Kindling Arrows at Charge Level 2.</p>



                                    <table class="scalingtable">
                                        <tr>
                                            <td>Blazing Arrow DMG</td>
                                            <td style="text-align:right;">158.8% Normal Attack DMG</td>
                                        </tr>
                                    </table>

                                    <p>This effect will deactivate when Yoimiya leaves the field.</p>
                                    <p><i>"Niwabi" is a form of incense firework created by Yoimiya herself. Its ability to be lit without any prior training or preparation has made it a real hit. After many fire-related incidents, the Tenryou Commission ordered the use of "Niwabi" banned, but small, bright sparks can often still be seen springing up at night. If seen from above, they look almost like little twinkling stars.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Ryuukin Saxifrage</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Yoimiya leaps into the air along with her original creation, the "Ryuukin Saxifrage," and fires forth blazing rockets bursting with surprises that deal AoE Pyro DMG and mark one of the hit opponents with Aurous Blaze.</p>



                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">216%</td>
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

                                <h1>Aurous Blaze</h1>
                                <p>All Normal/Charged/Plunging Attacks, Elemental Skills, and Elemental Bursts by any party member other than Yoimiya that hit an opponent marked by Aurous Blaze will trigger an explosion, dealing AoE Pyro DMG.</p>
                                <p>When an opponent affected by Aurous Blaze is defeated before its duration expires, the effect will pass on to another nearby opponent, who will inherit the remaining duration.</p>
                                <p>One Aurous Blaze explosion can be triggered every 2s. When Yoimiya is down, Aurous Blaze effects created through her skills will be deactivated.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Aurous Blaze Explosion DMG</td>
                                            <td style="text-align:right;">207%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>


                                </table>
                                    
                                
                                <p><i>Fireworks are man-made starlight, comets fired into the sky. Though they last for but an instant, the memory of their brilliance shall surely live on.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Blazing Match</h1>
                                <p>When Yoimiya crafts Decoration, Ornament, and Landscape-type Furnishings, she has a 100% chance to refund a portion of the materials used.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Tricks of the Trouble-Maker</h1>
                                <p>During Niwabi Fire-Dance, shots from Yoimiya's Normal Attack will increase her Pyro DMG Bonus by 2% on hit. This effect lasts for 3s and can have a maximum of 10 stacks.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Summer Night's Dawn</h1>
                                <p>Using Ryuukin Saxifrage causes nearby party members (not including Yoimiya) to gain a 10% ATK increase for 15s. Additionally, a further ATK Bonus will be added on based on the number of "Tricks of the Trouble-Maker" stacks Yoimiya possesses when using Ryuukin Saxifrage. Each stack increases this ATK Bonus by 1%.</p>
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
                                    <h1>C1: Agate Ryuukin</h1>
                                    <p>The Aurous Blaze created by Ryuukin Saxifrage lasts for an extra 4s.</p>
                                    <p>Additionally, when an opponent affected by Aurous Blaze is defeated within its duration, Yoimiya's ATK is increased by 20% for 20s.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: A Procession of Bonfires</h1>
                                    <p>When Yoimiya's Pyro DMG scores a CRIT Hit, Yoimiya will gain a 25% Pyro DMG Bonus for 6s.</p>
                                    <p>This effect can be triggered even when Yoimiya is not the active character.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Trickster's Flare</h1>
                                    <p>Increases the Level of Niwabi Fire-Dance by 3.</p>
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
                                    <h1>C4: Pyrotechnic Professional</h1>
                                    <p>When Yoimiya's own Aurous Blaze triggers an explosion, Niwabi Fire-Dance's CD is decreased by 1.2s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: A Summer Festival's Eve</h1>
                                    <p>Increases the Level of Ryuukin Saxifrage by 3.</p>
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
                                    <h1>C6: Naganohara Meteor Swarm</h1>
                                    <p>During Niwabi Fire-Dance, Yoimiya's Normal Attacks have a 50% chance of firing an extra Blazing Arrow that deals 60% of its original DMG. This DMG is considered Normal Attack DMG.</p>
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
    $("#yoimiya-button").addClass("active");
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

