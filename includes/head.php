<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/Akasha/css/materialicons.css"/>
<link rel="stylesheet" href="/Akasha/css/lighttheme.css"/>
<link rel="stylesheet" href="/Akasha/css/darktheme.css"/>
<link rel="stylesheet" href="/Akasha/css/style.css">
<link rel="stylesheet" href="/Akasha/css/waves.min.css">
<link rel="icon" href="/Akasha/images/logo.png">


<?php
	$conn = mysqli_connect('localhost', 'root', '', 'akashadb') or die(mysqli_error());
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>

<script type="text/javascript" src="/Akasha/js/waves.min.js"></script>
<script type="text/javascript" src="/Akasha/js/swiper.min.js"></script>
<script type="text/javascript" src="/Akasha/js/jquery.min.js"></script>
<script type="text/javascript">
    Waves.attach('button', ['waves-effect', 'waves-light']);
    Waves.attach('.ripple', ['waves-effect', 'waves-light']);
    Waves.init();
</script>
