<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title> - Akasha</title>
    

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
    --highlighted-color: ; 
    --topnav-color: ;
    --search-bar-precolour:;
}

</style>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, transparent, #f8f8f8 80%), url('../images/characters//banner.png');">
                    <div class="splash-art">
                        <img src="../images/characters//splash.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Character</p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/-stars.png" alt="">

                                <div tooltip="Pyro" flow="up">
                                    <img class="icons" src="../images/icons/b_.png" >
                                </div>
                                <div tooltip="Bow" flow="up">
                                    <img class="icons" src="../images/icons/b_.png" alt="">
                                </div>
                                <div tooltip="Mondstadt" flow="up">
                                    <img class="icons" src="../images/icons/b_.png" alt="">
                                </div>
                            </div>
                            <p class="banner-description"></p>
                        </div>
                    </div>
                </div>
                <div class="information">
                    <div class="sources">
                        <p>Sources:</p>
                        <a href="https://genshin-impact.fandom.com/wiki/" target="_blank">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Fandom_heart-logo.svg" alt="">
                            Fandom Wiki
                        </a>
                        
                        <a href="https://keqingmains.com/" target="_blank">
                            <img src="https://www.gitbook.com/cdn-cgi/image/width=40,height=40,fit=contain,dpr=1,format=auto/https%3A%2F%2F2275081558-files.gitbook.io%2F~%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F-MeN8niDZ_g-q-R-ncjF%252Ficon%252FfrTob9Gh9NeRIHWboFbu%252FLogo%2520Final.png%3Falt%3Dmedia%26token%3D574e0e1b-7a2b-42d4-8f76-311c5a885176" alt="">
                            KQM Guide
                        </a>

                        <a href="" target="_blank">
                            <img src="https://www.gitbook.com/cdn-cgi/image/width=40,height=40,fit=contain,dpr=1,format=auto/https%3A%2F%2F2275081558-files.gitbook.io%2F~%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F-MeN8niDZ_g-q-R-ncjF%252Ficon%252FfrTob9Gh9NeRIHWboFbu%252FLogo%2520Final.png%3Falt%3Dmedia%26token%3D574e0e1b-7a2b-42d4-8f76-311c5a885176" alt="">
                            KQM TCL
                        </a>
                    </div>   





                </div>
            </div>
        </div>
    </div>
    
<script type="text/javascript">
$(window).on("load", function() {
    $("#-button").addClass("active");
    $("#character-dropdown-icon").addClass("active-dropdown-icon");
    $("#character-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>

</body>


