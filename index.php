

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Test site</title>

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="helix">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">

<!--<link rel='stylesheet' id='fonts-css'  href='http://fast.fonts.com/cssapi/769eb715-866e-4d43-9620-73d8acc1ad40.css' type='text/css' media='screen' />-->
<!--<link href='http://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/packages/font-awesome/assets/css/admin/editor_styles.css">
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
<link rel='stylesheet' id='main-css'  href='css/main.css' type='text/css' media='screen' />
<link rel='stylesheet' id='mapbox-css'  href='css/main.css' type='text/css' media='screen' />
<link rel="stylesheet" type="text/css" href="assets/fonts/proxima-nova/proxima-nova.css">
<link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet">
<script type="text/javascript" src="assets/fonts/proxima-nova/proxima-nova.js"></script>
<script type='text/javascript' src='js/widgets.js'></script>
</head>
<body>
<div id="wrapper" class="page page-id-79 page-template page-template-project-planner-php">

<header id="header">
<nav id="navigation"><ul><li class="page_item page-item-39"><a href="">Projects</a></li>
<li class="page_item page-item-2"><a href="">About</a></li>
<li class="page_item page-item-33"><a href="">News</a></li>
<li class="page_item page-item-37"><a href="">Contact</a></li>
</ul></nav>
<div id="site-description"></div>
</header>

    <div id="page" class="clearfix">
<div id="content">

<div class="project-planner-wrapper">



				
		<article id="post-79" class="post clearfix">

						<h1>Project&nbsp;<br />Planner</h1>
			
			<p>Interested in working with us?<br />
Send us the details of your project, and we’ll get back to you as soon as we can.</p>

		</article>

	

<form action="" id="project-planner" method="post">
	<fieldset id="step-1">
		<legend><h2>Your details</h2></legend>
		<ol class="clearfix">
			<li class="first last">
				<div class="heading" >Your Name</div>
				<input class="required individual_input" type="text" name="clientname" value="" placeholder="Your name here">
				<input id="Individual" type="radio" name="info_radio" value="Individual" checked>
				<label id="individual_radio" for="Individual">Individual</label>
			</li>
			<li class="last">
				<div class="heading">Your Company</div>
				<input class="company_input" type="text" name="company" value="" placeholder="Your company name here">
				<input id="Company" type="radio" name="info_radio" value="Company">
				<label id="company_radio" for="Company">Company</label>
			</li>
			<li class="last">
				<div class="heading">Your Country</div>
				<input class="required" type="text" name="Country" value="" placeholder="Your country name here">
			</li>
			<div class="clearfix"></div>
			<li class="last">
				<div class="heading">Your Email</div>
				<input class="required email_input" type="email" name="clientname" value="" placeholder="Your email here">
				<input id="preference-email-opt" type="radio" name="preference" value="email" checked>
				<label id="email_radio" for="preference-email-opt">Contact me by email</label>
			</li>
			<li class="last">
				<div class="heading">Telephone</div>
				<input class="phone_input" type="tel" name="phone_" value="" placeholder="Your telephone number here">
				<input id="preference-phone-opt" type="radio" name="preference" value="phone">
				<label id="phone_radio" for="preference-phone-opt">Contact me by phone</label>
			</li>
			<li class="last">
				<div class="heading">Skype id</div>
				<input class="skype_input" type="text" name="skype" value="" placeholder="Your skype id here">
				<input id="preference-skype-opt" type="radio" name="preference" value="skype">
				<label id="skype_radio" for="preference-skype-opt">Contact me by skype</label>
			</li>

		</ol>
	</fieldset>
	<fieldset id="step-2">
		<legend class="clearfix">
			<h2>Services</h2>
			<p>What are you looking for? Please make a selection from the services below.</p>
		</legend>
		<ol>
			<li class="first">
				<input id="website-opt" type="checkbox" name="website" value="Website">
				<label class="button" for="website-opt">Web Apps</label>
				<ol class="sublist clearfix">
					<li>
						<input id="web-Concept-opt" type="checkbox" name="web-Concept" value="Concept">
						<label class="button" for="web-Concept-opt">Concept</label>
					</li>
					<li>
						<input id="web-strategy-opt" type="checkbox" name="web-strategy" value="Strategy">
						<label class="button" for="web-strategy-opt">Strategy</label>
					</li>
					<li>
						<input id="web-design-opt" type="checkbox" name="web-design" value="Design">
						<label class="button" for="web-design-opt">Design &amp; UX</label>
					</li>
					<li>
						<input id="web-Testing-opt" type="checkbox" name="web-Testing" value="Testing">
						<label class="button" for="web-Testing-opt">Testing</label>
					</li>
					<li class="last">
						<input id="web-dev-opt" type="checkbox" name="web-dev" value="Development">
						<label class="button" for="web-dev-opt">Deployment</label>
					</li>
				</ol>
			</li>
			<li>
				<input id="app-opt" type="checkbox" name="app" value="Application">
				<label class="button" for="app-opt">Mobile Apps</label>
				<ol class="sublist clearfix">
					<li>
						<input id="Mob-Concept-opt" type="checkbox" name="Mob-Concept" value="Concept">
						<label class="button" for="Mob-Concept-opt">Concept</label>
					</li>
					<li>
						<input id="Mob-strategy-opt" type="checkbox" name="Mob-strategy" value="Strategy">
						<label class="button" for="Mob-strategy-opt">Strategy</label>
					</li>
					<li>
						<input id="Mob-design-opt" type="checkbox" name="Mob-design" value="Design">
						<label class="button" for="Mob-design-opt">Design &amp; UX</label>
					</li>
					<li>
						<input id="Mob-Testing-opt" type="checkbox" name="Mob-Testing" value="Testing">
						<label class="button" for="Mob-Testing-opt">Testing</label>
					</li>
					<li class="last">
						<input id="Mob-dev-opt" type="checkbox" name="Mob-dev" value="Development">
						<label class="button" for="Mob-dev-opt">Deployment</label>
					</li>
				</ol>
			</li>
			<li class="last">
				<input id="other-opt" type="checkbox" name="other" value="Other">
				<label class="button" for="other-opt">Others</label>
				<ol class="sublist clearfix">
					<li>
						<input id="others-opt" type="text" name="others-Concept" value="Concept">
					</li>
				</ol>
			</li>
		</ol>
	</fieldset>
	<!--<fieldset id="step-3">
		<legend class="clearfix">
			<h2>Web development</h2>
			<p>Let's be a little more specific.</p>
		</legend>
		<ol class="clearfix">
			<li class="first">
				<input id="cms-opt" type="checkbox" name="cms" value="CMS">
				<label for="cms-opt">CMS</label>
			</li>
			<li>
				<input id="e-commerce-opt" type="checkbox" name="e-commerce" value="E-commerce">
				<label for="e-commerce-opt">E-commerce</label>
			</li>
			<li>
				<input id="microsite-opt" type="checkbox" name="microsite" value="Microsite">
				<label for="microsite-opt">Microsite</label>
			</li>
			<li>
				<input id="game-opt" type="checkbox" name="game" value="Game">
				<label for="game-opt">Game</label>
			</li>
			<li class="last">
				<input id="not-sure-opt" type="checkbox" name="not-sure" value="Not sure">
				<label for="not-sure-opt"><span>Other/</span>Not sure</label>
			</li>
		</ol>
	</fieldset>-->
	<!--<fieldset id="step-4">
		<legend class="clearfix">
			<h2>More services</h2>
			<p>Do you need anything else? </p>
		</legend>
		<ol class="clearfix">
			<li class="first">
				<input id="digital-ad-opt" type="checkbox" name="digital-ad" value="Digital ad">
				<label for="digital-ad-opt">Digital Ad</label>
			</li>
			<li>
				<input id="newsletter-opt" type="checkbox" name="newsletter" value="Newsletter">
				<label for="newsletter-opt">Newsletter</label>
			</li>
			<li>
				<input id="installation-opt" type="checkbox" name="installation" value="Installation">
				<label for="installation-opt">Installation</label>
			</li>
			<li>
				<input id="branding-opt" type="checkbox" name="branding" value="Branding">
				<label for="branding-opt">Branding</label>
			</li>
			<li class="last">
				<input id="other-service-2-opt" type="checkbox" name="more-other" value="Other">
				<label for="other-service-2-opt">Other</label>
			</li>
		</ol>
	</fieldset>-->
	<fieldset id="step-5">
		<legend>
			<h2>Brief description</h2>
			<p>Can you tell us any further information that you think might help us to help you? </p>
		</legend>
		<textarea class="required" name="brief-description"></textarea>
	</fieldset>
	<fieldset id="step-6">
		<legend>
			<h2>Timeframe</h2>
			<p>Have you got a timeframe in mind?</p>
		</legend>
		<ol class="clearfix">
			<li>
				<input id="timeframe-yes-opt" type="radio" name="timeframe-pref" value="Yes" checked>
				<label for="timeframe-yes-opt">Yes</label>
				<input id="timeframe-no-opt" type="radio" name="timeframe-pref" value="No">
				<label for="timeframe-no-opt">No, you tell me</label>
			</li>
			<li class="clearfix">
				<input type="hidden" name="timeframe" value="">
				<div id="timeframe"></div>
			</li>
		</ol>
	</fieldset>
	<fieldset id="step-7">
		<legend>
			<h2>Budget</h2>
			<p>If you have an idea of how much you can spend, that will help us pick the best solution for you</p>
		</legend>
		<ol class="clearfix">
			<li>
				<input id="budget-yes-opt" type="radio" name="budget-pref" value="Yes" checked>
				<label for="budget-yes-opt">Yes</label>
				<input id="budget-no-opt" type="radio" name="budget-pref" value="No">
				<label for="budget-no-opt">No, you tell me</label>
			</li>
			<li class="clearfix">
				<!--<p>
				<input class="amount" type="text" id="amount" readonly="readonly">
				</p>-->
				<input type="hidden" name="budget" value="">
				<div id="budget"></div>
				<p class="budget_error" style="display: none;">Please enter a Budget.</p>
			</li>
		</ol>
	</fieldset>
	<!--<fieldset id="step-8">
		<legend>
			<h2>Anything else?</h2>
			<p>Is there anything else you think we should know?</p>
		</legend>
		<textarea name="anything-else"></textarea>
	</fieldset>-->
	<div class="screen-reader">
	    <label for="checking" class="screen-reader">If you want to submit this form, do not enter anything in this field</label>
	    <input type="text" name="checking" id="checking" class="screenReader" value="" />
    </div>
	<div class="submit-buttons clearfix">
		<input type="hidden" name="submitted" id="submitted" value="true">
		<input id="submit_btn" type="submit" name="submit" value="Ready, send it &rsaquo;">
		<p class="error-message">Please, check the Project Planner for errors.</p>
	</div>
</form>

</div>

</div>

	</div><!-- #page -->

  <?php require_once("views/footer.php"); ?>


</div> <!--	#wrapper -->
<script type='text/javascript' src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type='text/javascript' src='js/all.min.js'></script>
<script type='text/javascript' src='js/main.js'></script>
<script>
$( document ).ready(function() {

	//$('#amount').prop('disabled', true);
	//$('.ui-slider-handle.ui-state-default.ui-corner-all.first span').css("display", "none");
	//$('.ui-slider-handle.ui-state-default.ui-corner-all.last span').css("display", "none");



});
/*
$(function() {
$( "#budget" ).slider({
range: true,
min: 0,
max: 100,
values: [ 10, 20 ],
slide: function( event, ui ) {
$( "#amount" ).val(ui.values[ 0 ] + "k" + " - " + ui.values[ 1 ] + "k" );
}
});
$( "#amount" ).val( $( "#budget" ).slider( "values", 0 ) + "k" +
" - " + $( "#budget" ).slider( "values", 1 ) + "k" );
});

$("#submit_btn").on('click', function(event){
	var chk = $( "#amount" ).val();
if(chk == "0k - 0k"){
	$(".budget_error").css("display", "block");
}else{
	$(".budget_error").css("display", "none");
}
});*/

</script>
</body>
</html>
