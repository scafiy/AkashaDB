<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Itto - Akasha</title>
    

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
    --highlighted-color:#F3AA48 ; 
    --topnav-color: #ECE5DC;
    --search-bar-precolour:#ECE5DC;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'itto' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #F3AA4875, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Itto/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Itto</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Geo" flow="up">
                                    <img class="icons" src="../images/icons/b_Geo.png" >
                                </div>
                                <div tooltip="Claymore" flow="up">
                                    <img class="icons" src="../images/icons/b_Claymore.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">The first and greatest head of the Arataki Gang, famed throughout Inazuma City's Hanamizaka... Wait, what? You've never heard of them? Are you trying to be funny here?</p>
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
                            <td>Crit Rate</td>

                        </tr>

                        <tr>
                            <td>90/90</td>
                            <td>12858</td>
                            <td>227</td>
                            <td>959</td>
                            <td>24.2%</td>

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
                                    <p class="talent-card-title">Normal Attack: Fight Club Legend</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p>Performs up to 4 consecutive strikes.</p>
                                <p>When the 2nd and 4th strikes hit opponents, Itto will gain 1 and 2 stacks of Superlative Superstrength, respectively.</p>
                                <p>Max 5 stacks. Triggering this effect will refresh the current duration of any existing stacks.</p>
                                <p>Additionally, Itto's Normal Attack combo does not immediately reset after sprinting or using his Elemental Skill, "Masatsu Zetsugi: Akaushi Burst!"</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">145.6%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">140.3%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">168.4%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">215.4%</td>
                                        </tr>


                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>When holding to perform a Charged Attack, Itto unleashes a series of Arataki Kesagiri slashes without consuming Stamina. Instead, each Arataki Kesagiri slash consumes 1 stack of Superlative Superstrength. When the final stack is consumed, Itto delivers a powerful final slash.</p>
                                    <p>If no stacks of Superlative Superstrength are available, Itto will perform a single Saichimonji Slash.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Arataki Kesagiri Combo Slash DMG</td>
                                            <td style="text-align:right;">167.5%</td>
                                        </tr>
                                        <tr>
                                            <td>Arataki Kesagiri Final Slash DMG</td>
                                            <td style="text-align:right;">350.8%</td>
                                        </tr>
                                        <tr>
                                            <td>Superlative Superstrength Duration</td>
                                            <td style="text-align:right;">60s</td>
                                        </tr>
                                        <tr>
                                            <td>Saichimonji Slash DMG</td>
                                            <td style="text-align:right;">166.2%</td>
                                        </tr>
                                        <tr>
                                            <td>Saichimonji Slash Stamina Cost</td>
                                            <td style="text-align:right;">20</td>
                                        </tr>
                                    </table>

                                    <h1>Plunging Attack</h1>
                                    <p>Plunges from mid-air to strike the ground, damaging opponents along the path and dealing AoE DMG upon impact.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Collision Plunge DMG</td>
                                            <td style="text-align:right;">150.3%</td>
                                        </tr>
                                        <tr>
                                            <td>Low/High Plunge DMG</td>
                                            <td style="text-align:right;">301%/375%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Masatsu Zetsugi: Akaushi Burst!</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Hurls Ushi, the young akaushi bull and auxiliary member of the Arataki Gang, dealing Geo DMG to opponents on hit. When Ushi hits opponents, Arataki Itto gains 1 stack of Superlative Superstrength.</p>

                                    <table class="scalingtable">
                                        <tr>
                                            <td>Skill DMG</td>
                                            <td style="text-align:right;">522%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">6s</td>
                                        </tr>
                                        <tr>
                                            <td>CD</td>
                                            <td style="text-align:right;">10s</td>
                                        </tr>

                                    </table>
                                    <p>Ushi will remain on the field and provide support in the following ways:</p>
                                    <li>Taunts surrounding opponents and draws their attacks.</li>
                                    <li>Inherits HP based on a percentage of Arataki Itto's Max HP.</li>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Inherited HP</td>
                                            <td style="text-align:right;">100%</td>
                                        </tr>
                                    </table>
                                    <li>When Ushi takes DMG, Arataki Itto gains 1 stack of Superlative Superstrength. Only 1 stack can be gained in this way every 2s.</li>
                                    <li>Ushi will flee when its HP reaches 0 or its duration ends. It will grant Arataki Itto 1 stack of Superlative Superstrength when it leaves.</li>
                                    <h1>Hold</h1>
                                    <p>Adjust throwing angle.</p>
                                    <p>Ushi is considered a Geo construct. Arataki Itto can only deploy 1 Ushi on the field at any one time.</p>
                                    <p><i>The name of this technique is derived from Onibudou (a light novel series written by Junkichi). However, calling it "Onisatsu Zetsugi" probably constitutes copyright infringement — not to mention how Itto himself is an oni and all...</i></p>
                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Royal Descent: Behold, Itto the Evil!</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p>Time to show 'em the might of the Arataki Gang! For a time, Itto lets out his inner Raging Oni King, wielding his Oni King's Kanabou in battle.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">11s</td>
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
                                <p>This state has the following special properties:</p>
                                <li>Converts Itto's Normal, Charged, and Plunging Attacks to Geo DMG. This cannot be overridden.</li>
                                <li>Increases Itto's Normal Attack SPD. Also increases his ATK based on his DEF.</li>
                               
                                    <table class="scalingtable">
                                        <tr>
                                            <td>ATK Bonus</td>
                                            <td style="text-align:right;">97.9% DEF</td>
                                        </tr>

                                        <tr>
                                            <td>ATK SPD Bonus</td>
                                            <td style="text-align:right;">10%</td>
                                        </tr>


                                    </table>
                                <li>On hit, the 1st and 3rd strikes of his attack combo will each grant Arataki Itto 1 stack of Superlative Superstrength.</li>
                                <li>Decreases Itto's Elemental and Physical RES by 20%.</li>
                                
                                <p>The Raging Oni King state will be cleared when Itto leaves the field.</p>
                                <p><i>This is the pinnacle technique of the ultimate fighting style (according to Itto). It would be pointless for Arataki Itto to reference any other fighting styles to improve his own, for he, and no other, is the strongest, most terrible oni in the land.</i></p>
                                <p><i>Shouta thinks it looks really cool.</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Woodchuck Chucked</h1>
                                <p>When a party member uses attacks to obtain wood from a tree, they have a 25% chance to get an additional log of wood.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Arataki Ichiban</h1>
                                <p>When Arataki Itto uses consecutive Arataki Kesagiri, he obtains the following effects:</p>
                                <li>Each slash increases the ATK SPD of the next slash by 10%. Max ATK SPD increase is 30%.</li>
                                <li>Increases his resistance to interruption.</li>
                                <p>These effects will be cleared once he stops performing consecutive slashes.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Bloodline of the Crimson Oni</h1>
                                <p>Arataki Kesagiri DMG is increased by 35% of Arataki Itto's DEF.</p>
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
                                    <h1>C1: Stay a While and Listen Up</h1>
                                    <p>After using Royal Descent: Behold, Itto the Evil!, Arataki Itto gains 2 stacks of Superlative Superstrength. After 1s, Itto will gain 1 stack of Superlative Superstrength every 0.5s for 1.5s.</p>
                                </div>

                            </div>
                        </div>



                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C2: Gather 'Round, It's a Brawl!</h1>
                                    <p>After using Royal Descent: Behold, Itto the Evil!, each party member whose Element is Geo will decrease that skill's CD by 1.5s and restore 6 Energy to Arataki Itto.</p>
                                    <p>CD can be decreased by up to 4.5s in this manner. Max 18 Energy can be restored in this manner.</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: Horns Lowered, Coming Through</h1>
                                    <p>Increases the Level of Masatsu Zetsugi: Akaushi Burst! by 3.</p>
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
                                    <h1>C4: Jailhouse Bread and Butter</h1>
                                    <p>When the Raging Oni King state caused by Royal Descent: Behold, Itto the Evil! ends, all nearby party members gain 20% DEF and 20% ATK for 10s.</p>
                                </div>

                            </div>
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C5: 10 Years of Hanamizaka Fame</h1>
                                    <p>Increases the Level of Royal Descent: Behold, Itto the Evil! by 3.</p>
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
                                    <h1>C6: Arataki Itto, Present!</h1>
                                    <p>Arataki Itto's Charged Attacks deal +70% Crit DMG. Additionally, when he uses Arataki Kesagiri, he has a 50% chance to not consume stacks of Superlative Superstrength.</p>
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
    $("#itto-button").addClass("active");
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