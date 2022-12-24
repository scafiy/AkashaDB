<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Mona - Akasha</title>
    

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
    --highlighted-color:#7C70C0 ; 
    --topnav-color:#E1E0E7 ;
    --search-bar-precolour:#E1E0E7;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'mona' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #7C70C075, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Mona/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Mona</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Hydro" flow="up">
                                    <img class="icons" src="../images/icons/b_Hydro.png" >
                                </div>
                                <div tooltip="Catalyst" flow="up">
                                    <img class="icons" src="../images/icons/b_Catalyst.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_Mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A mysterious young astrologer who proclaims herself to be “Astrologist Mona Megistus,” and who possesses abilities to match the title. Erudite, but prideful.
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
                            <td>Energy Recharge</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>10409</td>
                            <td>287</td>
                            <td>653</td>
                            <td>32.0%</td>

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
                                    <p class="talent-card-title">Normal Attack: Ripple of Fate</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 water splash attacks that deal Hydro DMG.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">63.9%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">61.2%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">76.2%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">95.5%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to deal AoE Hydro DMG after a short casting time.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">255%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">50</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Gathering the might of Hydro, Mona plunges towards the ground from mid-air, damaging all opponents in her path. Deals AoE Hydro DMG upon impact with the ground.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Mirror Reflection of Doom</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Creates an illusory Phantom of Fate from coalesced waterspouts.</p>
                                <h1>Phantom</h1>
                                <p>Has the following special properties:</p>
                                <li>Continuously taunts nearby opponents, attracting their fire.</li>
                                <li>Continuously deals Hydro DMG to nearby opponents.</li>
                                <li>When its duration expires, the Phantom explodes, dealing AoE Hydro DMG.</li>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>DoT</td>
                                            <td style="text-align:right;">54.4%</td>
                                        </tr>
                                        <tr>
                                            <td>Explosion DMG</td>
                                            <td style="text-align:right;">226%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>
                                    </table>

                                    <h1>Hold</h1>
                                    <p>Utilizes water currents to move backwards swiftly before conjuring a Phantom.</p>
                                    <p>Only one Phantom created by Mirror Reflection of Doom can exist at any time.</p>
                                    <p><i>Skilled astrologers have always dreamed of using a phantom facsimile of themselves to ward off imminent ill fate, but Mona must be the first to make such a mockery of it in all of Teyvat.</i></p>
                                </div>
                            </div>

                        
                            <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Illusory Torrent</p>
                                    <p class="level">Lv.1</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1>Alternate Sprint</h1>
                                <p>Mona cloaks herself within the water's flow, consuming Stamina to move rapidly.</p>
                                <p>When under the effect of Illusory Torrent, Mona can move at high speed on water.</p>
                                <p>Applies the Wet status to nearby opponents when she reappears.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Activation Stamina Consumption</td>
                                            <td style="text-align:right;">10</td>
                                        </tr>
                                        <tr>
                                            <td>Stamina Drain</td>
                                            <td style="text-align:right;">15/s</td>
                                        </tr>

                                    </table>
                                    <p><i>This is something that Mona can do, but her teacher cannot. Well, but it's not as if her teacher would pursue any matter concerning Hydro Visions anyway...</i></p>

                                
                            </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Stellaris Phantasm</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1>Illusory Bubble</h1>
                                <p>Traps opponents inside a pocket of destiny and also makes them Wet. Renders weaker opponents immobile.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Illusory Bubble Duration</td>
                                        <td style="text-align:right;">8s</td>
                                        
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
                                <p>When an opponent affected by Illusory Bubble sustains DMG, it has the following effects:</p>
                                <li>Applies an Omen to the opponent, which gives a DMG Bonus, also increasing the DMG of the attack that causes it.</li>
                                <p>Removes the Illusory Bubble, dealing Hydro DMG in the process.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Illusory Bubble Explosion DMG</td>
                                        <td style="text-align:right;">752%</td>
                                    </tr>
                                </table>
                                <h1>Omen</h1>
                                <p>During its duration, increases DMG taken by opponents.</p>

                                <table class="scalingtable">
                                    <tr>
                                        <td>DMG Bonus</td>
                                        <td style="text-align:right;">58%</td>
                                    </tr>
                                    <tr>
                                        <td>Omen Duration</td>
                                        <td style="text-align:right;">5s</td>
                                    </tr>
                                </table>


                                    <p><i>It was from the time that gods first traced the lights in the heavens with their eyes that the notion of "fate" was born.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Principium of Astrology</h1>
                                <p>When Mona crafts Weapon Ascension Materials, she has a 25% chance to refund a portion of the crafting materials used.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>"Come 'n' Get Me, Hag!"</h1>
                                <p>After she has used Illusory Torrent for 2s, if there are any opponents nearby, Mona will automatically create a Phantom.</p>
                                <p>A Phantom created in this manner lasts for 2s, and its explosion DMG is equal to 50% of Mirror Reflection of Doom.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Waterborne Destiny</h1>
                                <p>Increases Mona's Hydro DMG Bonus by a degree equivalent to 20% of her Energy Recharge rate.</p>
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
                                    <h1>C1: Prophecy of Submersion</h1>
                                    <p>When any of your own party members hits an opponent affected by an Omen, the effects of Hydro-related Elemental Reactions are enhanced for 8s:</p>
                                    <li>Electro-Charged DMG increases by 15%.</li>
                                    <li>Vaporize DMG increases by 15%.</li>
                                    <li>Hydro Swirl DMG increases by 15%.</li>
                                    <li>Frozen duration is extended by 15%.</li>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Lunar Chain</h1>
                                    <p>When a Normal Attack hits, there is a 20% chance that it will be automatically followed by a Charged Attack.</p>
                                    <p>This effect can only occur once every 5s.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Restless Revolution</h1>
                                    <p>Increases the Level of Stellaris Phantasm by 3.</p>
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
                                    <h1>C4: Prophecy of Oblivion</h1>
                                    <p>When any party member attacks an opponent affected by an Omen, their CRIT Rate is increased by 15%.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Mockery of Fortuna</h1>
                                    <p>Increases the Level of Mirror Reflection of Doom by 3.</p>
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
                                    <h1>C6: Rhetorics of Calamitas</h1>
                                    <p>Upon entering Illusory Torrent, Mona gains a 60% increase to the DMG of her next Charged Attack per second of movement.</p>
                                    <p>A maximum DMG Bonus of 180% can be achieved in this manner. The effect lasts for no more than 8s.</p>
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
    $("#mona-button").addClass("active");
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