<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Gorou - Akasha</title>
    

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
    --highlighted-color: #C59740; 
    --topnav-color:#E8E3DB ;
    --search-bar-precolour:#E8E3DB;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'gorou' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #C5974075, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Gorou/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Gorou</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Geo" flow="up">
                                    <img class="icons" src="../images/icons/b_Geo.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">The great general of Watatsumi Island's forces. He is deeply trusted by his subordinates.
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
                            <td>Geo DMG Bonus</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>9570</td>
                            <td>183</td>
                            <td>648</td>
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
                                    <p class="talent-card-title">Normal Attack: Ripping Fang Fletching</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">69.4%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">68.3%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">90.9%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">108.4%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, stone crystals will accumulate on the arrowhead. A fully charged crystalline arrow will deal Geo DMG.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Inuzaka All-Round Defense</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                                <p>Deals AoE Geo DMG and sets up a General's War Banner.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">182.2%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>

                                    </table>

                                <h1>General's War Banner</h1>
                                <p>Provides up to 3 buffs to active characters within the skill's AoE based on the number of Geo characters in the party at the time of casting:</p>
                                <li>1 Geo character: Adds "Standing Firm" - DEF Bonus.</li>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>DEF Increase</td>
                                            <td style="text-align:right;">350</td>
                                        </tr>

                                    </table>

                                <li>2 Geo characters: Adds "Impregnable" - Increased resistance to interruption.</li>
                                <li>3 Geo characters: Adds "Crunch" - Geo DMG Bonus.</li>
                                
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Geo DMG Bonus</td>
                                            <td style="text-align:right;">15%</td>
                                        </tr>

                                    </table>
                                <p>Gorou can deploy only 1 General's War Banner on the field at any one time. Characters can only benefit from 1 General's War Banner at a time. When a party member leaves the field, the active buff will last for 2s.</p>
                                <h1>Hold</h1>
                                <p>Adjust the location of the skill.</p>
                                    <p><i>"Take up this formation and we'll be safe — I guarantee it!" As a general and a leader of troops, the last thing Gorou wants is to see is those who follow him getting hurt.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Juuga: Forward Unto Victory</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Displaying his valor as a general, Gorou deals AoE Geo DMG and creates a field known as General's Glory to embolden his comrades.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">167% DEF</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">9s</td>
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
                                <h1>General's Glory</h1>
                                <p>This field has the following properties:</p>
                                <li>Like the General's War Banner created by Inuzaka All-Round Defense, provides buffs to active characters within the skill's AoE based on the number of Geo characters in the party. Also moves together with your active character.</li>
                                <li>Generates 1 Crystal Collapse every 1.5s that deals AoE Geo DMG to 1 opponent within the skill's AoE.</li>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Crystal Collapse DMG</td>
                                        <td style="text-align:right;">104% DEF</td>
                                    </tr>
                                </table>
                                <li>Pulls 1 elemental shard in the skill's AoE to your active character's position every 1.5s (elemental shards are created by Crystallize reactions).</li>
                                
                                


                                    <p><i></i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Seeker of Shinies</h1>
                                <p>Displays the location of nearby resources unique to Inazuma on the mini-map.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Heedless of the Wind and Weather</h1>
                                <p>After using Juuga: Forward Unto Victory, all nearby party members' DEF is increased by 25% for 12s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>A Favor Repaid</h1>
                                <p>Gorou receives the following DMG Bonuses to his attacks based on his DEF:</p>
                                <li>Inuzaka All-Round Defense: Skill DMG increased by 156% of DEF</li>
                                <li>Juuga: Forward Unto Victory: Skill DMG and Crystal Collapse DMG increased by 15.6% of DEF</li>
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
                                    <h1>C1: Rushing Hound: Swift as the Wind</h1>
                                    <p>When characters (other than Gorou) within the AoE of Gorou's General's War Banner or General's Glory deal Geo DMG to opponents, the CD of Gorou's Inuzaka All-Round Defense is decreased by 2s.</p>
                                    <p>This effect can occur once every 10s.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Sitting Hound: Steady as a Clock</h1>
                                    <p>While General's Glory is in effect, its duration is extended by 1s when a nearby active character obtains an Elemental Shard from a Crystallize reaction.</p>
                                    <p>This effect can occur once every 0.1s. Max extension is 3s.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Mauling Hound: Fierce as Fire</h1>
                                    <p>Increases the Level of Inuzaka All-Round Defense by 3.</p>
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
                                    <h1>C4: Lapping Hound: Warm as Water</h1>
                                    <p>When General's Glory is in the "Impregnable" or "Crunch" states, it will also heal active characters within its AoE by 50% of Gorou's own DEF every 1.5s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Striking Hound: Thunderous Force</h1>
                                    <p>Increases the Level of Juuga: Forward Unto Victory by 3.</p>
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
                                    <h1>C6: Valiant Hound: Mountainous Fealty</h1>
                                    <p>For 12s after using Inuzaka All-Round Defense or Juuga: Forward Unto Victory, increases the CRIT DMG of all nearby party members' Geo DMG based on the buff level of the skill's field at the time of use:</p>
                                    <li>"Standing Firm": +10%</li>
                                    <li>"Impregnable": +20%</li>
                                    <li>"Crunch": +40%</li>
                                    <p>This effect cannot stack and will take reference from the last instance of the effect that is triggered.</p>
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
    $("#gorou-button").addClass("active");
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