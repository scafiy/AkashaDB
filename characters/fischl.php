<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Fischl - Akasha</title>
    

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
    --highlighted-color:#835DB5; 
    --topnav-color: #E3E0E9;
    --search-bar-precolour:#E3E0E9;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'fischl' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #835DB575, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Fischl/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Fischl</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Electro" flow="up">
                                    <img class="icons" src="../images/icons/b_Electro.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_Mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A mysterious girl who calls herself "Prinzessin der Verurteilung" and travels with a night raven named Oz.
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
                            <td>9189</td>
                            <td>244</td>
                            <td>594</td>
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
                                    <p class="talent-card-title">Normal Attack: Bolts of Downfall</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 consecutive shots with a bow.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">81.1%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">86%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">107%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">106%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">132%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Performs a more precise Aimed Shot with increased DMG.</p>
                                    <p>While aiming, the dark lightning spirits of Immernachtreich shall heed the call of their Prinzessin and indwell the enchanted arrowhead. When fully indwelt, the Rachsüchtig Blitz shall deal immense Electro DMG.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Nightrider</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Summons Oz. The night raven forged of darkness and lightning descends upon the land, dealing Electro DMG in a small AoE.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Summoning DMG</td>
                                            <td style="text-align:right;">196%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">25s</td>
                                        </tr>

                                </table>

                                <p>For the ability's duration, Oz will continuously attack nearby opponents with Freikugel.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Oz's ATK DMG</td>
                                            <td style="text-align:right;">151%</td>
                                        </tr>
                                        <tr>
                                            <td>Oz's Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>

                                    </table>
                                    <p>Hold to adjust the location Oz will be summoned to.</p>
                                    <p>Press again any time during the ability's duration to once again summon him to Fischl's side.</p>
                                    <p><i>"My time is most precious, and I shall not waste it on the likes of you... Go, Oz, fall upon them, and bring down upon them your Rachsüchtig Blitz, that which tears open the long night."</i></p>
                                    <p><i>—Flowers for Princess Fischl (IV): Farewell Frau Welt</i></p>

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
                                <p>Summons Oz to spread his twin wings of twilight and defend Fischl.</p>
                                <p>Has the following properties during the ability's duration:</p>
                                <li>Fischl takes on Oz's form, greatly increasing her Movement Speed.</li>
                                <li>Strikes nearby opponents with lightning, dealing Electro DMG to opponents she comes into contact with. Each opponent can only be struck once.</li>
                                <li>Once this ability's effects end, Oz will remain on the battlefield and attack his Prinzessin's foes. If Oz is already on the field, then this will reset the duration of his presence.</li>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Falling Thunder DMG</td>
                                            <td style="text-align:right;">354%</td>
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
                                    <p><i>"...In the hordes of beasts that follow the cursed blood, only Prince Nachtraben, who bore witness to the extinction of a thousand worlds, knows her true greatness. Thus the night wings he spreads are his eternal promise to protect Her Royal Highness."</i></p>
                                    <p><i>—Flowers for Princess Fischl (I): End Time Zersetzung</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Mein Hausgarten</h1>
                                <p>When dispatched on an expedition in Mondstadt, time consumed is reduced by 25%.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Stellar Predator</h1>
                                <p>When Fischl hits Oz with a fully-charged Aimed Shot, Oz brings down Thundering Retribution, dealing AoE Electro DMG equal to 152.7% of the arrow's DMG.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Undone Be Thy Sinful Hex</h1>
                                <p>If your current active character triggers an Electro-related Elemental Reaction when Oz is on the field, the opponent shall be stricken with Thundering Retribution, dealing Electro DMG equal to 80% of Fischl's ATK.
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
                                    <h1>C1: Gaze of the Deep</h1>
                                    <p>Even when Oz is not present in combat, he can still watch over Fischl through his raven eyes. When Fischl performs a Normal Attack against an opponent, Oz fires a joint attack, dealing DMG equal to 22% of Fischl's ATK.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Devourer of All Sins</h1>
                                    <p>When Nightrider is used, it deals an additional 200% ATK as DMG, and its AoE is increased by 50%.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Wings of Nightmare</h1>
                                    <p>Increases the Level of Nightrider by 3.</p>
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
                                    <h1>C4: Her Pilgrimage of Bleak</h1>
                                    <p>When Midnight Phantasmagoria is used, it deals 222% of ATK as Electro DMG to surrounding opponents.</p>
                                    <p>When the skill duration ends, Fischl regenerates 20% of her HP.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Against the Fleeing Light</h1>
                                    <p>Increases the Level of Midnight Phantasmagoria by 3.</p>
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
                                    <h1>C6: Evernight Raven</h1>
                                    <p>Extends the duration of Oz's presence on the field by 2s. Additionally, Oz performs joint attacks with your active character when present, dealing 30% of Fischl's ATK as Electro DMG.</p>
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
    $("#fischl-button").addClass("active");
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