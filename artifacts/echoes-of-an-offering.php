<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Echoes of an Offering - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include '../includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/artifactpagestyle.css">

<style>
:root {
    --highlighted-color:#BCD6CB ; 
    --topnav-color:#E7E9E8 ;
    --search-bar-precolour:#E7E9E8;
}
</style>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, var(--highlighted-color), transparent 80%);">
                    <div class="splash-art">
                        <img src="../images/artifacts/echoes-of-an-offering/flower.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Echoes of an Offering
 </p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">
                                <img class="ghostrarity" src="../images/icons/5-stars.png" alt="">
                            </div>
                            <p class="banner-description">A jade carved into the shape of a flower. A phantom scent, here one instant and gone the next, swirls around it.


                                
                            </p>
                        </div>
                    </div>
                </div>
                
                <?php
                    $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `url` = 'echoes-of-an-offering' ") or die(mysqli_error());
                    while($fetch = mysqli_fetch_array($query)){
                ?>

                <div class="information">
                    <div class="forefront">
                        <div class="set-bonus-container">
                            <b>Set Bonus </b>                        
                            <div class="flex">
                                <p><b>2-Piece Set: </b> <?php echo $fetch['twopiece']?></p>
                            </div>
                            <div class="flex">
                                <p><b>4-Piece Set:</b> <?php echo $fetch['fourpiece']?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(window).on("load", function() {
                        $("#<?php echo $fetch['url']?>-button").addClass("active");
                        $("#artifact-dropdown-icon").addClass("active-dropdown-icon");
                        $("#artifact-dropdown-content").addClass("active-dropdown-content");

                        $('html, body, .sidenav').animate({
                            scrollTop: $("#<?php echo $fetch['url']?>-button").offset().top - 50
                        }, 600);
                    });
                    </script>
                <?php
                    }
                ?>


                

            </div>
        </div>
    </div>

    
<script type="text/javascript">
$(window).on("load", function() {
    $("#echoes-of-an-offering-button").addClass("active");
    $("#artifact-dropdown-icon").addClass("active-dropdown-icon");
    $("#artifact-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>

</body>


