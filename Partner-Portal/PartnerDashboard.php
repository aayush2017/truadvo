<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Truadvo</title>
	<?php require_once('include/header.php'); ?>
</head>
<body>
<?php require_once('include/menuBar.php'); ?>
<br/><br/>
<div class="mltr">
	&nbsp;
</div>
<br/><br/>
<div class="truadvo-dashboard">
	<div class="mltr overflow">
		<div class="td-box">
			<h2>Welcome to your<br/> dashboard, Kandarp!</h2>
			<div class="td-box-nt">
				<div class="td-box-num"><span>421</span></div>
				<div class="td-box-text">new queries<br/> raised</div>
			</div>
			<div class="td-box-nt">
				<div class="td-box-num"><span>12</span></div>
				<div class="td-box-text">queries<br/> answered</div>
			</div>
			<div class="td-box-nt">
				<div class="td-box-num"><span>2</span></div>
				<div class="td-box-text">new<br/> clinets</div>
			</div>
			<div class="clr-fix"></div>
			<div class="td-box-quoto">
				<span class="qu"><i class="fas fa-quote-left"></i></span>
				<p>best service ever.</p>
				<p>high recommended</p>
				<br/>
				<p class="sign"><span>ABHAY DEY</span><br/><span>Architech</span></p>
			</div>
		</div>
		<div class="td-box">
			<div class="prev"><i class="fas fa-chevron-left"></i></div>
			<div class="next"><i class="fas fa-chevron-right"></i></div>
			<div class="td-box-slider">
				<div class="td-box-slider-content">
					<span class="flt-right">TASK 1 OF 3</span>
					<br/><br/>
					<p><span>CLIENT</span> <span>John Doe</span></p>
					<p><span>WORK TYPE</span> <span>Litigation</span></p>
					<hr/>
					<div class="flt-left td-box-s-boxl">
						<h3>Hearing at Gurgaon</h3>
						<h3>High Court</h3>
					</div>
					<div class="flt-left td-box-s-boxr">
						<span>FRIDAY</span>
						<span>17</span>
						<span>OCTOBER'19</span>
						<span>11:30AM - 1:00PM</span>
					</div>

				</div>
			</div>
			<div class="td-box-slider" style="border-right-color: #f2fa8b;">
				<div class="td-box-slider-content">
					<span class="flt-right">TASK 1 OF 3</span>
					<br/><br/>
					<p><span>CLIENT</span> <span>John Doe</span></p>
					<p><span>WORK TYPE</span> <span>Litigation</span></p>
					<hr/>
					<div class="flt-left td-box-s-boxl">
						<h3>Hearing at Gurgaon</h3>
						<h3>High Court</h3>
					</div>
					<div class="flt-left td-box-s-boxr">
						<span>FRIDAY</span>
						<span>17</span>
						<span>OCTOBER'19</span>
						<span>11:30AM - 1:00PM</span>
					</div>

				</div>
			</div>
			<div class="td-box-slider">
				<div class="td-box-slider-content">
					<span class="flt-right">TASK 1 OF 3</span>
					<br/><br/>
					<p><span>CLIENT</span> <span>John Doe</span></p>
					<p><span>WORK TYPE</span> <span>Litigation</span></p>
					<hr/>
					<div class="flt-left td-box-s-boxl">
						<h3>Hearing at Gurgaon</h3>
						<h3>High Court</h3>
					</div>
					<div class="flt-left td-box-s-boxr">
						<span>FRIDAY</span>
						<span>17</span>
						<span>OCTOBER'19</span>
						<span>11:30AM - 1:00PM</span>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<br/><br/>
<div class="mltr">
	<button class="parTaskBtn"><i><img src="images/AddTask.png"></i> <span>Analytics</span></button>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="parTaskBtn active" style="width: 200px;"><i><img src="images/TeamTask.png"></i> <span>Customer Request</span></button>
</div>
<br/><br/>
<div class="truadvo-table">
	<div class="mltr">
		<table>
			<thead>
				<th>S. No. <i class="fas fa-sort-down fa-2x clr-blue"></i></th>
				<th>Date <i class="fas fa-sort-down fa-2x clr-blue"></i></th>
				<th>Client Name <i class="fas fa-sort-down fa-2x clr-blue"></i></th>
				<th>Details</th>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>14.05.2019</td>
					<td>John Deo</td>
					<td>Request for incorporation document</td>
					<td><button class="btn-disable">Accept</button></td>
					<td><button class="btn-disable">Decline</button></td>
				</tr>
				<tr>
					<td>2</td>
					<td>15.05.2019</td>
					<td>John Deo</td>
					<td>Request for incorporation document</td>
					<td><button class="btn-green">Accept</button></td>
					<td><button class="btn-red">Decline</button></td>
				</tr>
			</tbody>
		</table>
	</div>	
</div>
<br/><br/>
<?php require_once('include/footer.php'); ?>
</body>
</html>