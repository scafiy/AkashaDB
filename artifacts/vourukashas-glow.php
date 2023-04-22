<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
    

</head>

<nav class="nav">
    <?php 
        include '../includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/artifactpagestyle.css">

<?php
    $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `url` = 'vourukashas-glow' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<style>
:root {
    --highlighted-color:<?php echo $fetch['primarycolor']?> ; 
    --topnav-color:<?php echo $fetch['secondarycolor']?> ;
    --search-bar-precolour:<?php echo $fetch['secondarycolor']?>;
}
</style>




<title><?php echo $fetch['name']?> - Akasha</title>


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, var(--highlighted-color), transparent 80%);">
                    <div class="splash-art">
                        <img src="../images/artifacts/<?php echo $fetch['url']?>/flower.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title"><?php echo $fetch['name']?></p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/<?php echo $fetch['raritymin']?>-stars.png" alt="">
                                <img class="ghostrarity" src="../images/icons/<?php echo $fetch['raritymax']?>-stars.png" alt="">
                            </div>
                            <p class="banner-description"><?php echo $fetch['flowerdescription']?></p>
                        </div>
                    </div>
                </div>
                


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
<?php
    }
?>
</body>



