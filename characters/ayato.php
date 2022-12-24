<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Kamisato Ayato - Akasha</title>
    

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
    margin-right:10px;
}

:root {
    --highlighted-color:#B0C2E3 ; 
    --topnav-color:#E6E7EA ;
    --search-bar-precolour:#E6E7EA;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'ayaka' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #B0C2E375, var(--primary-background-color) 80%), url('../images/characters/ayato/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Ayato/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Kamisato Ayato</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Hydro" flow="up">
                                    <img class="icons" src="../images/icons/b_Hydro.png" >
                                </div>
                                <div tooltip="Sword" flow="up">
                                    <img class="icons" src="../images/icons/b_Sword.png" alt="">
                                </div>
                                <div tooltip="Inazuma" flow="up">
                                    <img class="icons" src="../images/icons/b_Inazuma.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">The young but highly accomplished head of the Yashiro Commission's Kamisato Clan. Cultured and polite, he is a man of many ways and means.
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
                            <td>13715</td>
                            <td>299</td>
                            <td>769</td>
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
                                    <p class="talent-card-title">Normal Attack: Kamisato Art - Marobashi</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <h1 class="">Normal Attack</h1>
                                <p class="">Performs up to 5 rapid strikes.</p>
                                <table class="scalingtable">
                                        <tr>
                                            <td>1-Hit DMG</td>
                                            <td style="text-align:right;">82.6%</td>
                                        </tr>
                                        <tr>
                                            <td>2-Hit DMG</td>
                                            <td style="text-align:right;">86.6%</td>
                                        </tr>
                                        <tr>
                                            <td>3-Hit DMG</td>
                                            <td style="text-align:right;">107.7%</td>
                                        </tr>
                                        <tr>
                                            <td>4-Hit DMG</td>
                                            <td style="text-align:right;">54.1%x2</td>
                                        </tr>
                                        <tr>
                                            <td>5-Hit DMG</td>
                                            <td style="text-align:right;">138.9%</td>
                                        </tr>

                                    </table>

                                    <h1>Charged Attack</h1>
                                    <p>Consumes a certain amount of Stamina to dash forward and performs an iai.</p>
                                    <table class="scalingtable">
                                        <tr>
                                            <td>Charged Attack DMG</td>
                                            <td style="text-align:right;">238%</td>
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
                                    <p class="talent-card-title">Elemental Skill: Kamisato Art: Kyouka</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="talent-card-text"></p>
                                <p>Kamisato Ayato shifts positions and enters the Takimeguri Kanka state.</p>
                                <p>After this shift, he will leave a watery illusion at his original location. After it is formed, the watery illusion will explode if opponents are nearby or after its duration ends, dealing AoE Hydro DMG.</p>                     
                                <h1>Takimeguri Kanka</h1>
                                <p>In this state, Kamisato Ayato uses his Shunsuiken to engage in blindingly fast attacks, causing DMG from his Normal Attacks to be converted into AoE Hydro DMG. This cannot be overridden.</p>
                                <p>It also has the following properties:</p>
                                <li>After a Shunsuiken attack hits an opponent, it will grant Ayato the Namisen effect, increasing the DMG dealt by Shunsuiken based on Ayato's current Max HP. The initial maximum number of Namisen stacks is 4, and 1 stack can be gained through Shunsuiken every 0.1s. This effect will be dispelled when Takimeguri Kanka ends.</li>
                                <li>Kamisato Ayato's resistance to interruption is increased.</li>
                                <li>Unable to use Charged or Plunging Attacks.</li>
                                <p>Takimeguri Kanka will be cleared when Ayato leaves the field. Using Kamisato Art: Kyouka again while in the Takimeguri Kanka state will reset and replace the pre-existing state.</p>

                                <table class="scalingtable">
                                    <tr>
                                        <td>Shunsuiken 1-Hit DMG</td>
                                        <td style="text-align:right;">97.2%</td>
                                    </tr>
                                    <tr>
                                        <td>Shunsuiken 2-Hit DMG</td>
                                        <td style="text-align:right;">108.2%</td>
                                    </tr>
                                    <tr>
                                        <td>Shunsuiken 3-Hit DMG</td>
                                        <td style="text-align:right;">119.3%</td>
                                    </tr>
                                    <tr>
                                        <td>Takimeguri Kanka Duration</td>
                                        <td style="text-align:right;">6s</td>
                                    </tr>
                                    <tr>
                                        <td>Namisen DMG Bonus</td>
                                        <td style="text-align:right;">1.03% Max HP/Stack</td>
                                    </tr>
                                    <tr>
                                        <td>Water Illusion DMG</td>
                                        <td style="text-align:right;">186.4%</td>
                                    </tr>
                                    <tr>
                                        <td>Water Illusion Duration</td>
                                        <td style="text-align:right;">6s</td>
                                    </tr>
                                    <tr>
                                        <td>CD</td>
                                        <td style="text-align:right;">12s</td>
                                    </tr>

                                </table>

                                    <p><i>"When, I wonder, did you come under the illusion that you were winning?"</i></p>
                                    <p><i>— Ayato is like this in both matter of martial prowess and political intrigue, but to preserve the dignity of his fellow Commissioners, he does not say such things to them. As such, only Thoma, Itto, and Ayaka have ever heard this line.</i></p>

                                </div>
                            </div>

                        <div class="talent-card">
                            <div class="talent-card-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/burst.png" alt="">
                                </div>

                                <div class="talent-card-heading-text">
                                    <p class="talent-card-title">Elemental Burst: Kamisato Art: Suiyuu</p>
                                    <p class="level">Lv.9</p>
                                </div>
                            </div>

                            <div class="talent-card-description">
                                <p class="">Unveils a garden of purity that silences the cacophony within.</p>
                                <p>While this space exists, Bloomwater Blades will constantly rain down and attack opponents within its AoE, dealing Hydro DMG and increasing the Normal Attack DMG of characters within.</p>
                                
                                <table class="scalingtable">
                                        <tr>
                                            <td>Bloomwater Blade DMG</td>
                                            <td style="text-align:right;">113%</td>
                                        </tr>
                                        <tr>
                                            <td>Waves</td>
                                            <td style="text-align:right;">9</td>
                                        </tr>
                                        <tr>
                                            <td>Bloomwater Blade per Wave</td>
                                            <td style="text-align:right;">4</td>
                                        </tr>
                                        <tr>
                                            <td>Normal Attack DMG Bonus</td>
                                            <td style="text-align:right;">19%</td>
                                        </tr>
                                        <tr>
                                            <td>Duration</td>
                                            <td style="text-align:right;">18s</td>
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
                                    <p><i>"I can see them, you know. The ripples of your beating heart within this realm of still waters."</i></p>

                                
                            </div>
                    </div>


                    

                    <p class="title">Passives</p>

                    <div class="passive-deck">
                        <div class="passive-deck-wrapper">

                    
                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                                </div>                        
                                
                                <h1>Kamisato Art: Daily Cooking</h1>
                                <p>When Ayato cooks a dish perfectly, he has a 18% chance to receive an additional "Suspicious" dish of the same type.</p>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                                </div> 
                                <h1>Kamisato Art: Mine Wo Matoishi Kiyotaki</h1>
                                <p>Kamisato Art: Kyouka has the following properties:</p>
                                <li>After it is used, Kamisato Ayato will gain 2 Namisen stacks.</li>
                                <li>When the water illusion explodes, Ayato will gain a Namisen effect equal to the maximum number of stacks possible.</li>
                            </div>

                            <div class="passive-card">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                                </div> 
                                <h1>Kamisato Art: Michiyuku Hagetsu</h1>
                                <p>If Kamisato Ayato is not on the field and his Energy is less than 40, he will regenerate 2 Energy for himself every second.</p>
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
                                    <h1>C1: Kyouka Fuushi</h1>
                                    <p>Shunsuiken DMG is increased by 40% against opponents with 50% HP or less.

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
                                    <h1>C2: World Source
</h1>
                                    <p>Namisen's maximum stack count is increased to 5. When Kamisato Ayato has at least 3 Namisen stacks, his Max HP is increased by 50%.

</p>
                                </div>
                            </div>
                        </div>




                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                                </div>

                                <div class="constellation-text">
                                    <h1>C3: To Admire the Flowers
</h1>
                                    <p>Increases the Level of Kamisato Art: Kyouka by 3.
</p>
                                    <p>Maximum upgrade level is 15.

</p>
                                </div>
                            </div>
                    
                        </div>


                        <div class="constellation">
                            <div class="constellation-heading">
                                <div class="talent-icon">
                                    <img src="../images/characters/<?php echo $fetch['url']?>/c4.png" alt="">
                                </div>
                                <div class="constellation-text">
                                    <h1>C4: Endless Flow
</h1>
                                    <p>After using Kamisato Art: Suiyuu, all nearby party members will have 15% increased Normal Attack SPD for 15s.

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
                                    <h1>C5: Bansui Ichiro</h1>
                                        <p>Increases the Level of Kamisato Art: Suiyuu by 3.</p>
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
                                <h1>C6: Boundless Origin
</h1>
                                    <p>After using Kamisato Art: Kyouka, Ayato's next Shunsuiken attack will create 2 extra Shunsuiken strikes when they hit opponents, each one dealing 450% of Ayato's ATK as DMG.</p>
                                    <p>Both these Shunsuiken attacks will not be affected by Namisen.

</p>
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
    $("#ayato-button").addClass("active");
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