<head>
<?php 
    session_start();
    include '../includes/head.php';
?>
</head>
<nav class="nav">
    <?php 
        include '../includes/nav.php';
        ?>
</nav>
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/characterpagestyle.css">
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'dehya' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>
<title><?php echo $fetch['name']?> - Akasha</title>
<style>
.splash-art{
    top:;
    margin-left:auto;
    margin-right:auto;
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-left:auto;
        margin-right:auto;    
    }
}

:root {
    --highlighted-color:<?php echo $fetch['primarycolor']?> ; 


}
</style>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, transparent, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/<?php echo $fetch['url']?>/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title"><?php echo $fetch['name']?></p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/<?php echo $fetch['rarity']?>-stars.png" alt="">

                                <div tooltip="<?php echo $fetch['element']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_<?php echo $fetch['element']?>.png" >
                                </div>
                                <div tooltip="<?php echo $fetch['weapon']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_<?php echo $fetch['weapon']?>.png" alt="">
                                </div>
                                <div tooltip="<?php echo $fetch['region']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_<?php echo $fetch['region']?>.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">
                                <?php echo $fetch['description']?>
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
                                <td>HP</td>
                            </tr>
                            <tr>
                                <td>90/90</td>
                                <td>15675</td>
                                <td>265</td>
                                <td>628</td>
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
                                    <p class="talent-card-title">Normal Attack: Sandstorm Assault</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p>Performs up to 4 consecutive strikes using her Claymore and her martial arts.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">114.1%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">113.4%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">140.8%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">175.1%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Drains Stamina over time to perform continuous slashes.</p>
                                    <p>At the end of the sequence, performs a more powerful slash.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack Cyclic DMG</td>
                                            <td style="text-align:right;">103.5%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Molten Inferno</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>This art of Dehya's own invention changes its method of use depending on the combat situation.</p>
                                <h1>Indomitable Flame</h1>
                                <p>This skill will be unleashed should there be no Fiery Sanctum field created by Dehya herself present at the time.</p>
                                <p>Deals AoE Pyro DMG, and creates a field known as Fiery Sanctum.</p>
                                
                                <table class="scalingtable">
                                    <tr>
                                        <td>Indomitable Flame DMG</td>
                                        <td style="text-align:right;">191.9%</td>
                                    </tr>

                                </table>

                                <h1>Ranging Flame</h1>
                                <p>This skill will be unleashed should a Fiery Sanctum field created by Dehya herself already exist.</p>
                                <p>Dehya will perform a leaping attack, dealing AoE Pyro DMG before recreating a Fiery Sanctum field at her new position.</p>
                                <p>A Fiery Sanctum field created this way will inherit the remaining duration of the previous field.</p>
                                
                                <table class="scalingtable">
                                    <tr>
                                        <td>Ranging Flame DMG</td>
                                        <td style="text-align:right;">225.8%</td>
                                    </tr>

                                </table>

    

                                <h1>Fiery Sanctum</h1>
                                <p>When an opponent within a Fiery Sanctum field takes DMG, the field will unleash a coordinated attack, dealing AoE Pyro DMG to them based on Dehya's ATK and Max HP. This effect can be triggered once every 2.5s.</p>
                                <p>Active characters within this field have their resistance to interruption increased, and when such characters take DMG, a portion of that damage will be mitigated and flow into Redmane's Blood. Dehya will then take this DMG over 10s. When the mitigated DMG stored by Redmane's Blood reaches or goes over a certain percentage of Dehya's Max HP, she will stop mitigating DMG in this way.</p>
                                <br>
                                <p>Only 1 Fiery Sanctum created by Dehya herself can exist at the same time.</p>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Mitigation</td>
                                        <td style="text-align:right;">48%</td>
                                    </tr>
                                    <tr>
                                        <td>Redmane's Blood Maximum</td>
                                        <td style="text-align:right;">200% Max HP</td>
                                    </tr>
                                </table>

                                <table class="scalingtable">
                                    <tr>
                                        <td>Field DMG</td>
                                        <td style="text-align:right;">102.3% ATK+1.75% Max HP</td>
                                    </tr>
                                    <tr>
                                        <td>Field Duration</td>
                                        <td style="text-align:right;">12s</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">20s</td>
                                    </tr>

                                </table>

                                    <p><i>Walk this fiery ordeal with me and purge all impurity, just as a beast of flames that must descend from the blaze.</i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Leonine Bite</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Unleashing her burning anger and casting her inconvenient blade aside, Dehya enters the Blazing Lioness state and increases her resistance to interruption.</p>
                                <p>In this state, Dehya will automatically and continuously unleash the Flame-Mane's Fists, dealing Pyro DMG based on her ATK and Max HP, and when its duration ends, she will unleash an Incineration Drive, dealing AoE Pyro DMG based on her ATK and Max HP.</p>
                                <p>If a Fiery Sanctum field created by Dehya's own Elemental Skill "Molten Inferno" exists when this ability is unleashed, Dehya will retrieve it, and then create another field once Blazing Lioness's duration expires. This field will take on the retrieved field's duration at the moment of its retrieval.</p>
                                <p>In this state, Dehya will be unable to cast her Elemental Skill, or perform Normal, Charged, and Plunging Attacks. "Normal Attack: Sandstorm Assault" and Elemental Skill "Molten Inferno" will be replaced by "Roaring Barrage."</p>
                                <h1>Roaring Barrage</h1>
                                <p>Unleashing Roaring Barrage within 0.4s after each Flame-Mane's Fist strike will increase the speed at which the next Flame-Mane's Fist strike will be triggered.</p>
                                
                                <table class="scalingtable">
                                    <tr>
                                        <td>Flame-Mane's Fist DMG</td>
                                        <td style="text-align:right;">167.8% ATK+2.88% Max HP</td>
                                    </tr>
                                    <tr>
                                        <td>Incineration Drive DMG</td>
                                        <td style="text-align:right;">236.8% ATK+4.06% Max HP</td>
                                    </tr>
                                    <tr>
                                        <td>Duration</td>
                                        <td style="text-align:right;">4s</td>
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
                                <p><i>Even the flowing flames must obey her rage and at her command become her fangs and claws.</i></p>
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                            
                                <h1>The Sunlit Way</h1>
                                <p>Increases the Movement SPD of your own party members by 10% during the day (6:00 – 18:00).</p>
                                <p>Does not take effect in Domains, Trounce Domains, or Spiral Abyss. Not stackable with Passive Talents that provide the exact same effects.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Unstinting Succor</h1>
                                <p>Within 6 seconds after Dehya retrieves the Fiery Sanctum field through Molten Inferno: Ranging Flame or Leonine Bite, she will take 60% less DMG when receiving DMG from Redmane's Blood. This effect can be triggered once every 2s.</p>
                                <p>Additionally, within 9s after Dehya unleashes Molten Inferno: Indomitable Flame, she will grant all party members the Gold-Forged Form state. This state will further increase a character's resistance to interruption when they are within the Fiery Sanctum field. Gold-Forged Form can be activated once every 18s.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Stalwart and True</h1>
                                <p>When her HP is less than 40%, Dehya will recover 20% of her Max HP and will restore 6% of her Max HP every 2s for the next 10s. This effect can be triggered once every 20s.</p>
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
                                    <h1>C1: The Flame Incandescent</h1>
                                    <p>Dehya's Max HP is increased by 20%, and she deals bonus DMG based on her Max HP when using the following attacks:</p>
                                    <li>Molten Inferno's DMG will be increased by 3.6% of her Max HP.</li>
                                    <li>Leonine Bite's DMG will be increased by 6% of her Max HP.</li>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: The Sand-Blades Glittering</h1>
                                    <p>When Dehya uses Molten Inferno: Ranging Flame, the duration of the recreated Fiery Sanctum field will be increased by 6s.</p>
                                    <p>Additionally, when a Fiery Sanctum exists on the field, DMG dealt by its next coordinated attack will be increased by 50% when active character(s) within the Fiery Sanctum field are attacked.</p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: A Rage Swift as Fire</h1>
                                    <p>Increases the Level of Leonine Bite by 3.</p>
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
                                    <h1>C4: An Oath Abiding</h1>
                                    <p>When Flame-Mane's Fist and Incineration Drive attacks unleashed during Leonine Bite hit opponents, they will restore 1.5 Energy for Dehya and 2.5% of her Max HP. This effect can be triggered once every 0.2s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: The Alpha Unleashed</h1>
                                    <p>Increases the Level of Molten Inferno by 3.</p>
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
                                    <h1>C6: The Burning Claws Cleaving</h1>
                                    <p>The CRIT Rate of Leonine Bite is increased by 10%.</p>
                                    <p>Additionally, after a Flame-Mane's Fist attack hits an opponent and deals CRIT Hits during a single Blazing Lioness state, it will cause the CRIT DMG of Leonine Bite to increase by 15% for the rest of Blazing Lioness's duration and extend that duration by 0.5s. This effect can be triggered every 0.2s. The duration can be extended for a maximum of 2s and CRIT DMG can be increased by a maximum of 60% this way.</p>
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