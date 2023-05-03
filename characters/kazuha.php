<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Kauzha - Akasha</title>
    

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
    --highlighted-color:#7DB192 ; 
    --topnav-color:#E1E6E3 ;
    --search-bar-precolour:#E1E6E3;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'kazuha' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #7DB19275, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/kazuha/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Kaedehara Kazuha</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Anemo" flow="up">
                                    <img class="icons" src="../images/icons/b_Anemo.png" >
                                </div>
                                <div tooltip="Sword" flow="up">
                                    <img class="icons" src="../images/icons/b_Sword.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A wandering samurai from Inazuma who is currently with Liyue's Crux Fleet. A gentle and carefree soul whose heart hides a great many burdens from the past.
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
                            <td>13348</td>
                            <td>297</td>
                            <td>807</td>
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
                                    <p class="talent-card-title">Normal Attack: Garyuu Bladework</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 rapid strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">82.6%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">83.1%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">47.4%+56.9%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">111.5%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">46.6%x3</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to unleash 2 rapid sword strikes.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">79%+137.1%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">20</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Plunges from mid-air to strike the ground below, damaging opponents along the path and dealing AoE DMG upon impact. If this Plunging Attack is triggered by Chihayaburu, it will be converted to Plunging Attack: Midare Ranzan.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Collision Plunge DMG</td>
                                            <td style="text-align:right;">150.3%</td>
                                        </tr>
                                        <tr>
                                            <td>Low/High Plunge DMG</td>
                                            <td style="text-align:right;">301%/375%</td>
                                        </tr>
                                    </table>

                                    <h1>Plunging Attack: Midare Ranzan</h1>
                                    <p>When a Plunging Attack is performed using the effects of the Elemental Skill Chihayaburu, Plunging Attack DMG is converted to Anemo DMG and will create a small wind tunnel via a secret blade technique that pulls in nearby objects and opponents.</p>
                                </div>
                            </div>


                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/skill.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Skill: Chihayaburu</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="talent-card-text"></p> 
                                    <p>Unleashes a secret technique as fierce as the rushing wind that pulls objects and opponents towards Kazuha's current position before launching opponents within the AoE, dealing Anemo DMG and lifting Kazuha into the air on a rushing gust of wind.</p>                           
                                    <p>Within 10s of remaining airborne after casting Chihayaburu, Kazuha can unleash a powerful Plunging Attack known as Midare Ranzan.</p>
                                    <h1>Press</h1>
                                    <p>Can be used in mid-air.</p>
                                    
                                    
                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Press Skill DMG</td>
                                            <td style="text-align:right;">326%</td>
                                        </tr>
                                        <tr>
                                            <td>Press CD</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>

                                    </table>

                                    <h1>Hold</h1>
                                    <p>Charges up before unleashing greater Anemo DMG over a larger AoE than Press Mode.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Hold Skill DMG</td>
                                            <td style="text-align:right;">443%</td>
                                        </tr>
                                        <tr>
                                            <td>Hold CD</td>
                                            <td style="text-align:right;">9s</td>
                                        </tr>
                                    </table>

                                    <h1>Plunging Attack: Midare Ranzan</h1>
                                    <p>When a Plunging Attack is performed using the effects of the Elemental Skill Chihayaburu, Plunging Attack DMG is converted to Anemo DMG. On landing, Kazuha creates a small wind tunnel via a secret blade technique that pulls in nearby objects and opponents.</p>
                                    <p>Midare Ranzan's DMG is considered Plunging Attack DMG.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Collision Plunge DMG</td>
                                            <td style="text-align:right;">150.3%</td>
                                        </tr>
                                        <tr>
                                            <td>Low/High Plunge DMG</td>
                                            <td style="text-align:right;">301%/375%</td>
                                        </tr>
                                    </table>


                                    <p><i>"Wind in branches grieves</i></p>
                                    <p><i>Bygone ages, gods of old</i></p>
                                    <p><i>Withered autumn leaves"</i></p>

                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Kazuha Slash</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>The signature technique of Kazuha's self-styled bladework — a single slash that strikes with the force of the first winds of autumn, dealing AoE Anemo DMG.</p>


                                    <table class="scalingtable">
                                        <tr>
                                            <td>Slashing DMG</td>
                                            <td style="text-align:right;">446%</td>
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

                                    <p>The blade's passage will leave behind a field named "Autumn Whirlwind" that periodically deals AoE Anemo DMG to opponents within its range.</p>

                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>DoT</td>
                                            <td style="text-align:right;">204%</td>
                                        </tr>
                                        <tr>
                                            <td>Instances</td>
                                            <td style="text-align:right;">5</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">8s</td>
                                        </tr>
                                    </table>

                                    <h1>Elemental Absorption</h1>
                                    <p>If Autumn Whirlwind comes into contact with Hydro/Pyro/Cryo/Electro, it will deal additional elemental DMG of that type.</p>
                                    <p>Elemental Absorption may only occur once per use.</p>
                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Additional Elemental DMG</td>
                                            <td style="text-align:right;">61%</td>
                                        </tr>
                                        <tr>
                                            <td>Instances</td>
                                            <td style="text-align:right;">5</td>
                                        </tr>
                                    </table>


                                    <p>Absorption priority: Pyro > Hydro > Electro > Cryo</p>

                                    <p><i>"I see eternity go by in an instant, the autumns of many years from a single leaf. Thus I shall slice this maple in a flash, and ask a question of the ages."</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Cloud Strider</h1>
                                <p>Decreases sprinting Stamina consumption for your own party members by 20%.</p>
                                <p>Not stackable with Passive Talents that provide the exact same effects.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Soumon Swordsmanship</h1>
                                <p>If Chihayaburu comes into contact with Hydro/Pyro/Cryo/Electro when cast, this Chihayaburu will absorb that element and if Plunging Attack: Midare Ranzan is used before the effect expires, it will deal an additional 200% ATK of the absorbed elemental type as DMG. This will be considered Plunging Attack DMG.</p>
                                <p>Elemental Absorption may only occur once per use of Chihayaburu.</p>
                                <div class="talent-card-description">
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Plunge DMG</td>
                                            <td style="text-align:right;">200%</td>
                                        </tr>

                                    </table>
                                </div>
                                <p>Absorption priority: Pyro > Hydro > Electro > Cryo</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Poetics of Fuubutsu</h1>
                                <p>Upon triggering a Swirl reaction, Kaedehara Kazuha will grant all party members a 0.04% Elemental DMG Bonus to the element absorbed by Swirl for every point of Elemental Mastery he has for 8s. Bonuses for different elements obtained through this method can co-exist.</p>
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
                                    <h1>C1: Scarlet Hills</h1>
                                    <p>Decreases Chihayaburu's CD by 10%.</p>
                                    <p>Using Kazuha Slash resets the CD of Chihayaburu.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Yamaarashi Tailwind</h1>
                                    <p>The Autumn Whirlwind field created by Kazuha Slash has the following effects:</p>
                                    <li>Increases Kaedehara Kazuha's own Elemental Mastery by 200 for its duration.</li>
                                    <li>Increases the Elemental Mastery of characters within the field by 200.</li>
                                    <p>The Elemental Mastery-increasing effects of this Constellation do not stack.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Maple Monogatari</h1>
                                    <p>Increases the Level of Chihayaburu by 3.</p>
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
                                    <h1>C4: Oozora Genpou</h1>
                                    <p>When Kaedehara Kazuha's Energy is lower than 45, he obtains the following effects:</p>
                                    <li>Pressing or Holding Chihayaburu regenerates 3 or 4 Energy for Kaedehara Kazuha, respectively.</li>
                                    <li>When gliding, Kaedehara Kazuha regenerates 2 Energy per second.</li>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Wisdom of Bansei</h1>
                                    <p>Increases the Level of Kazuha Slash by 3.</p>
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
                                    <h1>C6: Crimson Momiji</h1>
                                    <p>After using Chihayaburu or Kazuha Slash, Kaedehara Kazuha gains an Anemo Infusion for 5s. Additionally, each point of Elemental Mastery will increase the DMG dealt by Kaedehara Kazuha's Normal, Charged, and Plunging Attacks by 0.2%. This cannot be overridden.</p>
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
    $("#kazuha-button").addClass("active");
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
