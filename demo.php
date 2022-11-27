<?php include 'application/views/front/section/header.php'; ?>
<?php include 'application/views/front/section/login_navbar.php'; ?>
<?php include 'application/views/front/section/preloader.php'; ?>
<style>
	.auto-list {
		float: left;
		list-style: none;
		margin-top: -3px;
		padding: 0;
		width: 200px;
		position: absolute;
		z-index: 2;
		background-color: #F0F0B8;
		max-height: 200px;
		overflow-y: scroll;
	}

	.auto-list li {
		padding: 10px;
		background: #f0f0f0;
		border-bottom: #bbb9b9 1px solid;
	}

	.auto-list li:hover {
		background: #e2e1e1;
		cursor: pointer;
	}

	.job-cruze-date-form {
		width: 100%;
		display: flex;
		flex-direction: row;
	}

	.input-only-month {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}
</style>
<div class="my_prof_home">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 d-flex my_prof_body" id="xyz">
				<!-- sidebar -->
				<?php include 'application/views/front/section/sidebar-login.php'; ?>
				<!-- sidebar -->
				<main class="prof_main">
					<span class="sidebar fa" onclick="openNav()"> &#xf044;</span>
					<div class="basic_div">
						<div class="basic_info_block">
							<h2 class="my_prof_heading">Previous <?php if (!empty($subscription_type) && $subscription_type == "Student Special") { ?> internship <?php } else { ?>company<?php } ?> details</h2>
							<div class="toast page_idea" data-autohide="false" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800">
								<div class="toast-header idea_head border-0 pb-0">
									<!--<button type="button" class="close idea_close" data-dismiss="toast" style="">&times;</button>-->
								</div>
								<div class="toast-body pt-0">
									<h1 class="page-title">Now, let’s fill out your <span class=""><?php if (!empty($subscription_type) && $subscription_type == "Student Special") { ?>Previous Internship Details <?php } else { ?> work history<?php } ?>
										</span></h1>
									<ul class="tips_toast">
										<li>The work experience section in your resume shows the hiring manager whether you have the necessary experience and skills to succeed in the role you are applying for. </li>
										<li>This section also includes information about your achievements, which can distinguish you from other applicants.</li>
										<li>Concisely describe your main responsibilities and the skills you demonstrated in your previous jobs, such as project management, strategic planning, or team building. </li>
										<li>Let’s fill out your previous company details, and pair your responsibility with a key impact, using numbers to measure your success.</li>
									</ul>
								</div>
							</div>

							<div class="bg_top_form"></div>
							<form autocomplete="off" class="info_form" role="form" method="post" id="frmBasicInfo" name="frmBasicInfo" action="<?php echo base_url(); ?>previous-company-details-action" enctype="multipart/form-data" onsubmit="return set_validations()">
								<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
								<input type="hidden" id='resid' name='resid' value="<?= !empty($editdata['resid']) ? $editdata['resid'] : '' ?>">
								<div class="add_div">
									<?php
									if (empty($editdata_list))
										$editdata_list[] = array();
									if (!empty($editdata_list)) {
										foreach ($editdata_list as $key => $value) {
									?>
											<div class="form-row info_row" style="margin-bottom: 0px;">

												<?php if (!empty($user_subscription_plans)) { ?>
													<div class="form-group info_basic_grp col-md-6">
														<label for="inputState">Job Title <span style="color: red;">*</span></label>

														<input type="text" class="form-control pre_job_title_name mb-1 pre_job_title_name_valid" placeholder="Job Title" id='pre_job_title_name_1' name='pre_job_title_name_1' value="<?= !empty($value['pre_job_title_name']) ? $value['pre_job_title_name'] : '' ?>">
														<?php if (!empty($value['pre_job_title_name'])) { ?>
															<i class="fa fa-check-circle icon-success" style="top:45%;"></i>
														<?php } ?>
														<p style="font-size:13px; font-weight: 400; color:green; margin-bottom: 0;"><span style="font-weight: 600;">Note:</span> Search from 6006 Job Titles write If not Found.</p>
														<div id="suggesstion-box2" class="suggesstion_box"></div>

														<div for="pre_job_title_name_1" generated="true" class="error pre_job_title_name_val_msg" style="display: block;"></div>
													</div>
												<?php } else { ?>
													<div class="form-group info_basic_grp col-md-6">
														<label for="inputState">Job Title <span style="color: red;">*</span></label>
														<input type="text" class="form-control pre_job_title_name_valid mb-1" placeholder="Job Title" id='' name='pre_job_title_name_1' value="<?= !empty($value['pre_job_title_name']) ? $value['pre_job_title_name'] : '' ?>">
													</div>
												<?php } ?>

												<div class="form-group info_basic_grp col-md-6">
													<label>Company Name<span style="color: red;">*</span></label>
													<input type="text" class="form-control pre_company_name pre_company_name_valid" id='pre_company_name_1' name='pre_company_name_1' value="<?= !empty($value['pre_company_name']) ? $value['pre_company_name'] : '' ?>">
													<?php if (!empty($value['pre_company_name'])) { ?>
														<i class="fa fa-check-circle icon-success" style="top:45%;"></i>
													<?php } ?>

												</div>

												<div class="clearfix"></div>

												<?php if ($key == 0) { ?>
													<div class="input-only-month"><input style="width: fit-content;" type="checkbox" class="end_date_checkbox" name="end_date_checkbox_1" id="end_date_checkbox_1" value="yes" <?php if (!empty($value['checks']) && $value['checks'] == 'yes') {
																																																									echo "checked";
																																																								} ?>>
														<p>Only month and year</p>
													</div>
												<?php } ?>
												<div class="clearfix"></div>
												<div class="job-cruze-date-form">

													<?php if (!empty($value['checks']) && $value['checks'] == 'yes') { ?>
														<div class="form-group info_basic_grp col-md-3" id="info_basic_grpse">
															<label>From<span style="color: red;">*</span></label>
															<div id="filterDate2" class="filterDate2">
																<!-- Datepicker as text field -->
																<div class="input-group date" data-date-format="dd/mm/yyyy">
																	<input type="text" class="form-control pre_company_from_date datepicker pre_company_from_date_valid" placeholder="dd/mm/yyyy" id='pre_company_from_date_1' name='pre_company_from_date_1' value="<?= !empty($value['pre_company_from_date']) && $value['pre_company_from_date'] != '0000-00-00' ? date('d/m/Y', strtotime($value['pre_company_from_date'])) : '' ?>">
																	<div class="input-group-addon addon" style="">
																		<span class="fa fa-calendar"></span>
																	</div>
																</div>
															</div>
														</div>
													<?php
													} else {
													?>
														<div class="form-group info_basic_grp col-md-3" id="info_basic_grpse">
															<label>From<span style="color: red;">*</span></label>
															<div id="filterDate2" class="filterDate2">
																<!-- Datepicker as text field -->
																<div class="input-group date" data-date-format="dd/mm/yyyy">
																	<input type="text" class="form-control pre_company_from_date datepicker pre_company_from_date_valid" placeholder="dd/mm/yyyy" id='pre_company_from_date_1' name='pre_company_from_date_1' value="<?= !empty($value['pre_company_from_date']) && $value['pre_company_from_date'] != '0000-00-00' ? date('d/m/Y', strtotime($value['pre_company_from_date'])) : '' ?>">
																	<div class="input-group-addon addon" style="">
																		<span class="fa fa-calendar"></span>
																	</div>
																</div>
															</div>
														</div>
													<?php
													}
													?>




													<?php
													if ($key == 0) {
														if (!empty($value['checks']) && $value['checks'] == 'yes') { ?>
															<div class="form-group info_basic_grp col-md-3 date_month_from">
																<label>From<span style="color: red;">*</span></label>
																<div id="filterDate2" class="filterDate2">
																	<!-- Datepicker as text field -->
																	<div class="input-group date" data-date-format="mm/yyyy">
																		<input type="text" class="form-control pre_company_to_dates datepicker pre_company_to_dates" placeholder="mm/yyyy" id='pre_company_date_month_to_1' name='pre_company_date_month_to_1' value="<?= !empty($value['pre_company_from_date']) && $value['pre_company_from_date'] != '0000-00-00' ? date('d/m/Y', strtotime($value['pre_company_from_date'])) : '' ?>">
																		<div class="input-group-addon addon" style="">
																			<span class="fa fa-calendar"></span>

																		</div>
																	</div>
																</div>
															</div>
														<?php
														} else {
														?>
															<div class="form-group info_basic_grp col-md-3 date_month_from" style="display:none">
																<label>From<span style="color: red;">*</span></label>
																<div id="filterDate2" class="filterDate2">
																	<!-- Datepicker as text field -->
																	<div class="input-group date" data-date-format="mm/yyyy">
																		<input type="text" class="form-control pre_company_to_dates datepicker pre_company_to_dates" placeholder="mm/yyyy" id='pre_company_date_month_to_1' name='pre_company_date_month_to_1' value="<?= !empty($value['pre_company_from_date']) && $value['pre_company_from_date'] != '0000-00-00' ? date('d/m/Y', strtotime($value['pre_company_from_date'])) : '' ?>">
																		<div class="input-group-addon addon" style="">
																			<span class="fa fa-calendar"></span>
																		</div>
																	</div>
																</div>
															</div>
													<?php }
													}
													?>

													<?php if (!empty($value['checks']) && $value['checks'] == 'yes') { ?>
														<div class="form-group info_basic_grp col-md-3 info_basic" id="info_basic_grp" style="display:none">
															<label>To<span style="color: red;">*</span></label>
															<div id="filterDate2" class="filterDate2">
																<!-- Datepicker as text field -->
																<div class="input-group date" data-date-format="dd/mm/yyyy">
																	<input type="text" class="form-control pre_company_to_date datepicker pre_company_to_date_valid" placeholder="dd/mm/yyyy" id='pre_company_to_date_1' name='pre_company_to_date_1' value="<?= !empty($value['pre_company_to_date']) && $value['pre_company_to_date'] != '0000-00-00' ? date('d/m/Y', strtotime($value['pre_company_to_date'])) : '' ?>">
																	<div class="input-group-addon addon" style="">
																		<span class="fa fa-calendar"></span>
																	</div>
																</div>
															</div>
														</div>
													<?php
													} else {
													?>
														<div class="form-group info_basic_grp col-md-3 info_basic" id="info_basic_grp">
															<label>To<span style="color: red;">*</span></label>
															<div id="filterDate2" class="filterDate2">
																<!-- Datepicker as text field -->
																<div class="input-group date" data-date-format="dd/mm/yyyy">
																	<input type="text" class="form-control pre_company_to_date datepicker pre_company_to_date_valid" placeholder="dd/mm/yyyy" id='pre_company_to_date_1' name='pre_company_to_date_1' value="<?= !empty($value['pre_company_to_date']) && $value['pre_company_to_date'] != '0000-00-00' ? date('d/m/Y', strtotime($value['pre_company_to_date'])) : '' ?>">
																	<div class="input-group-addon addon" style="">
																		<span class="fa fa-calendar"></span>
																	</div>
																</div>
															</div>
														</div>
													<?php
													}
													?>





													<?php
													if ($key == 0) {
														if (!empty($value['checks']) && $value['checks'] == 'yes') { ?>
															<div class="form-group info_basic_grp col-md-3 date_month">
																<label>To<span style="color: red;">*</span></label>
																<div id="filterDate2" class="filterDate2">
																	<!-- Datepicker as text field -->
																	<div class="input-group date" data-date-format="mm/yyyy">
																		<input type="text" class="form-control pre_company_to_dates datepicker pre_company_to_dates" placeholder="mm/yyyy" id='pre_company_date_month_1' name='pre_company_date_month_1' value="<?= !empty($value['pre_company_to_date']) && $value['pre_company_to_date'] != '0000-00-00' ? str_replace('-', '/', $value['pre_company_to_date']) : '' ?>">
																		<div class="input-group-addon addon" style="">
																			<span class="fa fa-calendar"></span>

																		</div>
																	</div>
																</div>
															</div>
														<?php
														} else {
														?>
															<div class="form-group info_basic_grp col-md-3 date_month" style="display:none">
																<label>To<span style="color: red;">*</span></label>
																<div id="filterDate2" class="filterDate2">
																	<!-- Datepicker as text field -->
																	<div class="input-group date" data-date-format="mm/yyyy">
																		<input type="text" class="form-control pre_company_to_dates datepicker pre_company_to_dates" placeholder="mm/yyyy" id='pre_company_date_month_1' name='pre_company_date_month_1' value="<?= !empty($value['pre_company_to_date']) && $value['pre_company_to_date'] != '0000-00-00' ? date('d/m/Y', strtotime($value['pre_company_to_date'])) : '' ?>">
																		<div class="input-group-addon addon" style="">
																			<span class="fa fa-calendar"></span>
																		</div>
																	</div>
																</div>
															</div>
													<?php }
													}
													?>
												</div>
												<!-- Description / Roles and Responsibilities Start -->
												<?php if (!empty($user_subscription_plans)) { ?>
													<div class="form-group info_basic_grp col-md-12 mb-2">
														<label>Description / Roles and Responsibilities<span style="color: red;">*</span></label>

														<div class="switch_editor_wrapper">
															<div class="example_section">
																<div class="search_example">
																	<label>Showing results for</label>
																	<input type="text" class="form-control srctext" placeholder="Ex: Cashier" id="srctext">
																	<button type="button" class="search_but" id="search_but_1" onclick="get_responbility($(this).attr('index'))"><i class="fa fa-search i"></i></button>
																</div>
																<section class="skill_field_scroll" id="skill_field_scroll_1">

																</section>


															</div>
															<div class="editor_section">
																<textarea class="edit_textarea pre_company_roles_responsibilities pre_company_roles_responsibilities_valid" style="color:#000;" placeholder="Type Your achievement & responsibility here" id='pre_company_roles_responsibilities_1' name='pre_company_roles_responsibilities_1'><?= !empty($value['pre_company_roles_responsibilities']) ? $value['pre_company_roles_responsibilities'] : '' ?></textarea>
															</div>
														</div>
													</div>
												<?php } else { ?>
													<div class="form-group info_basic_grp col-md-12 mb-2">
														<label>Description / Roles and Responsibilities<span style="color: red;">*</span></label>
														<textarea class="edit_textarea form-control pre_company_roles_responsibilities pre_company_roles_responsibilities_valid" rows="5" placeholder="Type Your achievement & responsibility here" id='pre_company_roles_responsibilities_1' name='pre_company_roles_responsibilities_1'><?= !empty($value['pre_company_roles_responsibilities']) ? $value['pre_company_roles_responsibilities'] : '' ?></textarea>

													</div>
												<?php } ?>
												<!-- Description / Roles and Responsibilities End -->


												<div style="margin-bottom: 30px;">
													<a style="" href="javascript:void(0)" onclick="delete_company($(this).attr('index'));" class="del_company"><i class="fa fa-trash"></i></a>
												</div>
											</div>

									<?php
										}
									}
									?>


								</div>
								<div class="">
									<p style="font-size:13px; color:green; font-weight: 400; margin-bottom: 30px;"><span style="font-weight: 600;">Note:</span> If you don't have previous company details then click on go to education.</p>
								</div>
								<input type="hidden" name="row_cnt" id="row_cnt" value="1">


								<div class="next_my justify-content-between">

									<a style="margin-right: 255px;background-color: green;" href="javascript:void(0)" onclick="add_company();" class="add_company">Add Company <i class="fa fa-plus"></i></a>


									<a href="<?php echo  !empty($editdata['resid']) ? base_url() . 'education-details?resid=' . $editdata['resid'] : 'javascript:void(0)'; ?>" class="" style="margin-right:10px;">GO TO EDUCATION <i class="fa fa-angle-double-right"></i></a>

									<a href="javascript:void(0)" onclick="$('#frmBasicInfo').submit()" class="">NEXT <i class="fa fa-angle-double-right"></i></a>
								</div>

							</form>
						</div>
						<div class="basic_resume">
							<div class="ref_img" data-aos="fade-left">
								<figure>
									<a href="javascript:void(0)" data-toggle="modal" data-target="#preview_res">
										<img src="<?= !empty($editdata['template_link']) ? base_url() . $editdata['template_link'] : '' ?>" class="img-maxwidth" alt="Resume Sample">
										<span class="btn2 preview_abso">
											<button class="preview_res" data-toggle="modal" data-target="#preview_res"><i class="fa fa-eye"></i>preview</button>
										</span>
									</a>
								</figure>
								<span class="btn2">
									<button class="preview_res js-tips" data-toggle="modal" data-target="#recommend"><i class="fa fa-lightbulb-o"></i>recommended tips</button>
									<a href="<?php echo  !empty($editdata['resid']) ? base_url() . 'select-template?resid=' . $editdata['resid'] : 'javascript:void(0)'; ?>"><button class="preview_res js-tips"><i class="fa fa-columns"></i>Change Template</button></a></span>
							</div>
							<div class="btn2_content">

								<div class="modal fade" id="preview_res" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog mod_img" role="document">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												<img src="<?= !empty($editdata['template_link']) ? base_url() . $editdata['template_link'] : '' ?>" class="img-maxwidth " alt="Resume Sample">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Js-Recommended tips start -->
							<div class="js-fade">
								<button type="button" name="button" class="btn_js pull-right"><i class="fa fa-close"></i></button>
								<div class="recommend_js">
									<h6>EXPERT INSIGHTS</h6>
									<div class="fade-content">
										<!--<p>The gatekeeper sorting resumes that come in is not always the direct hiring manger, so keep your resume-->
										<!--language at a middle school level. This ensures that everyone in the-->
										<!--hiring process can easily digest it. The gatekeeper sorting resumes that come in is not always the direct hiring manger, so keep your resume-->
										<!--  language at a middle school level. This ensures that everyone in the-->
										<!--  hiring process can easily digest it.The gatekeeper sorting resumes that come in is not always the direct hiring manger, so keep your resume-->
										<!--    language at a middle school level. This ensures that everyone in the-->
										<!--    hiring process can easily digest it.-->
										<!--    The gatekeeper sorting resumes that come in is not always the direct hiring manger, so keep your resume-->
										<!--      language at a middle school level. This ensures that everyone in the-->
										<!--      hiring process can easily digest it.The gatekeeper sorting resumes that come in is not always the direct hiring manger, so keep your resume-->
										<!--        language at a middle school level. This ensures that everyone in the-->
										<!--        hiring process can easily digest it.The gatekeeper sorting resumes that come in is not always the direct hiring manger, so keep your resume-->
										<!--          language at a middle school level. This ensures that everyone in the-->
										<!--          hiring process can easily digest it.</p>-->
										<ul>
											<li>Prioritize experiences that are relevant to the job for which you’re applying.</li>
											<li>You should be specific about your job titles in the companies you worked for.</li>
											<li>Provide the full, official names of the companies for which you’ve worked starting with your most recent followed by the next most recent, and so on.</li>
											<li>Reread the job description and carefully pick the most important keywords.</li>
											<li>Pack your resume with relevant keywords.</li>
											<li>For fresher resumes without extensive professional experience, you can include other experience that shows your skills and commitment to completing tasks professionally.</li>
										</ul>


									</div>
								</div>
							</div>
							<!-- Js-Recommended tips end -->
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>
</div>

<?php include 'application/views/front/section/footer.php'; ?>
<script>
	$('.previous_company_active').addClass('active');
	$('.resume_active').addClass('active');

	//   var yest = new Date(new Date().getTime() - 24 * 60 * 60 * 1000);
	//   var today = new Date();

	//   $('.pre_company_from_date').datepicker({
	//       autoclose: true,
	//       format: 'dd-mm-yyyy',
	//       endDate: yest
	//     });

	//       $('.pre_company_to_date').datepicker({
	//       autoclose: true,
	//       format: 'dd-mm-yyyy',
	//       endDate: today
	//     });

	/*[start::stratand end date]*/
	var ToDate = $('#pre_company_to_date_' + 1).val();

	// var min = '';
	var min = new Date(new Date().getTime() - 24 * 60 * 60 * 1000);
	//  var min = new Date();
	if (ToDate != '') {

		var splited = ToDate.split('-');
		var tDate = splited[1] + '/' + splited[0] + '/' + splited[2];
		min = new Date(tDate);
	}

	$('#pre_company_from_date_' + 1).datepicker({
		format: 'dd/mm/yyyy',
		//  endDate: min,
		// autoclose: true,
		// orientation: "bottom left",

	}).on('changeDate', function(selected) {
		// var minDate = new Date(selected.date.valueOf());
		// $('#pre_company_to_date_'+1).datepicker('setStartDate', minDate);
	});
	var FrmDate = $('#pre_company_from_date_' + 1).val();
	// var max = '';
	var max = new Date();
	if (FrmDate != '') {
		var splited = FrmDate.split('-');
		var tDate = splited[1] + '/' + splited[0] + '/' + splited[2];
		// max = new Date(tDate);
	}
	$('#pre_company_to_date_' + 1).datepicker({
		format: 'dd/mm/yyyy',
		//  startDate: max,
		autoclose: true,
		// orientation: "bottom left",

	}).on('changeDate', function(selected) {
		// var minDate = new Date(selected.date.valueOf());
		// $('#pre_company_from_date_'+1).datepicker('setEndDate', minDate);
	});
	/*[end::stratand end date]*/


	$(".end_date_checkbox").click(function() {
		if ($(".end_date_checkbox").is(":checked")) {
			$(".date_month").show();
			$(".date_month_from").show();
			$("#pre_company_to_date_1").val('');
			$("#pre_company_date_month_1").val('');
			$("#pre_company_from_date_1").val('');
			$("#pre_company_date_month_to_1").val('');
			$("#info_basic_grpse").hide();
			$("#info_basic_grp").hide();



		} else {
			//  $(".date_month").val('');
			$(".date_month").hide();
			$(".date_month_from").hide();

			$("#info_basic_grpse").show();
			$("#info_basic_grp").show();
		}
	});

	$('#pre_company_date_month_' + 1).datepicker({
		//   $("#pre_company_date_month").datepicker({
		format: 'mm/yyyy',
		//  startDate: max,
		autoclose: true,
		// orientation: "bottom left",

	});

	$('#pre_company_date_month_to_' + 1).datepicker({
		//   $("#pre_company_date_month").datepicker({
		format: 'mm/yyyy',
		//  startDate: max,
		autoclose: true,
		// orientation: "bottom left",

	});


	/*[end::stratand end date]*/
	// set_validations(1);//set dynamic validation
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>front_media/validations/js_resume/js_pre_company.js"></script>