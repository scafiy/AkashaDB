<?php 
    session_start();
    include "../includes/head.php";
?>


<?php 
 
	$createFile = fopen(".php", "w");
    $firstText = 'balls';

    fwrite($createFile, $firstText);

    fclose($createFile)

?>