<!DOCTYPE html>
<html lang="en">
<?php require_once ('inc/header.php')?>
	<div class="container">
		<div class="row">
		  <div class="col-md-12 mx-auto">
			<center>
				<?php echo $adsense_ad_unit ?>
			</center>
			<div class="card card-body text-center mt-5">
				<h1 class="heading display-5 pb-3">Loan Calculator</h1>
			  <form id="loan-form">
				<div class="form-group">
				  <div class="input-group">
					<div class="input-group-prepend">
					  <span style="width:40px; color:#dc3545;" class="input-group-text"> <i class="fas fa-dollar-sign"> </i></span>
					</div>
					<input type="number" name="" id="ammount" class="form-control" placeholder="Loan Ammount" />
				  </div>
				</div>
				<div class="form-group">
				  <div class="input-group">
					<div class="input-group-prepend">
					  <span style="width:40px; color:#dc3545;" class="input-group-text"><i class="fas fa-percentage"></i></span>
					</div>
					<input type="number" name="" id="interest" class="form-control" placeholder="Interest Ammount" />
				  </div>
				</div>
				<div class="form-group">
				  <div class="input-group">
					<div class="input-group-prepend">
					  <span style="width:40px; color:#dc3545;" class="input-group-text"><i class="far fa-clock"></i></span>
					</div>
					 <input type="number" name="" id="years" class="form-control" placeholder="Years to repay" />
				  </div>
				</div>
				<div class="form-group">
				  <input type="submit" value="Calculate Loan Interest" class="btn btn-danger btn-lg btn-block">
				</div>
			  </form>
			  <div id="loading">
				<img src="img/loading.gif" alt="">
			  </div>
			  <div id="results">
					<div class="container">
					  <div class="row">
						<div class="col-sm">
							<div class="form-group">
							  <div class="input-group">
								<div class="input-group-prepend">
								  <span style="width:160px; color:#fff; background:#343a40;" class="input-group-text">Monthly Payment :</span>
								</div>
								<input type="number" name="" id="monthly-payment" class="form-control" disabled />
								<div class="input-group-append">
									<span class="input-group-text"><?php echo $currency ?></span>
								</div>
							  </div>
							</div>							
							<div class="form-group">
							  <div class="input-group">
								<div class="input-group-prepend">
								  <span style="width:160px; color:#fff; background:#343a40;" class="input-group-text">Total Payment :</span>
								</div>
								<input type="number" name="" id="total-payment" class="form-control" disabled />
								<div class="input-group-append">
									<span class="input-group-text"><?php echo $currency ?></span>
								</div>
							  </div>
							</div>
							<div class="form-group">
							  <div class="input-group">
								<div class="input-group-prepend">
								  <span style="width:160px; color:#fff; background:#343a40;" class="input-group-text">Total Interest :</span>
								</div>
								<input type="number" name="" id="total-interest" class="form-control" disabled />
								<div class="input-group-append">
									<span class="input-group-text"><?php echo $currency ?></span>
								</div>
							  </div>
							</div>
						</div>
						<div class="col-sm">
							<div class="card bg-dark text-white">
								<img class="card-img" height="145px" src="img/card.png" alt="Card image">
								<div class="card-img-overlay">
								<h5 class="card-title"><?php echo $cpa_title ?></h5>
								<p class="card-text"><?php echo $cpa_desc ?></p>
								<a href="<?php echo $cpa_link ?>" class="btn btn-danger"><?php echo $cpa_button ?></a>
								</div>
							</div>
						</div>
					  </div>
					</div>
			  </div>
			</div>
			</br>
	        </br>
			<center>
				<?php echo $adsense_ad_unit ?>
			</center>
		  </div>
		</div>
	</div>
	<script src="js/index.js"></script>
	</br>
	</br>	
	<?php require_once ('grids.php')?>
	</br>
	</br>
<?php require_once ('inc/footer.php')?>
</html>