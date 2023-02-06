
<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>FAQ - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include '../includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/akademiyastyle.css">
<link rel="stylesheet" href="../css/characterpagestyle.css">


<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">

                <div class="heading-container" style="background-image: linear-gradient(to left, red 20%, rgb(44, 44, 44) 70%), url('')">
                    <div class="flex">
                        <h1 class="heading-title">TeamDPS</h1> 
                    </div>
                    <p>Calculated team damage collection.</p>

                </div>

                <p>WIP</p>

                

            
               
            </div>
        </div>
    </div>

    

<script type="text/javascript">
 $(window).on("load", function() {
    $("#faq-button").addClass("active");

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


