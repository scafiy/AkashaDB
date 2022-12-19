<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Initiate - Akasha</title>
    

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
    --highlighted-color:#DAE4EE ; 
    --topnav-color: #E9EAEB;
    --search-bar-precolour:#E9EAEB;
}
</style>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, var(--highlighted-color), transparent 80%);">
                    <div class="splash-art">
                        <img src="../images/artifacts/Initiate/flower.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Initiate </p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/1-stars.png" alt="">
                            </div>
                            <p class="banner-description">A small flower. Cute and adorable, just like the early spring of North Teyvat.


                                
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                    $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `url` = 'husk-of-opulent-dreams' ") or die(mysqli_error());
                    while($fetch = mysqli_fetch_array($query)){
                ?>



                

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
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>

</body>


<?php
                    }
                ?>