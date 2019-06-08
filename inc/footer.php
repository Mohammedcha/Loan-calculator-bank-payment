	<div class="jumbotron text-center">	
	<a href="./"><img width="80px" src="img/logo.png" /></a>
		<h1><?php echo $site_name ?></h1>
		<h5><?php echo $site_descr ?></h5> 
		</br>
		<div class="fbdiv">
			<a rel="nofollow" href="http://www.facebook.com/share.php?u=<;<?php echo $website_url ; ?>>" onclick="return fbs_click()" target="_blank" class="btn btn-primary">
				<i class="fab fa-facebook-square"></i> Share on Facebook 
			</a>
		</div>	
		</br>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<div id="counter-area-winkey">Real time <span class="badge badge-success" id="counter-winkey"></span> visitors right now</div>
		</br>
		<script>
			function r(t,r){return Math.floor(Math.random()*(r-t+1)+t)}var interval=2e3,variation=5,c=r(500,2e3);$("#counter-winkey").text(c),setInterval(function(){var t=r(-variation,variation);c+=t,$("#counter-winkey").text(c)},interval);
		</script>
		<a style="color:#dc3545;" href="index.php" >Home</a> - 
		<a style="color:#dc3545;" href="about.php" >About</a> - 
		<a style="color:#dc3545;" href="privacy.php" >Privacy</a> - 
		<a style="color:#dc3545;" href="terms.php" >Terms</a> - 
		<a style="color:#dc3545;" href="contact.php" >Contact</a>  
		</br>
	</div>
	<footer class="container-fluid text-center">
	  <p style="color:#fff;" ><?php echo $copyrights ?></p>
	</footer>
</body>