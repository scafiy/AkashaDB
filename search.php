
<head>
<?php 
    session_start();
        include 'includes/head.php';
?>
<title>Search - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include 'includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="css/navstyle.css">
<link rel="stylesheet" href="css/explorestyle.css">


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">

                <div class="item-container" id="item-results">
              
                <ul class="search-results" id="resultfilter">
                  <?php
                     $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `id` ORDER BY `name`") or die(mysqli_error());
                     while($fetch = mysqli_fetch_array($query)){
                  ?>

                     <li>
                        <a class="keywords" href="/Akasha/characters/<?php echo $fetch['url']?>.php"><?php echo $fetch['keywords']?></a>
                           <div class="result-details">
                              <img class="bg-<?php echo $fetch['rarity']?>-star" src="/Akasha/<?php echo $fetch['img']?>">
                              <div class="result-details-text">
                              <p><?php echo $fetch['name']?></p>
                              <div class="result-tags">
                                 <p class="tag"><?php echo $fetch['category']?></p>
                                 <p class="tag"><?php echo $fetch['element']?></p>
                                 <p class="tag"><?php echo $fetch['weapon']?></p>
                              </div>
                           </div>
                        </div>
                     </li>
                  <?php
                     }
                  ?>


                  <?php
                     $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `id` ORDER BY `name`") or die(mysqli_error());
                     while($fetch = mysqli_fetch_array($query)){
                  ?>

                     <li>
                        <a class="keywords" href="/Akasha/artifacts/<?php echo $fetch['url']?>.php"><?php echo $fetch['keywords']?></a>
                           <div class="result-details">
                              <img class="bg-<?php echo $fetch['fivestar']?>-star bg-<?php echo $fetch['fourstar']?>-star bg-<?php echo $fetch['threestar']?>-star bg-<?php echo $fetch['twostar']?>-star bg-<?php echo $fetch['onestar']?>-star" src="/Akasha/<?php echo $fetch['img']?>">
                              <div class="result-details-text">
                              <p><?php echo $fetch['name']?></p>
                              <div class="result-tags">
                                 <p class="tag"><?php echo $fetch['category']?></p>
                              </div>
                           </div>
                        </div>
                     </li>
                  <?php
                     }
                  ?>

                  
                  <?php
                     $query = mysqli_query($conn, "SELECT * FROM `weapons` WHERE `id` ORDER BY `name`") or die(mysqli_error());
                     while($fetch = mysqli_fetch_array($query)){
                  ?>
                     <li>
                        <a class="keywords" href="/Akasha/weapons/<?php echo $fetch['url']?>.php"><?php echo $fetch['keyword']?></a>
                           <div class="result-details">
                              <img class="bg-<?php echo $fetch['rarity']?>-star" src="/Akasha/<?php echo $fetch['img']?>">
                              <div class="result-details-text">
                              <p><?php echo $fetch['name']?></p>
                              <div class="result-tags">
                                 <p class="tag"><?php echo $fetch['category']?></p>
                              </div>
                           </div>
                        </div>
                     </li>
                  <?php
                     }
                  ?>

               </ul>
                <p></p>
                </div>
            </div>
        </div>
    </div>

    

<script type="text/javascript">
$(window).on("load", function() {
    $("#search-button").addClass("active");
    $("#search-dropdown-icon").addClass("active");
 });
</script>
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/uniscript.js"></script>
<script type="text/javascript" src="js/characterscript.js"></script>

</body>


