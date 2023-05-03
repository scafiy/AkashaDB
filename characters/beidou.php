<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Beidou - Akasha</title>
    

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
    --highlighted-color:#A489FC ; 
    --topnav-color: #E5E2ED;
    --search-bar-precolour:#E5E2ED;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'beidou' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #A489FCb6, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Beidou/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Beidou</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Electro" flow="up">
                                    <img class="icons" src="../images/icons/b_Electro.png" >
                                </div>
                                <div tooltip="Claymore" flow="up">
                                    <img class="icons" src="../images/icons/b_Claymore.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">Captain of her crew, The Crux. She's quite an unbound and forthright woman.
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
                            <td>Electro DMG Bonus</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>13050</td>
                            <td>225</td>
                            <td>648</td>
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
                                    <p class="talent-card-title">Normal Attack: Oceanborne</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 consecutive strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">131%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">130%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">162%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">159%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">206%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Drains Stamina over time to perform continuous slashes.</p>
                                    <p>At the end of the sequence, performs a more powerful slash.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack Cycling DMG</td>
                                            <td style="text-align:right;">103%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Final DMG</td>
                                            <td style="text-align:right;">187%</td>
                                        </tr>

                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">40/s</td>
                                        </tr>

                                        <tr>
                                            <td>Max Duration</td>
                                            <td style="text-align:right;">5s</td>
                                        </tr>




                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Plunges from mid-air to strike the ground, damaging opponents along the path and dealing AoE DMG upon impact.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Collision Plunge DMG</td>
                                            <td style="text-align:right;">137%</td>
                                        </tr>
                                        <tr>
                                            <td>Low/High Plunge DMG</td>
                                            <td style="text-align:right;">274%/342%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Tidecaller</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="talent-card-text"></p>                            
                                    <p>Nothing to worry about. Should anyone raise a hand against her or her men, she will avenge it ten-fold with sword and thunder.</p>
                                    <h1>Press</h1>
                                    <p>Accumulating the power of lightning, Beidou swings her blade forward fiercely, dealing Electro DMG.</p>
                                    <h1>Hold</h1>
                                    <p>Lifts her weapon up as a shield. Max DMG absorbed scales off Beidou's Max HP.</p>
                                    <p>Attacks using the energy stored within the greatsword upon release or once this ability's duration expires, dealing Electro DMG. DMG dealt scales with the number of times Beidou is attacked in the skill's duration. The greatest DMG Bonus will be attained once this effect is triggered twice.</p>
                                    <p>The shield possesses the following properties:</p>
                                    <li>Has 250% Electro DMG Absorption Efficiency.</li>
                                    <li>Applies the Electro element to Beidou upon activation.</li>
                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Shield DMG Absorption</td>
                                            <td style="text-align:right;">24.5% Max HP + 2819</td>
                                        </tr>
                                        <tr>
                                            <td>Base DMG</td>
                                            <td style="text-align:right;">207%</td>
                                        </tr>
                                        <tr>
                                            <td>DMG Bonus on Hit Taken</td>
                                            <td style="text-align:right;">272%</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">7.5s</td>
                                        </tr>


                                    </table>
                                    <p><i>Conquer the high seas! Pursue the waves and chase the storm!</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Stormbreaker</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">

                                <p>Recalling her slaying of the great beast Haishan, Beidou calls upon that monstrous strength and the lightning to create a Thunderbeast's Targe around herself, dealing Electro DMG to nearby opponents.</p>
                                <h1>Thunderbeast's Targe</h1>  
                                <li>When Normal and Charged Attacks hit, they create a lightning discharge that can jump between opponents, dealing Electro DMG.</li>
                                <li>Increases the character's resistance to interruption, and decreases DMG taken.</li>                              
                                <p>A maximum of 1 lightning discharge can be triggered per second.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">207%</td>
                                        </tr>
                                        <tr>
                                            <td>Lightning DMG</td>
                                            <td style="text-align:right;">163%</td>
                                        </tr>
                                        <tr>
                                            <td>DMG Reduction</td>
                                            <td style="text-align:right;">32%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">15s</td>
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
                                    <p><i>With a peal of thunder, Haishan is slain.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Conqueror of Tides</h1>
                                <p>Decreases swimming Stamina consumption for your own party members by 20%.</p>
                                <p>Not stackable with Passive Talents that provide the exact same effects.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Retribution</h1>
                                <p>Counterattacking with Tidecaller at the precise moment when the character is hit grants the maximum DMG Bonus.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Lightning Storm</h1>
                                <p>Gain the following effects for 10s after unleashing Tidecaller with its maximum DMG Bonus:</p>
                                <li>DMG dealt by Normal and Charged Attacks is increased by 15%. ATK SPD of Normal and Charged Attacks is increased by 15%.</li>
                                <li>Greatly reduced delay before unleashing Charged Attacks.</li>
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
                                    <h1>C1: Sea Beast's Scourge</h1>
                                    <p>When Stormbreaker is used:</p>
                                    <p>Creates a shield that absorbs up to 16% of Beidou's Max HP for 15s.</p>
                                    <p>This shield absorbs Electro DMG 250% more effectively.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Upon the Turbulent Sea, the Thunder Arises</h1>
                                    <p>Stormbreaker's arc lightning can jump to 2 additional targets.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Summoner of Storm</h1>
                                    <p>Increases the Level of Tidecaller by 3.</p>
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
                                    <h1>C4: Stunning Revenge</h1>
                                    <p>Upon being attacked, Beidou's Normal Attacks gain an additional instance of 20% Electro DMG for 10s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Crimson Tidewalker</h1>
                                    <p>Increases the Level of Stormbreaker by 3.</p>
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
                                    <h1>C6: Bane of Evil</h1>
                                    <p>During the duration of Stormbreaker, the Electro RES of surrounding opponents is decreased by 15%.</p>
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
    $("#beidou-button").addClass("active");
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
