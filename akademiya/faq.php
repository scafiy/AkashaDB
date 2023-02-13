
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
                        <h1 class="heading-title">FAQ</h1> 
                    </div>
                    <p>Answers to frequently asked questions about genshin impact.</p>

                </div>

                

                <div class="questions">
                        <button class="accordion">C1 Hutao or Homa or c0 Yelan?</button>
                        <div class="panel">
                            <img style="width:100%; height:auto;" src="https://media.discordapp.net/attachments/1051753516244414474/1072715038730747924/image.png" alt="">
                        </div>

                        <button class="accordion">Is Weapon Banner worth it?</button>
                        <div class="panel">
                            <b>**Pulling on weapon banner for a 5 star weapon**</b>
                            <p>i'd only recommend pulling on the weapon banner for a specific rate up 5 star weapon if you have enough to guarantee what you want (triple hard pity: 240 pulls or triple soft pity 189 pulls) and understand what pulling for a 5 star weapon means.</p>
                            <p>To guarantee a specific rate up 5 star weapon it will cost __240 pulls on worse case__ scenarios and __105 pulls on average__ (~$200 or ~56 days of saving). </p>
                            <p>The reason why you should have enough to guarantee what you want is because fate points don't get carried over to the next weapon banner, which means if you spend your primos and don't get what you want, then it can be a huge loss of primos and can pressure people into spending due to sunk cost fallacy.</p>
                            <p>So weapon banners are generally only recommended to mid - high spenders or f2p - low spenders who have saved for a while to pull on the weapon banner</p>
                            <p>Players must understand that pulling for a 5 star weapon is pulling for only a damage increase for a specific character or weapon type instead of pulling for a new character, which may have factors which you may value more such as a new playstyle, team building options, design and personality ect...</p>
                            <p>"Worth" is subjective to the person, so the damage increase for players might be worth it, while for others having a new character to playwith might be more valuable to their overall genshin experience.</p>

                        </div>

                   </div>



            
               
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


