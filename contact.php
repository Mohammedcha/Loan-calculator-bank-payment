<!DOCTYPE html>
<html lang="en">
<?php require_once ('inc/header.php')?>
	<div class="container">
		<div class="row">
		  <div class="col-md-12 mx-auto">
			<div class="card card-body text-center mt-5">
			  <h1 class="heading display-5 pb-3">Contact us</h1>
				<div class="container">
					  <div class="row">
							<div class="col-sm">
							<form action="inc/sender.php" method="post" id="loan-form">
								<div class="form-group">
									<div class="input-group">
									<div class="input-group-prepend">
										<span style="width:100px; " class="input-group-text"> E-mail</span>
									</div>
									<input type="email" name="email" id="ammount" class="form-control" placeholder="Your E-mail here" required/>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
									<div class="input-group-prepend">
										<span style="width:100px; " class="input-group-text">Full Name</span>
									</div>
									<input type="text" name="name" id="interest" class="form-control" placeholder="Your Full name here" required/>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
									<div class="input-group-prepend">
										<span style="width:100px;" class="input-group-text">Phone N°</span>
									</div>
									<input type="number" name="phone" id="years" class="form-control" placeholder="Your Phone N° here" required/>
									</div>
								</div>
							</div>
							<div class="col-sm">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Message Here</span>
								</div>
								<textarea name="message" style="width:100px;  height:145px;" class="form-control" placeholder="Your Message Here" aria-label="Your Message Here" required></textarea>
							</div>
							</div>
						</div>
						<div class="form-group">
						<input type="submit" value="Submit Now" class="btn btn-danger btn-lg btn-block">
						</div>
						</form>
					</div>		
				</div>
		  </div>
		</div>
	</div>
	</br>
	</br>	
<?php require_once ('inc/footer.php')?>
</html>

