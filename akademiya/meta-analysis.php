
<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Meta Analysis - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include '../includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/akademiyastyle.css">
<link rel="stylesheet" href="../css/characterpagestyle.css">

<style>

:root {
    --highlighted-color: red; 
}

</style>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">

                <div class="heading-container" style="background-image: linear-gradient(to left, var(--highlighted-color) 20%, transparent 80%), url('')">
                    <div class="flex">
                        <h1 class="heading-title">Meta Analysis</h1> 
                    </div>
                    <p>Meta Analysis</p>

                </div>

                <p>Hu Tao</p>


                

            
               
            </div>
        </div>
    </div>

    

<script type="text/javascript">
 $(window).on("load", function() {
    $("#meta-analysis-button").addClass("active");

    $("#akademiya-dropdown-icon").addClass("active-dropdown-icon");
    $("#akademiya-dropdown-content").addClass("active-dropdown-content");
    $('html, body, .sidenav').animate({
        scrollTop: $("#faq-button").offset().top - 50
    }, 600);
 });
</script>
<script>
    Waves.attach('.article-item', ['waves-effect', 'waves-light']);
    Waves.init();

</script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active1");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>
<script type="text/javascript" src="../js/characterscript.js"></script>

</body>


