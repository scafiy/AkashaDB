
<head>
<?php 
    session_start();
        include 'includes/head.php';
?>
<title>Artifacts - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include 'includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="css/navstyle.css">
<link rel="stylesheet" href="css/explorestyle.css">
<link rel="stylesheet" href="css/artifactexplorestyle.css">

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">

                <div class="heading-container">
                    <img class="heading-icon" src="images/icons/flower-of-life.png">
                    <p class="heading-title">Artifacts</p> 

                    <div class="filter-btn-container">

                        <div class="layout-toggle">
                        <button class="layout-btn toggle-list active-layout">
                                <a href="">
                                    <i class="material-symbols-outlined">table_rows</i>
                                </a>
                            </button>

                            <button class="layout-btn toggle-browse">
                                <a href="artifacts.php">
                                    <i class="material-symbols-outlined">grid_view</i>
                                </a>
                            </button>

                        </div>

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
                            <button class="filter-chip filter-3-star"><i class="material-symbols-outlined">check</i> 3 Star</button>
                            <button class="filter-chip filter-2-star"><i class="material-symbols-outlined">check</i> 2 Star</button>
                            <button class="filter-chip filter-1-star"><i class="material-symbols-outlined">check</i> 1 Star</button>

                        </div>

                    </div>
            
                <div class="item-container" id="item-results">

                <?php
                     $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `id` ORDER BY `id` DESC") or die(mysqli_error());
                     while($fetch = mysqli_fetch_array($query)){
                  ?>

                    <li class="artifact-row">
                        
                        <div class="artifact-title-row">
                            <h1 class="title-<?php echo $fetch['onestar']?>-star"><?php echo $fetch['name']?></h1>
                            <h1 class="title-<?php echo $fetch['twostar']?>-star"><?php echo $fetch['name']?></h1>
                            <h1 class="title-<?php echo $fetch['threestar']?>-star"><?php echo $fetch['name']?></h1>
                            <h1 class="title-<?php echo $fetch['fourstar']?>-star"><?php echo $fetch['name']?></h1>
                            <h1 class="title-<?php echo $fetch['fivestar']?>-star"><?php echo $fetch['name']?></h1>
                        </div>
                            
                        <div class="artifact-item-row">
                            <a href="artifacts/<?php echo $fetch['url']?>.php" class="item artifact-<?php echo $fetch['onestar']?>-star">
                                <div class="item-icon bg-<?php echo $fetch['onestar']?>-star">
                                    <img class="item-img" src="<?php echo $fetch['img']?>">
                                </div>
                                <i class="keywords"><?php echo $fetch['keywords']?></i>
                                <div class="rarity-stars">
                                    <img class="" src="images/icons/<?php echo $fetch['onestar']?>-stars.png" alt="">
                                </div>
                                <p class="item-text">set</p>
                                <p class="item-name hide"><?php echo $fetch['name']?></p>
                            </a>
                            <a href="artifacts/<?php echo $fetch['url']?>.php" class="item artifact-<?php echo $fetch['twostar']?>-star">
                                <div class="item-icon bg-<?php echo $fetch['twostar']?>-star">
                                    <img class="item-img" src="<?php echo $fetch['img']?>">
                                </div>
                                <i class="keywords"><?php echo $fetch['keywords']?></i>
                                <div class="rarity-stars">
                                    <img class="" src="images/icons/<?php echo $fetch['twostar']?>-stars.png" alt="">
                                </div>
                                <p class="item-text">set</p>
                                <p class="item-name hide"><?php echo $fetch['name']?></p>

                            </a>
                            <a href="artifacts/<?php echo $fetch['url']?>.php" class="item artifact-<?php echo $fetch['threestar']?>-star">
                                <div class="item-icon bg-<?php echo $fetch['threestar']?>-star">
                                    <img class="item-img" src="<?php echo $fetch['img']?>">
                                </div>
                                <i class="keywords"><?php echo $fetch['keywords']?></i>
                                <div class="rarity-stars">
                                    <img class="" src="images/icons/<?php echo $fetch['threestar']?>-stars.png" alt="">
                                </div>
                                <p class="item-text">set</p>
                                <p class="item-name hide"><?php echo $fetch['name']?></p>

                            </a>
                            <a href="artifacts/<?php echo $fetch['url']?>.php" class="item artifact-<?php echo $fetch['fourstar']?>-star">
                                <div class="item-icon bg-<?php echo $fetch['fourstar']?>-star">
                                    <img class="item-img" src="<?php echo $fetch['img']?>">
                                </div>
                                <i class="keywords"><?php echo $fetch['keywords']?></i>
                                <div class="rarity-stars">
                                    <img class="" src="images/icons/<?php echo $fetch['fourstar']?>-stars.png" alt="">
                                </div>
                                <p class="item-text">set</p>
                                <p class="item-name hide"><?php echo $fetch['name']?></p>

                            </a>
                            <a href="artifacts/<?php echo $fetch['url']?>.php" class="item artifact-<?php echo $fetch['fivestar']?>-star">
                                <div class="item-icon bg-<?php echo $fetch['fivestar']?>-star">
                                    <img class="item-img" src="<?php echo $fetch['img']?>">
                                </div>
                                <i class="keywords"><?php echo $fetch['keywords']?></i>
                                <div class="rarity-stars">
                                    <img class="" src="images/icons/<?php echo $fetch['fivestar']?>-stars.png" alt="">
                                </div>
                                <p class="item-text">set</p>
                                <p class="item-name hide"><?php echo $fetch['name']?></p>

                            </a>
                        </div>
                    </li>
                    

                  <?php
                     }
                  ?>
                </div>
            </div>
        </div>
    </div>

    


<script type="text/javascript">
$(window).on("load", function() {
    $("#artifact-button").addClass("active");
    $("#artifact-dropdown-icon").addClass("active-dropdown-icon");
    $("#artifact-dropdown-icon").addClass("active");
    $("#artifact-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/uniscript.js"></script>
<script type="text/javascript" src="js/artifactscript.js"></script>

</body>


