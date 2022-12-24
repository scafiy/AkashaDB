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

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'faruzan' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

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
    --highlighted-color:<?php echo $fetch['primarycolor']?> ; 
    --topnav-color:<?php echo $fetch['secondarycolor']?> ;
    --search-bar-precolour:<?php echo $fetch['secondarycolor']?>;

}

</style>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, transparent, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
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
                            <p class="banner-description">
                                <?php echo $fetch['description']?>
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
                            <td>9570</td>
                            <td>196</td>
                            <td>628</td>
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
                                    <p class="talent-card-title">Normal Attack: Parthian Shot</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">82.2%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">77.5%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">97.7%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">129.7%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, mighty winds will accumulate on the arrowhead. A fully charged wind arrow will deal Anemo DMG.</p>
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
                                    <p>Fires off a shower of arrows in mid-air before falling and striking the ground, hitting opponents along the path and dealing AoE DMG upon impact.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Wind Realm of Nasamjnin</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                                <p>Faruzan deploys a polyhedron that deals AoE Anemo DMG to nearby opponents. She will also enter the Manifest Gale state.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">253%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>
                                    </table>
                                    <p>While in the Manifest Gale state, Faruzan's next fully charged shot will consume this state and will become a Hurricane Arrow that contains high-pressure currents. This arrow deals Anemo DMG based on the DMG of a fully charged Aimed Shot from "Normal Attack: Parthian Shot."</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Manifest Gale Duration</td>
                                            <td style="text-align:right;">18s</td>
                                        </tr>
                                    </table>

                                    <p>While in the Manifest Gale state, Faruzan's next fully charged shot will consume this state and will become a Hurricane Arrow that contains high-pressure currents. This arrow deals Anemo DMG based on the DMG of a fully charged Aimed Shot from "Normal Attack: Parthian Shot."</p>

                                    <h1>Pressurized Collapse</h1>
                                    <p>The Hurricane Arrow will apply a Pressurized Collapse effect to the opponent or character hit. This effect will be removed after a short delay, creating a vortex that deals AoE Anemo DMG and pulls nearby objects and opponents in. If the Hurricane Arrow does not hit any opponent or character, it will create a Pressurized Collapse effect at its point of impact.</p>
                                    <p>The vortex DMG is considered Elemental Skill DMG.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Pressurized Collapse Vortex DMG</td>
                                            <td style="text-align:right;">183.6%</td>
                                        </tr>
                                    </table>


                                    <p><i>The winds of truth buffet the spirits of those who seek truth, dispersing the miasma of preconception.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: The Wind's Secret Ways</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Faruzan deploys a Dazzling Polyhedron that unleashes a Whirlwind Pulse and deals AoE Anemo DMG.</p>
                                <p>While the Dazzling Polyhedron persists, it will continuously move along a triangular path. Once it reaches each corner of that triangular path, it will unleash 1 more Whirlwind Pulse.</p>
                                <h1>Whirlwind Pulse</h1>
                                <li>When the Whirlwind Pulse is unleashed, it will apply Perfidious Wind's Bale to nearby opponents, decreasing their Anemo RES.</li>
                                <li>The Whirlwind Pulse will also apply Prayerful Wind's Benefit to all nearby party members when it is unleashed, granting them an Anemo DMG Bonus.</li>

                                <table class="scalingtable">
                                    <tr>
                                        <td>Skill DMG</td>
                                        <td style="text-align:right;">641.9%</td>
                                    </tr>
                                    <tr>
                                        <td>Anemo DMG Bonus</td>
                                        <td style="text-align:right;">30.6%</td>
                                    </tr>
                                    <tr>
                                        <td>Prayerful Wind's Benefit Duration</td>
                                        <td style="text-align:right;">4s</td>
                                    </tr>
                                    <tr>
                                        <td>Anemo RES Decrease</td>
                                        <td style="text-align:right;">30%</td>
                                    </tr>
                                    <tr>
                                        <td>Perfidious Wind's Bale Duration</td>
                                        <td style="text-align:right;">4s</td>
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

                                    <p><i>One must have respect for the unknown wisdom that one might find hidden in ancient ruins.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Tomes Light the Path</h1>
                                <p>Gains 25% more rewards when dispatched on a Sumeru Expedition for 20 hours.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Impetuous Flow</h1>
                                <p>When Faruzan is in the Manifest Gale state created by Wind Realm of Nasamjnin, the amount of time taken to charge a shot is decreased by 60%, and she can apply The Wind's Secret Ways' Perfidious Wind's Bale to opponents who are hit by the vortex created by Pressurized Collapse.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Lost Wisdom of the Seven Caverns</h1>
                                <p>When characters affected by The Wind's Secret Ways' Prayerful Wind's Gift deal Anemo DMG using Normal, Charged, Plunging Attacks, Elemental Skills, or Elemental Bursts to opponents, they will gain the Hurricane Guard effect: This DMG will be increased based on 32% of Faruzan's Base ATK. 1 instance of Hurricane Guard can occur once every 0.8s. This DMG Bonus will be cleared after Prayerful Wind's Benefit expires or after the effect is triggered once.</p>
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
                                    <h1>C1: Truth by Any Means</h1>
                                    <p>Faruzan can fire off a maximum of 2 Hurricane Arrows using fully charged Aimed Shots while under the effect of a single Manifest Gale created by Wind Realm of Nasamjnin.
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
                                    <h1>C2: Overzealous Intellect</h1>
                                    <p>The duration of the Dazzling Polyhedron created by The Wind's Secret Ways is increased by 6s.
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
                                    <h1>C3: Spirit-Orchard Stroll</h1>
                                    <p>Increases the Level of Wind Realm of Nasamjnin by 3.</p>
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
                                    <h1>C4: Divine Comprehension</h1>
                                    <p>The vortex created by Pressurized Collapses will restore Energy to Faruzan based on the number of opponents hit: If it hits 1 opponent, it will restore 2 Energy for Faruzan. Each additional opponent hit will restore 0.5 more Energy for Faruzan.</p>
                                    <p>A maximum of 4 Energy can be restored to her per vortex.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Wonderland of Rumination</h1>
                                    <p>Increases the Level of The Wind's Secret Ways by 3.</p>
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
                                    <h1>C6: The Wondrous Path of Truth</h1>
                                    <p>Characters affected by The Wind's Secret Ways' Prayerful Wind's Benefit have 40% increased CRIT DMG when they deal Anemo DMG. When the active character deals DMG while affected by Prayerful Wind's Benefit, they will apply Pressurized Collapse to the opponent damaged. This effect can be triggered once every 3s. This CD is shared between all party members.</p>
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