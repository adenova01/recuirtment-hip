<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{url('/assets_recuirtment/css/style.css')}}">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
					<div class="card px-0 pt-4 pb-0 mt-3 mb-3">
						<h2 id="heading">Sign Up Your User Account</h2>
						<p>Fill all form field to go to next step</p>
						<form id="msform">
							<!-- progressbar -->
							<ul id="progressbar">
								<li class="active" id="account"><strong>Account</strong></li>
								<li id="personal"><strong>Personal</strong></li>
								<li id="payment"><strong>Image</strong></li>
								<li id="confirm"><strong>Finish</strong></li>
							</ul>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div> <br> <!-- fieldsets -->
							<fieldset>
								<div class="form-card">
									<div class="row">
										<div class="col-7">
											<h2 class="fs-title">Account Information:</h2>
										</div>
										<div class="col-5">
											<h2 class="steps">Step 1 - 4</h2>
										</div>
									</div> <label class="fieldlabels">Email: *</label> <input type="email" name="email" placeholder="Email Id" /> <label class="fieldlabels">Username: *</label> <input type="text" name="uname" placeholder="UserName" /> <label class="fieldlabels">Password: *</label> <input type="password" name="pwd" placeholder="Password" /> <label class="fieldlabels">Confirm Password: *</label> <input type="password" name="cpwd" placeholder="Confirm Password" />
								</div> <input type="button" name="next" class="next action-button" value="Next" />
							</fieldset>
							<fieldset>
								<div class="form-card">
									<div class="row">
										<div class="col-7">
											<h2 class="fs-title">Personal Information:</h2>
										</div>
										<div class="col-5">
											<h2 class="steps">Step 2 - 4</h2>
										</div>
									</div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" /> <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" /> <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno" placeholder="Contact No." /> <label class="fieldlabels">Alternate Contact No.: *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
								</div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
							</fieldset>
							<fieldset>
								<div class="form-card">
									<div class="row">
										<div class="col-7">
											<h2 class="fs-title">Image Upload:</h2>
										</div>
										<div class="col-5">
											<h2 class="steps">Step 3 - 4</h2>
										</div>
									</div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature Photo:</label> <input type="file" name="pic" accept="image/*">
								</div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
							</fieldset>
							<fieldset>
								<div class="form-card">
									<div class="row">
										<div class="col-7">
											<h2 class="fs-title">Finish:</h2>
										</div>
										<div class="col-5">
											<h2 class="steps">Step 4 - 4</h2>
										</div>
									</div> <br><br>
									<h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
									<div class="row justify-content-center">
										<div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
									</div> <br><br>
									<div class="row justify-content-center">
										<div class="col-7 text-center">
											<h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- JQUERY -->
		<script src="{{url('/assets_recuirtment/js/jquery-3.3.1.min.js')}}"></script>

		<!-- JQUERY STEP -->
		<script src="{{url('/assets_recuirtment/js/jquery.steps.js')}}"></script>
		<script src="{{url('/assets_recuirtment/js/main.js')}}"></script>
		<!-- Template created and distributed by Colorlib -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){

			var current_fs, next_fs, previous_fs; //fieldsets
			var opacity;
			var current = 1;
			var steps = $("fieldset").length;

			setProgressBar(current);

			$(".next").click(function(){

			current_fs = $(this).parent();
			next_fs = $(this).parent().next();

			//Add Class Active
			$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

			//show the next fieldset
			next_fs.show();
			//hide the current fieldset with style
			current_fs.animate({opacity: 0}, {
			step: function(now) {
			// for making fielset appear animation
			opacity = 1 - now;

			current_fs.css({
			'display': 'none',
			'position': 'relative'
			});
			next_fs.css({'opacity': opacity});
			},
			duration: 500
			});
			setProgressBar(++current);
			});

			$(".previous").click(function(){

			current_fs = $(this).parent();
			previous_fs = $(this).parent().prev();

			//Remove class active
			$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

			//show the previous fieldset
			previous_fs.show();

			//hide the current fieldset with style
			current_fs.animate({opacity: 0}, {
			step: function(now) {
			// for making fielset appear animation
			opacity = 1 - now;

			current_fs.css({
			'display': 'none',
			'position': 'relative'
			});
			previous_fs.css({'opacity': opacity});
			},
			duration: 500
			});
			setProgressBar(--current);
			});

			function setProgressBar(curStep){
			var percent = parseFloat(100 / steps) * curStep;
			percent = percent.toFixed();
			$(".progress-bar")
			.css("width",percent+"%")
			}

			$(".submit").click(function(){
			return false;
			})

			});
		</script>
	</body>
</html>
