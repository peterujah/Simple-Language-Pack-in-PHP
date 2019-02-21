<?php 
/*
	* How To Make a PHP Language Pack 
	* Created by Peter C.U on 21/02/2019 .
	* SourceJail @peterujah
	* GitHub @peterujah
	* IG @peterval_ujah

	* I will give two example English and French
	* First create a php file call "language_en.php" and "language_fr.php"
*/

session_start();
if(isset($_GET["lang"])){ 
	$_SESSION["uselang"] = $_GET["lang"];
}
$uselang = (isset($_SESSION["uselang"]) ? $_SESSION["uselang"] : "en");
include_once __DIR__ . "/pack/language_".$uselang.".php";
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<a href="?lang=en">Switch English</a> | <a href="?lang=fr">Switch French</a>
		<span>Your current language is <?php echo $lang["name"];?></span>
		<h1><?php echo $lang["title"];?></h1>
		<article><?php echo $lang["message"];?></article>
	</body>
</html>
