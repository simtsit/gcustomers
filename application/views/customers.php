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
						<th>username</th>
						<th>first name</th>
						<th>last name</th>
						<th>middle name</th>
						<th>birthdate</th>
						<th>city</th>
						<th>address</th>
						<th>tel1</th>
						<th>tel2</th>
						<th>fax</th>
						<th>proffession</th>
						<th>vat</th>
						<th>status</th>
						<th>Email</th>
						<th>Website</th>
						<th>Facebook</th>
						<th>Twitter</th>
						<th>Gender</th>						
					</tr>


					<?php
					foreach($customers as $customer){
						echo '<tr>';
						echo '<td>' . $customer['id'] . '</td>';
						echo '<td>' . $customer['username'] . '</td>';
						echo '<td>' . $customer['firstname'] . '</td>';
						echo '<td>' . $customer['lastname'] . '</td>';
						echo '<td>' . $customer['middlename'] . '</td>';
						echo '<td>' . $customer['birthdate'] . '</td>';
						echo '<td>' . $customer['city'] . '</td>';
						echo '<td>' . $customer['address'] . '</td>';
						echo '<td>' . $customer['tel1'] . '</td>';
						echo '<td>' . $customer['tel2'] . '</td>';
						echo '<td>' . $customer['fax'] . '</td>';
						echo '<td>' . $customer['proffession'] . '</td>';
						echo '<td>' . $customer['vat'] . '</td>';
						echo '<td>' . $customer['status'] . '</td>';
						echo '<td>' . $customer['email'] . '</td>';
						echo '<td>' . $customer['website'] . '</td>';
						echo '<td>' . $customer['facebook'] . '</td>';
						echo '<td>' . $customer['twitter'] . '</td>';
						echo '<td>' . $customer['gender'] . '</td>';							
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