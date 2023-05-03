
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


            <div class="disclaimer hide">
                <button class="closeDisclaimerbtn"><i class="material-symbols-outlined">close</i></button>
                <p>Disclaimer: Do not conclude team X is better than team Y because team X does more dps, there are more important factors to consider other than sheetdps when evaluating team/character strength.</p>
                <p>Calculated using <a href="https://compendium.keqingmains.com/kqm-standards">kqmc standard</a>.</p>
            </div>

            <div class="item-container teams-container" id="item-results">




<!--Raiden National-->

<li>
    <div class="team">
        <a class="teamname">Raiden National</a>
        <div class="tags">
            <a tooltip="" flow="up">Overvape</a>
            <a tooltip="" flow="up">National</a>
            <a tooltip="" flow="up">Single Target Oriented</a>
            <a class="good" tooltip="" flow="up">Easy to play</a>
            <a class="good" tooltip="" flow="up">Infinit Resistance to Interaction</a>
            <a class="bad" tooltip="" flow="up">Knock Back</a>

        </div>
            <table class="damagetable">
                <tr>
                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-4-star"><img class="item-img" src="images/characters/xiangling/profile.png"></div><p class="item-text">Xiangling</p>
                        <div class="gear"><p>c6</p><p>r5</p><img src="images/weapons/dragons-bane/profile.png"><img src="images/artifacts/emblem-of-severed-fate/flower.png"></div>
                    </div></td>

                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-4-star"><img class="item-img" src="images/characters/xingqiu/profile.png"></div><p class="item-text">Xingqiu</p>
                        <div class="gear"><p>c6</p><p>r5</p><img src="images/weapons/lions-roar/profile.png"><img src="images/artifacts/noblesse-oblige/flower.png"></div>
                    </div></td>

                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-4-star"><img class="item-img" src="images/characters/bennett/profile.png"></div><p class="item-text">Bennett</p>
                        <div class="gear"><p>c6</p><p>r1</p><img src="images/weapons/sapwood-blade/profile.png"><img src="images/artifacts/instructor/flower.png"></div>
                    </div></td>

                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/raiden/profile.png"></div><p class="item-text">Raiden</p>
                        <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/the-catch/profile.png"><img src="images/artifacts/emblem-of-severed-fate/flower.png"></div>
                    </div></td>
                
                </tr>

                <tr>
                    <td class="damage"><b>DPR: </b>578433</td>
                    <td class="damage">242558</td>
                    <td class="damage">82298</td>
                    <td class="damage">374201</td>

                </tr>
                <tr>
                    <td class="damage"><b>DPS: </b>26292</td>
                    <td class="damage">11025</td>
                    <td class="damage">3741</td>
                    <td class="damage">17009</td>

                </tr>
                <tr>
                    <td class="damage"><b>Ratio: </b>45%</td>
                    <td class="damage">19%</td>
                    <td class="damage">6%</td>
                    <td class="damage">29%</td>

                </tr>
        </table>



        <button class="accordion">
            Details:
            <i class="material-symbols-outlined">chevron_right</i>
        </button>
        
        <div class="panel">

            <p><b class="label">Description:</b> Raiden National is a variant of the national team which uses raiden with bennett xiangling xingqiu.</p>

                
                <p class="label">Rotations:</p>
                <div class="indent">
                    <p><b class="label">Standard(22s):</b> Raiden E (first rotation only) > Xingqiu EQ > Bennett QE > Xiangling QE > Raiden Q 3n2c n1c E > Bennett E > Xiangling</p>
                    <i>The standard rotation for raiden national starts by funneling xingqiu's skill into his burst. As a consequence for that, you miss out on your skill being buffed by xingqiu's c4 and bennett's buff. However this is done to maximize bennett's buff uptime on raiden while letting xingqiu run less energy recharge without extending your rotation to catch your particles. </i>
                    <p><b class="label">Buffing xingqiu skill (22s):</b> Raiden E (first rotation only) > Xingqiu Q > Bennett QE > Xiangling QE > Xingqiu E > Raiden Q n3c 2n4d E > Bennett E > Xiangling</p>
                    <i>This alternative rotation allows you to buff your xingqiu's skill with his c4 and bennett buff. Keep in mind that this is done at the cost of bennett buff uptime on raiden and if you don't extend your rotation by about 1s to catch your hydro particles on xingqiu then your energy recharge requirements will be higher.</i>
                </div>
                <br>
                <i>Note that on your first rotation you start with raiden's skill, this will not be the case from second rotation onwards.</i>





            <p><b class="label">Energy Recharge Calculations:</b> 
            <img src="https://i.imgur.com/Gue0CVr.png" alt="">
        
            </p>

        </div>

            <div class="total">
                <p class="label">Total</p>
                <div class="totalvalues">
                    <p><b>DPR:</b> 1277490</p>
                    <p><b>DPS(22s):</b> 58068</p>
                </div>
            </div>

    </div>
</li>

<!--Zhongli Double Hydro Hu tao-->
<li>
    <div class="team">
        <a class="teamname">Zhongli Double Hydro Hu Tao</a>
        <div class="tags">
            <a tooltip="" flow="up">Reverse Vape</a>
            <a tooltip="" flow="up">Double Hydro</a>
            <a tooltip="" flow="up">Single Target Oriented</a>
            <a tooltip="" flow="up" class="good">Shielding</a>
        </div>
        
        <div class="geartoggle">
            <button class="active" id="zhongli-double-hydro-hutao-dragonsbane-btn"><img src="images/weapons/dragons-bane/profile.png">r5 Dragons Bane</button>
            <button id="zhongli-double-hydro-hutao-homa-btn"><img src="images/weapons/staff-of-homa/profile.png">c1 + r1 Homa</button>
        </div>

        <table class="damagetable" id="zhongli-double-hydro-hutao-dragonsbane">


            <tr>
                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/hutao/profile.png"></div><p class="item-text">Hu Tao</p>
                    <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/dragons-bane/profile.png"><img src="images/artifacts/crimson-witch-of-flames/flower.png"></div>
                </div></td>

                
                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/xingqiu/profile.png"></div><p class="item-text">Xingqiu</p>
                    <div class="gear"><p>c6</p><p>r5</p><img src="images/weapons/favonius-sword/profile.png"><img src="images/artifacts/emblem-of-severed-fate/flower.png"></div>
                </div></td>

                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/yelan/profile.png"></div><p class="item-text">Yelan</p>
                    <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/slingshot/profile.png"><img src="images/artifacts/emblem-of-severed-fate/flower.png"></div>
                </div></td>

                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/zhongli/profile.png"></div><p class="item-text">Zhongli</p>
                    <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/favonius-lance/profile.png"><img src="images/artifacts/archaic-petra/flower.png"></div>

                </div></td>
            </tr>

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
            </div>

    </table>

    <table class="hidden" id="zhongli-double-hydro-hutao-homa">

            <tr>
                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/hutao/profile.png"></div><p class="item-text">Hu Tao</p>
                    <div class="gear"><p>c1</p><p>r1</p><img src="images/weapons/staff-of-homa/profile.png"><img src="images/artifacts/crimson-witch-of-flames/flower.png"></div>
                </div></td>

                
                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/xingqiu/profile.png"></div><p class="item-text">Xingqiu</p>
                    <div class="gear"><p>c6</p><p>r5</p><img src="images/weapons/favonius-sword/profile.png"><img src="images/artifacts/emblem-of-severed-fate/flower.png"></div>
                </div></td>

                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/yelan/profile.png"></div><p class="item-text">Yelan</p>
                    <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/slingshot/profile.png"><img src="images/artifacts/emblem-of-severed-fate/flower.png"></div>
                </div></td>

                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/zhongli/profile.png"></div><p class="item-text">Zhongli</p>
                    <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/favonius-lance/profile.png"><img src="images/artifacts/archaic-petra/flower.png"></div>

                </div></td>
            </tr>

                <tr>
                    <td class="damage"><b>DPR: </b>979687</td>
                    <td class="damage">193716</td>
                    <td class="damage">308719</td>
                    <td class="damage">3497</td>

                </tr>
                <tr>
                    <td class="damage"><b>DPS: </b>44531</td>
                    <td class="damage">8805</td>
                    <td class="damage">14033</td>
                    <td class="damage">159</td>

                </tr>
                <tr>
                    <td class="damage"><b>Ratio: </b>66%</td>
                    <td class="damage">13%</td>
                    <td class="damage">21%</td>
                    <td class="damage">0%</td>

                </tr>
            </div>

        </table>

        <button class="accordion">
            Details:
            <i class="material-symbols-outlined">chevron_right</i>
        </button>
        <div class="panel">
            <p><b class="label">Description: </b>Hu Tao double hydro with zhongli in the flex slot is one of hu tao's best comfort teams to play. Slotting zhongli here isn't much of a loss interms of damage because with 4pc archaic petra and his 20% resistance shred for both pyro and hydro is not too far behind slotting in kazuha if you're only able to get a hydro swirl.</p>


            <p><b class="label">2 Skills per Rotation(22s):</b> Yelan E > Xingqiu QE > Yelan Q > Zhongli hold E > Yelan n3 n2 E > Hu Tao E 8n2cj Q</p>
            <p><b class="label">1 Skill per Rotation(20s):</b> Yelan E > Xingqiu QE > Yelan Q > Zhongli hold E > Hu Tao E 8n2cj Q</p>

            
        
            <p><b class="label">Energy Recharge Calculations:</b> 
            <img src="https://i.imgur.com/qdPT7Di.png" alt="">
            </p>
        

        </div>

            <div class="total" id="zhongli-double-hydro-hutao-dragonsbane-total">
                <p class="label">Total</p>
                <div class="totalvalues">
                    <p><b>DPR:</b> 1214653</p>
                    <p><b>DPS(22s):</b> 55212</p>
                </div>
            </div>

            <div class="total hidden" id="zhongli-double-hydro-hutao-homa-total">
                <p class="label">Total</p>
                <div class="totalvalues">
                    <p><b>DPR:</b> 1485619</p>
                    <p><b>DPS(22s):</b> 67528</p>
                </div>
            </div>
            <script>
                $("#zhongli-double-hydro-hutao-dragonsbane-btn").click(function(){
                    $("#zhongli-double-hydro-hutao-dragonsbane").removeClass("hidden");
                    $("#zhongli-double-hydro-hutao-homa").addClass("hidden");

                    $("#zhongli-double-hydro-hutao-dragonsbane-total").removeClass("hidden");
                    $("#zhongli-double-hydro-hutao-homa-total").addClass("hidden");


                    $("#zhongli-double-hydro-hutao-dragonsbane-btn").addClass("active");
                    $("#zhongli-double-hydro-hutao-homa-btn").removeClass("active");
                });

                $("#zhongli-double-hydro-hutao-homa-btn").click(function(){
                    $("#zhongli-double-hydro-hutao-dragonsbane").addClass("hidden");
                    $("#zhongli-double-hydro-hutao-homa").removeClass("hidden");

                    $("#zhongli-double-hydro-hutao-dragonsbane-total").addClass("hidden");
                    $("#zhongli-double-hydro-hutao-homa-total").removeClass("hidden");

                    $("#zhongli-double-hydro-hutao-dragonsbane-btn").removeClass("active");
                    $("#zhongli-double-hydro-hutao-homa-btn").addClass("active");
                });
            </script>
    </div>
</li>
 
<!--Shenhe Waxien-->
<li>
    <div class="team">
        <a class="teamname">Shenhe Waxien</a>
        <div class="tags">
            <a tooltip="" flow="up">Freeze</a>
            <a class="good" tooltip="" flow="up">Crowd Control</a>
            <a class="good" tooltip="" flow="up">Front Loaded</a>
            <a class="good" tooltip="" flow="up">Flexable Rotations</a>
            <a class="good" tooltip="" flow="up">Healing</a>
        </div>

            <div class="geartoggle">
                <button class="active" id="shenhe-waxien-amenoma-btn"><img src="images/weapons/amenoma-kageuchi/profile.png">r5 Amenoma</button>
                <button id="shenhe-waxien-mistsplitter-btn"><img src="images/weapons/mistsplitter-reforged/profile.png">r1 Mistsplitter</button>
            </div>

            <table class="damagetable" id="shenhe-waxien-amenoma">
                <tr>
                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/ayaka/profile.png"></div><p class="item-text">Ayaka</p>
                        <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/amenoma-kageuchi/profile.png"><img src="images/artifacts/blizzard-strayer/flower.png"></div>
                    </div></td>

                    
                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/kokomi/profile.png"></div><p class="item-text">Kokomi</p>
                        <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/thrilling-tales-of-dragon-slayers/profile.png"><img src="images/artifacts/tenacity-of-the-millelith/flower.png"></div>
                    </div></td>

                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/shenhe/profile.png"></div><p class="item-text">Shenhe</p>
                        <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/favonius-lance/profile.png"><img src="images/artifacts/noblesse-oblige/flower.png"></div>
                    </div></td>

                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/kazuha/profile.png"></div><p class="item-text">Kazuha</p>
                        <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/favonius-sword/profile.png"><img src="images/artifacts/viridescent-venerer/flower.png"></div>
                    </div></td>    
                </tr>

                <tr>
                    <td class="damage"><b>DPR: </b>772101</td>
                    <td class="damage">7352</td>
                    <td class="damage">170720</td>
                    <td class="damage">136618</td>

                </tr>
                <tr>
                    <td class="damage"><b>DPS: </b>36767</td>
                    <td class="damage">350</td>
                    <td class="damage">8130</td>
                    <td class="damage">6506</td>

                </tr>
                <tr>
                    <td class="damage"><b>Ratio: </b>71%</td>
                    <td class="damage">1%</td>
                    <td class="damage">16%</td>
                    <td class="damage">13%</td>

                </tr>
        </table>


        <table class="damagetable hidden" id="shenhe-waxien-mistsplitter">
                <tr>
                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/ayaka/profile.png"></div><p class="item-text">Ayaka</p>
                        <div class="gear"><p>c0</p><p>r1</p><img src="images/weapons/mistsplitter-reforged/profile.png"><img src="images/artifacts/blizzard-strayer/flower.png"></div>
                    </div></td>

                    
                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/kokomi/profile.png"></div><p class="item-text">Kokomi</p>
                        <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/thrilling-tales-of-dragon-slayers/profile.png"><img src="images/artifacts/tenacity-of-the-millelith/flower.png"></div>
                    </div></td>

                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/shenhe/profile.png"></div><p class="item-text">Shenhe</p>
                        <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/favonius-lance/profile.png"><img src="images/artifacts/noblesse-oblige/flower.png"></div>
                    </div></td>

                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/kazuha/profile.png"></div><p class="item-text">Kazuha</p>
                        <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/favonius-sword/profile.png"><img src="images/artifacts/viridescent-venerer/flower.png"></div>
                    </div></td>    
                </tr>

                <tr>
                    <td class="damage"><b>DPR: </b>960510</td>
                    <td class="damage">7352</td>
                    <td class="damage">178362</td>
                    <td class="damage">136618</td>

                </tr>
                <tr>
                    <td class="damage"><b>DPS: </b>45739</td>
                    <td class="damage">350</td>
                    <td class="damage">8493</td>
                    <td class="damage">6506</td>

                </tr>
                <tr>
                    <td class="damage"><b>Ratio: </b>75%</td>
                    <td class="damage">1%</td>
                    <td class="damage">14%</td>
                    <td class="damage">11%</td>

                </tr>
        </table>



        <button class="accordion">
            Details:
            <i class="material-symbols-outlined">chevron_right</i>
        </button>
        
        <div class="panel">

            <p><b class="label">Description:</b> </p>

            <p class="label">Rotations:</p>
            <div class="indent">
                <p><b class="label">With Amenoma(21s):</b> Ayaka E n2c > Shenhe QE > Kazuha QE > Kokomi E >  Ayaka E Q n2c  > Kauzha E > Shenhe E ></p>
                <p><b class="label">With Mistsplitter(21s):</b> Shenhe QE > Kazuha QE > Kokomi E >  Ayaka n1 E Q n2c  > Kauzha E > Shenhe E  > Ayaka n1 E n2c</p>

            </div>
            

            <i>These are not strict rotations, and if you know what you're doing they can be adpated to fit certain situations better.</i>



            <p><b class="label">Energy Recharge Calculations:</b> 
            <img src="https://i.imgur.com/v600STg.png" alt="">
        
            </p>

        </div>

            <div class="total" id="shenhe-waxien-amenoma-total">
                <p class="label">Total</p>
                <div class="totalvalues">
                    <p><b>DPR:</b> 1086791</p>
                    <p><b>DPS(21s):</b> 51752</p>
                </div>
            </div>

            <div class="total hidden" id="shenhe-waxien-mistsplitter-total">
                <p class="label">Total</p>
                <div class="totalvalues">
                    <p><b>DPR:</b> 1282842</p>
                    <p><b>DPS(21s):</b> 61088</p>
                </div>
            </div>

            <script>
                $("#shenhe-waxien-amenoma-btn").click(function(){
                    $("#shenhe-waxien-amenoma").removeClass("hidden");
                    $("#shenhe-waxien-mistsplitter").addClass("hidden");

                    $("#shenhe-waxien-amenoma-total").removeClass("hidden");
                    $("#shenhe-waxien-mistsplitter-total").addClass("hidden");


                    $("#shenhe-waxien-amenoma-btn").addClass("active");
                    $("#shenhe-waxien-mistsplitter-btn").removeClass("active");
                });

                $("#shenhe-waxien-mistsplitter-btn").click(function(){
                    $("#shenhe-waxien-amenoma").addClass("hidden");
                    $("#shenhe-waxien-mistsplitter").removeClass("hidden");

                    $("#shenhe-waxien-amenoma-total").addClass("hidden");
                    $("#shenhe-waxien-mistsplitter-total").removeClass("hidden");

                    $("#shenhe-waxien-amenoma-btn").removeClass("active");
                    $("#shenhe-waxien-mistsplitter-btn").addClass("active");
                });
            </script>

    </div>
</li>

<!--Sucrose National-->
<li>
    <div class="team">
        <a class="teamname">Sucrose National</a>
        <div class="tags">
            <a tooltip="" flow="up">Reverse Vape</a>
            <a tooltip="" flow="up">National</a>
            <a tooltip="" flow="up">Single Target Oriented</a>
            <a class="good" tooltip="" flow="up">AoE</a>
            <a class="good" tooltip="" flow="up">Crowd Control</a>
            <a class="good" tooltip="" flow="up">Flexable Rotations</a>

        </div>
            <table class="damagetable">
                <tr>
                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-4-star"><img class="item-img" src="images/characters/xiangling/profile.png"></div><p class="item-text">Xiangling</p>
                        <div class="gear"><p>c6</p><p>r5</p><img src="images/weapons/the-catch/profile.png"><img src="images/artifacts/emblem-of-severed-fate/flower.png"></div>
                    </div></td>

                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-4-star"><img class="item-img" src="images/characters/xingqiu/profile.png"></div><p class="item-text">Xingqiu</p>
                        <div class="gear"><p>c6</p><p>r5</p><img src="images/weapons/favonius-sword/profile.png"><img src="images/artifacts/noblesse-oblige/flower.png"></div>
                    </div></td>

                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-4-star"><img class="item-img" src="images/characters/bennett/profile.png"></div><p class="item-text">Bennett</p>
                        <div class="gear"><p>c6</p><p>r1</p><img src="images/weapons/sapwood-blade/profile.png"><img src="images/artifacts/instructor/flower.png"></div>
                    </div></td>

                    <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-4-star"><img class="item-img" src="images/characters/sucrose/profile.png"></div><p class="item-text">Sucrose</p>
                        <div class="gear"><p>c6</p><p>r5</p><img src="images/weapons/thrilling-tales-of-dragon-slayers/profile.png"><img src="images/artifacts/viridescent-venerer/flower.png"></div>
                    </div></td>
                
                </tr>

                <tr>
                    <td class="damage"><b>DPR: </b>727056</td>
                    <td class="damage">238375</td>
                    <td class="damage">105605</td>
                    <td class="damage">47547</td>

                </tr>
                <tr>
                    <td class="damage"><b>DPS: </b>33048</td>
                    <td class="damage">10835</td>
                    <td class="damage">4800</td>
                    <td class="damage">2161</td>

                </tr>
                <tr>
                    <td class="damage"><b>Ratio: </b>65%</td>
                    <td class="damage">21%</td>
                    <td class="damage">9%</td>
                    <td class="damage">4%</td>

                </tr>
        </table>



        <button class="accordion">
            Details:
            <i class="material-symbols-outlined">chevron_right</i>
        </button>
        
        <div class="panel">

            <p><b class="label">Description:</b> </p>

                <p><b class="label">Rotation(22s):</b> Bennett Q > Xingqiu Q >  Xiangling E > Sucrose N1 E E > Xiangling  Q > Xingqiu E > Bennett E > Xiangling > Bennett E > Xiangling > Bennett E > Xiangling</p>


            <i>These are not strict rotations, and if you know what you're doing they can be adpated to fit certain situations better.</i>



            <p><b class="label">Energy Recharge Calculations:</b> 
            <img src="https://i.imgur.com/N8JUCCP.png" alt="">
        
            </p>

        </div>

            <div class="total">
                <p class="label">Total</p>
                <div class="totalvalues">
                    <p><b>DPR:</b> 1118582</p>
                    <p><b>DPS(22s):</b> 50845</p>
                </div>
            </div>

    </div>
</li>


<!--International-->
<li>
    <div class="team">
        <a class="teamname">International</a>
        <div class="tags">
            <a tooltip="" flow="up">Reverse/Forward Vape</a>
            <a tooltip="" flow="up">National</a>
            <a class="good" tooltip="" flow="up">AoE</a>
            <a tooltip="" flow="up" class="good">Crowd Control</a>
            <a tooltip="" flow="up" class="good">Front Loaded</a>
            <a tooltip="" flow="up" class="good">Flexable Rotations</a>

        </div>
        <table class="damagetable">
            <tr>
                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-4-star"><img class="item-img" src="images/characters/xiangling/profile.png"></div><p class="item-text">Xiangling</p>
                    <div class="gear"><p>c6</p><p>r5</p><img src="images/weapons/the-catch/profile.png"><img src="images/artifacts/emblem-of-severed-fate/flower.png"></div>
                </div></td>

                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/tartaglia/profile.png"></div><p class="item-text">Tartaglia</p>
                    <div class="gear"><p>c0</p><p>r1</p><img src="images/weapons/the-viridescent-hunt/profile.png"><img src="images/artifacts/heart-of-depth/flower.png"></div>
                </div></td>

                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-4-star"><img class="item-img" src="images/characters/bennett/profile.png"></div><p class="item-text">Bennett</p>
                    <div class="gear"><p>c6</p><p>r1</p><img src="images/weapons/sapwood-blade/profile.png"><img src="images/artifacts/instructor/flower.png"></div>
                </div></td>

                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/kazuha/profile.png"></div><p class="item-text">Kazuha</p>
                    <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/favonius-sword/profile.png"><img src="images/artifacts/viridescent-venerer/flower.png"></div>
                </div></td>
            
            </tr>
                
                
                <tr>
                    <td class="damage"><b>DPR: </b>575704</td>
                    <td class="damage">471286</td>
                    <td class="damage">78582</td>
                    <td class="damage">215116</td>

                </tr>
                <tr>
                    <td class="damage"><b>DPS: </b>19852</td>
                    <td class="damage">16251</td>
                    <td class="damage">2710</td>
                    <td class="damage">7418</td>
                </td>

                </tr>
                <tr>
                    <td class="damage"><b>Ratio: </b>43%</td>
                    <td class="damage">35%</td>
                    <td class="damage">6%</td>
                    <td class="damage">16%</td>

                </tr>
        </table>



        <button class="accordion">
            Details:
            <i class="material-symbols-outlined">chevron_right</i>
        </button>
        
        <div class="panel">

            <p><b class="label">Description:</b> International is a variant of the national team which uses tartaglia and kazuha with bennett xiangling.</p>


            <p class="label">First Rotations:</p>
            <div class="indent">

                <p><b class="label">1 bennett funnel (22s):</b> Tartaglia E > Benentt Q > Kazuha QE > Tartaglia Q > Xiangling EQ > Tartaglia E 6n2cd > Kazuha E > Bennett E > Xiangling</p>
                <p><b class="label">1 bennett funnels + 1 aimshot (24s):</b> Tartaglia E > Benentt Q > Kazuha QE > Tartaglia Q > Xiangling EQ > Tartaglia E 6n2cd > Kazuha E > Bennett E > Xiangling > Tartaglia CA</p>
                <p><b class="label">2 bennett funnels + 1 aimshot (27s):</b> Tartaglia E > Benentt Q > Kazuha QE > Tartaglia Q > Xiangling EQ > Tartaglia E 6n2cd > Kazuha E > Bennett E > Xiangling E > Tartaglia CA > Bennett E > Xiangling</p>
                <p><b class="label">2 bennett funnels + 2 aimshot (29s):</b>  Tartaglia E > Benentt Q > Kazuha QE > Tartaglia Q > Xiangling EQ > Tartaglia E 6n2cd > Kazuha E > Bennett E > XianglingE  > Tartaglia CA > Bennett E > Xiangling > Tartaglia CA</p>


            </div>

            <i>These are not strict rotations, and if you know what you're doing they can be adpated to fit certain situations better.</i>
            <br>
            <i>You can weave in tartaglia aim shots inbetween bennett funnels for extra damage.</i>
            




            <p><b class="label">Second Rotation:</b> Benentt Q > Tartaglia CA > Kazuha QE > Tartaglia Q > Xiangling EQ > Tartaglia E 6n2cd > Kazuha E > Bennett E > Xiangling > Tartaglia CA</p>
            <i>If the enemy is inflicted with riptide status, using Tartaglia's aimshot after bennett burst lets you apply hydro ontop the enemy to get your hydro swirl on the second rotation.</i>
            <i>If the enemy isn't inflicted with riptide status then to apply hydro to the enemy for your hydros swirl on the second rotation when your skill isn't up on tartaglia, you would have to do 2 charge attacks. (at this point i'd just give up on your hydro swirl unless you really want it.)</i>
        
            <p><b class="label">Energy Recharge Calculations:</b> 
            <img src="https://i.imgur.com/G88caqX.png" alt="">
        
            </p>

        </div>

            <div class="total">
                <p class="label">Total</p>
                <div class="totalvalues">
                    <p><b>DPR:</b> 1340688</p>
                    <p><b>DPS(29s):</b> 46231</p>
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


