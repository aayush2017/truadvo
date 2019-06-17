<!DOCTYPE html>
<html>
<head>
	<title>Query - Truadvo</title>
	<?php require_once('include/header.php'); ?>
</head>
<body>
<?php require_once('include/menuBar.php'); ?>
<br/><br/>
<div class="mltr">
	<button class="parTaskBtn active"><i><img src="images/AddTask.png"></i> <span>New</span></button>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="parTaskBtn " onclick="window.location='PartnerQueryAnswered.php';"><i><img src="images/TeamTask.png"></i> <span>Answered</span></button>
</div>
<br/><br/>
<div class="truadvo-table">
	<div class="mltr">
		<table>
			<thead>
				<th>S. No. <i class="fas fa-sort-down fa-2x clr-blue"></i></th>
				<th>Work Type <i class="fas fa-sort-down fa-2x clr-blue"></i></th>
				<th>Description</th>
				<th>Time Remaining</th>
				
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Litigation</td>
					<td>Request for incorporation document</td>
					<td>0</td>
					<td><button class="btn-disable">Open</button></td>
					<td><button class="btn-disable">Ignore</button></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Litigation</td>
					<td>Request for incorporation document</td>
					<td>2hrs</td>
					<td><button class="btn-green" onclick="window.location='PartnerQueryOpenForm.php';">Open</button></td>
					<td><button class="btn-red">Ignore</button></td>
				</tr>
			</tbody>
		</table>
	</div>	
</div>
<?php require_once('include/footer.php'); ?>
</body>
</html>