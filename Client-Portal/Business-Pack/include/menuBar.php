<div class="menubar overflow">
	<div class="mltr">
		<div class="logo flt-left"><a href="PartnerDashboard.php"><img src="images/TruAdvo_Logo.png" alt="TruAdvo_Logo.png"></a></div>
		<nav class="flt-left">
			<a href="ClientWorkDetails.php" <?php if(basename($_SERVER["PHP_SELF"])=="ClientWorkDetails.php") { echo 'class="active"';} ?> >Work</a>
			<a href="ClientQueries.php" <?php if(basename($_SERVER["PHP_SELF"])=="ClientQueries.php") { echo 'class="active"';} ?> >Queries</a>
			<a href="#" <?php if(basename($_SERVER["PHP_SELF"])=="PartnerClient.php") { echo 'class="active"';} ?> >Business</a>
			<a href="#" <?php if(basename($_SERVER["PHP_SELF"])=="PartnerQuery.php" || basename($_SERVER["PHP_SELF"])=="#"|| basename($_SERVER["PHP_SELF"])=="PartnerQueryOpenForm.php") { echo 'class="active"';} ?> >Professional</a>
			<a href="#" <?php if(basename($_SERVER["PHP_SELF"])=="PartnerTeam.php" || basename($_SERVER["PHP_SELF"])=="PartnerTeam.php"|| basename($_SERVER["PHP_SELF"])=="PartnerTeam.php") { echo 'class="active"';} ?> >Team</a>
		</nav>
		<div class="notAlertLog flt-right">
			<div class="flt-left noticon">
				<i class="far fa-comment-dots"></i>
				<i class="far fa-bell"></i>
			</div>
			<div class="userPic flt-left"><img src="images/UserDefaultImage.png" alt="userPic"> <span>Kandarp Gupta</span></div>
		</div>
	</div>
</div>