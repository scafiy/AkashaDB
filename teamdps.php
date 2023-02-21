
<head>
<?php 
    session_start();
        include 'includes/head.php';
?>
<title>Team DPS - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include 'includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="css/navstyle.css">
<link rel="stylesheet" href="css/explorestyle.css">
<link rel="stylesheet" href="css/teamdpsstyle.css">


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">

                <div class="heading-container">
                        <img class="heading-icon" src="images/icons/party.png">
                        <p class="heading-title">TeamDPS</p> 

                        <div class="filter-btn-container">
                            <button class="sortbtn" onclick="sort()">
                                <i class="material-symbols-outlined">arrow_drop_up</i>
                            </button>

                        </div>  
                    </div>



            <div class="disclaimer">
                <button class="closeDisclaimerbtn"><i class="material-symbols-outlined">close</i></button>
                <p>Disclaimer: Do not conclude team X is better than team Y because team X does more dps, there are more important factors to consider other than sheetdps when evaluating team/character strength.</p>
                <p>Calculated using <a href="https://compendium.keqingmains.com/kqm-standards">kqmc standard</a>.</p>
            </div>

<div class="item-container teams-container" id="item-results">






<li>
                    <div class="team">
                        <a class="teamname">Kazuha Double Hydro Hu Tao</a>
                        <div class="tags">
                            <a>Reverse Vape</a>
                            <a>Double Hydro</a>
                            <a>Single Target Oriented</a>
                            <a class="good">Crowd Control</a>
                            <a class="bad">No Shielding</a>
                            <a class="bad">WayTooDank</a>

                        </div>
                        <table class="damagetable">
                            <tr>
                                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/hutao/profile.png"></div><p class="item-text">Hu Tao</p></div></td>
                                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/xingqiu/profile.png"></div><p class="item-text">Xingqiu</p></div></td>
                                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/yelan/profile.png"></div><p class="item-text">Yelan</p></div></td>
                                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/kazuha/profile.png"></div><p class="item-text">Kazuha</p></div></td></tr>
                                <tr>
                                    <td class="damage"><b>DPR: </b>737295</td>
                                    <td class="damage">218430</td>
                                    <td class="damage">340681</td>
                                    <td class="damage">114899</td>

                                </tr>
                                <tr>
                                    <td class="damage"><b>DPS: </b>33513</td>
                                    <td class="damage">9928</td>
                                    <td class="damage">15485</td>
                                    <td class="damage">5222</td>

                                </tr>
                                <tr>
                                    <td class="damage"><b>Ratio: </b>52%</td>
                                    <td class="damage">15%</td>
                                    <td class="damage">24%</td>
                                    <td class="damage">8%</td>

                                </tr>

                                
                        </table>


                        <button class="accordion">Details:</button>
                        <div class="panel">

                            <p><b class="label">First Rotation(22s):</b> Yelan E > Xingqiu QE > Yelan Q n1 > Kazuha n1 hold E > Yelan n3 n2 E n1 > Hu tao E 8n2cj Q</p>
                            <i> If you're not planning to get the pyro swirl on second rotation, then this is the only rotation you have to do. You can use kauzha's burst before yelan's second skill instead of saving it for the next rotation.</i>
                            <i>Although yelan has fav here, 2 skills per rotation on yelan is here to make sure both xingqiu and yelan's burst run out around the same time before your last charge attack on hu tao to make sure bb or your burst applies a pyro aura for kauzha's burst to infuse in the second rotation.</i>
                            <p><b class="label">Second Rotation (22s):</b> Kazuha QE > Yelan QE > Xingqiu QE  > Kazuha wait holdE > Hutao E 8n2cj</p>
                            <i> The second rotation here skips the second skill on yelan to maximize kauzha a4 and vv for Hu Tao, it is possible to still do a second skill in the second rotation at the cost of 2-3 unbuffed hutao charge attacks if you really don't want to use fav yelan in this team.</i>

                            <p><b class="label">Description:</b> Hu tao double hydro comp with kazuha in the flex slot. Kazuha's grouping lets you deal with aoe content with hutao, yelan and xingqiu by forcing enemies to be close enough to hit them all/most of them at once. Using a harder setup, you're able to get a pyro swirl on the second rotation onwards even without a second pyro sourse. However generally this is hard to do consistently for most players. Even if you're not able to get a pyro swirl on the second rotation or don't intend to, kazuha still provides a damage buff for xingqiu and yelan who do a significant portion of the teams damage.</p>
                            
                        
                            <p><b class="label">Energy Recharge Calculations:</b> 
                            <img src="https://media.discordapp.net/attachments/801235177804005449/1076658137886642217/image.png" alt="">


                            </p>
                            <a href=""><b class="label">First Rotation Sheet:</b></a>
                            <img src="https://media.discordapp.net/attachments/801235177804005449/1076633228640788500/clip_image003.png" alt="">

                            <a href=""><b class="label">Second Rotation Sheet:</b></a>
                            <img src="https://media.discordapp.net/attachments/801235177804005449/1076633304368939168/clip_image003.png" alt="">

                        </div>

                            <div class="total">
                                <p class="label">First Rot</p>
                                <div class="totalvalues">
                                    <p><b>DPR:</b> 1307123</p>
                                    <p><b>DPS(22s):</b> 59415</p>
                                </div>
                            </div>

                            
                            <div class="total">
                                <p class="label">Second Rot</p>
                                <div class="totalvalues">
                                    <p><b>DPR:</b> 1470802</p>
                                    <p><b>DPS(22s):</b> 66855</p>
                                </div>
                            </div>

                            
                            <div class="total">
                                <p class="label">Total</p>
                                <div class="totalvalues">
                                    <p><b>DPR:</b> 2777925</p>
                                    <p><b>DPS(44s):</b> 63134</p>
                                </div>
                            </div>
                            

                    </div>
                </li>





                <li>
                    <div class="team">
                        <a class="teamname">Zhongli Double Hydro Hu Tao</a>
                        <div class="tags">
                            <a>Reverse Vape</a>
                            <a>Double Hydro</a>
                            <a>Single Target Oriented</a>
                            <a class="good">Shielding</a>
                        </div>
                        <table class="damagetable">
                            <tr>
                                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/hutao/profile.png"></div><p class="item-text">Hu Tao</p></div></td>
                                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/xingqiu/profile.png"></div><p class="item-text">Xingqiu</p></div></td>
                                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/yelan/profile.png"></div><p class="item-text">Yelan</p></div></td>
                                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/zhongli/profile.png"></div><p class="item-text">Zhongli</p></div></td></tr>
                                <tr>
                                    <td class="damage"><b>DPR: </b>708721</td>
                                    <td class="damage">193716</td>
                                    <td class="damage">308719</td>
                                    <td class="damage">3497</td>

                                </tr>
                                <tr>
                                    <td class="damage"><b>DPS: </b>32215</td>
                                    <td class="damage">8805</td>
                                    <td class="damage">14033</td>
                                    <td class="damage">159</td>

                                </tr>
                                <tr>
                                    <td class="damage"><b>Ratio: </b>58%</td>
                                    <td class="damage">16%</td>
                                    <td class="damage">25%</td>
                                    <td class="damage">0%</td>

                                </tr>
                        </table>


                        <button class="accordion">Details:</button>
                        <div class="panel">

                            <p><b class="label">2 Skills per Rotation(22s):</b> Yelan E > Xingqiu QE > Yelan Q > Zhongli hold E > Yelan n3 n1 E n1 > Hu Tao E 8n2cj Q</p>
                            <i> Using yelan's skill at the start of your rotation and spending some field time on her to wait for her skill to be off cooldown after using zhongli's skill allows yelan to use 2 skills per rotation. This is done to reduce yelan's energy recharge requirements which in turn lets you build more offesnive stats on artifacts and or use a more damage heavy weapon like slingshot or aqua instead of fav. Although it extends rotation length and you may face uptime issues, its generally recommended do this rotation if you're able to because its just more damage overall.</i>
                            <p><b class="label">1 Skill per Rotation(19-20s):</b> Yelan E > Xingqiu QE > Yelan Q > Zhongli hold E > Hu Tao E 8n2cj Q</p>

                            <p><b class="label">Description:</b> Hu tao double hydro comp with zhongli is one of the more comfy teams for hu tao. You're not lossing out on much by slotting in zhongli here as a defensive option, as using 4pc archaic petra paired with 20% pyro and hydro res shred is only abit less damage than slotting in kazuha for his a4 + 4pc vv (if you're only able to get a hydro swirl) interms of total team dps with these assumptions.
                            
                        
                            <p><b class="label">Energy Recharge Calculations:</b> 
                            <img src="https://media.discordapp.net/attachments/1070511959927181363/1075666692413329458/image.png" alt="">
                        
                            </p>
                            <a href="https://docs.google.com/spreadsheets/d/1MItMo-UQGlkjqktJJ8u49KNfxXaoEyLv/edit#gid=350192402"><b class="label">Sheet:</b></a>
                            <img src="https://media.discordapp.net/attachments/1070511959927181363/1075667410742431864/clip_image002.png" alt="">

                        </div>

                            <div class="total">
                                <p class="label">Total</p>
                                <div class="totalvalues">
                                    <p><b>DPR:</b> 1214653</p>
                                    <p><b>DPS(22s):</b> 55212</p>
                                </div>
                            </div>

                    </div>
                </li>


                </li>





<li>
    <div class="team">
        <a class="teamname">International</a>
        <div class="tags">
            <a>Reverse/Forward Vape</a>
            <a>National</a>
            <a class="good">Crowd Control</a>
            <a class="good">Front Loaded</a>
            <a class="good">Flexable Rotations</a>
            <a class="good">True Quadratic scaling</a>
            <a class="bad">Down Time</a>

        </div>
        <table class="damagetable">
            <tr>
                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-4-star"><img class="item-img" src="images/characters/xiangling/profile.png"></div><p class="item-text">Xiangling</p></div></td>
                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/tartaglia/profile.png"></div><p class="item-text">Tartaglia</p></div></td>
                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-4-star"><img class="item-img" src="images/characters/bennett/profile.png"></div><p class="item-text">Bennett</p></div></td>
                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/kazuha/profile.png"></div><p class="item-text">Kazuha</p></div></td></tr>
                <tr>
                    <td class="damage"><b>DPR: </b>698914</td>
                    <td class="damage">362177</td>
                    <td class="damage">83457</td>
                    <td class="damage">167184</td>

                </tr>
                <tr>
                    <td class="damage"><b>DPS: </b>25886</td>
                    <td class="damage">13414</td>
                    <td class="damage">3091</td>
                    <td class="damage">6192</td>

                </tr>
                <tr>
                    <td class="damage"><b>Ratio: </b>53%</td>
                    <td class="damage">28%</td>
                    <td class="damage">6%</td>
                    <td class="damage">13%</td>

                </tr>
        </table>



        <button class="accordion">Details:</button>
        <div class="panel">

            <b class="label">First Rotations:</b>
            <div class="indent">

                <p><b class="label">1 bennett funnel (22s):</b> Tartaglia E > Benentt Q > Kazuha QE > Tartaglia Q > Xiangling EQ > Tartaglia E 6n2cd > Kazuha E > Bennett E > Xiangling</p>
                <p><b class="label">1 bennett funnels + 1 aimshot (24s):</b> Tartaglia E > Benentt Q > Kazuha QE > Tartaglia Q > Xiangling EQ > Tartaglia E 6n2cd > Kazuha E > Bennett E > Xiangling > Tartaglia CA</p>
                <p><b class="label">2 bennett funnels + 1 aimshot (27s):</b> Tartaglia E > Benentt Q > Kazuha QE > Tartaglia Q > Xiangling EQ > Tartaglia E 6n2cd > Kazuha E > Bennett E > Xiangling > Tartaglia CA > Bennett E > Xiangling</p>
                <p><b class="label">2 bennett funnels + 2 aimshot (29s):</b>  Tartaglia E > Benentt Q > Kazuha QE > Tartaglia Q > Xiangling EQ > Tartaglia E 6n2cd > Kazuha E > Bennett E > Xiangling > Tartaglia CA > Bennett E > Xiangling > Tartaglia CA</p>


            </div>

            <i>These are not strict rotations, and if you know what you're doing, they can be adpated to fit certain situations better. </i>
            <br>
            <i>Tartaglia aimshot are done inbetween bennett funnels for extra damage, doing them at the end of your rotation is optional (depending if you're wanting to finish of enemies, apply riptide states, and tall for energy or shorten rotation length)</i>
            




            <p><b class="label">Second Rotation:</b> Benentt Q > Tartaglia CA > Kazuha QE > Tartaglia Q > Xiangling EQ > Tartaglia E 6n2cd > Kazuha E > Bennett E > Xiangling > Tartaglia CA</p>
            <i>Using Tartaglia's aimshot after bennett alt is assuming the enemy as riptide applies already, if they are then doing the charge attack will remove the pyro aura and apply a hydro aura to get a double swirl for your second rotation. If the enemy doesn't have riptide status infected on them, then you'll have to do 2 aim shots to apply a hydro aura. At that point i'd rather skip out on the hydro swirl, but you're able to still get it if you want to.</i>
            <br>
            <i>Rotation length for the different amount of funnels and aimshots used is not specified here because the important part is the premise that you're doing a aimshot after bennett burst on a riptide inflicted enemy to get a double swirl. This can then be applied to any of the aforementioned rotations.</i>
            <p><b class="label">Description:</b> </p>
            
        
            <p><b class="label">Energy Recharge Calculations:</b> 

            <table class="ertable">
                <tr>
                    <td></td>
                    <td>Xiangling</td>
                    <td>Tartaglia</td>
                    <td>Bennett</td>
                    <td>Kazuha</td>

                </tr>  

                <tr>
                    <td>2 funnels 4 guoba hits</td>
                    <td>177%</td>
                    <td>100%</td>
                    <td>184%</td>
                    <td>210%</td>
                </tr>  
                <tr>
                    <td>2 funnels 2 guoba hits</td>
                    <td>195%</td>
                    <td>106%</td>
                    <td>211%</td>
                    <td>220%</td>
                </tr>  

                <tr>
                    <td>1 funnel 4 guoba hits</td>
                    <td>210%</td>
                    <td>109%</td>
                    <td>213%</td>
                    <td>233%</td>
                </tr>  

                <tr>
                    <td>1 funnel 2 guoba hits</td>
                    <td>235%</td>
                    <td>110%</td>
                    <td>249%</td>
                    <td>234%</td>
                </tr>   
                

            </table>
            <i>Assuming 2 fav procs on kazuha per rotation.</i>

            <img src="https://media.discordapp.net/attachments/801235177804005449/1077403345079242832/image.png" alt="">
        
            </p>
            <a href=""><b class="label">Sheet:</b></a>
            <img src="" alt="">

        </div>

            <div class="total">
                <p class="label">Total</p>
                <div class="totalvalues">
                    <p><b>DPR:</b> 1311732</p>
                    <p><b>DPS(27s):</b> 48583</p>
                </div>
            </div>

    </div>
</li>








                





            </div>
        
        </div>
    </div>
</div>

    

<script type="text/javascript">
 $(window).on("load", function() {
    $("#teamdps-button").addClass("active");
    $('html, body, .sidenav').animate({
        scrollTop: $("#faq-button").offset().top - 50
    }, 600);
 });
</script>
<script>
    Waves.attach('.article-item', ['waves-effect', 'waves-light']);
    Waves.init();

</script>


<script>
    $(".filter-alhaitham, filter-yaoyao").click(function(){
        <?php
            $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `id` ORDER BY `id` DESC") or die(mysqli_error());
            while($fetch = mysqli_fetch_array($query)){
        ?>
            $(".<?php echo $fetch['url']?>").toggleClass("hidden<?php echo $fetch['id']?>");
        <?php
            }
        ?>
        $(".filter-alhaitham").toggleClass("active-filter");

    });
</script>



<script>
    $(".closeDisclaimerbtn").click(function(){
        $(".disclaimer").toggleClass("hidden");

    });
</script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active1");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/uniscript.js"></script>
<script type="text/javascript" src="js/characterscript.js"></script>

</body>


