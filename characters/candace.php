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
    --highlighted-color:#5297D5 ; 
    --topnav-color: #DFE5EC;
    --search-bar-precolour:#DFE5EC;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'candace' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #5297D5b6, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
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
                            <p class="banner-description">A descendant of King Deshret with an amber left eye. The defender of Aaru Village.



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
                            <td><?php echo $fetch['stat']?></td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>10875</td>
                            <td>212</td>
                            <td>683</td>
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
                                    <p class="talent-card-title">Normal Attack: Gleaming Spear - Guardian Stance</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive spear strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">111.7%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">112.3%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">65.2%+79.7%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">174.4%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;"></td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to lunge forward, dealing damage to opponents along the way.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">228.2%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Sacred Rite: Heron's Sanctu</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="talent-card-text"></p>                            
                                    <p>Candace's fighting style is capable of warding off an entire tide of foes.</p>
                                    <h1>Tap</h1>
                                    <p>Rushes forward with her shield, dealing Hydro DMG to opponents in front of her.</p>
                                    <h1>Hold</h1>
                                    <p>Raises her shield to block incoming attacks from nearby opponents, forming a barrier that absorbs DMG based on her Max HP and absorbs Hydro DMG 250% more effectively. This barrier lasts until the Elemental Skill is unleashed.</p>
                                    <p>After holding for a certain period of time, Candace will finish charging, and when the skill button is released, the skill duration expires, or when the barrier is broken, she will perform a leaping strike that deals Hydro DMG to opponents in front of her.</p>
                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Shield DMG Absorption</td>
                                            <td style="text-align:right;">20.4% Max HP+2349</td>
                                        </tr>
                                        <tr>
                                            <td>Basic DMG</td>
                                            <td style="text-align:right;">20.4% Max HP</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Up DMG</td>
                                            <td style="text-align:right;">32.4% Max HP</td>
                                        </tr>
                                        <tr>
                                            <td>Press CD</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>
                                        <tr>
                                            <td>Holding CD</td>
                                            <td style="text-align:right;">9s</td>
                                        </tr>

                                    </table>
                                    <p><i>The oath of the guardians is more stalwart yet than the shields they inherit.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Wagtail's Tide</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="">Raising her weapon on high, Candace calls upon a divine blessing that deals AoE Hydro DMG based on her Max HP and continuously confers the Prayer of the Crimson Crown on your active character.</p>
                                <h1>Prayer of the Crimson Crown</h1>
                                <p>This effect has the following properties:</p>
                                <li>Characters deal increased Elemental DMG with their Normal Attacks.</li>
                                <li>Whenever a character takes the field, they will unleash a rippling wave of water that deals Hydro DMG to nearby opponents. There is a limited number of waves that can be triggered in the duration of this skill.</li>
                                <li>Sword, Claymore, and Polearm-wielding characters under this effect will obtain a Hydro Infusion.</li>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">6.6% Max HP</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">9s</td>
                                        </tr>
                                        <tr>
                                            <td>DMG Bonus</td>
                                            <td style="text-align:right;">20%</td>
                                        </tr>
                                        <tr>
                                            <td>Wave Impact DMG</td>
                                            <td style="text-align:right;">6.6% Max HP</td>
                                        </tr>
                                        <tr>
                                            <td>Wave Instances</td>
                                            <td style="text-align:right;">3</td>
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
                                    <p><i>This secret rite has been passed down through Candace's clan from generation to generation. Though the old faiths have become lost over the years, the sands still protect the heirs of the ancient realm.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>To Dawn's First Light</h1>
                                <p>Decreases climbing Stamina consumption for your own party members by 20%.</p>
                                <p>Not stackable with Passive Talents that provide the exact same effects.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Aegis of Crossed Arrows
</h1>
                                <p>If Candace is hit by an attack in the Hold duration of Sacred Rite: Heron's Sanctum, that skill will finish charging instantly.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Celestial Dome of Sand</h1>
                                <p>Characters affected by the Prayer of the Crimson Crown caused by Sacred Rite: Wagtail's Tide will deal 0.5% increased DMG to opponents for every 1,000 points of Candace's Max HP when they deal Elemental DMG with their Normal Attacks.
</p>
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
                                    <h1>C1: Returning Heiress of the Scarlet Sands</h1>
                                    <p>The duration of Prayer of the Crimson Crown effect triggered by Sacred Rite: Wagtail's Tide is increased by 3s.
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
                                    <h1>C2: Moon-Piercing Brilliance</h1>
                                    <p>When Sacred Rite: Heron's Sanctum hits opponents, Candace's Max HP will be increased by 20% for 15s.
</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Hunter's Supplication</h1>
                                    <p>Increases the Level of Sacred Rite: Wagtail's Tide by 3.</p>
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
                                    <h1>C4: Sentinel Oath</h1>
                                    <p>Shortens the Hold CD of Sacred Rite: Heron's Sanctum to be the same as that of the Tapping CD.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Heterochromatic Gaze</h1>
                                    <p>Increases the Level of Sacred Rite: Heron's Sanctum by 3.</p>
                                    <p>Maximum upgrade level is 15.
</p>
                                </div>
                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c6.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C6: The Overflow</h1>
                                    <p>When characters (excluding Candace herself) affected by the Prayer of the Crimson Crown caused by Sacred Rite: Wagtail's Tide deal Elemental DMG to opponents using Normal Attacks, an attack wave will be unleashed that deals AoE Hydro DMG equal to 15% of Candace's Max HP.</p>
                                    <p>This effect can trigger once every 2.3s and is considered Elemental Burst DMG.</p>
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