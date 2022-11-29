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
    --highlighted-color: #D4C8B0; 
    --topnav-color: #E9E8E6;
    --search-bar-precolour:#E9E8E6;
    }
    
</style>

<?php
    $query = mysqli_query($conn, "SELECT * FROM `weapons` WHERE `url` = 'apprentices-notes' ") or die(mysqli_error());
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
                            <p class="banner-description">Notes left behind by a top student. Many useful spells are listed, and the handwriting is beautiful.

</p>
                        </div>
                    </div>
                </div>

                <div class="information">
                    <div class="sources">
                        <p>Sources:</p>
                        <a href="https://genshin-impact.fandom.com/wiki/<?php echo $fetch['name']?>" target="_blank">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Fandom_heart-logo.svg" alt="">
                            Fandom Wiki
                        </a>





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


