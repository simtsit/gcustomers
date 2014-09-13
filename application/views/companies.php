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
				<style> th, td {text-align: center;} table {width:100%;} </style>
				<table>
					<tr>
						<th>id</th>
						<th>status</th>
						<th>codename</th>
						<th>name</th>
						<th>city</th>
						<th>address</th>
						<th>tel1</th>
						<th>tel2</th>
						<th>fax</th>
						<th>vat</th>
						<th>Email</th>
						<th>Website</th>
					</tr>
					<?php
						foreach($companies as $company){
							echo '<tr>';
							echo '<td>' . $company['id'] . '</td>';
							echo '<td>' . $company['status'] . '</td>';
							echo '<td>' . $company['codename'] . '</td>';
							echo '<td>';
							echo '<a href="' . base_url() . 'companies/profile/' . $company['id'] . '">';
							echo $company['name'];
							echo '</a>';
							echo '</td>';
							echo '<td>' . $company['city'] . '</td>';
							echo '<td>' . $company['address'] . '</td>';
							echo '<td>' . $company['tel1'] . '</td>';
							echo '<td>' . $company['tel2'] . '</td>';
							echo '<td>' . $company['fax'] . '</td>';
							echo '<td>' . $company['vat'] . '</td>';
							echo '<td>' . $company['email'] . '</td>';
							echo '<td>' . $company['website'] . '</td>';
							echo '</tr>';
						}
					?>
				</table>
				<div class="center">
					<form action="<?php echo base_url(); ?>companies/create">
						<input type="submit" value="Add Company" class="btn btn-primary">
					</form>
				</div>

			</div> <!-- end of ajax-Content  -->
		</div>
		<!--End Content-->
	</div>
</div>

<!--End Container-->
<?php include('elements/footer.php'); ?>
