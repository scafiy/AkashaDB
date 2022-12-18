<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Amber - Akasha</title>
    

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

@media all and (max-width: 1200px) {
    .splash-art{
        margin-right:-20px;
    }
}

:root {
    --highlighted-color: #E76F52; 
    --topnav-color: #EBE3E1;
    --search-bar-precolour:#EBE3E1;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'amber' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #e7705275, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/<?php echo $fetch['url']?>/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Amber</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Pyro" flow="up">
                                    <img class="icons" src="../images/icons/b_pyro.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_bow.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">Always energetic and full of life, Amber's the best — albeit only — Outrider of the Knights of Favonius.</p>
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
                        <td>Materials</td>

                    </tr>

                    <tr>
                        <td>90/90</td>
                        <td>9461</td>
                        <td>223</td>
                        <td>601</td>
                        <td>24.0%</td>
                        <td></td>

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
                                <p class="talent-card-title">Sharpshooter</p>
                                <p class="level">Lv.9</p>
                            </div>
                        </div>

                        <div class="talent-card-description">
                            <h1 class="">Normal Attack</h1>
                            <p class="">Perform up to 5 consecutive shots with a bow.</p>
                            <table class="scalingtable">
                                    <tr>
                                        <td>1-Hit DMG</td>
                                        <td style="text-align:right;">66.4%</td>
                                    </tr>
                                    <tr>
                                        <td>2-Hit DMG</td>
                                        <td style="text-align:right;">66.4%</td>
                                    </tr>
                                    <tr>
                                        <td>3-Hit DMG</td>
                                        <td style="text-align:right;">85.3%</td>
                                    </tr>
                                    <tr>
                                        <td>4-Hit DMG</td>
                                        <td style="text-align:right;">86.9%</td>
                                    </tr>
                                    <tr>
                                        <td>5-Hit DMG</td>
                                        <td style="text-align:right;">109%</td>
                                    </tr>

                                </table>

                                <h1>Charged Attack</h1>
                                <p>Perform a more precise Aimed Shot with increased DMG. While aiming, flames will accumulate on the arrowhead. A fully charged flaming arrow will deal Pyro DMG.</p>
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
                                        <td>Plunge DMG</td>
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
                                <p class="talent-card-title">Explosive Puppet</p>
                            </div>
                        </div>

                        <div class="talent-card-description">
                            <p class="talent-card-text">The ever-reliable Baron Bunny takes the stage.</p>                            
                                <h1>Baron Bunny</h1> 
        
                                <p>Continuously taunts the enemy, drawing their fire.</p>
                                <p>Baron Bunny's HP scales with Amber's Max HP.</p>
                                <p>When destroyed or when its timer expires, Baron Bunny explodes, dealing AoE Pyro DMG.</p>

                                <h1>Hold</h1>
                                <p>Adjusts the throwing direction of Baron Bunny.</p>
                                <p>The longer the button is held, the further the throw.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Inherited HP</td>
                                        <td style="text-align:right;">70.3%</td>
                                    </tr>
                                    <tr>
                                        <td>Explosion DMG</td>
                                        <td style="text-align:right;">209%</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">15s</td>
                                    </tr>
                                </table>
                                <i>Baron Bunny hails from a storied lineage, but Amber has stopped keeping count since Baron Bunny the 893rd.</i>
                            </div>
                        </div>

                    <div class="talent-card">
                        <div class="talent-card-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/na.png" alt="">
                            </div>

                            <div class="talent-card-heading-text">
                                <p class="talent-card-title">Fiery Rain</p>
                            </div>
                        </div>

                        <div class="talent-card-description">
                            <p class="">Fires off a shower of arrows, dealing continuous AoE Pyro DMG.</p>
                            <table class="scalingtable">
                                    <tr>
                                        <td>Fiery Rain DMG Per Wave</td>
                                        <td style="text-align:right;">47.7%</td>
                                    </tr>
                                    <tr>
                                        <td>Total Fiery Rain DMG</td>
                                        <td style="text-align:right;">859%</td>
                                    </tr>
                                    <tr>
                                        <td>Duration</td>
                                        <td style="text-align:right;">2s</td>
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
                                <i>Amber's passion truly burns hot.</i>

                              
                        </div>
                </div>


                

                <p class="title">Passives</p>

                <div class="passive-deck">
                    <div class="passive-deck-wrapper">

                
                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                            </div>                        
                            
                            <h1>Gliding Champion</h1>
                            <p>Decreases gliding Stamina consumption for your own party members by 20%.</p>
                            <p>Not stackable with Passive Talents that provide the exact same effects.</p>
                        </div>

                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                            </div> 
                            <h1>Every Arrow Finds Its Target</h1>
                            <p>Increases the CRIT Rate of Fiery Rain by 10% and widens its AoE by 30%.</p>
                        </div>

                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                            </div> 
                            <h1>Precise Shot</h1>
                            <p>Aimed Shot hits on weak points increase ATK by 15% for 10s.</p>
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
                                <h1>C1: One Arrow to Rule Them All</h1>
                                <p>Fires 2 arrows per Aimed Shot. The second arrow deals 20% of the first arrow's DMG.</p>
                            </div>

                        </div>
                    </div>



                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                            </div>
                            <div class="constellation-text">
                                <h1>C2: Bunny Triggered</h1>
                                <p>Baron Bunny, new and improved! Hitting Baron Bunny's foot with a fully-charged Aimed Shot manually detonates it.</p>
                                <p>Explosion via manual detonation deals 200% additional DMG.</p>
                            </div>
                        </div>
                    </div>




                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                            </div>

                            <div class="constellation-text">
                                <h1>C3: It Burns!</h1>
                                <p>Increases the Level of Fiery Rain by 3.</p>
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
                                <h1>C4: It's Not Just Any Doll...</h1>
                                <p>Decreases Explosive Puppet's CD by 20%. Adds 1 additional charge.</p>
                            </div>

                        </div>
                    </div>


                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                            </div>
                            <div class="constellation-text">
                                <h1>C5: It's Baron Bunny!</h1>
                                <p>Increases the Level of Explosive Puppet by 3.</p>
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
                                <h1>C6: Wildfire</h1>
                                <p>Fiery Rain increases all party members' Movement SPD by 15% and ATK by 15% for 10s.</p>
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
    $("#amber-button").addClass("active");
    $("#character-dropdown-icon").addClass("active-dropdown-icon");
    $("#character-dropdown-content").addClass("active-dropdown-content");
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


