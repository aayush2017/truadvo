<!DOCTYPE html>
<html>
<head>
	<title>Client Query Work - Truadvo</title>
	<?php require_once('include/header.php'); ?>
</head>
<body>
<?php require_once('include/menuBar.php'); ?>

<br/><br/>
<div class="truadvo-table">
	<div class="mltr">
		<div class="resp-table">
			<div class="resp-table-header">
				<div class="table-header-cell">S. No.</div>
				<div class="table-header-cell">Work ID <i class="fas fa-sort-down fa-2x clr-blueg"></i></div>
				<div class="table-header-cell">Work Type <i class="fas fa-sort-down fa-2x clr-blueg"></i></div>
				<div class="table-header-cell">Assigned to</div>
				<div class="table-header-cell">Stage</div>
				<div class="table-header-cell">Expected Finish Date</div>
				<div class="table-header-cell">Payment</div>
			</div>
			<div class="resp-table-body">
				<div class="resp-table-row">
					<div class="table-body-cell">1</div>
					<div class="table-body-cell">TA1200193</div>
					<div class="table-body-cell">Litigation</div>
					<div class="table-body-cell">S.K Sharma</div>
					<div class="table-body-cell">3/6</div>
					<div class="table-body-cell">12-10-2019</div>
					<div class="table-body-cell">Pending</div>
					<div class="table-body-cell"><button class="btn-cq">More Details <i class="fas fa-sort-up"></i></button></div>
				</div>
				<div class="resp-table-row">
					<div class="table-body-cell">2</div>
					<div class="table-body-cell">TA129048</div>
					<div class="table-body-cell">Litigation</div>
					<div class="table-body-cell">S.K Sharma</div>
					<div class="table-body-cell">1/4</div>
					<div class="table-body-cell">12-10-2019</div>
					<div class="table-body-cell">Done</div>
					<div class="table-body-cell"><button class="btn-cq">More Details <i class="fas fa-sort-down"></i></button></div>
				</div>
				<div class="resp-table-row">
					<div class="table-body-cell colspanAll">
						<div style="position: relative;">
							<div class="partner-client-details-tab">
								<div class="pcd-tab-button">
									<button class="activeBtn" data-btnName="details">Details</button>
									<button data-btnName="work">Works</button>
									<button data-btnName="payment">Payments</button>
									<button data-btnName="all-docs">All Docs</button>
									<button data-btnName="communication">Communication</button>
									<button id="close"><!-- <i class="fas fa-times"></i> --> &nbsp;</button>
								</div>
								<div class="pcd-tab-content">
									<div class="details-content activeTab" id="details">
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
													<label>Professional Name</label>
													<span>J.B Reddy</span>
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
														<label>Submitted Documents</label>
														<span>XXXXXX</span>
														<span>XXX</span>
														<span>XXXXXXX</span>
														<span>XXXX</span>
													</div>
												</div>
											</div>
											<div class="rc-up-down">
												<div class="rc-up"><i class="fas fa-chevron-up"></i></div>
												<div class="rc-down"><i class="fas fa-chevron-down"></i></div>
											</div>
											<div class="lc-info" style="width: 50%;">
												<label>Automatic Update</label>
												<div class="switch">
												<span>
												<input type="checkbox" id="chsw1" name="pantheras">
												<label for="chsw1">&nbsp;</label>
												</span>
												</div>
											</div>
										</div>
									</div>	<!-- Detail Content end -->
									<div class="details-content clr-fix" id="work">
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
													<label>Client Name</label>
													<span>J.B Reddy</span>
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
											<div class="progress-wizard">
												<label>STATUS</label>
												<div class="circle-num activeProgree">
													<span>1</span>
													<p>Work Description</p>
												</div>
												<div class="circle-num">
													<span>2</span>
													<p>Work Description</p>
												</div>
												<div class="circle-num">
													<span>3</span>
													<p>Work Description</p>
												</div>
												<div class="circle-num">
													<span>4</span>
													<p>Work Description</p>
												</div>
											</div>
											<div class="work">
												<span class="flt-left text-upper">Work Required To Be Done</span> <button class="parTaskBtn flt-right">Add Work</button>
												<div class="clr-fix"></div>
												<br/>
												<div class="partner-panel-main">
													<div class="partner-panel">
														<div class="ppname">
															<span>Work Task 1</span>
														</div>
														<div class="ppicon">
															<i class="fas fa-check"></i>
															<i class="fas fa-times"></i>
															<i class="fas fa-sort-down"></i>
														</div>
													</div>
													<div class="partner-panel-content">
														<div class="largin-center">
															<br/>
															<label class="text-upper">Assigned To</label>
															<select>
																<option>Select team member</option>
																<option>Team A</option>
															</select>
															<br/><br/>
															<label class="text-upper">Alert Settings</label>
															<div class="lc-info">
																<label>Automatic Update</label>
																<div class="switch">
																<span>
																<input type="checkbox" id="chsw1" name="pantheras">
																<label for="chsw1">&nbsp;</label>
																</span>
																</div>
															</div>
															<div class="lc-info">
																<label>Reminder</label> 
																<div class="switch">
																<span>
																<input type="checkbox" id="chsw2" name="pantheras" checked>
																<label for="chsw2">&nbsp;</label>
																</span>
																</div>
															</div>
															<div class="lc-info"><i class="fas fa-calendar-alt"> </i><i>&nbsp;&nbsp;&nbsp;10-07-2019</i> </div>
															<div class="lc-info"><i class="fas fa-stopwatch">  </i><i>&nbsp;&nbsp;&nbsp;10:30 AM</i></div>
														</div>
													</div>	<!-- Panel content end here -->
												</div>	<!-- Panel main end here -->
											</div> <!-- work box end here -->
											<div class="rc-up-down">
												<div class="rc-up"><i class="fas fa-chevron-up"></i></div>
												<div class="rc-down"><i class="fas fa-chevron-down"></i></div>
											</div>
										</div>
									</div>	<!-- Detail Content - work End -->
									<div class="details-content clr-fix" id="payment">
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
														<label>Payments Made By Clients</label>
														<span><i class="fas fa-rupee-sign"></i> 23,500</span>
													</div>
												</div>
												<br/><br/>
												<div class="rcb-data">
													<div class="rcb-data-text">
														<label>Payments Requested By Professional</label>
														<span><i class="fas fa-rupee-sign"></i> 23,500</span>
													</div>
												</div>
												<br/><br/>
													<button class="parTaskBtn active">Request Invoice</button>
											</div>
										</div>
									</div>	<!-- Detail Content Payment end -->
									<div class="details-content clr-fix" id="all-docs">
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
											<button class="parTaskBtn active"><i class="fas fa-upload" style=""></i> <span>Upload</span></button>
											<br/><br/>
											<div class="partner-client-details-table">
												<div class="mltr">
													<table>
														<thead>
															<th>Date of Upload</th>
															<th>Work Related to</th>
															<th>Manage</th>
														</thead>
														<tbody>
															<tr>
																<td class="border-megneta">01-06-2019</td>
																<td>GST Filling</td>
																<td>
																	<a href=""><i class="fas fa-trash-alt"></i></a>
																	<a href=""><i class="fas fa-share-alt"></i></a>
																</td>
															</tr>
															<tr>
																<td class="border-green">01-06-2019</td>
																<td>Litigation</td>
																<td>
																	<a href=""><i class="fas fa-trash-alt"></i></a>
																	<a href=""><i class="fas fa-share-alt"></i></a>
																</td>
															</tr>
															<tr class="border-megneta">
																<td>01-06-2019</td>
																<td>GST Filling</td>
																<td>
																	<a href=""><i class="fas fa-trash-alt"></i></a>
																	<a href=""><i class="fas fa-share-alt"></i></a>
																</td>
															</tr>
															<tr class="border-green">
																<td>01-06-2019</td>
																<td>Litigation</td>
																<td>
																	<a href=""><i class="fas fa-trash-alt"></i></a>
																	<a href=""><i class="fas fa-share-alt"></i></a>
																</td>
															</tr>
															<tr class="border-green">
																<td>01-06-2019</td>
																<td>Litigation</td>
																<td>
																	<a href=""><i class="fas fa-trash-alt"></i></a>
																	<a href=""><i class="fas fa-share-alt"></i></a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>	
											</div>
											<div class="rc-up-down">
												<div class="rc-up"><i class="fas fa-chevron-up"></i></div>
												<div class="rc-down"><i class="fas fa-chevron-down"></i></div>
											</div>
										</div>
									</div>	<!-- Detail Content All Docs end -->
									<div class="details-content clr-fix" id="communication">
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
											<div class="chat">
												<div class="right-content-send">
													<div class="pic-circle"></div>
													<div class="message"></div>
												</div>
												<div class="right-content-recived">
													<div class="message"></div>
													<div class="pic-circle"></div>
												</div>
												<br/><br/>
												<br/><br/>
												<div class="right-content-send-msg">
													<i>!</i>
													<i>!!</i>
													<i>!!!</i>
													<input type="text" name="" placeholder="Write your message">
													<i class="fas fa-paperclip"></i>
													<i class="fas fa-paper-plane"></i>
												</div>
											</div>
											<div class="rc-up-down">
													<div class="rc-up"><i class="fas fa-chevron-up"></i></div>
													<div class="rc-down"><i class="fas fa-chevron-down"></i></div>
												</div>
										</div>
									</div>	<!-- Detail Content Communication end -->
								</div>
							</div>	<!-- Tab -->
							</div>
					</div>
				</div>
			</div>
		</div>
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