<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Diona - Akasha</title>
    

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
    margin-right:-10px;
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-right:-30px;
    }
}

:root {
    --highlighted-color:#E2ABA9 ; 
    --topnav-color:#ECE7E8 ;
    --search-bar-precolour:#ECE7E8;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'diona' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #E2ABA975, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Diona/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Diona</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Cryo" flow="up">
                                    <img class="icons" src="../images/icons/b_Cryo.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_Mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A young lady who has inherited trace amounts of non-human blood. She is the incredibly popular bartender of the Cat’s Tail tavern.
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
                            <td>Cryo DMG Bonus</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>9570</td>
                            <td>212</td>
                            <td>601</td>
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
                                    <p class="talent-card-title">Normal Attack: Kätzlein Style</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">66.4%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">61.6%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">83.7%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">79%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">98.8%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, biting frost will accumulate on the arrowhead. A fully charged frost arrow will deal Cryo DMG.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Icy Paws</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="talent-card-text"></p>   
                                    <p>Fires an Icy Paw that deals Cryo DMG to opponents and forms a shield on hit.</p>                         
                                    <p>The shield's DMG Absorption scales based on Diona's Max HP, and its duration scales off the number of Icy Paws that hit their target.</p>
                                    <h1>Press</h1> 
                                    <p>Rapidly fires off 2 Icy Paws.</p>
                                    <h1>Hold</h1>
                                    <p>Dashes back quickly before firing 5 Icy Paws.</p>
                                    <p>The shield created by a Hold attack will gain a 75% DMG Absorption Bonus.</p>
                                    <p>The shield has a 250% Cryo DMG Absorption Bonus, and will cause your active character to become affected by Cryo at the point of formation for a short duration.</p>
                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Icy Paw DMG</td>
                                            <td style="text-align:right;">71.3% per Paw</td>
                                        </tr>
                                        <tr>
                                            <td>Base Shield DMG Absorption</td>
                                            <td style="text-align:right;">12.2% Max HP+1408</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">2.4s per Paw</td>
                                        </tr>
                                        <tr>
                                            <td>Press CD</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>
                                        <tr>
                                            <td>Holding CD</td>
                                            <td style="text-align:right;">15s</td>
                                        </tr>

                                        
                                    </table>
                                    <p><i>When she first started bartending, Diona found that no matter how much ice she put in her cocktails, it would never do a drunkard any harm. That all changed when she received her Vision — now she can form ice cold enough to cause severe brainfreeze. Five out of five stars!</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Signature Mix</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Tosses out a special cold brew that deals AoE Cryo DMG and creates a Drunken Mist in an AoE.</p>
                                <h1>Drunken Mist</h1>
                                <li>Deals continuous Cryo DMG to opponents within the AoE.</li>
                                <li>Continuously regenerates the HP of characters within the AoE.</li>

                                <p class=""></p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">136%</td>
                                        </tr>
                                        <tr>
                                            <td>Continuous Field DMG</td>
                                            <td style="text-align:right;">89.5%</td>
                                        </tr>
                                        <tr>
                                            <td>HP Regeneration Over Time</td>
                                            <td style="text-align:right;">9.07% Max HP+1043</td>
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
                                    <p><i>A horrific mix that even Diona considers inhumane. The horrifying foretaste should be left for one's opponents. It has a crisp aftertaste, but unfortunately, one can only feel it on one's nose and skin.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Complimentary Bar Food</h1>
                                <p>When a Perfect Cooking is achieved on a dish with restorative effects, there is a 12% chance to obtain double the product.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Cat's Tail Secret Menu</h1>
                                <p>Characters shielded by Icy Paws have their Movement SPD increased by 10% and their Stamina Consumption decreased by 10%.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Drunkards' Farce</h1>
                                <p>Opponents who enter the AoE of Signature Mix have 10% decreased ATK for 15s.
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
                                    <h1>C1: A Lingering Flavor</h1>
                                    <p>Regenerates 15 Energy for Diona after the effects of Signature Mix end.
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
                                    <h1>C2: Shaken, Not Purred</h1>
                                    <p>Increases Icy Paws' DMG by 15%, and increases its shield's DMG Absorption by 15%.</p>
                                    <p>Additionally, when paws hit their targets, creates a shield for other nearby characters on the field with 50% of the Icy Paws shield's DMG Absorption for 5s.
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
                                    <h1>C3: A—Another Round?</h1>
                                    <p>Increases the Level of Signature Mix by 3.</p>
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
                                    <h1>C4: Wine Industry Slayer</h1>
                                    <p>Within the radius of Signature Mix, Diona's charge time for aimed shots is reduced by 60%</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Double Shot, on the Rocks</h1>
                                    <p>Increases the Level of Icy Paws by 3.</p>
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
                                    <h1>C6: Cat's Tail Closing Time</h1>
                                    <p>Characters within Signature Mix's radius will gain the following effects based on their HP amounts:</p>
                                    <li>Increases Incoming Healing Bonus by 30% when HP falls below or is equal to 50%.</li>
                                    <li>Elemental Mastery increased by 200 when HP is above 50%.</li>
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
    $("#diona-button").addClass("active");
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