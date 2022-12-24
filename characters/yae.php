<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Yae Miko - Akasha</title>
    

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
    --highlighted-color:#EAAAEB ; 
    --topnav-color:#EDE8EE ;
    --search-bar-precolour:#EDE8EE;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'yae' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #EAAAEB75, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Yae/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Yae Miko</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Electro" flow="up">
                                    <img class="icons" src="../images/icons/b_Electro.png" >
                                </div>
                                <div tooltip="Catalyst" flow="up">
                                    <img class="icons" src="../images/icons/b_Catalyst.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">Lady Guuji of the Grand Narukami Shrine also serves as the editor-in-chief of Yae Publishing House. Unimaginable intelligence and cunning are hidden under her beautiful appearance.
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
                            <td>10372</td>
                            <td>340</td>
                            <td>569</td>
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
                                    <p class="talent-card-title">Normal Attack: Spiritfox Sin-Eater</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Summons forth kitsune spirits, initiating a maximum of 3 attacks that deal Electro DMG.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">67.4%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">65.5%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">96.7%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to deal AoE Electro DMG after a short casting time.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">242.9%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">50</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Plunges towards the ground from mid-air, damaging all opponents in her path with thunderous might. Deals AoE Electro DMG upon impact with the ground.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Yakan Evocation: Sesshou Sakura</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>To Yae, such dull tasks as can be accomplished by driving spirits out need not be done personally.</p>
                                <p>Moves swiftly, leaving a Sesshou Sakura behind.</p>

                                <h1>Sesshou Sakura</h1>
                                <p>Has the following properties:</p>
                                <li>Periodically strikes one nearby opponent with lightning, dealing Electro DMG</li>
                                <li>When there are other Sesshou Sakura nearby, their level will increase, boosting the DMG dealt by these lightning strikes.</li>
                                <p>This skill has three charges.</p>
                                <p>A maximum of 3 Sesshou Sakura can exist simultaneously. The initial level of each Sesshou Sakura is 1, and the initial highest level each sakura can reach is 3. If a new Sesshou Sakura is created too close to an existing one, the existing one will be destroyed.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Sesshou Sakura DMG: Level 1</td>
                                            <td style="text-align:right;">103.1%</td>
                                        </tr>
                                        <tr>
                                            <td>Sesshou Sakura DMG: Level 2</td>
                                            <td style="text-align:right;">128.9%</td>
                                        </tr>
                                        <tr>
                                            <td>Sesshou Sakura DMG: Level 3</td>
                                            <td style="text-align:right;">161.2%</td>
                                        </tr>
                                        <tr>
                                            <td>Sesshou Sakura DMG: Level 4</td>
                                            <td style="text-align:right;">201.5%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">14s</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="text-align:right;">4s</td>
                                        </tr>
                                </table>

                                    <p><i>"The kitsune spirits sealed in the branches are all yakan who stooped to preying upon humans. The yakan are two grades lower than us Sky Kitsune, and so, I hardly see the problem with... asking that they do my bidding. Now, this doesn't mean that you humans should go learning from our grading systems, no indeed — and as for which of us, kitsune or human, is higher up in the pecking order... Heh, wouldn't you like to know?"</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Great Secret Art: Tenko Kenshin</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="">Legends of "kitsunetsuki," or the manifestation of a kitsune's might, are common in Inazuma's folktales. One that particularly captures the imagination is that of the Sky Kitsune, said to cause lightning to fall down upon the foes of the Grand Narukami Shrine. Summons a lightning strike, dealing AoE Electro DMG.</p>
                                <p>When she uses this skill, Yae Miko will unseal nearby Sesshou Sakura, destroying their outer forms and transforming them into Tenko Thunderbolts that descend from the skies, dealing AoE Electro DMG. Each Sesshou Sakura destroyed in this way will create one Tenko Thunderbolt.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">442%</td>
                                        </tr>
                                        <tr>
                                            <td>Tenko Thunderbolt DMG</td>
                                            <td style="text-align:right;">567%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">22s</td>
                                        </tr>
                                        <tr>
                                            <td>Energy Cost</td>
                                            <td style="text-align:right;">90</td>
                                        </tr>

                                    </table>
                                    <p><i>Only at times like these will Yae reveal her Sky Kitsune form and wield lightning itself. None have seen the Lady Guuji's tails and lived to tell the story... so remember, as far as you are concerned, Lady Yae does not have a tail.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Meditations of a Yako</h1>
                                <p>Has a 25% chance to get 1 regional Character Talent Material (base material excluded) when crafting. The rarity is that of the base material.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>The Shrine's Sacred Shade</h1>
                                <p>When casting Great Secret Art: Tenko Kenshin, each Sesshou Sakura destroyed resets the cooldown for 1 charge of Yakan Evocation: Sesshou Sakura.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Enlightened Blessing</h1>
                                <p>Every point of Elemental Mastery Yae Miko possesses will increase Sesshou Sakura DMG by 0.15%.</p>
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
                                    <h1>C1: Yakan Offering</h1>
                                    <p>Each time Great Secret Art: Tenko Kenshin activates a Tenko Thunderbolt, Yae Miko will restore 8 Elemental Energy for herself.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Fox's Mooncall</h1>
                                    <p>Sesshou Sakura start at Level 2 when created, their max level is increased to 4, and their attack range is increased by 60%.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: The Seven Glamours</h1>
                                    <p>Increases the Level of Yakan Evocation: Sesshou Sakura by 3.</p>
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
                                    <h1>C4: Sakura Channeling</h1>
                                    <p>When Sesshou Sakura lightning hits opponents, the Electro DMG Bonus of all nearby party members is increased by 20% for 5s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Mischievous Teasing</h1>
                                    <p>Increases the Level of Great Secret Art: Tenko Kenshin by 3.</p>
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
                                    <h1>C6: Forbidden Art: Daisesshou</h1>
                                    <p>The Sesshou Sakura's attacks will ignore 60% of the opponents' DEF.</p>
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
    $("#yae-button").addClass("active");
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

