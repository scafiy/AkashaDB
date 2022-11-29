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

<style>
:root {
    --highlighted-color:#45B1E4 ; 
    --topnav-color:#DCE6EA ;
    --search-bar-precolour:#DCE6EA;
}
</style>


<?php
    $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `url` = 'wanderers-troupe' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, var(--highlighted-color), transparent 80%);">
                    <div class="splash-art">
                        <img src="../images/artifacts/wanderers-troupe/flower.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title"><?php echo $fetch['name']?></p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/<?php echo $fetch['raritymin']?>-stars.png" alt="">
                                <img class="ghostrarity" src="../images/icons/<?php echo $fetch['raritymax']?>-stars.png" alt="">
                            </div>
                            <p class="banner-description">


                                
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="sources">
                    <p>Sources:</p>
                    
                    <a href="https://genshin-impact.fandom.com/wiki/<?php echo $fetch['name']?>" target="_blank">
                        <img src="../images/icons/fandom.svg" alt="">
                            Fandom Wiki
                        </a>



                        <a href="https://library.keqingmains.com/equipment/artifacts#<?php echo $fetch['url']?>" target="_blank">
                            <img src="../images/icons/kqm.png" alt="">
                            KQM TCL
                        </a>

                    
                        <a href="https://library.keqingmains.com/evidence/equipment/artifacts#<?php echo $fetch['url']?>" target="_blank">
                            <img src="../images/icons/kqm.png" alt="">
                            Evidence Vault
                        </a>




                    
                </div>


                

            </div>
        </div>
    </div>

    
<script type="text/javascript">
$(window).on("load", function() {
    $("#<?php echo $fetch['url']?>-button").addClass("active");
    $("#artifact-dropdown-icon").addClass("active-dropdown-icon");
    $("#artifact-dropdown-content").addClass("active-dropdown-content");
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


