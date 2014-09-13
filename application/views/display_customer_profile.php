<?php include('elements/header.php'); ?>
<?php include('elements/top.php'); ?>
<?php include('elements/top-bar.php'); ?>
<?php include('elements/sidenav.php'); ?>

		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div id="ajax-content">
				<!-- Start Header Bar -->
				<div class="row">
					<div id="header-bar" class="col-xs-12">
						<h3><?php echo $title; ?></h3>
					</div>
				</div>
				<!-- End Header Bar -->				

					<style> th {width: 100px; }</style>	

				<table>

					<?php
					foreach($customers as $customer){
						echo '<tr><th>id</th><td>' . $customer['id'] . '</td></tr>';
						echo '<tr><th>first name</th><td>' . $customer['firstname'] . '</td></tr>';
						echo '<tr><th>last name</th><td>' . $customer['lastname'] . '</td></tr>';
						echo '<tr><th>middle name</th><td>' . $customer['middlename'] . '</td></tr>';
						echo '<tr><th>birthdate</th><td>' . $customer['birthdate'] . '</td></tr>';
						echo '<tr><th>city</th><td>' . $customer['city'] . '</td></tr>';
						echo '<tr><th>address</th><td>' . $customer['address'] . '</td></tr>';
						echo '<tr><th>tel1</th><td>' . $customer['tel1'] . '</td></tr>';
						echo '<tr><th>tel2</th><td>' . $customer['tel2'] . '</td></tr>';
						echo '<tr><th>fax</th><td>' . $customer['fax'] . '</td></tr>';
						echo '<tr><th>proffession</th><td>' . $customer['proffession'] . '</td></tr>';
						echo '<tr><th>vat</th><td>' . $customer['vat'] . '</td></tr>';
						echo '<tr><th>status</th><td>' . $customer['status'] . '</td></tr>';
						echo '<tr><th>Email</th><td>' . $customer['email'] . '</td></tr>';
						echo '<tr><th>Website</th><td>' . $customer['website'] . '</td></tr>';
						echo '<tr><th>Facebook</th><td>' . $customer['facebook'] . '</td></tr>';
						echo '<tr><th>Twitter</th><td>' . $customer['twitter'] . '</td></tr>';
						echo '<tr><th>Gender</th><td>' . $customer['gender'] . '</td></tr>';
					}
					?>
					</table>
					<div class="center">
						<form action="<?php echo base_url(); ?>customers/edit">
							<input type="submit" value="Edit Customer" class="btn btn-primary">
						</form>
					</div>				
			</div>
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->

<?php include('elements/footer.php'); ?>