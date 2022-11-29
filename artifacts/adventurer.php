<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Amber - Akasha</title>
    

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
    --highlighted-color: #f9e99f; 
    --topnav-color: #ECEBE4;
    --search-bar-precolour:#ECEBE4;
}
</style>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, var(--highlighted-color), transparent 80%);">
                    <div class="splash-art">
                        <img src="../images/artifacts/Adventurer/flower.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Adventurer</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/1-stars.png" alt="">
                                <img class="ghostrarity" src="../images/icons/3-stars.png" alt="">

                            </div>
                            <p class="banner-description">A resilient flower that survived the harsh environment of an ancient city. It is now proudly worn like a medal.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="sources" id="dark">
                    <p>Sources:</p>
                    <a href="https://genshin-impact.fandom.com/wiki/Adventurer" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Fandom_heart-logo.svg" alt="">
                        Fandom Wiki
                    </a>

                    <a href="https://library.keqingmains.com/evidence/equipment/artifacts" target="_blank">
                        <img src="https://www.gitbook.com/cdn-cgi/image/width=40,height=40,fit=contain,dpr=1,format=auto/https%3A%2F%2F2275081558-files.gitbook.io%2F~%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F-MeN8niDZ_g-q-R-ncjF%252Ficon%252FfrTob9Gh9NeRIHWboFbu%252FLogo%2520Final.png%3Falt%3Dmedia%26token%3D574e0e1b-7a2b-42d4-8f76-311c5a885176" alt="">
                        KQM TCL
                    </a>

                    
                </div>

            </div>
        </div>
    </div>

    
<script type="text/javascript">
$(window).on("load", function() {
    $("#adventurer-button").addClass("active");
    $("#artifact-dropdown-icon").addClass("active-dropdown-icon");
    $("#artifact-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>

</body>


