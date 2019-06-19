<!DOCTYPE html>
<html>
<head>
	<title>Client - Truadvo</title>
	<?php require_once('include/header.php'); ?>
</head>
<body>
<?php require_once('include/menuBar.php'); ?>
<br/><br/>
<div class="mltr overflow">
	<div class="flt-right">
		<div class="inBox">
			<input type="text" name="">
			<i class="fas fa-search"></i>
		</div>
		<div class="bicon">
			<i></i>
		</div>
	</div>
</div>
<br/><br/>
<div class="truadvo-client-list">
	<div class="mltr">
		<div class="folderView activeColor">
			<i class="fas fa-folder"></i>
			<div class="folderView-text">
				<span class="label">CLIENT</span>
				<span class="label-content">Disha Gupta</span>
				<br/>
				<br/>
				<span class="label">Folder</span>
				<span class="label-content">Litigation</span>
			</div>
		</div>
		<div class="folderView">
			<i class="fas fa-folder"></i>
			<div class="folderView-text">
				<span class="label">CLIENT</span>
				<span class="label-content">Disha Gupta</span>
				<br/>
				<br/>
				<span class="label">Folder</span>
				<span class="label-content">Litigation</span>
			</div>
		</div>
		<div class="folderView">
			<i class="fas fa-folder"></i>
			<div class="folderView-text">
				<span class="label">CLIENT</span>
				<span class="label-content">Disha Gupta</span>
				<br/>
				<br/>
				<span class="label">Folder</span>
				<span class="label-content">Litigation</span>
			</div>
		</div>
		<div class="folderView">
			<i class="fas fa-folder"></i>
			<div class="folderView-text">
				<span class="label">CLIENT</span>
				<span class="label-content">Disha Gupta</span>
				<br/>
				<br/>
				<span class="label">Folder</span>
				<span class="label-content">Litigation</span>
			</div>
		</div>
		<div class="folderView">
			<i class="fas fa-folder"></i>
			<div class="folderView-text">
				<span class="label">CLIENT</span>
				<span class="label-content">Disha Gupta</span>
				<br/>
				<br/>
				<span class="label">Folder</span>
				<span class="label-content">Litigation</span>
			</div>
		</div>
	</div>	
</div>
<div class="clr-fix"></div>
<div class="partner-client-details">
	<div class="partner-client-details-tab">
		<div class="pcd-tab-button">
			<button class="activeBtn">Details</button>
			<button>Works</button>
			<button>Payments</button>
			<button>All Docs</button>
			<button>Communication</button>
			<button id="close"><i class="fas fa-times"></i></button>
		</div>
		<div class="pcd-tab-content">
			<div class="details-content">
				<div class="left-content">
					<div class="rcb-data">
						<div class="rcb-data-text">
							<label>WorkID</label>
							<span>#TA009780951</span>
						</div>
					</div>
					<div class="rcb-data">
						<div class="rcb-data-text">
							<label>Joining date</label>
							<span>04-June-2019</span>
						</div>
					</div>
					<div class="rcb-data">
						<div class="rcb-data-text">
							<label>Email ID</label>
							<span>client@website.com</span>
						</div>
					</div>
					<div class="rcb-data">
						<div class="rcb-data-text">
							<label>Phone Number</label>
							<span>+91 9876543210</span>
						</div>
					</div>
				</div>
				<div class="right-content">
					<div class="rc-box1">
						<div class="rcb-data">
							<div class="rcb-data-text">
								<label>Customer Consultation Form</label>
								<span>#TA009780951</span>
							</div>
							<div class="rcb-data-icon">
								<i class="fas fa-file-alt"></i>
							</div>
						</div>
						
						<div class="rcb-data">
							<div class="rcb-data-text">
								<label>Estimated Date of Completion (If Any)</label>
								<span>10-August-2019</span>
							</div>
						</div>
						<div class="rcb-data">
							<div class="rcb-data-text">
								<label>Name of oppsing Party (If any)</label>
								<span>Mojender S.</span>
							</div>
						</div>
						<div class="rcb-data">
							<div class="rcb-data-text">
								<label>Contact Details of Opposing Party (If any)</label>
								<span>+91 9876543210</span>
							</div>
						</div>

					</div>
					<div class="rc-box2">
						<div class="rcb-data">
							<div class="rcb-data-text">
								<label>Team Members Apponted</label>
								<span>Kandarp G.,</span>
								<span>Aashna S.,</span>
								<span>Rohit S.,</span>
								<span>M.S Dhoni,</span>
							</div>
						</div>
					</div>
					<div class="rc-up-down">
						<div class="rc-up"><i class="fas fa-chevron-up"></i></div>
						<div class="rc-down"><i class="fas fa-chevron-down"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once('include/footer.php'); ?>
<script>
$(document).ready(function() {
	$(".folderView").click(function() {
		$(".partner-client-details").css("display", "block");
	});
	$("#close").click(function() {
		$(".partner-client-details").css("display", "none");
	});
	$(".pcd-tab-button button").click(function() {

	});
});
</script>
</body>
</html>