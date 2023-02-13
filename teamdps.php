
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
                            <button class="filter-btn">
                                <i class="material-symbols-outlined">filter_alt</i>
                                <p>Filters</p>
                            </button>
                            <button class="sortbtn" onclick="sort()">
                                <i class="material-symbols-outlined">arrow_drop_up</i>
                            </button>

                        </div>  
                    </div>

                    <div class="filter-container">
                        <div class="filter-row">
                            <p>Rarity:</p>
                            <button class="filter-chip filter-5-star"><i class="material-symbols-outlined">check</i>5 Star</button>
                            <button class="filter-chip filter-4-star"><i class="material-symbols-outlined">check</i> 4 Star</button>
                        </div>

                        <div class="filter-row">
                            <p>Character:</p>
                            <?php
                                $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `id` ORDER BY `id` DESC") or die(mysqli_error());
                                while($fetch = mysqli_fetch_array($query)){
                            ?>
                                <button class="filter-chip filter-<?php echo $fetch['url']?>"><i class="material-symbols-outlined">check</i><?php echo $fetch['name']?></button>
                            <?php
                                }
                            ?>

                        </div>


                            



                    </div>
            


            <div class="disclaimer">
                <p>Disclaimer: Do not conclude team X is better than team Y because team X does more dps, there are more important factors to consider other than sheetdps when evaluating team/character strength.</p>
                <p>Calculated using <a href="https://compendium.keqingmains.com/kqm-standards">kqmc standard</a>.</p>

            </div>

            <div class="item-container teams-container" id="item-results">

                <li class="hutao">
                    <div class="team">
                    <a class="teamname">Zhongli Double Hydro Hu Tao</a>
                        <div class="characterflex">
                                <div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/hutao/profile.png"></div><p class="item-text">HuTao</p></div>
                                <div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/xingqiu/profile.png"></div><p class="item-text">Xingqiu</p></div>
                                <div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/yelan/profile.png"></div><p class="item-text">Yelan</p></div>
                                <div class="item waves-effect waves-effect waves"><div class="item-icon bg-5-star"><img class="item-img" src="images/characters/zhongli/profile.png"></div><p class="item-text">Zhongli</p></div>
                        </div>

                        <table class="damagetable">

                            <tr>
                                <td>DPR</td>
                                <td class="damage">708721</td>
                                <td class="damage">193716</td>
                                <td class="damage">308719</td>
                                <td class="damage">3497</td>

                            </tr>
                            <tr>
                                <td>DPS</td>
                                <td class="damage">32215</td>
                                <td class="damage">8805</td>
                                <td class="damage">14033</td>
                                <td class="damage">159</td>
                            </tr>

                            <tr>
                                <td>Total</td>
                                <td class="damage">1214653</td>
                                <td class="damage">55212</td>
                            </tr>

                        </table>


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


