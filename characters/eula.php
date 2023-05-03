<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Eula - Akasha</title>
    

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
    margin-right:-140px;
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-right:-70px;
    }
}

:root {
    --highlighted-color:#ABDCE6 ; 
    --topnav-color:#E7EBED ;
    --search-bar-precolour:#E7EBED;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'eula' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #ABDCE675, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Eula/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Eula</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Cryo" flow="up">
                                    <img class="icons" src="../images/icons/b_Cryo.png" >
                                </div>
                                <div tooltip="Claymore" flow="up">
                                    <img class="icons" src="../images/icons/b_Claymore.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_Mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">The Spindrift Knight, a scion of old aristocracy, and the Captain of the Knights of Favonius Reconnaissance Company.
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
                            <td>Crit DMG</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>13226</td>
                            <td>342</td>
                            <td>751</td>
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
                                    <p class="talent-card-title">Normal Attack: Favonius Bladework - Edel</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 consecutive strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">164.9%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">171.9%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">104.4%+104.4%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">206.9%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">132%+132%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Drains Stamina over time to perform continuous slashes.</p>
                                    <p>At the end of the sequence, performs a more powerful slash.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack Spinning DMG</td>
                                            <td style="text-align:right;">126.4%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Final DMG</td>
                                            <td style="text-align:right;">229%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Icetide Vortex</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Sharp frost, swift blade.</p>                      
                                    <h1>Press</h1> 
                                    <p>When it hits an opponent, Eula gains a stack of Grimheart that stacks up to 2 times. These stacks can only be gained once every 0.3s.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Press DMG</td>
                                            <td style="text-align:right;">249%</td>
                                        </tr>
                                        <tr>
                                            <td>Press CD</td>
                                            <td style="text-align:right;">4s</td>
                                        </tr>

                                    </table>
                                    
                                    <h1>Grimheart</h1>
                                    <p>Increases Eula's resistance to interruption and DEF.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Grimheart Duration</td>
                                            <td style="text-align:right;">18s</td>
                                        </tr>
                                        <tr>
                                            <td>DEF Bonus</td>
                                            <td style="text-align:right;">30% Per Stack</td>
                                        </tr>
                                    </table>
                                    <h1>Hold</h1>
                                    <p>Wielding her sword, Eula consumes all the stacks of Grimheart and lashes forward, dealing AoE Cryo DMG to opponents in front of her.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Hold DMG</td>
                                            <td style="text-align:right;">418%</td>
                                        </tr>
                                        <tr>
                                            <td>Hold CD</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>

                                    </table>
                                   
                                    <p>If Grimheart stacks are consumed, surrounding opponents will have their Physical RES and Cryo RES decreased.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Physical RES Decrease</td>
                                            <td style="text-align:right;">24%</td>
                                        </tr>
                                        <tr>
                                            <td>Cryo RES Decrease</td>
                                            <td style="text-align:right;">24%</td>
                                        </tr>
                                        <tr>
                                            <td>RES Decrease Duration</td>
                                            <td style="text-align:right;">7s</td>
                                        </tr>


                                    </table>
                                    <p>Each consumed stack of Grimheart will be converted into an Icewhirl Brand that deals Cryo DMG to nearby opponents.</p>
                                    
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Icewhirl Brand DMG</td>
                                            <td style="text-align:right;">163%</td>
                                        </tr>

                                    </table>


                                    <p><i>"So the waves roiled, swallowing the crown of the nobles. And ever after did each drop amidst the icy waves reflect a golden crown, each and every droplet of the spray shining with its light."\</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Glacial Illumination</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>
                            <div class="talent-card-description">
                                <p>Brandishes her greatsword, dealing Cryo DMG to nearby opponents and creating a Lightfall Sword that follows her around for a duration of up to 7s.</p>
                                <p>While present, the Lightfall Sword increases Eula's resistance to interruption. When Eula's own Normal Attack, Elemental Skill, and Elemental Burst deal DMG to opponents, they will charge the Lightfall Sword, which can gain an energy stack once every 0.1s.</p>
                                <p>Once its duration ends, the Lightfall Sword will descend and explode violently, dealing Physical DMG to nearby opponents.</p>
                                <p>This DMG scales on the number of energy stacks the Lightfall Sword has accumulated.</p>
                                <p>If Eula leaves the field, the Lightfall Sword will explode immediately.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">418%</td>
                                        </tr>
                                        <tr>
                                            <td>Lightfall Sword Base DMG</td>
                                            <td style="text-align:right;">674.3%</td>
                                        </tr>
                                        <tr>
                                            <td>DMG Per Stack</td>
                                            <td style="text-align:right;">137.8%</td>
                                        </tr>
                                        <tr>
                                            <td>Maximum Stacks</td>
                                            <td style="text-align:right;">30</td>
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
                                    <p><i>It is easy to sink. But even so, she desires to freeze this oncoming tide.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Aristocratic Introspection</h1>
                                <p>When Eula crafts Character Talent Materials, she has a 10% chance to receive double the product.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Roiling Rime</h1>
                                <p>If 2 stacks of Grimheart are consumed upon unleashing the Holding Mode of Icetide Vortex, a Shattered Lightfall Sword will be created that will explode immediately, dealing 50% of the basic Physical DMG dealt by a Lightfall Sword created by Glacial Illumination.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Wellspring of War-Lust</h1>
                                <p>When Glacial Illumination is cast, the CD of Icetide Vortex is reset and Eula gains 1 stack of Grimheart.</p>
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
                                    <h1>C1: Tidal Illusion</h1>
                                    <p>Every time Icetide Vortex's Grimheart stacks are consumed, Eula's Physical DMG is increased by 30% for 6s.</p>
                                    <p>Each stack consumed will increase the duration of this effect by 6s up to a maximum of 18s.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Lady of Seafoam</h1>
                                    <p>Decreases the CD of Icetide Vortex's Holding Mode, rendering it identical to Press CD.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Lawrence Pedigree</h1>
                                    <p>Increases the Level of Glacial Illumination by 3.</p>
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
                                    <h1>C4: The Obstinacy of One's Inferiors</h1>
                                    <p>Lightfall Swords deal 25% increased DMG against opponents with less than 50% HP.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Chivalric Quality</h1>
                                    <p>Increases the Level of Icetide Vortex by 3.</p>
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
                                    <h1>C6: Noble Obligation</h1>
                                    <p>Lightfall Swords created by Glacial Illumination start with 5 stacks of energy. Normal Attacks, Elemental Skills, and Elemental Bursts have a 50% chance to grant the Lightfall Sword an additional stack of energy.</p>
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
    $("#eula-button").addClass("active");
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