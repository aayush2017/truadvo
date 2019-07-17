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
	<button class="parTaskBtn active" ><span>Query</span></button>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="parTaskBtn" onclick="window.location= 'ClientQueriesWork.php';"><span>Work</span></button>
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
				<th>Work Type <i class="fas fa-sort-down fa-2x clr-blueg"></i></th>
				<th>Consultation Form</th>
				<th>Status <i class="fas fa-sort-down fa-2x clr-blueg"></i></th>
				<th>Date Raised <i class="fas fa-sort-down fa-2x clr-blueg"></i></th>
				<th>Replies Recieved <i class="fas fa-sort-down fa-2x clr-blueg"></i></th>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Litgation</td>
					<td>TA2019388</td>
					<td>Closed</td>
					<td>12-05-2019</td>
					<td>7</td>
					<td><button class="btn-cq">Check Replies <i class="fas fa-sort-up"></i></button></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Taxation</td>
					<td>TA920292</td>
					<td>Open</td>
					<td>12-05-2019</td>
					<td>2</td>
					<td><button class="btn-cq">Check Replies <i class="fas fa-sort-down"></i></button></td>
				</tr>
				<tr style="border-top: none;">
					<td>&nbsp;</td>
					<td colspan="7">
						<table class="cqtable">
							<thead>
								<!-- <th>&nbsp;</th> -->
								<th>Profile</th>
								<th>Date</th>
								<th>Name</th>
								<th>Reply</th>
								<th>Quoted Fee</th>
								<!-- <th>&nbsp;</th> -->
							</thead>
							<tbody>
								<tr>
									<!-- <td>&nbsp;</td> -->
									<td><img src="images/UserDefaultImage.png" alt="userPic"></td>
									<td>18-05-2018</td>
									<td>A P Akbar</td>
									<td>Reply</td>
									<td><i class="fas fa-ruppes"></i> 2,000</td>
								</tr>
								<tr>
									<!-- <td>&nbsp;</td> -->
									<td><img src="images/UserDefaultImage.png" alt="userPic"></td>
									<td>18-05-2018</td>
									<td>A P Akbar</td>
									<td>Reply</td>
									<td><i class="fas fa-ruppes"></i> 10,200</td>
								</tr>
							</tbody>
						</table>
					</td>
					<!-- <td>&nbsp;</td> -->
				</tr>
			</tbody>
		</table>
	</div>	
</div>
<?php require_once('include/footer.php'); ?>
<script>
$(document).ready(function() {
	$(".btn-cq").click(function() {
		if ($(".btn-cq i").hasClass("fas fa-sort-up")) {
			$(".btn-cq i").removeClass("fas fa-sort-up");	
			$(".btn-cq i").addClass("fas fa-sort-down");	
			$(".cqtable").css("display", "table");	
		} else {		
			$(".btn-cq i").removeClass("fas fa-sort-down");	
			$(".btn-cq i").addClass("fas fa-sort-up");
			$(".cqtable").css("display", "none");	
		}
	});
});
</script>
</body>
</html>