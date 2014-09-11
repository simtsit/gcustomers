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
foreach($customers as $customer){
echo '<tr>';
echo '<td>' . $customer['id'] . '</td>';
echo '<td>' . $customer['status'] . '</td>';
echo '<td>' . $customer['codename'] . '</td>';
echo '<td>' . $customer['name'] . '</td>';
echo '<td>' . $customer['city'] . '</td>';
echo '<td>' . $customer['address'] . '</td>';
echo '<td>' . $customer['tel1'] . '</td>';
echo '<td>' . $customer['tel2'] . '</td>';
echo '<td>' . $customer['fax'] . '</td>';
echo '<td>' . $customer['vat'] . '</td>';
echo '</tr>';
}
?>
</table>
</div>
</div>
<!--End Content-->
</div>
</div>
<!--End Container-->
<?php include('elements/footer.php'); ?>
