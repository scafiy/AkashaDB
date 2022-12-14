<head>
<?php 
    session_start();
        include '../includes/head.php';
?>


<nav class="nav">
    <?php 
        include '../includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/weaponpagestyle.css">

<style>
    .splash-art{
        top:;
        margin-left:0px;
        margin-right:-0px;
    }

    @media all and (max-width: 1200px) {
        .splash-art{
            margin-right:0px;
        }
    }


    :root {
    --highlighted-color: #69DCDA; 
    --topnav-color: #DAE9E9;
    --search-bar-precolour:#DAE9E9;
    }
    
</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `weapons` WHERE `url` = 'wandering-evenstar' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, var(--highlighted-color), transparent 80%)">
                    <div class="splash-art" id="<?php echo $fetch['weapon']?>scaling">
                        <img src="../images/weapons/<?php echo $fetch['url']?>/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title"><?php echo $fetch['name']?></p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/<?php echo $fetch['rarity']?>-stars.png" alt="">
                                <div tooltip="<?php echo $fetch['weapon']?>" flow="up">
                                    <img class="icons" src="../images/icons/b_<?php echo $fetch['weapon']?>.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">This was originally a device used by researchers to observe and perform calculations on celestial phenomena. It serves as a conduit and catalyst.

</p>
                        </div>
                    </div>
                </div>


                <div class="information">
                    <div class="forefront">
                        <div class="base-stat-table">
                            <div class="talent-card-heading">
                                <p class="talent-card-title">Base Stats</p>
                            </div>
                            <table class="scalingtable">
                                <tr>
                                    <td>Level</td>
                                    <td>Base ATK</td>
                                    <td><?php echo $fetch['stat']?></td>
                                </tr>
                                <tr>
                                    <td>Min</td>
                                    <td><?php echo $fetch['basemin']?></td>
                                    <td><?php echo $fetch['statmin']?></td>
                                </tr>

                                <tr>
                                    <td>Max</td>
                                    <td><?php echo $fetch['basemax']?></td>
                                    <td><?php echo $fetch['statmax']?></td>
                                </tr>
                            </table>
                        </div>

                        <div class="passive-container">
                            <div class="passive-content">
                                <b><?php echo $fetch['passivetitle']?></b>
                                <p><?php echo $fetch['passiveeffect']?></p>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>

    
<script type="text/javascript">
$(window).on("load", function() {
    $("#<?php echo $fetch['url']?>-button").addClass("active");
    $("#weapon-dropdown-icon").addClass("active-dropdown-icon");
    $("#weapon-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>

<?php
    }
?>

</body>


