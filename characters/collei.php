<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Collei - Akasha</title>
    

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
        margin-left:0px;
        margin-right:-30px;
    }
}

:root {
    --highlighted-color:#DBE5A9 ; 
    --topnav-color:#E7E9D9 ;
    --search-bar-precolour:#E7E9D9;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'collei' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #DBE5A975, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Collei/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Collei</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Dendro" flow="up">
                                    <img class="icons" src="../images/icons/b_Dendro.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Sumeru" flow="up">
                                    <img class="icons" src="../images/icons/b_sumeru.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A trainee ranger active in Avidya Forest. Behind her enthusiastic words and actions hides a slightly introverted personality.

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
                            <td>9787</td>
                            <td>200</td>
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
                                    <p class="talent-card-title">Normal Attack: Supplicant's Bowmanship</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">80.1%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">78.4%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">99.4%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">125%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, Dendro energy will accumulate on the arrowhead. A fully charged arrow will deal Dendro DMG.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Floral Brush</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="talent-card-text"></p>                            
                                    <p>Throws out a Floral Ring that deals 1 instance of Dendro DMG to targets it comes into contact with.</p>
                                    <p>The Floral Ring will return after a set time, dealing Dendro DMG once again.</p>
                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">257%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>
                                    </table>
                                    <p><i>This is Collei's go-to gadget for dealing with unruly wild beasts. A few good thwacks from this tool will generally improve their behavior. This same principle works just as well on evildoers.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: </p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class=""></p>
                                <p>Trusty Cuilein-Anbar comes to save the day!</p>
                                <p>Throws the doll named Cuilein-Anbar, causing an explosion that deals AoE Dendro DMG, creating a Cuilein-Anbar Zone. Cuilein-Anbar will bounce around within this zone, dealing AoE Dendro DMG.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Explosion DMG</td>
                                            <td style="text-align:right;">343.1%</td>
                                        </tr>
                                        <tr>
                                            <td>Leap DMG</td>
                                            <td style="text-align:right;">73.5%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">6s</td>
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
                                    <p><i>"Pretty impressive, huh? ... Eh? You want to know how I came up with the name Cuilein-Anbar? Uh, well, I..."</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Gliding Champion of Sumeru</h1>
                                <p>Decreases gliding Stamina consumption for your own party members by 20%.</p>
                                <p>Not stackable with Passive Talents that provide the exact same effects.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Floral Sidewinder</h1>
                                <p>If one of your party members has triggered Burning, Quicken, Aggravate, Spread, Bloom, Hyperbloom, or Burgeon reactions before the Floral Ring returns, it will grant the character the Sprout effect upon return, which will continuously deal Dendro DMG equivalent to 40% of Collei's ATK to nearby opponents for 3s.</p>
                                <p>If another Sprout effect is triggered during its initial duration, the initial effect will be removed. DMG dealt by Sprout is considered Elemental Skill DMG.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>The Languid Wood</h1>
                                <p>When a character within the Cuilein-Anbar Zone triggers Burning, Quicken, Aggravate, Spread, Bloom, Hyperbloom, or Burgeon reactions, the Zone's duration will be increased by 1s.</p>
                                <p>A single Trump-Card Kitty can be extended this way by up to 3s.</p>
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
                                    <h1>C1: Deepwood Patrol</h1>
                                    <p>When in the party and not on the field, Collei's Energy Recharge is increased by 20%.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Through Hill and Copse</h1>
                                    <p>The Passive Talent Floral Sidewinder is changed to this:</p>
                                    <p>The Floral Ring will grant the character the Sprout effect from Floral Sidewinder upon return, dealing 40% of Collei's ATK as Dendro DMG to nearby opponents for 3s.</p>
                                    <p>From the moment of using Floral Brush to the moment when this instance of Sprout effect ends, if any of your party members triggers Burning, Quicken, Aggravate, Spread, Bloom, Hyperbloom, or Burgeon reactions, the Sprout effect will be extended by 3s.</p>
                                    <p>The Sprout effect can only be extended this way once. If another Sprout effect is triggered during its initial duration, the initial effect will be removed. DMG dealt by Sprout is considered Elemental Skill DMG.</p>
                                    <p>Requires you to have unlocked the Floral Sidewinder Passive Talent.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Scent of Summer</h1>
                                    <p>Increases the Level of Floral Brush by 3.</p>
                                    <p>Maximum upgrade level is 15.
</p>
                                </div>
                            </div>
                    
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c4.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C4: Gift of the Woods</h1>
                                    <p>Using Trump-Card Kitty will increase all nearby characters' Elemental Mastery by 60 for 12s (not including Collei herself).</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: All Embers</h1>
                                    <p>Increases the Level of Trump-Card Kitty by 3.</p>
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
                                    <h1>C6: Forest of Falling Arrows</h1>
                                    <p>When the Floral Ring hits, it will create a miniature Cuilein-Anbar that will deal 200% of Collei's ATK as Dendro DMG.</p>
                                    <p>Each Floral Brush can only create one such miniature Cuilein-Anbar.</p>
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
    $("#collei-button").addClass("active");
    $("#<?php echo $fetch['url']?>-button").addClass("dark");
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