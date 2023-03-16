
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
                            <a tooltip="" flow="up">Reverse Vape</a>
                            <a tooltip="" flow="up">Double Hydro</a>
                            <a tooltip="" flow="up">Single Target Oriented</a>
                            <a tooltip="" flow="up" class="good">Crowd Control</a>
                            <a tooltip="" flow="up" class="bad">No Shielding</a>
                            <a tooltip="" flow="up" class="bad">WayTooDank</a>

                        </div>
                        <table class="damagetable">
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

                                <td><div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/kazuha/profile.png"></div><p class="item-text">Kazuha</p>
                                    <div class="gear"><p>c0</p><p>r5</p><img src="images/weapons/favonius-sword/profile.png"><img src="images/artifacts/viridescent-venerer/flower.png"></div>
                                </div></td>
                            </tr>
                                
                                <tr>
                                    <td class="damage"><b>D2R: </b>1474590</td>
                                    <td class="damage">436860</td>
                                    <td class="damage">681363</td>
                                    <td class="damage">283201</td>

                                </tr>
                                <tr>
                                    <td class="damage"><b>DPS: </b>33513</td>
                                    <td class="damage">9929</td>
                                    <td class="damage">15486</td>
                                    <td class="damage">6436</td>

                                </tr>
                                <tr>
                                    <td class="damage"><b>Ratio: </b>51%</td>
                                    <td class="damage">15%</td>
                                    <td class="damage">24%</td>
                                    <td class="damage">10%</td>

                                </tr>

                                
                        </table>

                        <button class="accordion">
                            Details:
                            <i class="material-symbols-outlined">chevron_right</i>
                        </button>
                        <div class="panel">
                            <p><b class="label">Description:</b> Hu tao double hydro comp with kazuha in the flex slot lets you get crowd control to deal with aoe content and deal more damage. Although getting a pyro swirl to buff hu tao is hard, it is still possible on the second rotation with a harder set up. (Not reliable for most players). Even if you can't get a pyro swirl, buffing your xingqiu and yelan is still worth it because they do a significant portion of the teams damage.</p>

                            <p><b class="label">First Rotation(22s):</b> Yelan E > Xingqiu QE > Yelan Q n1 > Kazuha n1 hold E > Yelan n3 n2 E n1 > Hu tao E 8n2cj Q</p>
                            <i> If you're not planning to get the pyro swirl on second rotation, then this is the only rotation you have to do. You can use kauzha's burst before yelan's second skill instead of saving it for the next rotation.</i>
                            <i>Although yelan has fav here, 2 skills per rotation on yelan is here to make sure both xingqiu and yelan's burst run out around the same time before your last charge attack on hu tao to make sure bb or your burst applies a pyro aura for kauzha's burst to infuse in the second rotation.</i>
                            <p><b class="label">Second Rotation (22s):</b> Kazuha QE > Yelan QE > Xingqiu QE  > Kazuha wait holdE > Hutao E 8n2cj</p>
                            <i> The second rotation here skips the second skill on yelan to maximize kauzha a4 and vv for Hu Tao, it is possible to still do a second skill in the second rotation at the cost of 2-3 unbuffed hutao charge attacks if you really don't want to use fav yelan in this team.</i>
                            <br>

                            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/bDxEEpOeq8M" title="Double Hydro Kazuha" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/wreLMzEXJXo" title="Hu Tao Double Hydro Kazuha, but it&#39;s try hard mode" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        
                            <p><b class="label">Energy Recharge Calculations:</b> 
                            <img src="https://media.discordapp.net/attachments/801235177804005449/1076658137886642217/image.png" alt="">


                            </p>
                         
                        </div>

                            
                            <div class="total">
                                <p class="label">Total</p>
                                <div class="totalvalues">
                                    <p><b>DPR:</b> 2876014</p>
                                    <p><b>DPS(44s):</b> 65364</p>
                                </div>
                            </div>
                            

                    </div>
                </li>





                <li>
                    <div class="team">
                        <a class="teamname">Zhongli Double Hydro Hu Tao</a>
                        <div class="tags">
                            <a tooltip="" flow="up">Reverse Vape</a>
                            <a tooltip="" flow="up">Double Hydro</a>
                            <a tooltip="" flow="up">Single Target Oriented</a>
                            <a tooltip="" flow="up" class="good">Shielding</a>
                        </div>
                        <table class="damagetable">
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

                            <div class="total">
                                <p class="label">Total</p>
                                <div class="totalvalues">
                                    <p><b>DPR:</b> 1214653</p>
                                    <p><b>DPS(22s):</b> 55212</p>
                                </div>
                            </div>

                    </div>
                </li>






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
                <p>Build</p>
                <button>F2p</button>
                <button>r1 Mistsplitter</button>
            </div>

            <table class="damagetable">
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



        <button class="accordion">
            Details:
            <i class="material-symbols-outlined">chevron_right</i>
        </button>
        
        <div class="panel">

            <p><b class="label">Description:</b> </p>

            <p class="label">Rotations:</p>
            <div class="indent">
                <p><b class="label">With Mistsplitter(21s):</b> Ayaka E n2c > Shenhe QE > Kazuha QE > Kokomi E >  Ayaka E Q n2c  > Kauzha E > Shenhe E ></p>
                <p><b class="label">With Amenoma(21s):</b> Shenhe QE > Kazuha QE > Kokomi E >  Ayaka n1 E Q n2c  > Kauzha E > Shenhe E  > Ayaka n1 E n2c</p>

            </div>

            <i>These are not strict rotations, and if you know what you're doing they can be adpated to fit certain situations better.</i>



            <p><b class="label">Energy Recharge Calculations:</b> 
            <img src="https://i.imgur.com/v600STg.png" alt="">
        
            </p>

        </div>

            <div class="total">
                <p class="label">Total</p>
                <div class="totalvalues">
                    <p><b>DPR:</b> 1086791</p>
                    <p><b>DPS(21s):</b> 51752</p>
                </div>
            </div>

    </div>
</li>


<li>
    <div class="team">
        <a class="teamname">Sucrose National</a>
        <div class="tags">
            <a tooltip="" flow="up">Reverse Vape</a>
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


