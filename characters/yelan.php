<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Yelan - Akasha</title>
    

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
    --highlighted-color:#475ECF ; 
    --topnav-color:#DEE0EB ;
    --search-bar-precolour:#DEE0EB;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'yelan' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #475ECF75, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Yelan/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Yelan</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Hydro" flow="up">
                                    <img class="icons" src="../images/icons/b_Hydro.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A mysterious person who claims to work for the Ministry of Civil Affairs, but is a "non-entity" on the Ministry of Civil Affairs' list.
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
                            <td>14450</td>
                            <td>244</td>
                            <td>548</td>
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
                                    <p class="talent-card-title">Normal Attack: Stealthy Bowshot</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">74.7%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">71.7%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">94.8%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">59.7%+59.7%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;"></td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, flowing water will accumulate on the arrowhead. A fully charged torrential arrow will deal Hydro DMG.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Aimed Shot</td>
                                            <td style="text-align:right;">80.6%</td>
                                        </tr>
                                        <tr>
                                            <td>Fully-Charged Aimed Shot</td>
                                            <td style="text-align:right;">211%</td>
                                        </tr>


                                    </table>

                                    <h1>Breakthrough</h1>
                                    <p>Yelan will enter a "Breakthrough" state after spending 5s out of combat, which will cause her next Charged Aimed Shot to have 80% decreased charge time, and once charged, she can fire a "Breakthrough Barb" that will deal AoE Hydro DMG based on Yelan's Max HP.</p>
                                    <table class="scalingtable">

                                        <tr>
                                            <td>Breakthrough Barb DMG</td>
                                            <td style="text-align:right;">19.68% Max HP</td>
                                        </tr>

                                    </table>


                                    <h1>Plunging Attack</h1>
                                    <p>Fires off a shower of arrows in mid-air before falling and striking the ground, dealing AoE DMG upon impact.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Lingering Lifeline</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Fires off a Lifeline that allows her to move rapidly, entangling and marking opponents along its path.</p>
                                <p>When this rapid movement ends, the Lifeline will explode, dealing Hydro DMG to the marked opponents based on Yelan's Max HP.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">38.4% Max HP</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                </table>

                                <h1>Tap</h1>
                                <p>Moves a certain distance forward swiftly.</p>

                                <h1>Hold</h1>
                                <p>Engages in continuous, swift movement, during which Yelan's resistance to interruption is increased.</p>
                                <p>During this time, Yelan can control this rapid movement and end it by using this Skill again.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Max Duration (Hold)</td>
                                            <td style="text-align:right;">3s</td>
                                        </tr>

                                </table>

                                <p>Additionally, each opponent marked by the Lifeline when it explodes grants Yelan a 34% chance to reset her Breakthrough state.</p>


                                    <p><i>Not until she begins to tug on the strings do evildoers, crooks, and scheming villains alike know that there is no escape.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Depth-Clarion Dice</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Deals AoE Hydro DMG and creates an "Exquisite Throw," which aids her in battle.</p>



                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">12.42% Max HP</td>
                                        </tr>
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

                                <h1>Exquisite Throw</h1>
                                <p>Follows the character around and will initiate a coordinated attack under the following circumstances, dealing Hydro DMG based on Yelan's Max HP:</p>
                                <li>Can occur once every second when your active character uses a Normal Attack.</li>
                                <li>Will occur each time Yelan's Lifeline explodes and hits opponents.</li>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Exquisite Throw DMG</td>
                                            <td style="text-align:right;">8.28% Max HP x3</td>
                                        </tr>

                                </table>
                            <p><i>"A gambling addiction is going to do you no good. I mean, let me just do the math for you as the dealer. What do you think your odds of beating me are, when I have seven dice and you, only one?"</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Necessary Calculation</h1>
                                <p>Gains 25% more rewards when dispatched on a Liyue Expedition for 20 hours.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Turn Control</h1>
                                <p>When the party has 1/2/3/4 Elemental Types, Yelan's Max HP is increased by 6%/12%/18%/30%.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Adapt With Ease</h1>
                                <p>So long as an Exquisite Throw is in play, your own active character deals 1% more DMG. This increases by a further 3.5% DMG every second. The maximum increase to DMG dealt is 50%.</p>
                                <p>The pre-existing effect will be dispelled if Depth-Clarion Dice is recast during its duration.</p>
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
                                    <h1>C1: Enter the Plotters</h1>
                                    <p>Lingering Lifeline gains 1 additional charge.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Taking All Comers</h1>
                                    <p>When Exquisite Throw conducts a coordinated attack, it will fire an additional water arrow that will deal 14% of Yelan's Max HP as Hydro DMG.</p>
                                    <p>This effect can trigger once every 1.8s.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Beware the Trickster's Dice</h1>
                                    <p>Increases the Level of Depth-Clarion Dice by 3.</p>
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
                                    <h1>C4: Bait-and-Switch</h1>
                                    <p>Increases all party members' Max HP by 10% for 25s for every opponent marked by Lifeline when the Lifeline explodes. A maximum increase of 40% Max HP can be attained in this manner.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Dealer's Sleight</h1>
                                    <p>Increases the Level of Lingering Lifeline by 3.</p>
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
                                    <h1>C6: Winner Takes All</h1>
                                    <p>After using Depth-Clarion Dice, Yelan will enter the Mastermind state.</p>
                                    <p>In this state, all of Yelan's Normal Attacks will be special Breakthrough Barbs. These Breakthrough Barbs will have similar abilities to normal ones and the DMG dealt will be considered Charged Attack DMG, dealing 156% of a normal Breakthrough Barb's DMG.</p>
                                    <p> </p>
                                    <p>The Mastermind state lasts 20s and will be cleared after Yelan fires 5 arrows.</p>
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
    $("#yelan-button").addClass("active");
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

