<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Xiao - Akasha</title>
    

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
    --highlighted-color:#2FABB1 ; 
    --topnav-color: #DCE7E8;
    --search-bar-precolour:#DCE7E8;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'xiao' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #2FABB175, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Xiao/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Xiao</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Anemo" flow="up">
                                    <img class="icons" src="../images/icons/b_Anemo.png" >
                                </div>
                                <div tooltip="Polearm" flow="up">
                                    <img class="icons" src="../images/icons/b_Polearm.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A Yaksha Adeptus who defends Liyue. Also heralded as the "Conquer of Demons" or "Vigilant Yaksha"
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
                            <td>Crit Rate</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>12736</td>
                            <td>349</td>
                            <td>799</td>
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
                                    <p class="talent-card-title">Normal Attack: Whirlwind Thrust</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 6 consecutive spear strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">46.3%+46.3%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">95.8%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">115.3%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">63.3%+63.3%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">120.3%</td>
                                        </tr>
                                        <tr>
                                            <td>6-Hit DMG</td>
                                            <td style="text-align:right;">161.2%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to perform an upward thrust.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">204%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">25</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Plunges from mid-air to strike the ground below, damaging opponents along the path and dealing AoE DMG upon impact.</p>
                                    <p>Xiao does not take DMG from performing Plunging Attacks.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Collision Plunge DMG</td>
                                            <td style="text-align:right;">150%</td>
                                        </tr>
                                        <tr>
                                            <td>Low/High Plunge DMG</td>
                                            <td style="text-align:right;">301%/375%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Lemniscatic Wind Cycling</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Xiao lunges forward, dealing Anemo DMG to opponents in his path.</p>
                                <p>Can be used in mid-air.</p>
                                <p>Starts with 2 charges.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">430%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                    </table>
                                    <p><i>According to the legends of another land, the world will someday be crushed by two great wind wheels. Xiao's mastery over polearms is transcendent, ripping his foes apart like those legendary wind wheels.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Bane of All Evil</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Xiao dons the Yaksha Mask that set gods and demons trembling millennia ago.</p>

                                <table class="scalingtable">

                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">15s</td>
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

                                    <h1>Yaksha's Mask</h1>
                                    <li>Greatly increases Xiao's jumping ability.</li>
                                    <li>Increases his attack AoE and attack DMG.</li>
                                                                        
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Normal/Charged/Plunging Attack DMG Bonus</td>
                                            <td style="text-align:right;">90.6%</td>
                                        </tr>

                                    </table>
                                    <li>Converts attack DMG into Anemo DMG, which cannot be overridden by any other elemental infusion.</li>
                                    
                                    
                                    <p>In this state, Xiao will continuously lose HP.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Life Drain</td>
                                            <td style="text-align:right;">2% Current HP Per Second</td>
                                        </tr>

                                    </table>
                                    
                                    <p>The effects of this skill end when Xiao leaves the field.</p>


                                    

                                    <p><i>Donning the Mask of the Yaksha, Xiao takes the terrifying, demon-conquering form of the Vigilant Yaksha. But this great power has also brought him great suffering. Some call him "The Bane of All Evil."</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Transcension: Gravity Defier</h1>
                                <p>Decreases climbing Stamina consumption for your own party members by 20%.</p>
                                <p>Not stackable with Passive Talents that provide the exact same effects.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Conqueror of Evil: Tamer of Demons</h1>
                                <p>While under the effects of Bane of All Evil, all DMG dealt by Xiao increases by 5%. DMG increases by a further 5% for every 3s the ability persists.</p>
                                <p>The maximum DMG Bonus is 25%.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Dissolution Eon: Heaven Fall</h1>
                                <p>Using Lemniscatic Wind Cycling increases the DMG of subsequent uses of Lemniscatic Wind Cycling by 15%.</p>
                                <p>This effect lasts for 7s, and has a maximum of 3 stacks. Gaining a new stack refreshes the effect's duration.</p>
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
                                    <h1>C1: Dissolution Eon: Destroyer of Worlds</h1>
                                    <p>Increases Lemniscatic Wind Cycling's charges by 1.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Annihilation Eon: Blossom of Kaleidos</h1>
                                    <p>When in the party and not on the field, Xiao's Energy Recharge is increased by 25%.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Conqueror of Evil: Wrath Deity</h1>
                                    <p>Increases the Level of Lemniscatic Wind Cycling by 3.</p>
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
                                    <h1>C4: Transcension: Extinction of Suffering</h1>
                                    <p>When Xiao's HP falls below 50%, he gains a 100% DEF Bonus.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Evolution Eon: Origin of Ignorance</h1>
                                    <p>Increases the Level of Bane of All Evil by 3.</p>
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
                                    <h1>C6: Conqueror of Evil: Guardian Yaksha</h1>
                                    <p>While under the effects of Bane of All Evil, hitting at least 2 opponents with Xiao's Plunging Attack will immediately grant him 1 charge of Lemniscatic Wind Cycling, and for the next 1s, he may use Lemniscatic Wind Cycling while ignoring its CD.</p>
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
    $("#xiao-button").addClass("active");
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