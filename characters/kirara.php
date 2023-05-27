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
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'kirara' ") or die(mysqli_error());
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
                <div class="banner" style="background-image: linear-gradient(to left, #62b7009d, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
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
                                <td>12180</td>
                                <td>223</td>
                                <td>546</td>
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
                                    <p class="talent-card-title">Normal Attack: Boxcutter</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p>Performs up to 4 rapid strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">88%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">85.2%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">46.7%+70.1%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">134.6%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to unleash 3 rapid claw strikes.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">41.1%+82.2%+82.2%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Meow-teor Kick</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1>Press</h1>
                                <p>Leaps into the air with all the agility of a cat passing through the bushes, and thwacks her foes with a flying kick that deals AoE Dendro DMG while creating a Shield of Safe Transport. This will also briefly apply Dendro to Kirara. The shield will absorb Dendro DMG with 250% effectiveness. The shield's DMG absorption will be based on Kirara's Max HP and will not exceed a certain percentage of that Max HP. The remaining DMG absorption on a Shield of Safe Transport will stack on a new one when it is created, and its duration will reset.</p>
                                <h1>Hold</h1>
                                <p>Out of her desire to "deliver within half a day," Kirara deploys a Shield of Safe Transport identical to the one that can be created by pressing the skill. She will also curl up into a special express delivery box, entering the Urgent Neko Parcel state in order to move and fight more swiftly.</p>
                                <h1>Urgent Neko Parcel</h1>
                                <li>Deals Dendro DMG to opponents she crashes into. This effect can be triggered once on each opponent every 0.5s.</li>
                                <li>When in this state, Kirara's movement speed, climbing speed, and jumping power are all increased, and her Stamina Consumption from climbing is increased.</li>
                                <li>When the duration ends or the skill is used again, a Flipclaw Strike more powerful than the attack in the Mode will be unleashed, dealing AoE Dendro DMG.</li>
                                <li>The Urgent Neko Parcel state lasts a maximum of 10s. When the state ends, the skill will enter CD. The longer Kirara spends in this state, the longer the CD will be.</li>
                                <li>Sprinting or actively canceling climbing will end this state early.</li>
                                <table class="scalingtable">
                                    <tr>
                                        <td>Tail-Flicking Flying Kick DMG</td>
                                        <td style="text-align:right;">176.8%</td>
                                    </tr>
                                    <tr>
                                        <td>Shield DMG Absorption</td>
                                        <td style="text-align:right;">17% Max HP+1956</td>
                                    </tr>
                                    <tr>
                                        <td>Max Shield DMG Absorption</td>
                                        <td style="text-align:right;">27.2% Max HP+3133</td>
                                    </tr>
                                    <tr>
                                        <td>Shield Duration</td>
                                        <td style="text-align:right;">12s</td>
                                    </tr>
                                    <tr>
                                        <td>Urgent Neko Parcel Hit DMG</td>
                                        <td style="text-align:right;">57.1%</td>
                                    </tr>
                                    <tr>
                                        <td>Max Urgent Neko Parcel Duration</td>
                                        <td style="text-align:right;">10s</td>
                                    </tr>
                                    <tr>
                                        <td>Flipclaw Strike DMG</td>
                                        <td style="text-align:right;">244.8%</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">8s – 12s</td>
                                    </tr>

                                </table>

                                    <p><i>"So you wanna know the secret to speedy deliveries? Well, it's all in the legs!"</i></p>
                            </div>
                        </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Secret Art: Surprise Dispatch</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Smash opponents with a Special Delivery Package used for punishing parcel thieves, dealing AoE Dendro DMG. After the Special Delivery Package explodes, it will split up into many Cat Grass Cardamoms that will explode either upon contact with opponents or after a period of time, dealing AoE Dendro DMG.</p>
                            
                                <table class="scalingtable">
                                    <tr>
                                        <td>Skill DMG</td>
                                        <td style="text-align:right;">969.4%</td>
                                    </tr>
                                    <tr>
                                        <td>Cat Grass Cardamom Explosion DMG</td>
                                        <td style="text-align:right;">60.6%</td>
                                    </tr>
                                    <tr>
                                        <td>Cat Grass Cardamom Duration</td>
                                        <td style="text-align:right;">12s</td>
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
                                <p><i>"Hehe, that's right, this stuff was made to deal with those parcel thieves! Remember to leave a 5-star rating once you've received yours!"</i></p>
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                            
                                <h1>Cat's Creeping Carriage</h1>
                                <p>When Kirara is in the party, animals who produce Fowl, Raw Meat, or Chilled Meat will not be startled when party members approach them.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Bewitching, Betwitching Tails</h1>
                                <p>When Kirara is in the Urgent Neko Parcel state of Meow-teor Kick, each impact against an opponent will grant her a stack of Reinforced Packaging. This effect can be triggered once for each opponent hit every 0.5s. Max 3 stacks. When the Urgent Neko Parcel state ends, each stack of Reinforced Packaging will create 1 Shield of Safe Transport for Kirara. The shields that are created this way will have 20% of the DMG absorption that the Shield of Safe Transport produced by Meow-teor Kick would have. If Kirara is already protected by a Shield of Safe Transport created by Meow-teor Kick, its DMG absorption will stack with these shields and its duration will reset.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Pupillary Variance</h1>
                                <p>Every 1,000 Max HP Kirara possesses will increase the DMG dealt by Meow-teor Kick by 0.4%, and the DMG dealt by Secret Art: Surprise Dispatch by 0.3%.</p>
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
                                    <h1>C1: Material Circulation</h1>
                                    <p>Every 8,000 Max HP Kirara possesses will cause her to create 1 extra Cat Grass Cardamom when she uses Secret Art: Surprise Dispatch. A maximum of 4 extra can be created this way.</p>

                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Perfectly Packaged</h1>
                                    <p>When Kirara is in the Urgent Neko Parcel state of Meow-teor Kick, she will grant other party members she crashes into Critical Transport Shields.</p>
                                    <p>The DMG absorption of Critical Transport Shield is 40% of the maximum absorption Meow-teor Kick's normal Shields of Safe Transport are capable of, and will absorb Dendro DMG with 250% effectiveness.</p>
                                    <p>Critical Transport Shields last 12s and can be triggered once on each character every 10s.</p>

                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Universal Recognition</h1>
                                    <p>Increases the Level of Meow-teor Kick by 3.</p>
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
                                    <h1>C4: Steed of Skanda</h1>
                                    <p>After active character(s) protected by Shields of Safe Transport or Critical Transport Shields hit opponents with Normal, Charged, or Plunging Attacks, Kirara will perform a coordinated attack with them using Small Cat Grass Cardamoms, dealing 200% of her ATK as Dendro DMG. DMG dealt this way is considered Elemental Burst DMG. This effect can be triggered once every 3.8s. This CD is shared between all party members.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: A Thousand Miles in a Day</h1>
                                    <p>Increases the Level of Secret Art: Surprise Dispatch by 3.</p>
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
                                    <h1>C6: Countless Sights to See</h1>
                                    <p>All nearby party members will gain 12% All Elemental DMG Bonus within 15s after Kirara uses her Elemental Skill or Burst.</p>
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
<?php
    }
?>
</body>