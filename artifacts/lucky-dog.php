<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Lucky Dog - Akasha</title>
    

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
    --highlighted-color:#BCDC75 ; 
    --topnav-color: #E7EAE0;
    --search-bar-precolour:#E7EAE0;
}
</style>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, var(--highlighted-color), transparent 80%);">
                    <div class="splash-art">
                        <img src="../images/artifacts/Lucky-Dog/flower.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Lucky Dog </p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/1-stars.png" alt="">
                                <img class="ghostrarity" src="../images/icons/2-stars.png" alt="">
                            </div>
                            <p class="banner-description">A four-leaf clover that grows in the wild. It was picked because it is said to bring good luck.


                                
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="sources" id="dark">
                    <p>Sources:</p>
                    <a href="https://genshin-impact.fandom.com/wiki/Lucky_Dog" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Fandom_heart-logo.svg" alt="">
                        Fandom Wiki
                    </a>



                    
                </div>


                

            </div>
        </div>
    </div>

    
<script type="text/javascript">
$(window).on("load", function() {
    $("#lucky-dog-button").addClass("active");
    $("#artifact-dropdown-icon").addClass("active-dropdown-icon");
    $("#artifact-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>

</body>


