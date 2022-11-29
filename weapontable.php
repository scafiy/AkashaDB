
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
                            <button class="filter-chip filter-ATK"><i class="material-symbols-outlined">check</i>ATK%</button>
                            <button class="filter-chip filter-DEF"><i class="material-symbols-outlined">check</i>DEF%</button>
                            <button class="filter-chip filter-HP"><i class="material-symbols-outlined">check</i>HP%</button>
                            <button class="filter-chip filter-CR"><i class="material-symbols-outlined">check</i>Crit Rate</button>
                            <button class="filter-chip filter-CD"><i class="material-symbols-outlined">check</i>Crit Damage</button>
                            <button class="filter-chip filter-EM"><i class="material-symbols-outlined">check</i>Elemental Mastery</button>
                            <button class="filter-chip filter-ER"><i class="material-symbols-outlined">check</i>Energy Recharge</button>
                            <button class="filter-chip filter-physicalDMG"><i class="material-symbols-outlined">check</i>Phyiscal DMG Bonus</button>
                        </div>
                    </div>

                <div class="item-container" id="item-results">



                            


 <table>

    <tr>
        <th>IMG</th>
        <th>Name</th>
        <th>Rarity</th>
        <th>BaseATK</th>
        <th>Secondary Stat</th>
        <th>Stat</th>

      </tr>
    <?php
        $query = mysqli_query($conn, "SELECT * FROM `weapons` WHERE `id` ORDER BY `id` DESC") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>


      <tr>
        <td>
            <div class="item-icon bg-<?php echo $fetch['rarity']?>-star" style="width:50px; height:50px;">
                <img class="item-img" src="<?php echo $fetch['img']?>">
            </div>
        </td>
        <td><?php echo $fetch['name']?></td>
        <td><?php echo $fetch['rarity']?><img src="images/icons/<?php echo $fetch['rarity']?>-stars.png" alt=""></td>
        <td><?php echo $fetch['basemin']?> (<?php echo $fetch['basemax']?>)</td>
        <td><?php echo $fetch['stat']?></td>
        <td><?php echo $fetch['statmin']?> (<?php echo $fetch['statmax']?>)</td>

      </tr>

    <?php
        }
    ?>

  </table>
  
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
<script>
    const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

const comparer = (idx, asc) => (a, b) => ((v1, v2) => 
    v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
    )(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

// do the work...
document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
    const table = th.closest('table');
    Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
        .sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
        .forEach(tr => table.appendChild(tr) );
})));
</script>
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/uniscript.js"></script>
<script type="text/javascript" src="js/characterscript.js"></script>
<script type="text/javascript" src="js/weaponscript.js"></script>

</body>


