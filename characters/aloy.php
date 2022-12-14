<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Aloy - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include '../includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/characterpagestyle.css">

<style>
.splash-art{
    top:;
    margin-left:0px;
    margin-right:0px;
}

@media all and (max-width: 1200px) {
    .splash-art{
        margin-right:-20px;
    }
}

:root {
    --highlighted-color:#D1915E ; 
    --topnav-color:#E9E3DE ;
    --search-bar-precolour:#E9E3DE;
}

</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'aloy' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, #d1925e75, var(--primary-background-color) 80%), url('../images/characters/aloy/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Aloy/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Aloy</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Cryo" flow="up">
                                    <img class="icons" src="../images/icons/b_Cryo.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>

                            </div>
                            <p class="banner-description">Formerly an outcast, now a hunter of unparalleled skill. Ready to do the right thing at any time.
</p>
                        </div>
                    </div>
                </div>
                <div class="information">
                   




                </div>
            </div>
        </div>
    </div>
    
<script type="text/javascript">
$(window).on("load", function() {
    $("#aloy-button").addClass("active");
    $("#character-dropdown-icon").addClass("active-dropdown-icon");
    $("#character-dropdown-content").addClass("active-dropdown-content");
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


