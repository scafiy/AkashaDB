<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Kamisato Ayaka - Akasha</title>
    

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
    margin-right:-160px;
}

@media all and (max-width: 1600px) {
    .splash-art{
        margin-right:-30px;
    }
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-right:-50px;
    }
}

:root {
    --highlighted-color:#D0EAF7 ; 
    --topnav-color:#E9EBEC ;
    --search-bar-precolour:#E9EBEC;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'ayaka' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #D0EAF775, var(--primary-background-color) 80%), url('../images/characters/ayaka/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Ayaka/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Kamisato Ayaka</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Cryo" flow="up">
                                    <img class="icons" src="../images/icons/b_Cryo.png" >
                                </div>
                                <div tooltip="Sword" flow="up">
                                    <img class="icons" src="../images/icons/b_Sword.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">Daughter of the Yashiro Commission's Kamisato Clan. Dignified and elegant, as well as wise and strong.
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
                            <td>Crit DMG</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>12858</td>
                            <td>342</td>
                            <td>784</td>
                            <td>88.4%</td>

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
                                    <p class="talent-card-title">Normal Attack: Kamisato Art - Kabuki</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 rapid strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">84%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">89.4%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">115%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">41.6%x3</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">143.6%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to unleash a flurry of sword ki.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">101.3%x3</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">20</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Plunges from mid-air to strike the ground below, damaging enemies along the path and dealing AoE DMG upon impact.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Collision Plunge DMG</td>
                                            <td style="text-align:right;">117%</td>
                                        </tr>
                                        <tr>
                                            <td>Low/High Plunge DMG</td>
                                            <td style="text-align:right;">235%/293%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Kamisato Art: Hyouka</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                    <p>Summons blooming ice to launch nearby opponents, dealing AoE Cryo DMG.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">407%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                    </table>
                                    <p><i>"Clouds shroud the moonlit night. Longing descends like a fog, filling the one detained with wanderlust."</i></p>
                                </div>
                            </div>
     

                            <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/altsprint.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Alternative Sprint: Kamisato Art: Senho</p>
                                    <p class="level">Lv.1</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                    <h1>Alternate Sprint</h1>
                                    <p>Ayaka consumes Stamina and cloaks herself in a frozen fog that moves with her.</p>
                                    <p>In Senho form, she moves swiftly upon water.</p>
                                    <p>When she reappears, the following effects occur:</p>  
                                    <li>Ayaka unleashes frigid energy to apply Cryo on nearby opponents.</li>                                  
                                    <li>Coldness condenses around Ayaka's blade, infusing her attacks with Cryo for a brief period.</li>
                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Activation Stamina Consumption</td>
                                            <td style="text-align:right;">10</td>
                                        </tr>
                                        <tr>
                                            <td>Stamina Drain</td>
                                            <td style="text-align:right;">15/s</td>
                                        </tr>

                                        <tr>
                                            <td>Infusion Duration</td>
                                            <td style="text-align:right;">5s</td>
                                        </tr>
                                    </table>
                                    <p><i>"Feathers fleeting wet / the white heron treads water / a sight without flaw"
</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Kamisato Art: Soumetsu</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Summons forth a snowstorm with flawless poise, unleashing a Frostflake Seki no To that moves forward continuously.</p>
                                <h1>Frostflake Seki no To</h1>
                                <li>A storm of whirling icy winds that slashes repeatedly at every enemy it touches, dealing Cryo DMG.</li>
                                <li>The snowstorm explodes after its duration ends, dealing AoE Cryo DMG.</li>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Cutting DMG</td>
                                            <td style="text-align:right;">191%</td>
                                        </tr>
                                        <tr>
                                            <td>Bloom DMG</td>
                                            <td style="text-align:right;">286%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">5s</td>
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
                                    <p><i>"The blizzard veils the heron's thoughts, pity heavy in its heart."</i></p>
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Fruits of Shinsa</h1>
                                <p>When Ayaka crafts Weapon Ascension Materials, she has a 10% chance to receive double the product.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Amatsumi Kunitsumi Sanctification</h1>
                                <p>After using Kamisato Art: Hyouka, Kamisato Ayaka's Normal and Charged Attacks deal 30% increased DMG for 6s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Kanten Senmyou Blessing</h1>
                                <p>When the Cryo application at the end of Kamisato Art: Senho hits an opponent, Kamisato Ayaka gains the following effects:</p>
                                <div>

                                    <li>Restores 10 Stamina</li>
                                    <li>Gains 18% Cryo DMG Bonus for 10s.</li>
                                </div>

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
                                    <h1>C1: Snowswept Sakura</h1>
                                    <p>When Kamisato Ayaka's Normal or Charged Attacks deal Cryo DMG to opponents, it has a 50% chance of decreasing the CD of Kamisato Art: Hyouka by 0.3s. This effect can occur once every 0.1s.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Blizzard Blade Seki no To</h1>
                                    <p>When casting Kamisato Art: Soumetsu, unleashes 2 smaller additional Frostflake Seki no To, each dealing 20% of the original storm's DMG.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Frostbloom Kamifubuki</h1>
                                    <p>Increases the Level of Kamisato Art: Soumetsu by 3.</p>
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
                                    <h1>C4: Ebb and Flow</h1>
                                    <p>Opponents damaged by Kamisato Art: Soumetsu's Frostflake Seki no To will have their DEF decreased by 30% for 6s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Blossom Cloud Irutsuki</h1>
                                    <p>Increases the Level of Kamisato Art: Hyouka by 3.</p>
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
                                    <h1>C6: Dance of Suigetsu</h1>
                                    <p>Increases the Level of Kamisato Art: Hyouka by 3.</p>
                                    <p>Maximum upgrade level is 15.</p>
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
    $("#ayaka-button").addClass("active");
    $("#ayaka-button").addClass("dark");
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