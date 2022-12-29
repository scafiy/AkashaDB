<head>
    <?php 
        session_start();
        include 'includes/head.php';
    ?>
    <title>Home - Akasha</title>
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

            <div class="aboutcontainer">
                <h1 class="logo">Akasha <sup>DB</sup></h1>
                <p>is a fan made <a href="https://github.com/scafiy/AkashaDB/blob/main/akashadb.sql">open sourse</a> sql database for the game Gesnhin Impact.</p>
                <i>© All intellectual property, GENSHIN MATERIALS and rights reserved by miHoYo. We are a fanmade project that abides by genshin's ToS policies.</i>
            </div>
          

            <div class="canonical">
                <div class="banner-section">



                    <div class="whatsnew">
                        <h1>Whats New?</h1>
                        <div class="banner-container">
                            <img class="focus" src="images/banners/2022-12-27-Reign_of_Serenity.jpg" alt="">
                        </div>

                        <h1>Latest Characters</h1>
                        <div class="item-slider">
                            <div class="flex">
                                <?php
                                    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `id` ORDER BY `id` DESC LIMIT 0,6") or die(mysqli_error());
                                    while($fetch = mysqli_fetch_array($query)){
                                    ?>
                                        <a href="characters/<?php echo $fetch['url']?>.php" class="item">
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
                    <h1>News Feed</h1>
                    <div>
                    <a class="twitter-timeline" data-dnt="true" data-theme="dark" href="https://twitter.com/GenshinImpact?ref_src=twsrc%5Etfw">Tweets by GenshinImpact</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>                    </div>
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
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/uniscript.js"></script>
</body>


