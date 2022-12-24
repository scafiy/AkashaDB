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
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'wanderer' ") or die(mysqli_error());
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
    --topnav-color:<?php echo $fetch['secondarycolor']?> ;
    --search-bar-precolour:<?php echo $fetch['secondarycolor']?>;

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
                            <td>328</td>
                            <td>607</td>
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
                                    <p class="talent-card-title">Normal Attack: Yuuban Meigen</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 3 attacks using wind blades, dealing Anemo DMG.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">126.2%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">119.4%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">87.5%+87.5%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina, gathers a build up of high wind pressure, and deals AoE Anemo DMG after a short casting time.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">224.5%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">50</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Calling upon the power of Anemo, the Wanderer plunges towards the ground from mid-air, damaging all opponents in his path. Deals AoE Anemo DMG upon impact with the ground.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Hanega: Song of the Wind</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Concentrates the power of the winds to break free from the shackles of the earth, dealing AoE Anemo DMG before leaping into the air and entering the Windfavored state.</p>

                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">161.8%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>
                                  </table>

                                    <h1>Windfavored</h1>
                                    <p>The Wanderer cannot perform Plunging Attacks in this state. When he uses Normal and Charged Attacks, they will be converted into Kuugo: Fushoudan and Kuugo: Toufukai respectively; the DMG they deal and their AoE will be increased, and their DMG will be considered Normal and Charged Attack DMG respectively. Kuugo: Toufukai will not consume Stamina.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Kuugo: Fushoudan DMG</td>
                                            <td style="text-align:right;">151.2% Normal Attack DMG</td>
                                        </tr>
                                        <tr>
                                            <td>Kuugo: Toufukai DMG</td>
                                            <td style="text-align:right;">140.9% Charged Attack DMG</td>
                                        </tr>
                                  </table>
                                    
                                    
                                    <p>The Wanderer will hover persistently during this time. While this state is active, the Wanderer's movements gain the following properties:</p>
                                    <li>Persistently consumes Kuugoryoku Points to maintain this hovering state.</li>
                                    <li>When sprinting, additional Kuugoryoku Points will be consumed for the Wanderer to accelerate mid-air. Holding sprint will cause persistent Kuugoryoku Point consumption to maintain speed. This effect will replace his default sprint.</li>
                                    <li>Jumping expends extra Kuugoryoku Points to increase hovering height. Holding jump will cause persistent Kuugoryoku Point consumption to keep increasing hovering height.</li>
                                    <table class="scalingtable">
                                            <tr>
                                                <td>Initial Kuugoryoku Points</td>
                                                <td style="text-align:right;">100</td>
                                            </tr>

                                    </table>
                                    <p>Running out of Kuugoryoku Points will end the Windfavored state.</p>
                                    <p>A second cast during the duration of Windfavored will also end it.</p>





                                    <p><i>"The world dances in a weightless whirl, presenting a secret that can only be found in the flowers."</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Kyougen: Five Ceremonial Plays</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Compresses the atmosphere into a singular vacuum that grinds all troubles away, dealing multiple instances of AoE Anemo DMG.</p>
                                <p>If the character is in the Windfavored state due to the skill "Hanega: Song of the Wind," Windfavored state will end after casting.</p>
                                    
                            <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">250.2%x5</td>
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
                                    <p><i>"Bright be the narrowed gaze of the sky, casting its sight on dreams both past and present, like radiance washing over dust on the winds."</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Strum the Swirling Winds</h1>
                                <p>Mora expended when ascending Bows and Catalysts is decreased by 50%.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Jade-Claimed Flower</h1>
                                <p>If Hanega: Song of the Wind comes into contact with Hydro/Pyro/Cryo/Electro when it is unleashed, this instance of the Windfavored state will obtain buffs according to the contacted element(s):</p>
                                <li>Hydro: Kuugoryoku Point cap increases by 20.</li>
                                <li>Pyro: ATK increases by 30%.</li>
                                <li>Cryo: CRIT Rate increases by 20%.</li>
                                <li>Electro: When Normal and Charged Attacks hit an opponent, 0.8 Energy will be restored. Energy can be restored this way once every 0.2s.</li>
                                <p>You can have up to 2 different kinds of these buffs simultaneously.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Gales of Reverie</h1>
                                <p>When the Wanderer hits opponents with Kuugo: Fushoudan or Kuugo: Toufukai in his Windfavored state, he has a 16% chance to obtain the Descent effect: The next time the Wanderer accelerates in mid-air while in this instance of the Windfavored state, this effect will be removed, this acceleration instance will not consume any Kuugoryoku Points, and he will fire off 4 wind arrows that deal 35% of his ATK as Anemo DMG each.</p>
                                <p>For each Kuugo: Fushoudan and Kuugo: Toufukai that does not produce this effect, the next attack of those types will have a 12% increased chance of producing it. The calculation of the effect production is done once every 0.1s.</p>
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
                                    <h1>C1: Shoban: Ostentatious Plumage</h1>
                                    <p>When in the Windfavored state, the Attack SPD of the Wanderer's Kuugo: Fushoudan and Kuugo: Toufukai is increased by 10%.</p>
                                    <p>Additionally, the wind arrows fired by the Passive Talent "Gales of Reverie" will deal an additional 25% of his ATK as DMG. You must unlock the Passive Talent "Gales of Reverie" first.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Niban: Isle Amidst White Waves</h1>
                                    <p>When in the Windfavored state, Kyougen: Five Ceremonial Plays will see its DMG increased by 4% per point of difference between the max amount of Kuugoryoku Points contrasted with Kuugoryoku's present capacity when using this skill.</p>
                                    <p>Through this method, you can increase Kyougen: Five Ceremonial Plays's DMG by a maximum of 200%.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Sanban: Moonflower Kusemai</h1>
                                    <p>Increases the Level of Kyougen: Five Ceremonial Plays by 3.</p>
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
                                    <h1>C4: Yonban: Set Adrift into Spring</h1>
                                    <p>When casting Hanega: Song of the Wind, should the Passive Talent "Jade-Claimed Flower" be triggered, the character will gain buffs in correspondence to the contacted Elemental Type(s), and also obtain a random untriggered buff. A maximum of 3 such corresponding elemental buffs can exist simultaneously.</p>
                                    <p>You must unlock the Passive Talent "Jade-Claimed Flower" first.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Matsuban: Ancient Illuminator From Abroad</h1>
                                    <p>Increases the Level of Hanega: Song of the Wind by 3.</p>
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
                                    <h1>C6: Shugen: The Curtains' Melancholic Sway</h1>
                                    <p>When the Wanderer actively hits an opponent with Kuugo: Fushoudan while in the Windfavored state, the following effects will occur:</p>
                                    <li>Deals an additional instance of Kuugo: Fushoudan at the position hit, dealing 40% of the attack's original DMG. This DMG will be considered Normal Attack DMG.</li>
                                    <li>When the Wanderer falls below 40 Kuugoryoku Points, restores 4 Points to him. Kuugoryoku Points can be restored in this manner once every 0.2s. This restoration can occur up to 5 times within one Windfavored duration.</li>
                                </div>
                            </div>
                        </div>
    
                    </div>


                </div> >



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