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

            <div class="features">
                <h1>Why use us?</h1>

                <div class="flex">
                    <div>
                        <img src="https://lh3.googleusercontent.com/_w9xZ-KglSVNibMtvqpKGEZG06lz2oQR0Auh4KB6EAGa7MYMkxvRmohH0-jyh8ciLXCnS-wxBlv62KUbaHObMik6bSQx_cT6DC2_olwfNHCvddX6eq4" alt="">
                        <h1>User Interface</h1>
                        <p>We follow Google's Material Design Philosophy and have implemented UI and UX methodologys.</p>
                    </div>
                    <div>
                        <img src="https://lh3.googleusercontent.com/_w9xZ-KglSVNibMtvqpKGEZG06lz2oQR0Auh4KB6EAGa7MYMkxvRmohH0-jyh8ciLXCnS-wxBlv62KUbaHObMik6bSQx_cT6DC2_olwfNHCvddX6eq4" alt="">
                        <h1>Search Fuction</h1>
                        <p>Our simple yet powerful search bar and filter chips offer the best search functionality for a genshin database.</p>
                    </div>

                    <div>
                        <img src="https://lh3.googleusercontent.com/_w9xZ-KglSVNibMtvqpKGEZG06lz2oQR0Auh4KB6EAGa7MYMkxvRmohH0-jyh8ciLXCnS-wxBlv62KUbaHObMik6bSQx_cT6DC2_olwfNHCvddX6eq4" alt="">
                        <h1>Open Sourse</h1>
                        <p></p>
                    </div>
                </div>


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


