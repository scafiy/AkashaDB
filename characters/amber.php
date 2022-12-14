<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Amber - Akasha</title>
    

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
        margin-right:-20px;
    }
}

:root {
    --highlighted-color: #E76F52; 
    --topnav-color: #EBE3E1;
    --search-bar-precolour:#EBE3E1;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'amber' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #e7705275, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/<?php echo $fetch['url']?>/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Amber</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Pyro" flow="up">
                                    <img class="icons" src="../images/icons/b_pyro.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_bow.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">Always energetic and full of life, Amber's the best — albeit only — Outrider of the Knights of Favonius.</p>
                        </div>
                    </div>
                </div>
                
            <div class="information">
                

                <div class="base-stat-table">
                    <div class="talent-card-heading">
                        <p class="talent-card-title">Base Stats</p>
                    </div>

                    <table class="scalingtable">

                    <tr>
                        <td>Level</td>
                        <td>Base HP</td>
                        <td>Base ATK</td>
                        <td>Base DEF</td>
                        <td>Ascension Stat</td>
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
                        <td></td>

                    </tr>
                    <tr>
                        <td>20/40</td>
                        <td></td>
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
                        <td></td>

                    </tr>
                    <tr>
                        <td>40/50</td>
                        <td></td>
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
                        <td></td>

                    </tr>
                    <tr>
                        <td>50/60</td>
                        <td></td>
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
                        <td></td>

                    </tr>

                    <tr>
                        <td>60/70</td>
                        <td></td>
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
                        <td></td>

                    </tr>

                    <tr>
                        <td>70/80</td>
                        <td></td>
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
                        <td></td>

                    </tr>

                    <tr>
                        <td>80/90</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>

                    <tr>
                        <td>90/90</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    </table>
                </div>

                
                
                <div class="talent-card">
                    <div class="talent-card-heading">
                        <div class="talent-icon">
                            <img src="../images/characters/<?php echo $fetch['url']?>/na.png" alt="">
                        </div>

                        <div class="talent-card-text">
                            <p class="talent-card-title">Sharpshooter</p>
                            <p class="talent-card-description-title">Normal Attack</p>
                            <p class="talent-card-description">Perform up to 5 consecutive shots with a bow.</p>
                            <table>
                                    <tr>
                                        <td>1-Hit DMG</td>
                                        <td>36.66.36%</td>

                                    </tr>
                                    <tr>
                                        <td>50/60</td>
                                        <td></td>

                                    </tr>
                                </table>
                            
                            <p class="talent-card-description-title">Charged Attack</p>
                            <p class="talent-card-description">Perform a more precise Aimed Shot with increased DMG. While aiming, flames will accumulate on the arrowhead. A fully charged flaming arrow will deal Pyro DMG.</p>
                            <p class="talent-card-description-title">Plunging Attack</p>
                            <p class="talent-card-description">Fires off a shower of arrows in mid-air before falling and striking the ground, dealing AoE DMG upon impact.</p>
                        </div>
                    </div>

                    <!--
                    <div class="scalingtable">
                        <table class="wikitable" style="text-align:center;width:100%"><tbody><tr><th></th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th><th>11</th></tr><tr><th>1-Hit DMG (%)</th><td>36.12</td><td>39.06</td><td>42</td><td>46.2</td><td>49.14</td><td>52.5</td><td>57.12</td><td>61.74</td><td>66.36</td><td>71.4</td><td>76.44</td></tr><tr><th>2-Hit DMG (%)</th><td>36.12</td><td>39.06</td><td>42</td><td>46.2</td><td>49.14</td><td>52.5</td><td>57.12</td><td>61.74</td><td>66.36</td><td>71.4</td><td>76.44</td></tr><tr><th>3-Hit DMG (%)</th><td>46.44</td><td>50.22</td><td>54</td><td>59.4</td><td>63.18</td><td>67.5</td><td>73.44</td><td>79.38</td><td>85.32</td><td>91.8</td><td>98.28</td></tr><tr><th>4-Hit DMG (%)</th><td>47.3</td><td>51.15</td><td>55</td><td>60.5</td><td>64.35</td><td>68.75</td><td>74.8</td><td>80.85</td><td>86.9</td><td>93.5</td><td>100.1</td></tr><tr><th>5-Hit DMG (%)</th><td>59.34</td><td>64.17</td><td>69</td><td>75.9</td><td>80.73</td><td>86.25</td><td>93.84</td><td>101.43</td><td>109.02</td><td>117.3</td><td>125.58</td></tr><tr><th colspan="12">Charged Attack (Aimed Shot)</th></tr><tr><th>Aimed Shot (%)</th><td>43.86</td><td>47.43</td><td>51</td><td>56.1</td><td>59.67</td><td>63.75</td><td>69.36</td><td>74.97</td><td>80.58</td><td>86.7</td><td>92.82</td></tr><tr><th>Fully-Charged Aimed Shot (%)</th><td>124</td><td>133.3</td><td>142.6</td><td>155</td><td>164.3</td><td>173.6</td><td>186</td><td>198.4</td><td>210.8</td><td>223.2</td><td>235.6</td></tr><tr><th colspan="12">Plunging Attack</th></tr><tr><th>Plunge DMG (%)</th><td>56.83</td><td>61.45</td><td>66.08</td><td>72.69</td><td>77.31</td><td>82.6</td><td>89.87</td><td>97.14</td><td>104.41</td><td>112.34</td><td>120.27</td></tr><tr><th>Low Plunge DMG (%)</th><td>113.63</td><td>122.88</td><td>132.13</td><td>145.35</td><td>154.59</td><td>165.17</td><td>179.7</td><td>194.23</td><td>208.77</td><td>224.62</td><td>240.48</td></tr><tr><th>High Plunge DMG (%)</th><td>141.93</td><td>153.49</td><td>165.04</td><td>181.54</td><td>193.1</td><td>206.3</td><td>224.45</td><td>242.61</td><td>260.76</td><td>280.57</td><td>300.37</td></tr></tbody></table>                    
                    
                    </div>
                     -->
                     
                </div>

                

                <p class="talent-card-title">Passives</p>

                <div class="passive-deck">
                
                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/passive.png" alt="">
                            </div>                        
                            
                            <h1>Gliding Champion</h1>
                            <p>Decreases gliding Stamina consumption for your own party members by 20%.</p>
                            <p>Not stackable with Passive Talents that provide the exact same effects.</p>
                        </div>

                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/a1.png" alt="">
                            </div> 
                            <h1>Every Arrow Finds Its Target</h1>
                            <p>Increases the CRIT Rate of Fiery Rain by 10% and widens its AoE by 30%.</p>
                        </div>

                        <div class="passive-card">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/a4.png" alt="">
                            </div> 
                            <h1>Precise Shot</h1>
                            <p>Aimed Shot hits on weak points increase ATK by 15% for 10s.</p>
                        </div>

                </div>





                <p class="talent-card-title">Constellations</p>

                <div class="constellations">

                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c1.png" alt="">
                            </div>

                            <div class="constellation-text">
                                <h1>C1: One Arrow to Rule Them All</h1>
                                <p>Fires 2 arrows per Aimed Shot. The second arrow deals 20% of the first arrow's DMG.</p>
                            </div>

                        </div>
                    </div>



                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c2.png" alt="">
                            </div>
                            <div class="constellation-text">
                                <h1>C2: Bunny Triggered</h1>
                                <p>Baron Bunny, new and improved! Hitting Baron Bunny's foot with a fully-charged Aimed Shot manually detonates it.</p>
                                <p>Explosion via manual detonation deals 200% additional DMG.</p>
                            </div>
                        </div>
                    </div>




                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c3.png" alt="">
                            </div>

                            <div class="constellation-text">
                                <h1>C3: It Burns!</h1>
                                <p>Increases the Level of Fiery Rain by 3.</p>
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
                                <h1>C4: It's Not Just Any Doll...</h1>
                                <p>Decreases Explosive Puppet's CD by 20%. Adds 1 additional charge.</p>
                            </div>

                        </div>
                    </div>


                    <div class="constellation">
                        <div class="constellation-heading">
                            <div class="talent-icon">
                                <img src="../images/characters/<?php echo $fetch['url']?>/c5.png" alt="">
                            </div>
                            <div class="constellation-text">
                                <h1>C5: It's Baron Bunny!</h1>
                                <p>Increases the Level of Explosive Puppet by 3.</p>
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
                                <h1>C6: Wildfire</h1>
                                <p>Fiery Rain increases all party members' Movement SPD by 15% and ATK by 15% for 10s.</p>
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
    $("#amber-button").addClass("active");
    $("#character-dropdown-icon").addClass("active-dropdown-icon");
    $("#character-dropdown-content").addClass("active-dropdown-content");
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


