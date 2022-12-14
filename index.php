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

            <div class="akashabanner">
                <div class="akashabannercontainer">
                    <h1>Akasha<b>DB</b></h1>
                    <p>An open sourse genshin impact sql database.</p>
                   
                        <div class="links">
                        <a class="githuba" href="https://github.com/scafiy/AkashaDB/blob/main/akashadb.sql">
                            <button class="githubbtn"><img src="images/icons/github.png" alt="">Github</button>    
                        </a>
                        </div>
                </div>
            </div>

            <div class="aboutsection">
                <h1>About Us</h1>
                <p>
                    <i>"We collect information from the game genshin impact by hand and curate data into our sql database. This project is created for archival purposes and our work is applicable to be used by others"</i>
                    <i>"All intellectual property, Genshin Impact MATERIALS and rights are reserved to miHoYo Co., Ltd, HoYoverse and Cognosphere."</i>
                </p>
            </div>




            <div class="canonical">
                <div class="banner-section">



                    <div class="whatsnew">
                        <h1>Whats New?</h1>

                        <p>Latest Characters</p>
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

                        <p>Latest Weapons</p>

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
                    <a class="twitter-timeline" href="https://twitter.com/GenshinImpact?ref_src=twsrc%5Etfw">Tweets by GenshinImpact</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
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


