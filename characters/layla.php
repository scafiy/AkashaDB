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
    --highlighted-color:#8FAFDB ; 
    --topnav-color: #E3E6EA;
    --search-bar-precolour:#E3E6EA;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'layla' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #8FAFDBb6, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
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
                            <p class="banner-description">A Rtawahist student who specializes in Theoretical Astrology. Heavily prone to somnambulism and locked in a grinding war with sleep deprivation, the problem of restful slumber is a most troubling one to her.



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
                            <td>11092</td>
                            <td>217</td>
                            <td>655</td>
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
                                    <p class="talent-card-title">Normal Attack: Sword of the Radiant Path</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 3 rapid strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">94.1%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">89.1%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">134.1%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to unleash 2 rapid sword strikes.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">87.7%+96.5%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Nights of Formal Focus</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Puts forth a shield known as the Curtain of Slumber, dealing AoE Cryo DMG.</p>
                                <p>The Curtain of Slumber's DMG Absorption is based on Layla's Max HP and absorbs Cryo DMG with 250% effectiveness. When the shield is deployed, Layla will have Cryo applied to her briefly.</p>
                                
                                <h1>Night Stars and Shooting Stars</h1>
                                <p>While the Curtain of Slumber is active, it will create 1 Night Star that will be attached to it every 1.5s. When a character protected by this shield uses an Elemental Skill, 2 Night Stars will be created. Night Stars can be created once every 0.3s in this way. A maximum of 4 Night Stars can be accumulated at any one time.</p>
                                <p>Once the Curtain of Slumber has accumulated 4 Night Stars and there are opponents nearby, these Night Stars will transform into homing Shooting Stars that will be fired off in sequence, dealing Cryo DMG to any opponents hit.</p>
                                <p>If the Curtain of Slumber's duration ends or it is destroyed, the Night Stars will disappear. If they are already being fired off as Shooting Stars, these Shooting Stars will last until this wave of shots ends.</p>
                                <p>New Night Stars cannot be created until the previous wave of Shooting Stars has been fired completely.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">21.8%</td>
                                        </tr>
                                        <tr>
                                            <td>Shooting Star DMG</td>
                                            <td style="text-align:right;">25%</td>
                                        </tr>
                                        <tr>
                                            <td>Base Shield DMG Absorption</td>
                                            <td style="text-align:right;">18.4% Max HP+2114</td>
                                        </tr>
                                        <tr>
                                            <td>Shield Duration</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>

                                 </table>
                                    <p><i>"She and I are like two master artisans who have never met, yet who sit at the same cushioned seat, embroidering the same dream-flower."</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Dream of the Star-Stream Shaker</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                                <p>Unleashes a Celestial Dreamsphere that constantly fires Starlight Slugs at opponents within its AoE, dealing Cryo DMG.</p>
                                <p>When a Starlight Slug hits, it will generate 1 Night Star for nearby Curtains of Slumber. Each Curtain of Slumber can gain 1 Night Star this way every 0.5s.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Starlight Slug DMG</td>
                                            <td style="text-align:right;">7.9% Max HP</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">12s</td>
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
                                    <p><i>"Sleep now, sleep now; and may many destinies be revealed before your slumbering eyes, within your star-paved dreams."</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Shadowy Dream-Signs</h1>
                                <p>When Layla crafts Character Talent Materials, she has a 10% chance to receive double the product.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Like Nascent Light</h1>
                                <p>While the Curtain of Slumber is active, the Deep Sleep effect will activate each time the Curtain gains 1 Night Star:</p>
                                <li>The Shield Strength of a character under the effect of the Curtain of Slumber increases by 6%.</li>
                                <li>This effect can have a maximum of 4 stacks and persists until the Curtain of Slumber disappears.</li>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Sweet Slumber Undisturbed</h1>
                                <p>The DMG dealt by the Shooting Stars fired by Nights of Formal Focus is increased by 1.5% of Layla's Max HP.</p>
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
                                    <h1>C1: Fortress of Fantasy</h1>
                                    <p>The Shield Absorption of the Curtain of Slumber generated by Nights of Formal Focus is increased by 20%.</p>
                                    <p>Additionally, when unleashing Nights of Formal Focus, she will generate a shield for any nearby party members who are not being protected by a Curtain of Slumber. This shield will have 35% of the absorption of a Curtain of Slumber, will last for 12s, and will absorb Cryo DMG with 250% effectiveness.</p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Light's Remit</h1>
                                    <p>When Shooting Stars from Nights of Formal Focus strike opponents, they will each restore 1 Energy to Layla. Each Shooting Star can restore Energy to her in this manner once.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Secrets of the Night</h1>
                                    <p>Increases the Level of Nights of Formal Focus by 3.</p>
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
                                    <h1>C4: Starry Illumination</h1>
                                    <p>When Nights of Formal Focus starts to fire off Shooting Stars, it will grant all nearby party members the Dawn Star effect, causing their Normal and Charged Attack DMG to increase based on 5% of Layla's Max HP.</p>
                                    <p>Dawn Star can last up to 3s and will be removed 0.05s after dealing Normal or Charged Attack DMG.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Stream of Consciousness</h1>
                                    <p>Increases the Level of Dream of the Star-Stream Shaker by 3.</p>
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
                                    <h1>C6: Radiant Soulfire</h1>
                                    <p>Shooting Stars from Nights of Formal Focus deal 40% increased DMG, and Starlight Slugs from Dream of the Star-Stream Shaker deal 40% increased DMG.</p>
                                    <p>Additionally, the interval between the creation of Night Stars via Nights of Formal Focus is decreased by 20%.</p>
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