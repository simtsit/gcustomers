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
						<th>first name</th>
						<th>last name</th>
						<th>middle name</th>
						<th>city</th>
						<th>address</th>
						<th>tel</th>
						<th>fax</th>
						<th>proffession</th>
						<th>vat</th>
						<th>status</th>
						<th>Email</th>
						<th>Website</th>
						<th>Gender</th>						
					</tr>


					<?php
					foreach($customers as $customer){
						echo '<tr>';
						echo '<td>';
						echo '<a href="' . base_url() . 'customers/profile/' . $customer['id'] . '">';
						echo $customer['firstname'];
						echo '</a>';
						echo '</td>';
						echo '<td>';
						echo '<a href="' . base_url() . 'customers/profile/' . $customer['id'] . '">';
						echo $customer['lastname'];
						echo '</a>';
						echo '</td>';
						echo '<td>';
						echo '<a href="' . base_url() . 'customers/profile/' . $customer['id'] . '">';
						echo $customer['middlename'];
						echo '</a>';
						echo '</td>';
						echo '<td>' . $customer['city'] . '</td>';
						echo '<td>' . $customer['address'] . '</td>';
						echo '<td>' . $customer['tel'] . '</td>';
						echo '<td>' . $customer['fax'] . '</td>';
						echo '<td>' . $customer['proffession'] . '</td>';
						echo '<td>' . $customer['vat'] . '</td>';
						echo '<td>' . $customer['status'] . '</td>';
						echo '<td>';
						if($customer['gender']==1) echo 'Male';
							else if($customer['gender']==2) echo 'Female';
								else  echo 'Not Specified';
						echo '</td></tr>';
						echo '</td>';							
						echo '</tr>';
					}
					?>
					</table>
					<div class="center">
						<form action="<?php echo base_url(); ?>customers/create">
							<input type="submit" value="Add Customer" class="btn btn-primary">
						</form>
					</div>				
			</div>
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->

<?php include('elements/footer.php'); ?>