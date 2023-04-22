<head>
    <?php 
        session_start();
        include 'includes/head.php';
    ?>
    <title>Home - Akasha</title>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/landingstyle.css">

</head>

<nav class="nav">
    <?php 
        include 'includes/nav.php';
    ?>
</nav>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="canonical">
                <div class="banner-section">


                    <div class="whatsnew">
                        <h1>Whats New?</h1>
                        <div class="banner-container swiper mySwiper">
                            <div class="swiper-wrapper">


                            <?php
                                $query = mysqli_query($conn, "SELECT * FROM `banners` WHERE `id` ORDER BY `id` DESC LIMIT 0,6") or die(mysqli_error());
                                while($fetch = mysqli_fetch_array($query)){
                            ?>
                            <div class="swiper-slide">
                                <img class="focus" src="<?php echo $fetch['img']?>" alt="">
                            </div>

                            <?php
                                }
                            ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <script>
                            var swiper = new Swiper(".mySwiper", {

                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                            });
                        </script>


                        <h1>Latest Characters</h1>
                        <div class="item-slider">
                            <div class="flex">


                                <?php
                                    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `id` ORDER BY `id` DESC LIMIT 0,6") or die(mysqli_error());
                                    while($fetch = mysqli_fetch_array($query)){
                                    ?>

                                        <a href="characters/<?php echo $fetch['url']?>.php" class="item ">
                                            <img class="item-category" src="images/icons/<?php echo $fetch['element']?>.png">
                                            <div class="item-icon bg-<?php echo $fetch['rarity']?>-star">
                                                <img class="item-img" src="<?php echo $fetch['img']?>">
                                            </div>
                                            <p class="item-text"><?php echo $fetch['name']?></p>
                                        </a>


                                <?php
                                    }
                                ?>

                            </div>
                        </div>





                        <h1>Latest Weapons</h1>

                        <div class="item-slider">
                            <div class="flex">
                                <?php
                                        $query = mysqli_query($conn, "SELECT * FROM `weapons` WHERE `id` ORDER BY `id` DESC LIMIT 0,6") or die(mysqli_error());
                                        while($fetch = mysqli_fetch_array($query)){
                                        ?>
                                            <a href="weapons/<?php echo $fetch['url']?>.php" class="item wepart">
                                                <div class="item-icon bg-<?php echo $fetch['rarity']?>-star">
                                                    <img class="item-img" src="<?php echo $fetch['img']?>">
                                                </div>
                                                <p class="item-text"><?php echo $fetch['name']?></p>
                                            </a>
                                    <?php
                                        }
                                    ?>
                            </div>
                        </div>
                        <h1>Latest Artifacts</h1>

                        <div class="item-slider">
                            <div class="flex">
                                <?php
                                        $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `id` ORDER BY `id` DESC LIMIT 0,6") or die(mysqli_error());
                                        while($fetch = mysqli_fetch_array($query)){
                                        ?>
                                            <a href="artifacts/<?php echo $fetch['url']?>.php" class="item wepart">
                                                <div class="item-icon bg-5-star" >
                                                    <img class="item-img" src="<?php echo $fetch['img']?>">
                                                </div>
                                                <p class="item-text"><?php echo $fetch['name']?></p>
                                            </a>
                                    <?php
                                        }
                                    ?>
                            </div>


                        </div>

                        





                        </div>
                    </div>


                <div class="newsfeed">
                    <div class="flex">
                        <h1>News Feed</h1>
                        <button id="twitter-btn" class="active">Twitter</button>
                    </div>

                

                    <div id="twitter-content">
                        <a class="twitter-timeline" data-dnt="true" data-theme="dark" href="https://twitter.com/GenshinImpact?ref_src=twsrc%5Etfw">Tweets by GenshinImpact</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>                    
                    </div>

                </div>

            </div>



        </div>
    </div>
<script type="text/javascript">
$(window).on("load resize", function() {
    $("#home-button").addClass("active");
 });
</script>

<script type="text/javascript">
$("#twitter-btn").click(function(){
    $("#twitter-content").removeClass("hide");
    $("#curated-content").addClass("hide");

    $("#twitter-btn").addClass("active");
    $("#curated-btn").removeClass("active");

 });
 
 $("#curated-btn").click(function(){
    $("#twitter-content").addClass("hide");
    $("#curated-content").removeClass("hide");

    $("#twitter-btn").removeClass("active");
    $("#curated-btn").addClass("active");
 });
 
</script>
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/uniscript.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>

</body>


