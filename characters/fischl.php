<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Fischl - Akasha</title>
    

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

:root {
    --highlighted-color:#835DB5; 
    --topnav-color: #E3E0E9;
    --search-bar-precolour:#E3E0E9;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'fischl' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>
<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #835DB575, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/Fischl/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Fischl</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">

                                <div tooltip="Electro" flow="up">
                                    <img class="icons" src="../images/icons/b_Electro.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_Bow.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_Mondstadt.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">A mysterious girl who calls herself "Prinzessin der Verurteilung" and travels with a night raven named Oz.
</p>
                        </div>
                    </div>
                </div>
                <div class="information">
                <div class="sources" id="">
                <p>Sources:</p>
                        <a href="https://genshin-impact.fandom.com/wiki/<?php echo $fetch['name']?>" target="_blank">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Fandom_heart-logo.svg" alt="">
                            Fandom Wiki
                        </a>
                        
                        <a href="https://keqingmains.com/<?php echo $fetch['url']?>" target="_blank">
                            <img src="https://www.gitbook.com/cdn-cgi/image/width=40,height=40,fit=contain,dpr=1,format=auto/https%3A%2F%2F2275081558-files.gitbook.io%2F~%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F-MeN8niDZ_g-q-R-ncjF%252Ficon%252FfrTob9Gh9NeRIHWboFbu%252FLogo%2520Final.png%3Falt%3Dmedia%26token%3D574e0e1b-7a2b-42d4-8f76-311c5a885176" alt="">
                            KQM Guide
                        </a>

                        <a href="https://library.keqingmains.com/characters/<?php echo strtolower($fetch['element'])?>/<?php echo $fetch['url']?>" target="_blank">
                            <img src="https://www.gitbook.com/cdn-cgi/image/width=40,height=40,fit=contain,dpr=1,format=auto/https%3A%2F%2F2275081558-files.gitbook.io%2F~%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F-MeN8niDZ_g-q-R-ncjF%252Ficon%252FfrTob9Gh9NeRIHWboFbu%252FLogo%2520Final.png%3Falt%3Dmedia%26token%3D574e0e1b-7a2b-42d4-8f76-311c5a885176" alt="">
                            KQM TCL
                        </a>

                        <a href="https://library.keqingmains.com/evidence/characters/<?php echo strtolower($fetch['element'])?>/<?php echo $fetch['url']?>" target="_blank">
                            <img src="../images/icons/kqm.png" alt="">
                            Evidence Vault
                        </a>
                    </div>   






                </div>
            </div>
        </div>
    </div>
    
<script type="text/javascript">
$(window).on("load", function() {
    $("#fischl-button").addClass("active");
    $("#character-dropdown-icon").addClass("active-dropdown-icon");
    $("#character-dropdown-content").addClass("active-dropdown-content");
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