
<head>
<?php 
    session_start();
        include 'includes/head.php';
?>
<title>Characters - Akasha</title>
    

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

                <div class="heading-container">
                    <img class="heading-icon" src="images/icons/character.png">
                    <p class="heading-title">Characters</p> 

                    <div class="filter-btn-container">
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

                        </div>

                        <div class="filter-row">
                            <p>Element:</p>
                            <button class="filter-chip filter-pyro"><i class="material-symbols-outlined">check</i> Pyro</button>
                            <button class="filter-chip filter-hydro"><i class="material-symbols-outlined">check</i> Hydro</button>
                            <button class="filter-chip filter-dendro"><i class="material-symbols-outlined">check</i> Dendro</button>
                            <button class="filter-chip filter-electro"><i class="material-symbols-outlined">check</i> Electro</button>
                            <button class="filter-chip filter-anemo"><i class="material-symbols-outlined">check</i> Anemo</button>
                            <button class="filter-chip filter-cryo"><i class="material-symbols-outlined">check</i> Cryo</button>
                            <button class="filter-chip filter-geo"><i class="material-symbols-outlined">check</i> Geo</button>
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
                            <p>Ascension Stat:</p>
                            <button class="filter-chip filter-ATK"><i class="material-symbols-outlined">check</i>ATK%</button>
                            <button class="filter-chip filter-DEF"><i class="material-symbols-outlined">check</i>DEF%</button>
                            <button class="filter-chip filter-HP"><i class="material-symbols-outlined">check</i>HP%</button>
                            <button class="filter-chip filter-CR"><i class="material-symbols-outlined">check</i>Crit Rate</button>
                            <button class="filter-chip filter-CD"><i class="material-symbols-outlined">check</i>Crit Damage</button>
                            <button class="filter-chip filter-EM"><i class="material-symbols-outlined">check</i>Elemental Mastery</button>
                            <button class="filter-chip filter-ER"><i class="material-symbols-outlined">check</i>Energy Recharge</button>
                            <button class="filter-chip filter-HB"><i class="material-symbols-outlined">check</i>Heaing Bonus</button>
                            <button class="filter-chip filter-physicalDMG"><i class="material-symbols-outlined">check</i>Phyiscal DMG Bonus</button>
                            <button class="filter-chip filter-pyroDMG"><i class="material-symbols-outlined">check</i>Pyro DMG Bonus</button>
                            <button class="filter-chip filter-hydroDMG"><i class="material-symbols-outlined">check</i>Hydro DMG Bonus</button>
                            <button class="filter-chip filter-dendroDMG"><i class="material-symbols-outlined">check</i>Dendro DMG Bonus</button>
                            <button class="filter-chip filter-electroDMG"><i class="material-symbols-outlined">check</i>Electro DMG Bonus</button>
                            <button class="filter-chip filter-anemoDMG"><i class="material-symbols-outlined">check</i>Anemo DMG Bonus</button>
                            <button class="filter-chip filter-cryoDMG"><i class="material-symbols-outlined">check</i>Cryo DMG Bonus</button>
                            <button class="filter-chip filter-geoDMG"><i class="material-symbols-outlined">check</i>Geo DMG Bonus</button>

                        </div>
                    </div>
            
                <div class="item-container" id="item-results">
                <?php
                     $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `id` ORDER BY `id` DESC") or die(mysqli_error());
                     while($fetch = mysqli_fetch_array($query)){
                  ?>

                    <li>
                        <div class="<?php echo $fetch['rarity']?>-star">
                        <div class="<?php echo $fetch['element']?>">
                        <div class="<?php echo $fetch['weapon']?>">
                        <div class="<?php echo $fetch['stat']?>">
                            <a href="characters/<?php echo $fetch['url']?>.php" class="item">
                                <img class="item-category" src="images/icons/<?php echo $fetch['element']?>.png">
                                <div class="item-icon bg-<?php echo $fetch['rarity']?>-star">
                                    <img class="item-img" src="<?php echo $fetch['img']?>">
                                </div>
                                <i class="keywords"><?php echo $fetch['keywords']?></i>
                                <p class="item-text"><?php echo $fetch['name']?></p>
                            </a>
                        </div>
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
    $("#character-button").addClass("active");
    $("#character-dropdown-icon").addClass("active-dropdown-icon");
    $("#character-dropdown-icon").addClass("active");
    $("#character-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/uniscript.js"></script>
<script type="text/javascript" src="js/characterscript.js"></script>

</body>


