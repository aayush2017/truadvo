<!DOCTYPE html>
<html>
<head>
	<title>Task - Truadvo</title>
	<?php require_once('include/header.php'); ?>
</head>
<body>
<?php require_once('include/menuBar.php'); ?>
<br/><br/>
<div class="mltr">
	<button class="parTaskBtn"><i><img src="images/AddTask.png"></i> <span>Add Task</span></button>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="parTaskBtn active"><i><img src="images/TeamTask.png"></i> <span>Team Task</span></button>
</div>
<br/><br/>
<div class="truadvo-table">
	<div class="mltr">
		<table>
			<thead>
				<th>S. No. <i class="fas fa-sort-down fa-2x clr-blue"></i></th>
				<th>Client Name <i class="fas fa-sort-down fa-2x clr-blue"></i></th>
				<th>Details</th>
				<th>Work Type <i class="fas fa-sort-down fa-2x clr-blue"></i></th>
				<th>Assigned to <i class="fas fa-sort-down fa-2x clr-blue"></i></th>
				<th>Due Date <i class="fas fa-sort-down fa-2x clr-blue"></i></th>
				<th>Status <i class="fas fa-sort-down fa-2x clr-blue"></i></th>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>John Doe</td>
					<td>Case No. 12345<br/>Case Name</td>
					<td>GST Filling</td>
					<td>A. Bhatt C.D. Gagoi</td>
					<td>12-05-2019</td>
					<td><span class="green-circle"></span> Completed</td>
				</tr>
				<tr>
					<td>2</td>
					<td>John Doe</td>
					<td>Case No. 12345<br/>Case Name</td>
					<td>Litigation</td>
					<td>A. Bhatt</td>
					<td>3-06-2019</td>
					<td><span class="red-circle"></span> Pending</td>
				</tr>
			</tbody>
		</table>
	</div>	
</div>
<?php require_once('include/footer.php'); ?>
</body>
</html>