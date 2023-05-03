<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Kujou Sara - Akasha</title>
    

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
    --highlighted-color:#6A5983 ; 
    --topnav-color:#DFDEE2 ;
    --search-bar-precolour:#DFDEE2;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'sara' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #6A598375, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Sara/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Kujou Sara</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Electro" flow="up">
                                    <img class="icons" src="../images/icons/b_Electro.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A general of the Tenryou Commission. Bold, decisive, and skilled in battle.
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
                            <td>9570</td>
                            <td>195</td>
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
                                    <p class="talent-card-title">Normal Attack: Tengu Bowmanship</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">67.8%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">71.1%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">89.1%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">92.6%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">106.7%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, crackling lightning will accumulate on the arrowhead. An arrow fully charged with the storm's might will deal Electro DMG./p>
                                    <p>When in the Crowfeather Cover state, a fully-charged arrow will leave a Crowfeather behind after it hits.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Tengu Stormcall</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Retreats rapidly with the speed of a tengu, summoning the protection of the Crowfeather.</p>
                                <p>Gains Crowfeather Cover for 18s, and when Kujou Sara fires a fully-charged Aimed Shot, Crowfeather Cover will be consumed, and will leave a Crowfeather at the target location.</p>
                                <p>The ATK Bonuses from different Tengu Juurai will not stack, and their effects and duration will be determined by the last Tengu Juurai to take effect.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Tengu Juurai: Ambush DMG</td>
                                            <td style="text-align:right;">213.8%</td>
                                        </tr>
                                        <tr>
                                            <td>ATK Bonus Ratio</td>
                                            <td style="text-align:right;">73%</td>
                                        </tr>
                                        <tr>
                                            <td>ATK Bonus Duration</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                    </table>
                                    <p><i>The tengu race have never lacked for exceptional talents who have received an Electro Vision. It's just that they often habitually chant praises to the Electro Archon while manipulating Electro. The chants go something like this</i></p>
                                    <p><i>"Show forth your might, O praiseworthy Narukami, and grant this supplicant your thunderous might! Sowaka!"</i></p>

                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Subjugation: Koukou Sendou</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="">Casts down Tengu Juurai: Titanbreaker, dealing AoE Electro DMG. Afterwards, Tengu Juurai: Titanbreaker spreads out into 4 consecutive bouts of Tengu Juurai: Stormcluster, dealing AoE Electro DMG.</p>
                                <p>Tengu Juurai: Titanbreaker and Tengu Juurai: Stormcluster can provide the active character within their AoE with the same ATK Bonus as given by the Elemental Skill, Tengu Stormcall.</p>
                                <p>The ATK Bonus provided by various kinds of Tengu Juurai will not stack, and their effects and duration will be determined by the last Tengu Juurai to take effect.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Tengu Juurai: Titanbreaker DMG</td>
                                            <td style="text-align:right;">696.3%</td>
                                        </tr>
                                        <tr>
                                            <td>Tengu Juurai: Stormcluster DMG</td>
                                            <td style="text-align:right;">58%</td>
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
                                    <p><i>Sara departed from her people, the tengu, and also temporarily lost her faith in the Tenryou Commission. But once the clouds over her heart cleared, she found her own lightning anew.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Land Survey</h1>
                                <p>When dispatched on an expedition in Inazuma, time consumed is reduced by 25%.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Immovable Will</h1>
                                <p>While in the Crowfeather Cover state provided by Tengu Stormcall, Aimed Shot charge times are decreased by 60%.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Decorum</h1>
                                <p>When Tengu Juurai: Ambush hits opponents, Kujou Sara will restore 1.2 Energy to all party members for every 100% Energy Recharge she has. This effect can be triggered once every 3s.</p>
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
                                    <h1>C1: Crow's Eye</h1>
                                    <p>When Tengu Juurai grant characters ATK Bonuses or hits opponents, the CD of Tengu Stormcall is decreased by 1s.</p>
                                    <p>This effect can be triggered once every 3s.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Dark Wings</h1>
                                    <p>Unleashing Tengu Stormcall will leave a weaker Crowfeather at Kujou Sara's original position that will deal 30% of its original DMG.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: The War Within</h1>
                                    <p>Increases the Level of Subjugation: Koukou Sendou by 3.</p>
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
                                    <h1>C4: Conclusive Proof</h1>
                                    <p>The number of Tengu Juurai: Stormcluster released by Subjugation: Koukou Sendou is increased to 6.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Spellsinger</h1>
                                    <p>Increases the Level of Tengu Stormcall by 3.</p>
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
                                    <h1>C6: Sin of Pride</h1>
                                    <p>The Electro DMG of characters who have had their ATK increased by Tengu Juurai has its Crit DMG increased by 60%.</p>
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
    $("#sara-button").addClass("active");
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

