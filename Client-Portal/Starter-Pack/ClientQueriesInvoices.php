<!DOCTYPE html>
<html>
<head>
	<title>Client Query Invoice - Truadvo</title>
	<?php require_once('include/header.php'); ?>
</head>
<body>
<?php require_once('include/menuBar.php'); ?>
<br/><br/>
<div class="mltr">
	<button class="parTaskBtn" onclick="window.location= 'ClientQueries.php';"><span>Query</span></button>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="parTaskBtn" onclick="window.location= 'ClientQueriesWork.php';"><span>Work</span></button>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="parTaskBtn active"><span>Invoices</span></button>
	&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<br/><br/>
<div class="truadvo-table">
	<div class="mltr">
		<table>
			<thead>
				<th>Invoice No.</th>
				<th>Work ID</th>
				<th>Raised BY <i class="fas fa-sort-down fa-2x clr-blueg"></i></th>
				<th>Status <i class="fas fa-sort-down fa-2x clr-blueg"></i></th>
				<th>Date <i class="fas fa-sort-down fa-2x clr-blueg"></i></th>
				<th>Amount</th>
			</thead>
			<tbody>
				<tr>
					<td>145642</td>
					<td>TA1230082</td>
					<td>V.A Sharma</td>
					<td><td><span class="red-circle"></span> Closed</td></td>
					<td><button class="btn-greenb">View Invoice</button></td>
					<td><button class="btn-disable">Pay</button></td>
				</tr>
				<tr>
					<td>298450</td>
					<td>TA721609</td>
					<td>K.T Dharma</td>
					<td><td><span class="greenb-circle"></span> Closed</td></td>
					<td><button class="btn-greenb">View Invoice</button></td>
					<td><button class="btn-greenb">Pay</button></td>
				</tr>
			</tbody>
		</table>
	</div>	
</div>
<?php require_once('include/footer.php'); ?>
</body>
</html>