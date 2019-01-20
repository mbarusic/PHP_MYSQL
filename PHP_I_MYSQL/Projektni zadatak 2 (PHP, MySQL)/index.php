<?php 
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="Portal za vijesti.">
        <meta name="keywords" content="vijesti, portal, nethr, pravi klik.">
		
		<title>Poèetna stranica - Portal za vijesti</title>
	</head>
<body>
	<header>
		<div'; if ($_GET['menu'] > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>
			<ul>
				<li><a href="index.php?menu=1">Poèetna</a></li>
				<li><a href="index.php?menu=2">Vijesti</a></li>
				<li><a href="index.php?menu=3">Kontakt</a></li>
				<li><a href="index.php?menu=4">O nama</a></li>
			</ul>
		</nav>
	</header>
	<main>';
		
	# Homepage
	if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("pocetna.php"); }
	
	# News
	else if ($_GET['menu'] == 2) { include("vijesti.php"); }
	
	# Contact
	else if ($_GET['menu'] == 3) { include("kontakt.php"); }
	
	# About us
	else if ($_GET['menu'] == 4) { include("onama.php"); }
	
	print '
	</main>
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Marija Baru¹iæ. <a href="https://github.com/mbarusic/"><img src="img/github.png" title="Github" alt="Github"></a></p>
	</footer>
</body>
</html>';
?>