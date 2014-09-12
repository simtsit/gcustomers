<?php include('elements/header.php'); ?>
<?php include('elements/top.php'); ?>
<?php include('elements/top-bar.php'); ?>
<?php include('elements/sidenav.php'); ?>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div id="ajax-content">

				<form class="form-horizontal" id="popup-validation" action="add" method="post">

					<div class="form-group">
						<label class="control-label col-lg-4">First Name</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="firstname" id="firstname" />
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-lg-4">Second Name</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="secondname" id="secondname" />
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-lg-4">Middle Name</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="middlename" id="middlename" />
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-lg-4">Email</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="email" id="email" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-4">Website</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="website" id="website" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-4">Facebook</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="facebook" id="facebook" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-4">Twitter</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="twitter" id="twitter" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-4">Gender</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="gender" id="gender" />
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-lg-4">City</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="city" id="city" />
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-lg-4">Address</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="address" id="address" />
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-lg-4">Telephone #1</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="tel1" id="tel1" />
						</div>
					</div>	


					<div class="form-group">
						<label class="control-label col-lg-4">Telephone #2</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="tel2" id="tel2" />
						</div>
					</div>	


					<div class="form-group">
						<label class="control-label col-lg-4">fax</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="fax" id="fax" />
						</div>
					</div>	


					<div class="form-group">
						<label class="control-label col-lg-4">Proffession</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="proffession" id="proffession" />
						</div>
					</div>	


					<div class="form-group">
						<label class="control-label col-lg-4">VAT</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="vat" id="vat" />
						</div>
					</div>	


					<div class="form-group">
						<label class="control-label col-lg-4">status</label>
						<div class=" col-lg-4">
							<input class="validate[required,custom[email]] form-control" type="text" name="status" id="status" />
						</div>
					</div>	


					<div class="form-actions no-margin-bottom" style="text-align: center;">
						<input type="submit" value="Add Customer" class="btn btn-primary">
					</div>
				</form>
			</div> <!-- end of ajax-Content  -->
		</div>
		<!--End Content-->
	</div>
</div>

<!--End Container-->
<?php include('elements/footer.php'); ?>
