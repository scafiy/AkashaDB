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
    --highlighted-color:#46D0F6 ; 
    --topnav-color: #DEEAEF;
    --search-bar-precolour:#DEEAEF;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'nilou' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #46D0F6b6, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
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
                            <p class="banner-description">A dancer under the Zubayr Theater, Nilou's dancing is but elegant and graceful — however, outside the stage's spotlight, she's just like any girl her age; warm, smiling, and friendly.





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
                            <td>15185</td>
                            <td>230</td>
                            <td>729</td>
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
                                    <p class="talent-card-title">Normal Attack: Dance of Samser</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 3 consecutive sword strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">92.4%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">83.5%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">129.3%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to perform a twirling slash.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">92.3%+100%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Dance of Haftkarsvar</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Enters the Pirouette state, dealing Hydro DMG to nearby opponents based on Nilou's Max HP.</p>
                                
                                <p>While she is in the Pirouette state, Nilou's Normal Attacks and Elemental Skill will cause her to enter the Sword Dance and Whirling Steps stances respectively, causing DMG she deals to be converted to Hydro DMG that cannot be overridden and that is considered Elemental Skill DMG.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">5.68% Max HP</td>
                                        </tr>

                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">18s</td>
                                        </tr>
                                    </table>

                                    <p>While she is in the Pirouette state, Nilou's Normal Attacks and Elemental Skill will cause her to enter the Sword Dance and Whirling Steps stances respectively, causing DMG she deals to be converted to Hydro DMG that cannot be overridden and that is considered Elemental Skill DMG.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Pirouette Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>

                                    </table>

                                    <p>In these stances, Nilou's third dance step will end Pirouette, and has the following effects based on the type of said dance step:</p>
                                    <li>Sword Dance: unleashes a Luminous Illusion that deals Hydro DMG to opponents it touches and grants Nilou the Lunar Prayer effect. This effect converts Nilou's Normal Attacks into Sword Dance techniques, and her final hit will unleash a Luminous Illusion.</li>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Sword Dance/Whirling Steps 1-Hit DMG</td>
                                            <td style="text-align:right;">7.74%/5.55% Max HP</td>
                                        </tr>
                                        <tr>
                                            <td>Sword Dance/Whirling Steps 2-Hit DMG</td>
                                            <td style="text-align:right;">8.75%/6.73% Max HP</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="text-align:right;"></td>
                                        </tr>


                                    </table>

                                    <p>Whirling Steps: Nilou unleashes a Whirling Water Wheel that deals AoE Hydro DMG and creates a Tranquility Aura that follows your active character around and applies Wet to opponents within its AoE.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Luminous Illusion/Water Wheel DMG</td>
                                            <td style="text-align:right;">12.19%/8.61% Max HP</td>
                                        </tr>

                                    </table>

                                    <p>Nilou is unable to perform Charged Attacks when under the effect of Pirouette or Lunar Prayer. These effects will be removed once she leaves the field.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Pirouette Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                        <tr>
                                            <td>Lunar Prayer Duration</td>
                                            <td style="text-align:right;">8s</td>
                                        </tr>
                                    </table>



                                    <p><i>"Daintily her toes touch the water's face, and the light that ripples forth equals even the seven heavens."</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Dance of Abzendegi: Distant Dreams, Listening Spring</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Begins the dance of faraway dreams and springs that hear, causing a Lotus of Distant Waters to bloom, dealing AoE Hydro DMG based on Nilou's Max HP and applying the Lingering Aeon effect to all opponents hit.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">31.3% Max HP</td>
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

                                    <p>After an interval, opponents affected by Lingering Aeon will take Hydro DMG.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Lingering Aeon DMG</td>
                                            <td style="text-align:right;">38.3% Max HP</td>
                                        </tr>


                                    </table>
                                    
                                    <p><i>"We have never witnessed that distant dream, but this dance can bring it to life."</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>White Jade Lotus</h1>
                                <p>When Perfect Cooking is achieved on Food with Adventure-related effects, there is a 12% chance to obtain double the product.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Court of Dancing Petals</h1>
                                <p>When all characters in the party are all Dendro or Hydro, and there are at least one Dendro character and one Hydro character:</p>
                                <p>The completion of the third dance step of Nilou's Dance of Haftkarsvar will grant all nearby characters the Golden Chalice's Bounty for 30s.</p>
                                <p>Characters under the effect of Golden Chalice's Bounty will increase the Elemental Mastery of all nearby characters by 100 for 10s whenever they are hit by Dendro attacks. Also, triggering the Bloom reaction will create Bountiful Cores instead of Dendro Cores.</p>
                                <p>Such Cores will burst very quickly after being created, and they have larger AoEs.</p>
                                <p>Bountiful Cores cannot trigger Hyperbloom or Burgeon, and they share an upper numerical limit with Dendro Cores. Bountiful Core DMG is considered DMG dealt by Dendro Cores produced by Bloom.</p>
                                <p>Should the party not meet the conditions for this Passive Talent, any existing Golden Chalice's Bounty effects will be canceled.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Dreamy Dance of Aeons</h1>
                                <p>Every 1,000 points of Nilou's Max HP above 30,000 will cause the DMG dealt by Bountiful Cores created by characters affected by Golden Chalice's Bounty to increase by 9%.</p>
                                <p>The maximum increase in Bountiful Core DMG that can be achieved this way is 400%.</p>
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
                                    <h1>C1: Dance of the Waning Moon</h1>
                                    <p>Dance of Haftkarsvar will be enhanced as follows:</p>
                                    <li>Luminous Illusion DMG is increased by 65%.</li>
                                    <li>The Tranquility Aura's duration is extended by 6s.</li>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: The Starry Skies Their Flowers Rain</h1>
                                    <p>After characters affected by the Golden Chalice's Bounty deal Hydro DMG to an opponent, that opponent's Hydro RES will be decreased by 35% for 10s. After a triggered Bloom reaction deals DMG to opponents, their Dendro RES will be decreased by 35% for 10s.</p>
                                    <p>You need to have unlocked the "Court of Dancing Petals" Talent.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Beguiling Shadowstep</h1>
                                    <p>Increases the Level of Dance of Abzendegi: Distant Dreams, Listening Spring by 3.</p>
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
                                    <h1>C4: Fricative Pulse</h1>
                                    <p>After the third dance step of Dance of Haftkarsvar's Pirouette hits opponents, Nilou will gain 15 Elemental Energy, and DMG from her Dance of Abzendegi: Distant Dreams, Listening Spring will be increased by 50% for 8s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Twirling Light</h1>
                                    <p>Increases the Level of Dance of Haftkarsvar by 3.</p>
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
                                    <h1>C6: Frostbreaker's Melody</h1>
                                    <p>For every 1,000 points of Max HP, Nilou's CRIT Rate and CRIT DMG will increase by 0.6% and 1.2% respectively.</p>
                                    <p>The maximum increase in CRIT Rate and CRIT DMG via this method is 30% and 60% respectively.</p>
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