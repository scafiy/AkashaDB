
<head>
<?php 
    session_start();
        include 'includes/head.php';
?>
<title>Weapons - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include 'includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="css/navstyle.css">
<link rel="stylesheet" href="css/explorestyle.css">
<link rel="stylesheet" href="css/weaponexplorestyle.css">

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">

                <div class="heading-container">
                    <img class="heading-icon" src="images/icons/inventory-weapons.png">
                    <p class="heading-title">Weapons</p> 

                    <div class="filter-btn-container">
                        
                        <div class="layout-toggle">
                            <button class="layout-btn toggle-list">
                                <i class="material-symbols-outlined">table_rows</i>
                            </button>

                            <button class="layout-btn toggle-browse active-layout">
                                <i class="material-symbols-outlined">grid_view</i>
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
                            <button class="filter-chip filter-4-star"><i class="material-symbols-outlined">check</i>4 Star</button>
                            <button class="filter-chip filter-3-star"><i class="material-symbols-outlined">check</i>3 Star</button>
                            <button class="filter-chip filter-2-star"><i class="material-symbols-outlined">check</i>2 Star</button>
                            <button class="filter-chip filter-1-star"><i class="material-symbols-outlined">check</i>1 Star</button>

                        </div>

                        <div class="filter-row">
                            <p>Weapon:</p>
                            <button class="filter-chip filter-sword"><i class="material-symbols-outlined">check</i>Sword</button>
                            <button class="filter-chip filter-claymore"><i class="material-symbols-outlined">check</i>Claymore</button>
                            <button class="filter-chip filter-bow"><i class="material-symbols-outlined">check</i>Bow</button>
                            <button class="filter-chip filter-polearm"><i class="material-symbols-outlined">check</i>Polearm</button>
                            <button class="filter-chip filter-catalyst"><i class="material-symbols-outlined">check</i>Catalyst</button>
                        </div>

                        <div class="filter-row">
                            <p>Secondary Stat</p>
                            <button class="filter-chip filter-ATK"><i class="material-symbols-outlined">check</i>ATK</button>
                            <button class="filter-chip filter-DEF"><i class="material-symbols-outlined">check</i>DEF</button>
                            <button class="filter-chip filter-HP"><i class="material-symbols-outlined">check</i>HP</button>
                            <button class="filter-chip filter-CR"><i class="material-symbols-outlined">check</i>Crit Rate</button>
                            <button class="filter-chip filter-CD"><i class="material-symbols-outlined">check</i>Crit DMG</button>
                            <button class="filter-chip filter-EM"><i class="material-symbols-outlined">check</i>Elemental Mastery</button>
                            <button class="filter-chip filter-ER"><i class="material-symbols-outlined">check</i>Energy Recharge</button>
                            <button class="filter-chip filter-physicalDMG"><i class="material-symbols-outlined">check</i>Phyiscal DMG Bonus</button>
                        </div>
                    </div>

                <div class="item-container" id="item-results">

                <?php
                     $query = mysqli_query($conn, "SELECT * FROM `weapons` WHERE `id` ORDER BY `id` DESC LIMIT 0,9999999") or die(mysqli_error());
                     while($fetch = mysqli_fetch_array($query)){
                  ?>

                    <li> 
                        <div class="<?php echo $fetch['rarity']?>-star">
                        <div class="<?php echo $fetch['weapon']?>">
                        <div class="<?php echo $fetch['stat']?>">
                        
                            <a href="/Akasha/weapons/<?php echo $fetch['url']?>.php" class="item">
                                <div class="item-icon bg-<?php echo $fetch['rarity']?>-star">
                                    <img class="item-img" src="<?php echo $fetch['img']?>">
                                </div>
                                <i class="keywords"><?php echo $fetch['keywords']?></i>
                                <div class="rarity-stars">
                                    <img class="" src="images/icons/<?php echo $fetch['rarity']?>-stars.png" alt="">
                                </div>

                                <p class="item-text"><?php echo $fetch['name']?></p>

                                <div class="item-baseatk">
                                    <div class="baseatk-container">
                                        <p id="stat">Base ATK</p>
                                        <p id="min"><?php echo $fetch['basemin']?></p>
                                        <p>(<?php echo $fetch['basemax']?>)</p>

                                    </div>
                                </div>
                                <div class="item-stat <?php echo $fetch['stat']?>stat">
                                    <p id="stat"><?php echo $fetch['stat']?></p>
                                    <p id="min"><?php echo $fetch['statmin']?></p>
                                    <p>(<?php echo $fetch['statmax']?>)</p>
                                </div>

                            </a>
                            
                        </div>
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

    
<script type="text/javascript">
$(window).on("load", function() {
    $("#weapon-button").addClass("active");
    $("#weapon-dropdown-icon").addClass("active-dropdown-icon");
    $("#weapon-dropdown-icon").addClass("active");
    $("#weapon-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/uniscript.js"></script>
<script type="text/javascript" src="js/characterscript.js"></script>
<script type="text/javascript" src="js/weaponscript.js"></script>

</body>


