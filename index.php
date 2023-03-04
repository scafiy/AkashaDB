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
                        <button id="curated-btn" class="active">Curated</button>
                        <button id="twitter-btn">Twitter</button>
                    </div>

                    <div id="curated-content" class="">

                    <a href="https://www.hoyolab.com/article/15074939">
                            <div class="curated-content-item">
                                <img src="https://upload-os-bbs.hoyolab.com/upload/2023/01/17/3335405ce66b27452067586ed3f001d1_314426184941108966.jpg" alt="">
                                <div class="curated-content-item-details">
                                    <p>Almighty Arataki Extraordinary and Exhilarating Extreme Beetle Brawl</p>
                                    <p class="tags" href="">#event</p>
                                </div>
                                <div class="curated-content-item-description">
                                    <p>"Almighty Arataki Extraordinary and Exhilarating Extreme Beetle Brawl" Event: Complete the Beetle Battle Challenge and Win Primogems</p>
                                </div>
                            </div>
                        </a>

                        <a href="https://www.hoyolab.com/article/15074939">
                            <div class="curated-content-item">
                                <img src="https://upload-os-bbs.hoyolab.com/upload/2023/01/17/d325c99e3522d1ee6c401f502645fcc5_6398400007406708272.jpg" alt="">
                                <div class="curated-content-item-details">
                                    <p>Warrior's Spirit</p>
                                    <p class="tags" href="">#event</p>
                                </div>
                                <div class="curated-content-item-description">
                                    <p>"Warrior's Spirit" Event: Sword Duel Challenge</p>
                                </div>
                            </div>
                        </a>


                        <a href="https://www.hoyolab.com/article/15074939">
                            <div class="curated-content-item">
                                <img src="https://upload-os-bbs.hoyolab.com/upload/2023/01/17/c76f9644a3876fc15c36b4aa5f049626_1007626116543411009.jpg" alt="">
                                <div class="curated-content-item-details">
                                    <p>Second Blooming</p>
                                    <p class="tags" href="">#event</p>

                                </div>
                                <div class="curated-content-item-description">
                                    <p>"Almighty Arataki Extraordinary and Exhilarating Extreme Beetle Brawl" Event: Complete the Beetle Battle Challenge and Win Primogems</p>
                                </div>

                            </div>
                        </a>





                        <a href="https://www.hoyolab.com/article/15099055">
                            <div class="curated-content-item">
                                <img src="https://upload-os-bbs.hoyolab.com/upload/2023/01/17/46b3039ccd839cda4bbdb943c9307650_5547452625956798858.jpg" alt="">
                                <div class="curated-content-item-details">
                                    <p>The Exquisite Night Chimes</p>
                                    <p class="tags" href="">#event</p>
                                </div>
                                <div class="curated-content-item-description">
                                    <p>"The Exquisite Night Chimes" Event: Invite a 4-Star Character From Liyue of Your Choice
</p>
                                </div>
                            </div>
                        </a>

                        
                        
                        <a href="https://youtu.be/pKgNRYUaspM">
                            <div class="curated-content-item">
                            <iframe width="1280" height="593" src="https://www.youtube.com/embed/pKgNRYUaspM" title="New Year 2023 Short Film: "Fish-Shaped Lanterns" | Genshin Impact" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                                <div class="curated-content-item-details">
                                    <p>New Year 2023 Short Film</p>
                                    <p class="tags" href="">#youtube</p>
                                </div>
                            </div>
                        </a>




                    <a href="https://youtu.be/U-ckKzp3KHM">
                            <div class="curated-content-item">
                            <iframe width="1280" height="720" src="https://www.youtube.com/embed/U-ckKzp3KHM" title=""Endless Adventure in Teyvat" Themed Exhibition Retrospective Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                                <div class="curated-content-item-details">
                                    <p>"Endless Adventure in Teyvat" Themed Exhibition Retrospective Video</p>
                                    <p class="tags" href="">#youtube</p>
                                </div>
                            </div>
                        </a>

                        <a href="https://youtu.be/3RLhCbVtjEg">
                            <div class="curated-content-item">
                            <iframe width="1280" height="720" src="https://www.youtube.com/embed/3RLhCbVtjEg" title=""Endless Suffering" Short Trailer | Genshin Impact" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                                <div class="curated-content-item-details">
                                    <p>"Endless Suffering" Short Trailer</p>
                                    <p class="tags" href="">#youtube</p>
                                </div>
                            </div>
                        </a>

                        <a href="https://youtu.be/co59abJjokc">
                            <div class="curated-content-item">
                            <iframe width="1280" height="720" src="https://www.youtube.com/embed/co59abJjokc" title="Outfit Teaser: Teyvat Style – Flowers Between Pages | Genshin Impact" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                                <div class="curated-content-item-details">
                                    <p>Teyvat Style - Flowers Between Pages</p>
                                    <p class="tags" href="">#youtube</p>
                                </div>
                            </div>
                        </a>


                        <a href="https://youtu.be/c59gRWyBuro">
                            <div class="curated-content-item">
                            <iframe src="https://www.youtube.com/embed/c59gRWyBuro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <div class="curated-content-item-details">
                                    <p>Lantern Rite Stop Motion Animation</p>
                                    <p class="tags" href="">#youtube</p>
                                </div>
                            </div>
                        </a>

                        
                    
                        <a href="https://www.hoyolab.com/article/14363755?utm_source=sns&utm_medium=twitter&utm_id=2">
                            <div class="curated-content-item">
                                <img src="https://upload-os-bbs.hoyolab.com/upload/2022/12/13/3d5d12733ec01dae76528c72b9eec165_1075540580123246008.jpg" alt="">
                                <div class="curated-content-item-details">
                                    <p>Akitsu Kimodameshi</p>
                                    <p class="tags" href="">#event</p>
                                </div>
                            </div>
                        </a>








                    </div>





                    <div id="twitter-content" class="hide">
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


