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
    margin-right:20px;
    transform:scale(1.1);
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-left:auto;
        margin-right:auto;    
    }
}

:root {
    --highlighted-color:#4F50AD ; 
    --topnav-color: #DFDFE8;
    --search-bar-precolour:#DFDFE8;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'cyno' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #4F50ADb6, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
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
                            <p class="banner-description">The General Mahamatra in charge of supervising the researchers of the Akademiya. It is said that when he gets down to work, the General Mahamatra is even more efficient than the "Great Vayuvyastra" made by the Kshahrewar.





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
                            <td>Crit DMG</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>12491</td>
                            <td>318</td>
                            <td>859</td>
                            <td>88.4%</td>

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
                                    <p class="talent-card-title">Normal Attack: Invoker's Spear</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive spear strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">90.5%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">88%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">53.8%+53.8%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">139.4%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to lunge forward, dealing damage to opponents along the way.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">224.8%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Secret Rite: Chasmic Soulfarer</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="talent-card-text"></p>                            
                                    <p>Performs a swift thrust, dealing Electro DMG to opponents along the path.</p>
                                    <p>When Cyno is under the Pactsworn Pathclearer state triggered by Sacred Rite: Wolf's Swiftness, he will instead unleash a Mortuary Rite that deals thunderous AoE Electro DMG and extends the duration of Pactsworn Pathclearer.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">221.7%</td>
                                        </tr>
                                        <tr>
                                            <td>Mortuary Rite DMG</td>
                                            <td style="text-align:right;">266.6%</td>
                                        </tr>
                                        <tr>
                                            <td>Pactsworn Pathclearer Duration Bonus</td>
                                            <td style="text-align:right;">4s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">7.5s</td>
                                        </tr>
                                        <tr>
                                            <td>Mortuary Rite CD</td>
                                            <td style="text-align:right;">3s</td>
                                        </tr>


                                    </table>
                                    <p><i>"This judgment brooks no choice. There is no rejection or acceptance here... We have both long been bound up in this conviction."</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Wolf's Swiftness</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">  
                                <p>Calls upon a divine spirit to indwell him, morphing into the Pactsworn Pathclearer.</p>
                                <h1>Pactsworn Pathclearer</h1>
                                <p>Cyno's Normal, Charged, and Plunging Attacks will be converted to Electro DMG that cannot be overridden.</p>
                                <li>Cyno's Elemental Mastery and resistance to interruption will increase, and he gains immunity to Electro-Charged DMG.</li>

                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">143.8%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">151.5%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">192.2%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">95%+95%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">240.4%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">185.7%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">25</td>
                                        </tr>
                                        <tr>
                                            <td>Collision Plunge DMG</td>
                                            <td style="text-align:right;">117.5%</td>
                                        </tr>
                                        <tr>
                                            <td>Low/High Plunge DMG</td>
                                            <td style="text-align:right;">235%/293%</td>
                                        </tr>
                                        <tr>
                                            <td>Elemental Mastery Bonus</td>
                                            <td style="text-align:right;">100</td>
                                        </tr>
                                        <tr>
                                            <td>Basic Duration</td>
                                            <td style="text-align:right;">10s</td>
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
                                    <p>This effect will be canceled when Cyno leaves the field and lasts a maximum of 18s.</p>
                                    <p><i>The secret rituals passed down within the ancient nation are as a final judgment to the General Mahamatra. Whether now or in the past, whether great storm or serpent, none shall shake the majesty of the law.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>The Gift of Silence</h1>
                                <p>Gains 25% more rewards when dispatched on a Sumeru Expedition for 20 hours.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Featherfall Judgment</h1>
                                <p>When Cyno is in the Pactsworn Pathclearer state activated by Sacred Rite: Wolf's Swiftness, Cyno will enter the Endseer stance at intervals. If he activates Secret Rite: Chasmic Soulfarer while affected by this stance, he will activate the Judication effect, increasing the DMG of this Secret Rite: Chasmic Soulfarer by 35%, and firing off 3 Duststalker Bolts that deal 100% of Cyno's ATK as Electro DMG.</p>
                                <p>Duststalker Bolt DMG is considered Elemental Skill DMG.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Authority Over the Nine Bows</h1>
                                <p>Cyno's DMG values will be increased based on his Elemental Mastery as follows:</p>
                                <li>Pactsworn Pathclearer's Normal Attack DMG is increased by 150% of his Elemental Mastery.</li>
                                <li>Duststalker Bolt DMG from his Passive Talent Featherfall Judgment is increased by 250% of his Elemental Mastery.</li>
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
                                    <h1>C1: Ordinance: Unceasing Vigil</h1>
                                    <p>After using Sacred Rite: Wolf's Swiftness, Cyno's Normal Attack SPD will be increased by 20% for 10s. If the Judication effect of his Passive Talent Featherfall Judgment is triggered during Secret Rite: Chasmic Soulfarer, the duration of this increase will be refreshed.</p>
                                    <p>You need to unlock the Passive Talent "Featherfall Judgment."
</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Ceremony: Homecoming of Spirits</h1>
                                    <p>When Cyno's Normal Attacks hit opponents, his Electro DMG Bonus will increase by 10% for 4s. This effect can be triggered once every 0.1s. Max 5 stacks.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Precept: Lawful Enforcer</h1>
                                    <p>Increases the Level of Sacred Rite: Wolf's Swiftness by 3.</p>
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
                                    <h1>C4: Austerity: Forbidding Guard</h1>
                                    <p>When Cyno is in the Pactsworn Pathclearer state triggered by Sacred Rite: Wolf's Swiftness, after he triggers Electro-Charged, Superconduct, Overloaded, Quicken, Aggravate, Hyperbloom, or an Electro Swirl reaction, he will restore 3 Elemental Energy for all nearby party members (except himself.)</p>
                                    <p>This effect can occur 5 times within one use of Sacred Rite: Wolf's Swiftness.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Funerary Rite: The Passing of Starlight</h1>
                                    <p>Increases the Level of Secret Rite: Chasmic Soulfarer by 3.</p>
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
                                    <h1>C6: Raiment: Just Scales</h1>
                                    <p>After using Sacred Rite: Wolf's Swiftness or triggering the Judication effect of the Passive Talent "Featherfall Judgment," Cyno will gain 4 stacks of the "Day of the Jackal" effect. When he hits opponents with Normal Attacks, he will consume 1 stack of "Day of the Jackal" to fire off one Duststalker Bolt.</p>
                                    <p>"Day of the Jackal" lasts for 8s. Max 8 stacks. It will be canceled once Pactsworn Pathclearer ends.</p>
                                    <p>A maximum of 1 Duststalker Bolt can be unleashed this way every 0.4s.</p>
                                    <p>You must first unlock the Passive Talent "Featherfall Judgment."</p>
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