
<head>
<?php 
    session_start();
        include 'includes/head.php';
?>
<title>Akademiya - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include 'includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="css/navstyle.css">
<link rel="stylesheet" href="css/akademiyastyle.css">
<link rel="stylesheet" href="css/characterpagestyle.css">


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">

                <div class="heading-container" style="">
                    <div class="flex">
                        <h1 class="heading-title">Akademiya</h1> 
                    </div>
                    <p>Academic reports published here are dedicated to Genshin Meta, Theorycrafting and Guides.</p>

                </div>

                <p class="title">Recent Articles</p>
                <div class="article-container">


                    <a href="akademiya/teamdps.php">
                        <div class="article-item" style="background-image: linear-gradient(to bottom, red, #202020 70%), url('');">
                            <div class="article-details">
                                <h1>Team DPS</h1>
                                <p>Calculated team damage collection.</p>
                            </div>
                        </div>
                    </a>

                    <a href="akademiya/faq.php">
                        <div class="article-item" style="background-image: linear-gradient(to bottom, #F3D24675, #202020  70%), url('https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200918/2020091811065384864.jpg');">
                            <div class="article-details">
                                <h1>FAQ</h1>
                                <p>Recent frequently asked questions answered.</p>
                            </div>
                        </div>
                    </a>


                </div>





            
               
            </div>
        </div>
    </div>

    

<script type="text/javascript">
$(window).on("load", function() {
    $("#akademiya-button").addClass("active");
    $("#akademiya-dropdown-icon").addClass("active-dropdown-icon");
    $("#akademiya-dropdown-icon").addClass("active");
    $("#akademiya-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script>
    Waves.attach('.article-item', ['waves-effect', 'waves-light']);
    Waves.init();

</script>
<script type="text/javascript" src="js/waves.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/uniscript.js"></script>
<script type="text/javascript" src="js/characterscript.js"></script>

</body>


