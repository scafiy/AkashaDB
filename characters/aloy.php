<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Aloy - Akasha</title>
    

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
    --highlighted-color:#D1915E ; 
    --topnav-color:#E9E3DE ;
    --search-bar-precolour:#E9E3DE;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'aloy' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #d1925e75, var(--primary-background-color) 80%), url('../images/characters/aloy/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Aloy/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Aloy</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Cryo" flow="up">
                                    <img class="icons" src="../images/icons/b_Cryo.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>

                            </div>
                            <p class="banner-description">Formerly an outcast, now a hunter of unparalleled skill. Ready to do the right thing at any time.
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
                            <td>10899</td>
                            <td>234</td>
                            <td>676</td>
                            <td>28.8%</td>

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
                                    <p class="talent-card-title">Normal Attack: </p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">35.5%+40%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">72.5%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">88.8%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">110.4%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Frozen Wilds</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="talent-card-text"></p> 
                                    <p>Aloy throws a Freeze Bomb in the targeted direction that explodes on impact, dealing Cryo DMG. After it explodes, the Freeze Bomb will split up into many Chillwater Bomblets that explode on contact with opponents or after a short delay, dealing Cryo DMG.</p>                           
                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Freeze Bomb DMG</td>
                                            <td style="text-align:right;">302%</td>
                                        </tr>
                                        <tr>
                                            <td>Chillwater Bomblet DMG</td>
                                            <td style="text-align:right;">68%</td>
                                        </tr>
                                    </table>
                                    
                                    
                                    <p>When a Freeze Bomb or Chillwater Bomblet hits an opponent, the opponent's ATK is decreased and Aloy receives 1 Coil stack.</p>
                                    <p>Aloy can gain up to 1 Coil stack every 0.1s.</p>
                                    
                                    <h1>Coil</h1>
                                    <li>Each stack increases Aloy's Normal Attack DMG.</li>
                                    <li>When Aloy has 4 Coil stacks, all stacks of Coil are cleared. She then enters the Rushing Ice state, which further increases the DMG dealt by her Normal Attacks and converts her Normal Attack DMG to Cryo DMG.</li>
                                    
                                    <p>While in the Rushing Ice state, Aloy cannot obtain new Coil stacks.</p>
                                    <p>Coil effects will be cleared 30s after Aloy leaves combat.</p>


                                    <table class="scalingtable">

                                        <tr>
                                            <td>ATK Decrease</td>
                                            <td style="text-align:right;">14%</td>
                                        </tr>
                                        <tr>
                                            <td>ATK Decrease Duration</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>
                                        <tr>
                                            <td>Coil Normal Attack DMG Bonus</td>
                                            <td style="text-align:right;">9.1%/18.1%/27.2%</td>
                                        </tr>
                                        <tr>
                                            <td>Rushing Ice Normal Attack DMG Bonus</td>
                                            <td style="text-align:right;">45.3%</td>
                                        </tr>
                                        <tr>
                                            <td>Rushing Ice Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">20s</td>
                                        </tr>
                                        

                                    </table>


                                    <p><i>You think that's cold? Guess you've never been to The Cut.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Prophecies of Dawn</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="">Aloy throws a Power Cell filled with Cryo in the targeted direction, then detonates it with an arrow, dealing AoE Cryo DMG.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">611%</td>
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
                                    <p><i>Whether "Zero Dawn" referred to hope or extinction no longer matters. Aloy has already saved her world, and the fate of this one is still being forged by its own heroes.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Easy Does It</h1>
                                <p>When Aloy is in the party, animals who produce Fowl, Raw Meat, or Chilled Meat will not be startled when party members approach them.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Combat Override</h1>
                                <p>When Aloy receives the Coil effect from Frozen Wilds, her ATK is increased by 16%, while nearby party members' ATK is increased by 8%. This effect lasts 10s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Strong Strike</h1>
                                <p>When Aloy is in the Rushing Ice state conferred by Frozen Wilds, her Cryo DMG Bonus increases by 3.5% every 1s. A maximum Cryo DMG Bonus increase of 35% can be gained in this way.</p>
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
                                    <h1>Star of Another World</h1>
                                    <p>The time has not yet come for this person's corner of the night sky to light up.</p>
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
    $("#aloy-button").addClass("active");
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


