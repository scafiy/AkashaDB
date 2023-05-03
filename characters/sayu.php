<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Sayu - Akasha</title>
    

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
    --highlighted-color:#F6DCB2 ; 
    --topnav-color: #EDE8E1;
    --search-bar-precolour:#EDE8E1;
}


</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'sayu' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #F6DCB275, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Sayu/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Sayu</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Anemo" flow="up">
                                    <img class="icons" src="../images/icons/b_Anemo.png" >
                                </div>
                                <div tooltip="Claymore" flow="up">
                                    <img class="icons" src="../images/icons/b_Claymore.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A pint-sized ninja attached to the Shuumatsuban, who always seems sleep-deprived.
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
                            <td>11854</td>
                            <td>244</td>
                            <td>745</td>
                            <td>96</td>

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
                                    <p class="talent-card-title">Normal Attack:  Shuumatsuban Ninja Blade</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">132.7%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">131.1%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">79.8%+79.8%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">180.3%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Drains Stamina over time to perform continuous spinning attacks against all nearby opponents.</p>
                                    <p>At the end of the sequence, performs a more powerful slash.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack Spinning DMG</td>
                                            <td style="text-align:right;">114.9%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Final DMG</td>
                                            <td style="text-align:right;">208%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Yoohoo Art: Fuuin Dash</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>The special technique of the Yoohoo Ninja Arts!</p>
                                <p>Sayu curls up into a rolling Fuufuu Windwheel and smashes into opponents at high speed, dealing Anemo DMG. When the duration ends, she unleashes a Fuufuu Whirlwind Kick, dealing AoE Anemo DMG.</p>
                                <h1>Press</h1>
                                <p>Enters the Fuufuu Windwheel state, rolling forward a short distance before using the Fuufuu Whirlwind Kick.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Fuufuu Windwheel DMG</td>
                                            <td style="text-align:right;">61.2%</td>
                                        </tr>
                                        <tr>
                                            <td>Fuufuu Whirlwind Kick Press DMG</td>
                                            <td style="text-align:right;">269.3%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>

                                    </table>
                                    <h1>Hold</h1>
                                    <p>Rolls about continuously in the Fuufuu Windwheel state, increasing Sayu's resistance to interruption while within that state.</p>
                                    <p>During this time, Sayu can control the direction of her roll, and can use the skill again to end her Windwheel state early and unleash a stronger version of the Fuufuu Whirlwind Kick.</p>
                                    <p>The Hold version of this skill can trigger Elemental Absorption.</p>
                                    <p>This skill has a maximum duration of 10s and enters CD once its effects end. The longer Sayu remains in her Windwheel state, the longer the CD.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Fuufuu Windwheel DMG</td>
                                            <td style="text-align:right;">61.2%</td>
                                        </tr>
                                        <tr>
                                            <td>Fuufuu Whirlwind Kick Hold DMG</td>
                                            <td style="text-align:right;">369.9%</td>
                                        </tr>
                                        <tr>
                                            <td>Max Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">6 to 11s</td>
                                        </tr>



                                    </table>
                                    <h1>Elemental Absorption</h1>
                                    <p>If Sayu comes into contact with Hydro/Pyro/Cryo/Electro while in her Windwheel state, she will deal additional elemental DMG of that type.</p>
                                    <p>Elemental Absorption may only occur once per use of this skill.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Fuufuu Windwheel Elemental DMG</td>
                                            <td style="text-align:right;">28.6%</td>
                                        </tr>
                                        <tr>
                                            <td>Fuufuu Whirlwind Kick Elemental DMG</td>
                                            <td style="text-align:right;">129.5%</td>
                                        </tr>

                                    </table>
                                    <p>Absorption Priority: Pyro > Hydro > Electro > Cryo.</p>


                                    <p><i>Sayu can pull this skill off with her eyes closed. This technique was originally created for escaping, but now that she's got a Vision, might as well make her foes eat dirt while she's at it.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Yoohoo Art: Mujina Flurry</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>The other super special technique of the Yoohoo Ninja Arts! It summons a pair of helping hands for Sayu.</p>
                                <p>Deals Anemo DMG to nearby opponents and heals all nearby party members. The amount of HP restored is based on Sayu's ATK. This skill then summons a Muji-Muji Daruma.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill Activation DMG</td>
                                            <td style="text-align:right;">199%</td>
                                        </tr>

                                        <tr>
                                            <td>Skill Activation Healing</td>
                                            <td style="text-align:right;">156.7% ATK+1174</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">20s</td>
                                        </tr>
                                        <tr>
                                            <td>Energy Cost</td>
                                            <td style="text-align:right;">80</td>
                                        </tr>
                                </table>

                                <h1>Muji-Muji Daruma</h1>
                                <p>At specific intervals, the Daruma will take one of several actions based on the situation around it:</p>
                                <li>If the HP of nearby characters is above 70%, it will attack a nearby opponent, dealing Anemo DMG.</li>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Muji-Muji Daruma DMG</td>
                                            <td style="text-align:right;">88%</td>
                                        </tr>
                                </table>
                                <li>If there are active characters with 70% or less HP nearby, it will heal the active character with the lowest percentage HP left. If there are no opponents nearby, it will heal active characters nearby even if they have 70% HP or more.</li>

                                <table class="scalingtable">
                                        <tr>
                                            <td>Muji-Muji Daruma Healing</td>
                                            <td style="text-align:right;">135.8% ATK+1017</td>
                                        </tr>
                                </table>




                                    <p><i>People who don't know the first thing about ninjutsu love to watch Sayu show off this skill, and some have tried to learn it from her. But Sayu just wants to sleep and not be disturbed.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Yoohoo Art: Silencer's Secret</h1>
                                <p>When Sayu is in the party, your characters will not startle Crystalflies and certain other animals when getting near them.</p>
                                <p>Check the "Other" sub-category of the "Living Beings / Wildlife" section in the Archive for creatures this skill works on.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Someone More Capable</h1>
                                <p>When Sayu triggers a Swirl reaction while active, she heals all your characters and nearby allies for 300 HP. She will also heal an additional 1.2 HP for every point of Elemental Mastery she has.</p>
                                <p>This effect can be triggered once every 2s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>No Work Today!</h1>
                                <p>The Muji-Muji Daruma created by Yoohoo Art: Mujina Flurry gains the following effects:</p>
                                <li>When healing a character, it will also heal characters near that healed character for 20% the amount of HP.</li>
                                <li>Increases the AoE of its attack against opponents.</li>
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
                                    <h1>C1: Multi-Task no Jutsu</h1>
                                    <p>The Muji-Muji Daruma created by Yoohoo Art: Mujina Flurry will ignore HP limits and can simultaneously attack nearby opponents and heal characters.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Egress Prep</h1>
                                    <li>DMG of Fuufuu Whirlwind Kick in Press Mode increased by 3.3%.</li>
                                    <li>Every 0.5s in the Fuufuu Windwheel state will increase the DMG of this Fuufuu Whirlwind Kick by 3.3%. The maximum DMG increase possible through this method is 66%.</li>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Eh, the Bunshin Can Handle It</h1>
                                    <p>Increases the Level of Yoohoo Art: Mujina Flurry by 3.</p>
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
                                    <h1>C4: Skiving: New and Improved</h1>
                                    <p>Sayu recovers 1.2 Energy when she triggers a Swirl reaction.</p>
                                    <p>This effect occurs once every 2s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Speed Comes First</h1>
                                    <p>Increases the Level of Yoohoo Art: Fuuin Dash by 3.</p>
                                    <p>Increases the Level of Yoohoo Art: Fuuin Dash by 3.</p>
                                </div>
                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c6.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C6: Sleep O'Clock</h1>
                                    <p>The Muji-Muji Daruma created by Sayu's Yoohoo Art: Mujina Flurry will now also benefit from her Elemental Mastery. Each point of Sayu's Elemental Mastery will produce the following effects:</p>
                                    <li>Increases the damage dealt by the Muji-Muji Daruma's attacks by 0.2% ATK. A maximum of 400% ATK can be gained via this method.</li>
                                    <li>Increases the HP restored by the Muji-Muji Daruma by 3. A maximum of 6,000 additional HP can be restored in this manner.</li>
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
    $("#sayu-button").addClass("active");
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
