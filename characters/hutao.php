<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Hu Tao - Akasha</title>
    

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
        margin-right:20px;
    }
}

:root {
    --highlighted-color:#E0492A ; 
    --topnav-color: #EADCD9;
    --search-bar-precolour:#EADCD9;
}

</style>
<?php
    $query = mysqli_query($conn, "SELECT * FROM `characters` WHERE `url` = 'hutao' ") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>

<title><?php echo $fetch['name']?> - Akasha</title>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
            <div class="banner" style="background-image: linear-gradient(to left, #E0492A75, var(--primary-background-color) 80%), url('../images/characters/<?php echo $fetch['url']?>/banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters/hutao/splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Hu Tao</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/5-stars.png" alt="">

                                <div tooltip="Pyro" flow="up">
                                    <img class="icons" src="../images/icons/b_Pyro.png" >
                                </div>
                                <div tooltip="Polearm" flow="up">
                                    <img class="icons" src="../images/icons/b_Polearm.png" alt="">
                                </div>
                                <div tooltip="Liyue" flow="up">
                                    <img class="icons" src="../images/icons/b_Liyue.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description">The 77th Director of the Wangsheng Funeral Parlor. She took over the business at a rather young age.
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
                        
                        <a href="https://keqingmains.com/hu-tao/" target="_blank">
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
    $("#hutao-button").addClass("active");
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