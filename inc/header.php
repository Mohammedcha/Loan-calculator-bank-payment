<head>
<?php require_once ('data/config.php')?>
	<title><?php echo $site_name ;?></title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" 	content="ie=edge" />
	<meta name="description"			content="<?php echo "$site_descr" ;?>" />
	<meta name="keywords" 				content="<?php echo "$site_keywords" ;?>">
	<meta property="og:type"			content="article" />
	<meta property="og:title"			content="<?php echo "$site_name" ;?>" />
	<meta property="og:description"		content="<?php echo "$site_descr" ;?>" />
	<meta property="og:image"			content="img/fb.png" />
	<link rel="icon" type="image/png" href="img/favicon.PNG" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
	<style>
		#loading{
			display: none;
		}
		#results{
		 	display: none;
		}
		.b {
			white-space: nowrap; 
			width: 100%; 
			overflow: hidden;
			text-overflow: ellipsis; 
		}
	</style>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $analytics_tracking ;?>"></script>
	<script>
		function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}
	</script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', '<?php echo $analytics_tracking ;?>');
	</script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "<?php echo "$adsense_validation" ;?>",
			enable_page_level_ads: true
		});
	</script>
</head>
<body class="bg-dark">
	<div class="jumbotron text-center">
		<a href="./"><img width="80px" src="img/logo.png" /></a>
		<h1><?php echo $site_name ;?></h1>
		<p><?php echo "$site_descr" ;?></p>
		<a class="btn btn-danger" href="index.php" >Home</a>  
		<a class="btn btn-danger" href="about.php" >About</a>  
		<a class="btn btn-danger" href="contact.php" >Contact</a>
	</div>