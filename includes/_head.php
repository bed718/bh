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
		     	$title = ' | e-commerce re-invented'; 
		     	break; 
			case 'about.php': 
				$page = 'about';
		     	$title = ' | A bit about Bringhub'; 
		     	break;
			case 'publishers.php': 
				$page = 'publisers';
		     	$title = ' | More info for Publishers'; 
		     	break; 
	     case 'retailers.php': 
	     		$page = 'retailers';
		     	$title = ' | More info for Retailers'; 
		     	break; 
		} 
		echo '<title>Bringhub'.$title.'</title>'; 
		?>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/css/style.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:title" content="" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="" />
		<meta property="og:image" content="" />
	</head>

	<body class="<?php echo $page; ?>">