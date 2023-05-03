<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Kokomi - Akasha</title>
    

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
    margin-left:-110px;
    margin-right:-50px;
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-left:0px;

        margin-right:-10px;
    }
}

:root {
    --highlighted-color: #2FD1F7; 
    --topnav-color:#DCEAEF ;
    --search-bar-precolour:#DCEAEF;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'kokomi' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #2FD1F775, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Kokomi/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Sangonomiya Kokomi</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Hydro" flow="up">
                                    <img class="icons" src="../images/icons/b_Hydro.png" >
                                </div>
                                <div tooltip="Catalyst" flow="up">
                                    <img class="icons" src="../images/icons/b_Catalyst.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">The Divine Priestess of Watatsumi Island. All of the island's affairs are at this young lady's fingertips.
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
                            <td>Hydro DMG Bonus</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>13471</td>
                            <td>234</td>
                            <td>657</td>
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
                                    <p class="talent-card-title">Normal Attack: The Shape of Water</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 3 consecutive attacks that take the form of swimming fish, dealing Hydro DMG.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">116.2%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">104.6%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">160.3%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to deal AoE Hydro DMG after a short casting time.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">252%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">50</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Gathering the might of Hydro, Kokomi plunges towards the ground from mid-air, damaging all opponents in her path. Deals AoE Hydro DMG upon impact with the ground.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Kurage's Oath</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                    <p>Summons a "Bake-Kurage" created from water that can heal her allies.</p>
                                    <p>Using this skill will apply the Wet status to Sangonomiya Kokomi.</p>
                                    
                                    <h1>Bake-Kurage</h1>
                                    <p>Deals Hydro DMG to surrounding opponents and heals nearby active characters at fixed intervals. This healing is based on Kokomi's Max HP.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Regeneration</td>
                                            <td style="text-align:right;">7.5% Max HP+861</td>
                                        </tr>
                                        <tr>
                                            <td>Ripple DMG</td>
                                            <td style="text-align:right;">185.6%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">12s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">20s</td>
                                        </tr>
                                    </table>
                                    <p><i>Kokomi needs timely "refreshment" in order to maintain optimal work efficiency.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Nereid's Ascension</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="">Summons the might of Watatsumi, dealing Hydro DMG to surrounding opponents, before robing Kokomi in a Ceremonial Garment made from the flowing waters of Sangonomiya.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">17.7% Max HP</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">18s</td>
                                        </tr>
                                        <tr>
                                            <td>Energy Cost</td>
                                            <td style="text-align:right;">70</td>
                                        </tr>

                                </table>

                                <h1>Ceremonial Garment</h1>
                                <li>Sangonomiya Kokomi's Normal Attack, Charged Attack and Bake-Kurage DMG are increased based on her Max HP.</li>

                                <table class="scalingtable">
                                        <tr>
                                            <td>Normal Attack DMG Bonus</td>
                                            <td style="text-align:right;">8.2% Max HP</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack DMG Bonus</td>
                                            <td style="text-align:right;">11.5% Max HP</td>
                                        </tr>
                                        <tr>
                                            <td>Bake-Kurage DMG Bonus</td>
                                            <td style="text-align:right;">12.1% Max HP</td>
                                        </tr>

                                </table>
                                <li>When her Normal and Charged Attacks hit opponents, Kokomi will restore HP for all nearby party members, and the amount restored is based on her Max HP.</li>

                                <table class="scalingtable">
                                        <tr>
                                            <td>HP Regeneration Per Hit</td>
                                            <td style="text-align:right;">1.37% Max HP+156</td>
                                        </tr>

                                </table>
                                <li>Increases Sangonomiya Kokomi's resistance to interruption and allows her to walk on the water's surface.</li>
                                <p>These effects will be cleared once Sangonomiya Kokomi leaves the field.</p>
                                    <p><i>Clear light coalesces into robes around Her Excellency, Sangonomiya Kokomi, reflecting her magnificent form.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Princess of Watatsumi</h1>
                                <p>Decreases swimming Stamina consumption for your own party members by 20%.</p>
                                <p>Not stackable with Passive Talents that provide the exact same effects.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive2.png" alt="">
                                </div>                        
                                
                                <h1>Flawless Strategy</h1>
                                <p>Sangonomiya Kokomi has a 25% Healing Bonus, but a 100% decrease in CRIT Rate.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Tamanooya's Casket</h1>
                                <p>If Sangonomiya Kokomi's own Bake-Kurage is on the field when she uses Nereid's Ascension, the Bake-Kurage's duration will be refreshed.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Song of Pearls</h1>
                                <p>While donning the Ceremonial Garment created by Nereid's Ascension, the Normal and Charged Attack DMG Bonus Sangonomiya Kokomi gains based on her Max HP will receive a further increase based on 15% of her Healing Bonus.</p>
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
                                    <h1>C1: At Water's Edge</h1>
                                    <p>While donning the Ceremonial Garment created by Nereid's Ascension, the final Normal Attack in Sangonomiya Kokomi's combo will unleash a swimming fish to deal 30% of her Max HP as Hydro DMG.</p>
                                    <p>This DMG is not considered Normal Attack DMG.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: The Clouds Like Waves Rippling</h1>
                                    <p>Sangonomiya Kokomi gains the following Healing Bonuses with regard to characters with 50% or less HP via the following methods:</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: The Moon, A Ship O'er the Seas</h1>
                                    <p>Increases the Level of Nereid's Ascension by 3.</p>
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
                                    <h1>C4: The Moon Overlooks the Waters</h1>
                                    <p>While donning the Ceremonial Garment created by Nereid's Ascension, Sangonomiya Kokomi's Normal Attack SPD is increased by 10%, and Normal Attacks that hit opponents will restore 0.8 Energy for her.</p>
                                    <p>This effect can occur once every 0.2s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: All Streams Flow to the Sea</h1>
                                    <p>Increases the Level of Kurage's Oath by 3.</p>
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
                                    <h1>C6: Sango Isshin</h1>
                                    <p>While donning the Ceremonial Garment created by Nereid's Ascension, Sangonomiya Kokomi gains a 40% Hydro DMG Bonus for 4s when her Normal and Charged Attacks heal, or would heal, any party member with 80% or more HP.</p>
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
    $("#kokomi-button").addClass("active");
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