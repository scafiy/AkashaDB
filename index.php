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
            <div class="canonical">
                <div class="banner-section">



                    <div class="whatsnew">
                        <h1>Whats New?</h1>
                        <div class="banner-container">
                            <?php
                                $query = mysqli_query($conn, "SELECT * FROM `banners` WHERE `id` ORDER BY `id` DESC LIMIT 0,1") or die(mysqli_error());
                                while($fetch = mysqli_fetch_array($query)){
                                ?>
                                <img class="focus" src="<?php echo $fetch['img']?>" alt="">
                                <p><?php echo $fetch['startdate']?></p>
                                <p><?php echo $fetch['finishdate']?></p>

                                <div class="bannerwrapper"> 

                                    <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fivestarone']?>.php" class="item wepart">
                                        <div class="item-icon bg-5-star">
                                            <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fivestarone']?>/profile.png">
                                        </div>
                                    </a>
                                    
                                    <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fivestartwo']?>.php" class="item wepart">
                                        <div class="item-icon bg-5-star">
                                            <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fivestartwo']?>/profile.png">
                                        </div>
                                    </a>
                                    <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarone']?>.php" class="item wepart">
                                        <div class="item-icon bg-5-star">
                                            <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarone']?>/profile.png">
                                        </div>
                                    </a>
                                    <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fourstartwo']?>.php" class="item wepart">
                                        <div class="item-icon bg-5-star">
                                            <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fourstartwo']?>/profile.png">
                                        </div>
                                    </a>
                                    <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarthree']?>.php" class="item wepart">
                                        <div class="item-icon bg-5-star">
                                            <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarthree']?>/profile.png">
                                        </div>
                                    </a>                               
                                    <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarfour']?>.php" class="item wepart">
                                        <div class="item-icon bg-5-star">
                                            <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarfour']?>/profile.png">
                                        </div>
                                    </a>                               
                                    <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarfive']?>.php" class="item wepart">
                                        <div class="item-icon bg-5-star">
                                            <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarfive']?>/profile.png">
                                        </div>
                                    </a>                               
                                
                                
                                
                                </div>

                            <?php
                                }
                            ?>

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


