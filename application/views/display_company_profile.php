<?php include('elements/header.php'); ?>
<?php include('elements/top.php'); ?>
<?php include('elements/top-bar.php'); ?>
<?php include('elements/sidenav.php'); ?>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div id="ajax-content">
				<style> th{width: 100px;} </style>
				<table>			
					<?php
						foreach($companies as $company){
							echo '<tr><th>id</th><td>' . $company['id'] . '</td></tr>';
							echo '<tr><th>status</th><td>' . $company['status'] . '</td></tr>';
							echo '<tr><th>codename</th><td>' . $company['codename'] . '</td></tr>';
							echo '<tr><th>name</th><td>' . $company['name'] . '</td></tr>';
							echo '<tr><th>city</th><td>' . $company['city'] . '</td></tr>';
							echo '<tr><th>address</th><td>' . $company['address'] . '</td></tr>';
							echo '<tr><th>tel1</th><td>' . $company['tel1'] . '</td></tr>';
							echo '<tr><tr><th>tel2</th><td>' . $company['tel2'] . '</td></tr>';
							echo '<tr><th>fax</th><td>' . $company['fax'] . '</td></tr>';
							echo '<tr><tr><th>vat</th><td>' . $company['vat'] . '</td></tr>';
							echo '<tr><th>Email</th><td>' . $company['email'] . '</td></tr>';
							echo '<tr><th>Website</th><td>' . $company['website'] . '</td></tr>';
							echo '<tr><th>Facebook</th><td>' . $company['facebook'] . '</td></tr>';
							echo '<tr><th>Twitter</th><td>' . $company['twitter'] . '</td></tr>';						
						}
					?>
				</table>
				<div class="center">
					<form action="<?php echo base_url(); ?>companies/edit">
						<input type="submit" value="Edit Company" class="btn btn-primary">
					</form>
				</div>

			</div> <!-- end of ajax-Content  -->
		</div>
		<!--End Content-->
	</div>
</div>

<!--End Container-->
<?php include('elements/footer.php'); ?>
