<!DOCTYPE html>
<html>
<head>
	<title>Client Query Work - Truadvo</title>
	<?php require_once('include/header.php'); ?>
</head>
<body>
<?php require_once('include/menuBar.php'); ?>
<br/><br/>
<div class="mltr">
	<button class="parTaskBtn" onclick="window.location= 'ClientQueries.php';"><span>Query</span></button>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="parTaskBtn active"><span>Work</span></button>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="parTaskBtn" onclick="window.location= 'ClientQueriesInvoices.php';"><span>Invoices</span></button>
	&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<br/><br/>
<div class="truadvo-table">
	<div class="mltr">
		<table>
			<thead>
				<th>S. No.</th>
				<th>Work ID</th>
				<th>Professional <i class="fas fa-sort-down fa-2x clr-blueg"></i></th>
				<th>Status <i class="fas fa-sort-down fa-2x clr-blueg"></i></th>
				<th>Completion Date <i class="fas fa-sort-down fa-2x clr-blueg"></i></th>
				<th>Amount Paid</th>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>TA1230082</td>
					<td>V.A Sharma</td>
					<td>Closed</td>
					<td>12-05-2019</td>
					<td><i class="fa fa-rupees"></i> 17,250</td>
				</tr>
				<tr>
					<td>1</td>
					<td>TA1230082</td>
					<td>V.A Sharma</td>
					<td>Closed</td>
					<td>12-05-2019</td>
					<td><i class="fa fa-rupees"></i> 17,250</td>
				</tr>
			</tbody>
		</table>
	</div>	
</div>
<?php require_once('include/footer.php'); ?>
</body>
</html>