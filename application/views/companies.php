<?php include('elements/header.php'); ?>
<?php include('elements/top.php'); ?>
<?php include('elements/top-bar.php'); ?>
<?php include('elements/sidenav.php'); ?>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div id="ajax-content">
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
					</tr>
					<?php
						foreach($companies as $company){
							echo '<tr>';
							echo '<td>' . $company['id'] . '</td>';
							echo '<td>' . $company['status'] . '</td>';
							echo '<td>' . $company['codename'] . '</td>';
							echo '<td>' . $company['name'] . '</td>';
							echo '<td>' . $company['city'] . '</td>';
							echo '<td>' . $company['address'] . '</td>';
							echo '<td>' . $company['tel1'] . '</td>';
							echo '<td>' . $company['tel2'] . '</td>';
							echo '<td>' . $company['fax'] . '</td>';
							echo '<td>' . $company['vat'] . '</td>';
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
