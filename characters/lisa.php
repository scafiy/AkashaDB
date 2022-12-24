<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Lisa - Akasha</title>
    

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
    --highlighted-color:#584AB3 ; 
    --topnav-color: #DFDEE9;
    --search-bar-precolour:#DFDEE9;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'lisa' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #584AB375, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Lisa/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Lisa</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Electro" flow="up">
                                    <img class="icons" src="../images/icons/b_Electro.png" >
                                </div>
                                <div tooltip="Catalyst" flow="up">
                                    <img class="icons" src="../images/icons/b_Catalyst.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_Mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">The languid but knowledgeable Librarian of the Knights of Favonius, deemed by Sumeru Akademiya to be their most distinguished graduate in the past two centuries.
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
                            <td>Elemental Mastery</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>9570</td>
                            <td>232</td>
                            <td>573</td>
                            <td>96</td>

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
                                    <p class="talent-card-title">Normal Attack: Lightning Touch</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 4 lightning attacks that deal Electro DMG.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">67.3%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">61.1%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">72.8%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">93.4%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to deal AoE Electro DMG after a short casting time.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">301%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">50</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Gathering the might of Electro, Lisa plunges towards the ground from mid-air, damaging all opponents in her path. Deals AoE Electro DMG upon impact with the ground.</p>
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
                                    <p class="talent-card-title">Elemental Skill: Violet Arc</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Channels the power of lightning to sweep bothersome matters away.</p>
                                
                                <h1>Press</h1>
                                <p>Releases a homing Lightning Orb.</p>
                                <p>On hit, it deals Electro DMG and applies a stack of the Conductive status (max 3 stacks) to opponents in a small AoE.</p>
                                
                                <table class="scalingtable">
                                    <tr>
                                        <td>Press DMG</td>
                                        <td style="text-align:right;">136%</td>
                                    </tr>
                                    <tr>
                                        <td>Press CD</td>
                                        <td style="text-align:right;">1s</td>
                                    </tr>



                                </table>
                                <h1>Hold</h1>
                                <p>After an extended casting time, calls down lightning from the heavens, dealing massive Electro DMG to all nearby opponents.</p>
                                <p>Deals great amounts of extra damage to opponents based on the number of Conductive stacks applied to them, and clears their Conductive status.</p>


                                <table class="scalingtable">
                                    <tr>
                                        <td>Non-Conductive Hold DMG</td>
                                        <td style="text-align:right;">544%</td>
                                    </tr>
                                    <tr>
                                        <td>Stack 1 Conductive Hold DMG</td>
                                        <td style="text-align:right;">626%</td>
                                    </tr>
                                    <tr>
                                        <td>Stack 2 Conductive Hold DMG</td>
                                        <td style="text-align:right;">721%</td>
                                    </tr>
                                    <tr>
                                        <td>Stack 3 Conductive Hold DMG</td>
                                        <td style="text-align:right;">828%</td>
                                    </tr>
                                    <tr>
                                        <td>Holding CD</td>
                                        <td style="text-align:right;">16s</td>
                                    </tr>

                                </table>



                                    <p><i>Electro Purple is the raiment of the Witch of Purple Rose.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Lightning Rose</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Summons a Lightning Rose that unleashes powerful lightning bolts, launching surrounding opponents and dealing Electro DMG.</p>
                                <p>The Lightning Rose will continuously emit lightning to knock back opponents and deal Electro DMG throughout the ability's duration.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Discharge DMG</td>
                                            <td style="text-align:right;">62.2%</td>
                                        </tr>

                                        <tr>
                                            <td>Max Discharges</td>
                                            <td style="text-align:right;">29</td>
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
                                    <p><i>This rose is beautiful, but beware its mortal thorns.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>General Pharmaceutics</h1>
                                <p>When Lisa crafts a potion, she has a 20% chance to refund a portion of the crafting materials used.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Induced Aftershock</h1>
                                <p>Hits by Charged Attacks apply Violet Arc's Conductive status to opponents.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Static Electricity Field</h1>
                                <p>Opponents hit by Lightning Rose have their DEF decreased by 15% for 10s.</p>
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
                                    <h1>C1: Infinite Circuit</h1>
                                    <p>Lisa regenerates 2 Energy for every opponent hit while holding Violet Arc.</p>
                                    <p>A maximum of 10 Energy can be regenerated in this manner at any one time.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Electromagnetic Field</h1>
                                    <p>Holding Violet Arc has the following effects:</p>
                                    <li>Increases DEF by 25%.</li>
                                    <li>Increases Lisa's resistance to interruption.</li>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Resonant Thunder</h1>
                                    <p>Increases the Level of Lightning Rose by 3.</p>
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
                                    <h1>C4: Plasma Eruption</h1>
                                    <p>Lightning Rose now unleashes 1-3 lightning bolts when it attacks.
</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Electrocute</h1>
                                    <p>Increases the Level of Violet Arc by 3.</p>
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
                                    <h1>C6: Pulsating Witch</h1>
                                    <p>When Lisa takes the field, she applies 3 stacks of Violet Arc's Conductive status onto nearby opponents.</p>
                                    <p>This effect can only occur once every 5s.</p>
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
    $("#lisa-button").addClass("active");
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
