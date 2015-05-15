<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<?php 
		$title;
		
		$path=$_SERVER['PHP_SELF'];
		$page=basename($path);
		
		switch("$page"){ 
			case 'index.php': 
				$page = 'front';
		     	$title = ' | E-commerce Reinvented'; 
		     	break; 
			case 'about.php': 
				$page = 'about';
		     	$title = ' | A bit about Bringhub'; 
		     	break;
			case 'publishers.php': 
				$page = 'publishers';
		     	$title = ' | More info for Publishers'; 
		     	break; 
	     case 'retailers.php': 
	     		$page = 'retailers';
		     	$title = ' | More info for Retailers'; 
		     	break; 
		} 
		echo '<title>Bringhub'.$title.'</title>'; 
		?>
		<link rel="stylesheet" href="http://i.icomoon.io/public/temp/d414d075a4/BringHub/style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,300,800,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/css/style.css">

		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:title" content="" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="" />
		<meta property="og:image" content="" />
	</head>

	<body class="<?php echo $page; ?>">