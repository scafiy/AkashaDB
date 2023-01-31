
<head>
<?php 
    session_start();
        include 'includes/head.php';
?>
<title>Banners - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include 'includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="css/navstyle.css">
<link rel="stylesheet" href="css/explorestyle.css">
<link rel="stylesheet" href="css/bannerstyle.css">
<link rel="stylesheet" href="css/swiper-bundle.min.css">


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">

                <div class="heading-container">
                    <img class="heading-icon" src="images/icons/wish.png">
                    <p class="heading-title">Banners</p> 

                    <div class="filter-btn-container">
                       
                        <button class="sortbtn" onclick="sort()">
                            <i class="material-symbols-outlined">arrow_drop_up</i>
                        </button>

                    </div>  
                </div>
                

                <div class="filter-container">

                </div>
            
                <div class="item-container" id="item-results">

                    <?php
                        $query = mysqli_query($conn, "SELECT * FROM `banners` WHERE `id` ORDER BY `id` DESC") or die(mysqli_error());
                        while($fetch = mysqli_fetch_array($query)){
                    ?>

                        
                    <li class="banneritem">
                        <a>
                            <i class="keywords">
                                <?php echo $fetch['name']?>
                                <?php echo $fetch['keywords']?>
                                <?php echo $fetch['type']?>
                                <?php echo $fetch['startdate']?>
                                <?php echo $fetch['finishdate']?>
                                <?php echo $fetch['finishdate']?>
                                <?php echo $fetch['fivestarone']?>
                                <?php echo $fetch['fivestartwo']?>
                                <?php echo $fetch['fourstarone']?>
                                <?php echo $fetch['fourstartwo']?>
                                <?php echo $fetch['fourstarthree']?>
                                <?php echo $fetch['fourstarfour']?>
                                <?php echo $fetch['fourstarfivestar']?>
                            </i>
                        </a>
                        <img class="banner" src="<?php echo $fetch['img']?>" alt="">
                        <div class="banner-details">
                            <h1>
                                <?php echo $fetch['name']?>
                            </h1>

                            <div class="flex">
                                <div>
                                    Date: <?php echo $fetch['startdate']?> - <?php echo $fetch['finishdate']?>
                                </div>
                                <div class="tags">
                                    Type:<a><?php echo $fetch['type']?></a>
                                    Version:<a><?php echo $fetch['version']?></a>
                                    Phase:<a><?php echo $fetch['phase']?></a>
                                </div>

                            </div>

                            <div class="rateupitems">
                                <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fivestarone']?>.php" class="item <?php echo $fetch['type']?>itemhight displaynone<?php echo $fetch['fivestarone']?>">
                                    <div class="item-icon bg-5-star">
                                        <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fivestarone']?>/profile.png">
                                    </div>
                                    <p class="item-text <?php echo $fetch['type']?>itemtext"><?php echo $fetch['fivestarone']?></p>
                                </a>


                                <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fivestartwo']?>.php" class="item <?php echo $fetch['type']?>itemhight displaynone<?php echo $fetch['fivestartwo']?>">
                                    <div class="item-icon bg-5-star">
                                        <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fivestartwo']?>/profile.png">
                                    </div>
                                    <p class="item-text <?php echo $fetch['type']?>itemtext"><?php echo $fetch['fivestartwo']?></p>
                                </a>

                                <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarone']?>.php" class="item <?php echo $fetch['type']?>itemhight displaynone<?php echo $fetch['fourstarone']?>">
                                    <div class="item-icon bg-4-star">
                                        <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarone']?>/profile.png">
                                    </div>
                                    <p class="item-text <?php echo $fetch['type']?>itemtext"><?php echo $fetch['fourstarone']?></p>
                                </a>

                                <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fourstartwo']?>.php" class="item <?php echo $fetch['type']?>itemhight displaynone<?php echo $fetch['fourstartwo']?>">
                                    <div class="item-icon bg-4-star">
                                        <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fourstartwo']?>/profile.png">
                                    </div>
                                    <p class="item-text <?php echo $fetch['type']?>itemtext"><?php echo $fetch['fourstartwo']?></p>
                                </a>

                                <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarthree']?>.php" class="item <?php echo $fetch['type']?>itemhight displaynone<?php echo $fetch['fourstarthree']?>">
                                    <div class="item-icon bg-4-star">
                                        <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarthree']?>/profile.png">
                                    </div>
                                    <p class="item-text <?php echo $fetch['type']?>itemtext"><?php echo $fetch['fourstarthree']?></p>
                                </a>

                                <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarfour']?>.php" class="item <?php echo $fetch['type']?>itemhight displaynone<?php echo $fetch['fourstarfour']?>">
                                    <div class="item-icon bg-4-star">
                                        <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarfour']?>/profile.png">
                                    </div>
                                    <p class="item-text <?php echo $fetch['type']?>itemtext"><?php echo $fetch['fourstarfour']?></p>
                                </a>

                                <a href="<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarfive']?>.php" class="item <?php echo $fetch['type']?>itemhight displaynone<?php echo $fetch['fourstarfive']?>">
                                    <div class="item-icon bg-4-star">
                                        <img class="item-img" src="images/<?php echo $fetch['type']?>s/<?php echo $fetch['fourstarfive']?>/profile.png">
                                    </div>
                                    <p class="item-text <?php echo $fetch['type']?>itemtext"><?php echo $fetch['fourstarfive']?></p>
                                </a>




                            </div>



                        </div>
                    </li>
                    
                    <?php
                        }
                    ?>
                <p></p>
                </div>





            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    

<script type="text/javascript">
$(window).on("load", function() {
    $("#banner-button").addClass("active");

 });
</script>
<script>
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/uniscript.js"></script>
<script type="text/javascript" src="js/characterscript.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>

</body>


