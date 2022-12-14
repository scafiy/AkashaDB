<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>"The Catch" - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include '../includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/weaponpagestyle.css">

<style>
    :root {
    --highlighted-color: #A6E0F1; 
    --topnav-color: #DEE9EC;
    --search-bar-precolour:#DEE9EC;
}
</style>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, var(--highlighted-color), transparent 80%)">
                    <div class="splash-art" id="">
                        <img src="../images/weapons/the-catch/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">"The Catch"</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">
                                <div tooltip="Polearm" flow="up">
                                    <img class="icons" src="../images/icons/b_polearm.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">In the distant past, this was the beloved spear of a famed Inazuman bandit.
</p>
                        </div>
                    </div>
                </div>

                <?php
                    $query = mysqli_query($conn, "SELECT * FROM `weapons` WHERE `url` = 'the-catch' ") or die(mysqli_error());
                    while($fetch = mysqli_fetch_array($query)){
                ?>
                

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

                <?php
    }
?>



                </div>


                

            </div>
        </div>
    </div>

    
<script type="text/javascript">
$(window).on("load", function() {
    $("#the-catch-button").addClass("active");
    $("#weapon-dropdown-icon").addClass("active-dropdown-icon");
    $("#weapon-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>

</body>


