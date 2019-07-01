<div class="menubar overflow">
	<div class="mltr">
		<div class="logo flt-left"><a href="PartnerDashboard.php"><img src="Partner-Portal/images/TruAdvo_Logo.png" alt="TruAdvo_Logo.png"></a></div>
		<nav class="flt-right" style="width: 35%;">
			<a href="pricingPlan.php" <?php if(basename($_SERVER["PHP_SELF"])=="pricingPlan.php") { echo 'class="active"';} ?> >Plan</a>
			<a href="#" <?php if(basename($_SERVER["PHP_SELF"])=="PartnerTasks.php") { echo 'class="active"';} ?> >Blog</a>
			<a href="#" <?php if(basename($_SERVER["PHP_SELF"])=="PartnerClient.php") { echo 'class="active"';} ?> >Support</a>
			<a href="#" <?php if(basename($_SERVER["PHP_SELF"])=="PartnerQuery.php" || basename($_SERVER["PHP_SELF"])=="PartnerQueryAnswered.php"|| basename($_SERVER["PHP_SELF"])=="PartnerQueryOpenForm.php") { echo 'class="active"';} ?> >Sign In</a>
			<a href="#" <?php if(basename($_SERVER["PHP_SELF"])=="#.php") { echo 'class="active"';} ?> >Sign Up</a>
		</nav>
	</div>
</div>