<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Albedo - Akasha</title>
    

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
        right: -15px;
    }
}


:root {
    --highlighted-color:#F3D246; 
    --topnav-color: #ECE9DC;
    --search-bar-precolour:#ECE9DC;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'albedo' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #F3D24675, var(--primary-background-color) 80%), url('../images/characters/albedo/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/albedo/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Albedo</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Geo" flow="up">
                                    <img class="icons" src="../images/icons/b_geo.png" >
                                </div>
                                <div tooltip="Sword" flow="up">
                                    <img class="icons" src="../images/icons/b_sword.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_Mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A genius known as the Kreideprinz, he is the Chief Alchemist and Captain of the Investigation Team of the Knights of Favonius.</p>
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
                            <td>Geo DMG Bonus</td>
                            <td>Materials</td>

                        </tr>

                        <tr>
                            <td>1/20</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td>20/20</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="materialstd" rowspan="2">
                                <div class="flex">

                                <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-2-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_104174.png">
                                        </div>
                                        <p class="item-text">1</p>
                                    </a>



                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_100023.png">
                                        </div>
                                        <p class="item-text">3</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-3-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_112010.png">
                                        </div>
                                        <p class="item-text">3</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://static.wikia.nocookie.net/gensin-impact/images/8/84/Item_Mora.png">
                                        </div>
                                        <p class="item-text">2000</p>
                                    </a>         
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>20/40</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td>40/40</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="materialstd" rowspan="2">
                                <div class="flex">

                                <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-3-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_104174.png">
                                        </div>
                                        <p class="item-text">3</p>
                                    </a>

                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-4-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_113009.png">
                                        </div>
                                        <p class="item-text">2</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_100023.png">
                                        </div>
                                        <p class="item-text">10</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_112010.png">
                                        </div>
                                        <p class="item-text">15</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://static.wikia.nocookie.net/gensin-impact/images/8/84/Item_Mora.png">
                                        </div>
                                        <p class="item-text">4000</p>
                                    </a>         
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>40/50</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td>50/50</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="materialstd" rowspan="2">
                                <div class="flex">

                                <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-5-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_104174.png">
                                        </div>
                                        <p class="item-text">6</p>
                                    </a>

                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-4-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_113009.png">
                                        </div>
                                        <p class="item-text">4</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_100023.png">
                                        </div>
                                        <p class="item-text">20</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-2-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_112010.png">
                                        </div>
                                        <p class="item-text">12</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://static.wikia.nocookie.net/gensin-impact/images/8/84/Item_Mora.png">
                                        </div>
                                        <p class="item-text">6000</p>
                                    </a>         
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>50/60</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td>60/60</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="materialstd" rowspan="2">
                                <div class="flex">

                                <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-4-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_104174.png">
                                        </div>
                                        <p class="item-text">3</p>
                                    </a>

                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-4-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_113009.png">
                                        </div>
                                        <p class="item-text">8</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_100023.png">
                                        </div>
                                        <p class="item-text">30</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-2-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_112010.png">
                                        </div>
                                        <p class="item-text">18</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://static.wikia.nocookie.net/gensin-impact/images/8/84/Item_Mora.png">
                                        </div>
                                        <p class="item-text">8000</p>
                                    </a>         
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>60/70</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td>70/70</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="materialstd" rowspan="2">
                                <div class="flex">

                                <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-4-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_104174.png">
                                        </div>
                                        <p class="item-text">6</p>
                                    </a>

                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-4-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_113009.png">
                                        </div>
                                        <p class="item-text">12</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_100023.png">
                                        </div>
                                        <p class="item-text">45</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-3-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_112010.png">
                                        </div>
                                        <p class="item-text">12</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://static.wikia.nocookie.net/gensin-impact/images/8/84/Item_Mora.png">
                                        </div>
                                        <p class="item-text">100,000</p>
                                    </a>         
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>70/80</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td>80/80</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="materialstd" rowspan="2">
                                <div class="flex">

                                <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-5-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_104174.png">
                                        </div>
                                        <p class="item-text">6</p>
                                    </a>

                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-4-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_113009.png">
                                        </div>
                                        <p class="item-text">20</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_100023.png">
                                        </div>
                                        <p class="item-text">60</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-3-star">
                                            <img class="item-img" src="https://api.ambr.top/assets/UI/UI_ItemIcon_112010.png">
                                        </div>
                                        <p class="item-text">24</p>
                                    </a>


                                    <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                        <div class="item-icon bg-1-star">
                                            <img class="item-img" src="https://static.wikia.nocookie.net/gensin-impact/images/8/84/Item_Mora.png">
                                        </div>
                                        <p class="item-text">120,000</p>
                                    </a>         
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>80/90</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>


                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>13226</td>
                            <td>251</td>
                            <td>876</td>
                            <td>28.8%</td>
                            <td></td>

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
                                    <p class="talent-card-title">Normal Attack: Favonius Bladework - Weiss</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 rapid strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">67.5%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">67.5%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">87.2%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">91.4%</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">114%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to unleash 2 rapid sword strikes.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">86.9%+110.6%</td>
                                        </tr>
                                        <tr>
                                            <td>Charged Attack Stamina Cost</td>
                                            <td style="text-align:right;">20</td>
                                        </tr>


                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Plunges from mid-air to strike the ground below, damaging opponents along the path and dealing AoE DMG upon impact.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Collision Plunge DMG</td>
                                            <td style="text-align:right;">117.5%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Abiogenesis: Solar Isotoma</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="talent-card-text"></p> 
                                    <p>Albedo creates a Solar Isotoma using alchemy, which deals AoE Geo DMG on appearance.</p>                           
                                    <h1>Solar Isotoma</h1> 
                                    <p>has the following properties:</p>
                                    <li>When opponents within the Solar Isotoma field take DMG, the Solar Isotoma will generate Transient Blossoms which deal AoE Geo DMG. DMG dealt scales off Albedo's DEF.</li>
                                    <li>Transient Blossoms can only be generated once every 2s.</li>
                                    <li>When a character is located at the locus of the Solar Isotoma, the Solar Isotoma will accumulate Geo power to form a crystallized platform that lifts the character up to a certain height. Only one crystallized platform can exist at a time.</li>
                                    <li>Solar Isotoma is considered a Geo construct. Only one Solar Isotoma created by Albedo himself can exist at a time.</li>
                                    <p>Hold to designate the location of the skill.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">222%</td>
                                        </tr>
                                        <tr>
                                            <td>Transient Blossom DMG</td>
                                            <td style="text-align:right;">227% DEF</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">30s</td>
                                        </tr>
                                        <tr>
                                            <td>Skill CD</td>
                                            <td style="text-align:right;">4s</td>
                                        </tr>
                                    </table>
                                    <p><i>This Geo bloom has an unusual property mirrored in the aim of alchemy. To rise from the earth, soar into the sky, and become the sun.</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Rite of Progeniture: Tectonic Tide</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="">Under Albedo's command, Geo crystals surge and burst forth, dealing AoE Geo DMG in front of him.</p>
                                <p>If a Solar Isotoma created by Albedo himself is on the field, 7 Fatal Blossoms will be generated in the Solar Isotoma field, bursting violently into bloom and dealing AoE Geo DMG.</p>
                                <p>Tectonic Tide DMG and Fatal Blossom DMG will not generate Transient Blossoms.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Burst DMG</td>
                                            <td style="text-align:right;">624%</td>
                                        </tr>
                                        <tr>
                                            <td>Fatal Blossom DMG</td>
                                            <td style="text-align:right;">122.4% each</td>
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
                                    <p><i>Under the Kreideprinz's command, the tectonic tide of creation seethes into life.
</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Flash of Genius</h1>
                                <p>When Albedo crafts Weapon Ascension Materials, he has a 10% chance to receive double the product.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Calcite Might</h1>
                                <p>Transient Blossoms generated by Abiogenesis: Solar Isotoma deal 25% more DMG to opponents whose HP is below 50%.
</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Homuncular Nature</h1>
                                <p>Using Rite of Progeniture: Tectonic Tide increases the Elemental Mastery of nearby party members by 125 for 10s.</p>
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
                                    <h1>C1: Flower of Eden</h1>
                                    <p>Transient Blossoms generated by Albedo's Abiogenesis: Solar Isotoma regenerate 1.2 Energy for Albedo.
</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Opening of Phanerozoic</h1>
                                    <p>Transient Blossoms generated by Abiogenesis: Solar Isotoma grant Albedo Fatal Reckoning for 30s:</p>
                                    <li>Unleashing Rite of Progeniture: Tectonic Tide consumes all stacks of Fatal Reckoning. Each stack of Fatal Reckoning consumed increases the DMG dealt by Fatal Blossoms and Rite of Progeniture: Tectonic Tide's burst DMG by 30% of Albedo's DEF.</li>
                                    <li>This effect stacks up to 4 times.</li>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Grace of Helios</h1>
                                    <p>Increases the Level of Abiogenesis: Solar Isotoma by 3.</p>
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
                                    <h1>C4: Descent of Divinity</h1>
                                    <p>Active party members within the Solar Isotoma field have their Plunging Attack DMG increased by 30%.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: Tide of Hadean</h1>
                                    <p>Increases the Level of Rite of Progeniture: Tectonic Tide by 3.</p>
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
                                    <h1>C6: Dust of Purification</h1>
                                    <p>Active party members within the Solar Isotoma field who are protected by a shield created by Crystallize have their DMG increased by 17%.</p>
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
    $("#<?php echo $fetch['url']?>-button").addClass("active");
    $("#albedo-button").addClass("dark");
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


