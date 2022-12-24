<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Yanfei - Akasha</title>
    

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
    margin-left:-50px;
    margin-right:-20px;
}

@media all and (max-width: 1600px) {
    .splash-art{
        margin-right:-200px;
    }
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-right:-100px;
    }
}

:root {
    --highlighted-color: #CB4B5D; 
    --topnav-color: #E9E3E4;
    --search-bar-precolour:#E9E3E4;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'yanfei' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #CB4B5D75, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Yanfei/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Yanfei</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Pyro" flow="up">
                                    <img class="icons" src="../images/icons/b_Pyro.png" >
                                </div>
                                <div tooltip="Catalyst" flow="up">
                                    <img class="icons" src="../images/icons/b_Catalyst.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A well-known legal adviser active in Liyue Harbor. A briliant young lady in whose veins runs the blood of an illuminated beast.
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
                            <td>Pyro DMG Bonus</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>9352</td>
                            <td>240</td>
                            <td>587</td>
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
                                    <p class="talent-card-title">Normal Attack: Seal of Approval</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Shoots fireballs that deal up to three counts of Pyro DMG.</p>
                                <p>When Yanfei's Normal Attacks hit enemies, they will grant her a single Scarlet Seal. Yanfei may possess a maximum of 3 Scarlet Seals, and each time this effect is triggered, the duration of currently possessed Scarlet Seals will refresh.</p>
                                <p>Each Scarlet Seal will decrease Yanfei's Stamina consumption and will disappear when she leaves the field.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">99.2%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">88.6%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">129.2%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes Stamina and all Scarlet Seals before dealing AoE Pyro DMG to opponents after a short casting time.</p>
                                    <p>This Charged Attack's AoE and DMG will increase according to the amount of Scarlet Seals consumed.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack</td>
                                            <td style="text-align:right;">152%/179%/206%/233%/260%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">50</td>
                                        </tr>
                                        <tr>
                                            <td>Scarlet Seal Stamina Consumption Decrease</td>
                                            <td style="text-align:right;">15% Per Seal</td>
                                        </tr>
                                        <tr>
                                            <td>Scarlet Seal Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>



                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Gathering the power of Pyro, Yanfei plunges towards the ground from mid-air, damaging all opponents in her path. Deals AoE Pyro DMG upon impact with the ground.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Signed Edict</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Summons blistering flames that deal AoE Pyro DMG.</p>
                                    <p>Opponents hit by the flames will grant Yanfei the maximum number of Scarlet Seals.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">288%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">9s</td>
                                        </tr>
                                    </table>
                                    <p><i>Apart from their legal uses, Yanfei's seals also come with her customized additional terms and conditions. Well, it's not as if the Ministry of Civil Affairs can change the laws of nature.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Done Deal</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Triggers a spray of intense flames that rush at nearby opponents, dealing AoE Pyro DMG, granting Yanfei the maximum number of Scarlet Seals, and applying Brilliance to her.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">310%</td>
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
                                <h1>Brilliance</h1>
                                <p>Has the following effects:</p>
                                <li>Grants Yanfei a Scarlet Seal at fixed intervals.</li>
                                
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Scarlet Seal Grant Interval</td>
                                            <td style="text-align:right;">1s</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">15s</td>
                                        </tr>

                                </table>

                                <li>Increases the DMG dealt by her Charged Attacks.</li>

                                <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG Bonus</td>
                                            <td style="text-align:right;">52%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">15s</td>
                                        </tr>


                                </table>
                                <p>The effects of Brilliance will end if Yanfei leaves the field or falls in battle.</p>










                                    <p><i>"Here are the full terms for this matter of life and death — by which I mean my life and your death!"</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Encyclopedic Expertise</h1>
                                <p>Displays the location of nearby resources unique to Liyue on the mini-map.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Proviso</h1>
                                <p>When Yanfei consumes Scarlet Seals by using a Charged Attack, each Scarlet Seal will increase Yanfei's Pyro DMG Bonus by 5%. This effects lasts for 6s. When a Charged Attack is used again during the effect's duration, it will dispel the previous effect.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Blazing</h1>
                                <p>When Yanfei's Charged Attack deals a CRIT Hit to opponents, she will deal an additional instance of AoE Pyro DMG equal to 80% of her ATK. This DMG counts as Charged Attack DMG.</p>
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
                                    <h1>C1: The Law Knows No Kindness</h1>
                                    <p>When Yanfei uses her Charged Attack, each existing Scarlet Seal additionally reduces the stamina cost of this Charged Attack by 10% and increases resistance against interruption during its release.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Right of Final Interpretation</h1>
                                    <p>Increases Yanfei's Charged Attack CRIT Rate by 20% against enemies below 50% HP.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Samadhi Fire-Forged</h1>
                                    <p>Increases the Level of Signed Edict by 3.</p>
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
                                    <h1>C4: Supreme Amnesty</h1>
                                    <p>When Done Deal is used:</p>
                                    <p>Creates a shield that absorbs up to 45% of Yanfei's Max HP for 15s.</p>
                                    <p>This shield absorbs Pyro DMG 250% more effectively.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Abiding Affidavit</h1>
                                    <p>Increases the Level of Done Deal by 3.</p>
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
                                    <h1>C6: Extra Clause</h1>
                                    <p>Increases the maximum number of Scarlet Seals by 1.</p>
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
    $("#yanfei-button").addClass("active");
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
