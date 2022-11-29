<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Archaic Petra - Akasha</title>
    

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
    --highlighted-color: #f4a126; 
    --topnav-color: #ECE4D9;
    --search-bar-precolour:#ECE4D9;
}
</style>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, var(--highlighted-color), transparent  80%);">
                    <div class="splash-art">
                        <img src="../images/artifacts/archaic-petra/flower.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Archaic Petra </p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">
                                <img class="ghostrarity" src="../images/icons/5-stars.png" alt="">

                            </div>
                            <p class="banner-description">A flower born of the minerals and rocks of cliffside cracks. The way its petals blow in the wind makes it seem alive.

                                
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="sources" id="dark">
                    <p>Sources:</p>
                    <a href="https://genshin-impact.fandom.com/wiki/Archaic_Petra" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Fandom_heart-logo.svg" alt="">
                        Fandom Wiki
                    </a>

                    <a href="https://library.keqingmains.com/equipment/artifacts#archaic-petra" target="_blank">
                        <img src="https://www.gitbook.com/cdn-cgi/image/width=40,height=40,fit=contain,dpr=1,format=auto/https%3A%2F%2F2275081558-files.gitbook.io%2F~%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F-MeN8niDZ_g-q-R-ncjF%252Ficon%252FfrTob9Gh9NeRIHWboFbu%252FLogo%2520Final.png%3Falt%3Dmedia%26token%3D574e0e1b-7a2b-42d4-8f76-311c5a885176" alt="">
                        KQM TCL
                    </a>

                    <a href="https://library.keqingmains.com/evidence/equipment/artifacts#archaic-petra" target="_blank">
                        <img src="https://www.gitbook.com/cdn-cgi/image/width=40,height=40,fit=contain,dpr=1,format=auto/https%3A%2F%2F2275081558-files.gitbook.io%2F~%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F-MeN8niDZ_g-q-R-ncjF%252Ficon%252FfrTob9Gh9NeRIHWboFbu%252FLogo%2520Final.png%3Falt%3Dmedia%26token%3D574e0e1b-7a2b-42d4-8f76-311c5a885176" alt="">
                        Evidence Vault
                    </a>

                    
                </div>


                

            </div>
        </div>
    </div>

    
<script type="text/javascript">
$(window).on("load", function() {
    $("#archaic-petra-button").addClass("active");
    $("#artifact-dropdown-icon").addClass("active-dropdown-icon");
    $("#artifact-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>

</body>


