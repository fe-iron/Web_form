<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- fontawesome cdn -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">


<!-- calender jquery -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
  <script>

  $( function() {
    $( "#datepicker" ).datepicker();
  } );

   $('#basicExample').timepicker();

  </script>

</head>
<body>

	<style type="text/css">
	    strong {
	    	font-weight: 70px;
	    }
		.bg-light {
			background-color: #ecf0f5!important;
		}

		h1,h2,h3,h4,h5,h5 ,label, p,option, select ,.btn-danger, .btn-success{
			font-family: 'Sen', sans-serif;
		}

		.small-form-control .form-control {
    display: block;
    width: 37%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


::placeholder{

		font-family: 'Sen', sans-serif;

	}


	.form-control[readonly] {
    background-color: #ffffff;
    opacity: 1;
}
	</style>


	<section class="">
		<div class="container py-5">
			<div class="row">
				<div class="col-md">
					<h3 style="color:#999999; font-style:italic; font-size:24px;"><strong>Order your new Wheels today! Simply complete the following form:</strong></h3>
					<br>
					<button type="button" class="btn btn-danger btn-sm" style="background-color: #FF0000; font-size: 16px;"><strong>Your Vehicle Information:</strong></button>
<!--					<label class="label label-danger" style="background-color: #FF0000;">Your Vehicle Information:</label>-->
				</div>
			</div>
			<div class="bg-light p-4 mx">
				<div class="row">
					<div class="col-md">
						<p class="text-danger"><span class="font-weight-bold">TIP: </span>Letting us Know Your Vehicle Information in Optional, btu it is surehelps our fitment speciality!</p>
					</div>
				</div>
				<form>
					<div class="form-row">
						<div class="col-md-2 mb-3">
							<label class="font-weight-bold">Year:</label>
<!--							<input type="" id="datepicker" placeholder="" class="form-control" readonly="readonly">-->
								<select class="form-control" name="year">
								      	<option selected="selected" >&nbsp;</option>

                                        <option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option>
								</select>
						</div>
						<div class="col-md-2 mb-3">
							<label class="font-weight-bold">Make:</label>
							<input type="text" class="form-control" placeholder="">
						</div>
						<div class="col-md-2 mb-3">
							<label class="font-weight-bold">Model:</label>
							<input type="text" class="form-control" placeholder="">
						</div>
						<div class="col-md-6">
							<label class="font-weight-bold">Modifications:</label>
							<input type="text" class="form-control" placeholder="Let us know any custom mods. done">
						</div>
					</div>
				</form>
			</div>
			
		</div>


		<div class="container pb-5">
			<div class="row">
				<div class="col-md-6 mb-3">
					<div class="row">

						<div class="col-md">
							<button type="button" class="btn btn-danger btn-sm" style="background-color: #FF0000; font-size: 16px;"><Strong>FRONT > Choose requirements:</Strong></button>
						</div>
					</div>
					<div class="bg-light p-4">
						
						<form>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label class="font-weight-bold">Front Diameter:</label>
<!--									<input type="number" class="form-control" placeholder="">-->
									<select class="form-control" name="diameter" id="front_diameter" onchange="selectRimDiameterFront(this.value);" style="width:155px; cursor:pointer;">
										<option value="">&nbsp;</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
									</select>
								</div>
								<div class="col-md-6 mb-3">
									<label class="font-weight-bold">Front Width:</label>
<!--									<input type="number" class="form-control" placeholder="">-->
									<select class="form-control" id="front_width" name="width" onchange="calculatePricingFront();" style="width:155px;">
										<option value="">Select Diameter First</option>
										<option value="0.00">0.00</option>
									</select>

								</div>

							</div>

							<div class="form-row small-form-control">
								<div class="col-md-6 mb-3">
									<label class="font-weight-bold">Offset: <i class="fa fa-question-circle" style="color:#FF0000;" title="Please enter in the rim offset measurement in MM (metric). If unknown, leave blank and our consultant will contact you."></i>
									</label>
									<input type="number" class="form-control" placeholder="_ mm">
								</div>
								<div class="col-md-6 mb-3">
									<label class="font-weight-bold">Backspace: <i class="fa fa-question-circle" style="color:#FF0000;" title="Please enter in the rim backspace measurement in inches (imperial). If unknown, leave blank and our consultant will contact you."></i>
<!--										<span class="font-weight-bold text-danger">?</span>-->

									</label>
									<input type="number" class="form-control" placeholder="_in.">
								</div>

							</div>

							<div class="form-row">
								<div class="col-md mb-3">
									<label class="font-weight-bold">Finish</label>


									<select class="form-control" name="finish" id="finish_front" onchange="calculatePricingFront();">
                                        <option value="">Select</option>
											  <optgroup label="Standard:">
												<option value="Std:Painted_Center-Polished_Outer|0">Painted center with polished outer</option>
												<option value="Std:Race_Satin-Polished_Outer|0">Race satin center with polished outer</option>
												<option value="Std:Race_Black-Polished_Outer|0">Race black center with polished outer</option>
											  </optgroup>

											  <optgroup label="Standard Plus:">
												<option value="Std+:Techni_Polish_Center-Polished_Outer|100">Techni-polish center with polished outer (+$100 per)</option>
												<option value="Std+:Race_Satin_Center_Outer|100">Race satin center and outer (+$100 per)</option>
												<option value="Std+:Race_Black_Center_Outer|100">Race black center and outer (+$100 per)</option>
												<option value="Std+:Race_Satin_Entire|150">Race satin entire wheel (+$150 per)</option>
												<option value="Std+:Race_Black_Entire|150">Race black entire wheel (+$150 per)</option>
												<option value="Std+:Painted_Center_Outer|150">Standard painted center and outer (+$150 per)</option>
											  </optgroup>

											  <optgroup label="Premium:">
												<option value="Premium:Painted_Center_Outer|225">Painted Center with painted outer (+$225 per)</option>
												<option value="Premium:Painted_Entire|300">Painted entire wheel (+$300 per)</option>
												<option value="Premium:Face_Polish_Outer_Polish|200">Face polish with polished outer (+$200 per)</option>
												<option value="Premium:Custom_Colors">Custom Colors (call for quote)</option>
											  </optgroup>
									</select>



								</div>
							</div>

							<div class="form-row">
								<div class="col-md-3">
									<label class="font-weight-bold">Quantity:</label>
									<select class="form-control" id="front_quantity" name="quantity" onchange="calculatePricing();">
                                          <option value="">&nbsp;</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                    </select>
								</div>
								<div class="col-md-9" ><br>
									<div id="front_SP" style="margin-top: 9px;padding-left: 40px;">

									</div>

								</div>
							</div>

							<div class="text-center">
								<p class="pt-3 text-danger"><span class="font-weight-bold">TIP:</span> If you don't have the offset and backspace,that's OK. We will contact you afterwards to discuss thesemeasurments. </p>

									<button type="button" class="btn btn-success btn-lg" onclick="proceed();">ADD FRONT WHEELS TO CART</button>

							</div>
						</form>
					</div>
				</div>

				<div class="col-md-6">
					<div class="row">
						<div class="col-md">
							<button type="button" class="btn btn-danger btn-sm" style="background-color: #FF0000; font-size: 16px;"><strong>REAR > Choose requirements:</strong></button>
						</div>
					</div>
					<div class="bg-light p-4">
						
						<form>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label class="font-weight-bold">Rear Diameter:</label>

										<select class="form-control" name="diameter" id="rear_diameter" onchange="selectRimDiameterRear(this.value);" style="width:155px;; cursor:pointer;">
                 							<option value="">&nbsp;</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
										</select>

								</div>
								<div class="col-md-6 mb-3">
									<label class="font-weight-bold">Rear Width:</label>

										<select class="form-control" id="rear_width" onchange="calculatePricingRear();" style="width:155px;">
											<option value="">Select Diameter First</option>
											<option value="0.00">0.00</option>
										</select>
								</div>

							</div>

							<div class="form-row small-form-control">
								<div class="col-md-6 mb-3">
									<label class="font-weight-bold">Offset: <i class="fa fa-question-circle" style="color:#FF0000;" title="Please enter in the rim offset measurement in MM (metric). If unknown, leave blank and our consultant will contact you."></i>

									</label>
									<input type="number" class="form-control" placeholder="_ mm">
								</div>
								<div class="col-md-6 mb-3">
									<label class="font-weight-bold">Backspace: <i class="fa fa-question-circle" style="color:#FF0000;" title="Please enter in the rim backspace measurement in inches (imperial). If unknown, leave blank and our consultant will contact you."></i>

									</label>
									<input type="number" class="form-control" placeholder="_in.">
								</div>

							</div>

							<div class="form-row">
								<div class="col-md mb-3">
									<label class="font-weight-bold">Finish</label>
									<select class="form-control" name="finish" id="finish_rear" onchange="calculatePricingRear();">
                                        <option value="">Select</option>
											  <optgroup label="Standard:">
												<option value="Std:Painted_Center-Polished_Outer|0">Painted center with polished outer</option>
												<option value="Std:Race_Satin-Polished_Outer|0">Race satin center with polished outer</option>
												<option value="Std:Race_Black-Polished_Outer|0">Race black center with polished outer</option>
											  </optgroup>

											  <optgroup label="Standard Plus:">
												<option value="Std+:Techni_Polish_Center-Polished_Outer|100">Techni-polish center with polished outer (+$100 per)</option>
												<option value="Std+:Race_Satin_Center_Outer|100">Race satin center and outer (+$100 per)</option>
												<option value="Std+:Race_Black_Center_Outer|100">Race black center and outer (+$100 per)</option>
												<option value="Std+:Race_Satin_Entire|150">Race satin entire wheel (+$150 per)</option>
												<option value="Std+:Race_Black_Entire|150">Race black entire wheel (+$150 per)</option>
												<option value="Std+:Painted_Center_Outer|150">Standard painted center and outer (+$150 per)</option>
											  </optgroup>

											  <optgroup label="Premium:">
												<option value="Premium:Painted_Center_Outer|225">Painted Center with painted outer (+$225 per)</option>
												<option value="Premium:Painted_Entire|300">Painted entire wheel (+$300 per)</option>
												<option value="Premium:Face_Polish_Outer_Polish|200">Face polish with polished outer (+$200 per)</option>
												<option value="Premium:Custom_Colors">Custom Colors (call for quote)</option>
											  </optgroup>
                                      </select>
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-3">
									<label class="font-weight-bold">Quantity:</label>
									<select class="form-control" id="rear_quantity" name="quantity" onchange="calculatePricingRear();">
                                          <option value="">&nbsp;</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                    </select>
								</div>
								<div class="col-md-9">
									<div id="rear_SP" style="margin-top: 31px;padding-left: 40px;">

									</div>
								</div>
								
							</div>

							<div class="text-center">
								<p class="pt-3 text-danger"><span class="font-weight-bold">TIP:</span> If you don't have the offset and backspace,that's OK. We will contact you afterwards to discuss thesemeasurments. </p>

									<button type="button"  class="btn btn-success btn-lg" onclick="proceed();">ADD FRONT WHEELS TO CART</button>

							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-md" id="proceedbtn">

			</div></div>
		</div>
	</section>


	<script>
		function selectRimDiameterFront(frontDiameter){
			if( frontDiameter >= 17 && frontDiameter < 21){
				document.getElementById("front_width").innerHTML = "<option value=''>Choose your Width</option><option value='7.00'>7.00</option><option value='7.5'>7.5</option><option value='8'>8</option><option value='8.5'>8.5</option><option value='9'>9</option><option value='9.5'>9.5</option><option value='10'>10</option><option value='10.5'>10.5</option><option value='11'>11</option><option value='11.5'>11.5</option><option value='12'>12</option><option value='12.5'>12.5</option><option value='13'>13</option>"
			}
		}
		function selectRimDiameterRear(rearDiameter){
			if( rearDiameter >= 17 && rearDiameter < 21){
				document.getElementById("rear_width").innerHTML = "<option value=''>Choose your Width</option><option value='7.00'>7.00</option><option value='7.5'>7.5</option><option value='8'>8</option><option value='8.5'>8.5</option><option value='9'>9</option><option value='9.5'>9.5</option><option value='10'>10</option><option value='10.5'>10.5</option><option value='11'>11</option><option value='11.5'>11.5</option><option value='12'>12</option><option value='12.5'>12.5</option><option value='13'>13</option>"
			}
		}
		function calculatePricingFront(){
			var diameter = document.getElementById("front_diameter").value;
			var width = document.getElementById("front_width").value;
			var finish = document.getElementById("finish_front").value;
			finish = finish.slice(-3);
			if( diameter == 17 && width <= 10){
				if( finish == '100')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,189.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,239.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,289.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,314.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,389.00 each</strong></p>"
				else
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,089.00 each</strong></p>"
			}
			else if( diameter == 17 && width > 10){
				if( finish == '100')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,239.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,289.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,339.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,364.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,439.00 each</strong></p>"
				else
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,139.00 each</strong></p>"
			}
			else if( diameter == 18 && width <= 10){
				if( finish == '100')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,249.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,299.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,349.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,374.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,449.00 each</strong></p>"
				else
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,149.00 each</strong></p>"
			}
			else if( diameter == 18 && width > 10){
				if( finish == '100')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,299.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,349.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,399.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,424.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,499.00 each</strong></p>"
				else
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,199.00 each</strong></p>"
			}
			else if( diameter == 19 && width <= 10){
				if( finish == '100')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,549.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,599.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,649.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,674.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,749.00 each</strong></p>"
				else
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,449.00 each</strong></p>"
			}
			else if( diameter == 19 && width > 10){
				if( finish == '100')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,599.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,649.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,699.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,724.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,799.00 each</strong></p>"
				else
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,499.00 each</strong></p>"
			}
			else if( diameter == 20 && width <= 10){
				if( finish == '100')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,619.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,669.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,719.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,744.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,819.00 each</strong></p>"
				else
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,519.00 each</strong></p>"
			}
			else if( diameter == 20 && width > 10){
				if( finish == '100')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,699.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,749.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,799.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,824.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,899.00 each</strong></p>"
				else
					document.getElementById("front_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,599.00 each</strong></p>"
			}
		}

		function calculatePricingRear(){
			var diameter = document.getElementById("rear_diameter").value;
			var width = document.getElementById("rear_width").value;
			var finish = document.getElementById("finish_rear").value;
			finish = finish.slice(-3);
			if( diameter == 17 && width <= 10){
				if( finish == '100')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,189.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,239.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,289.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,314.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,389.00 each</strong></p>"
				else
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,089.00 each</strong></p>"
			}
			else if( diameter == 17 && width > 10){
				if( finish == '100')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,239.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,289.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,339.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,364.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,439.00 each</strong></p>"
				else
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,139.00 each</strong></p>"
			}
			else if( diameter == 18 && width <= 10){
				if( finish == '100')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,249.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,299.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,349.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,374.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,449.00 each</strong></p>"
				else
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,149.00 each</strong></p>"
			}
			else if( diameter == 18 && width > 10){
				if( finish == '100')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,299.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,349.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,399.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,424.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,499.00 each</strong></p>"
				else
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,199.00 each</strong></p>"
			}
			else if( diameter == 19 && width <= 10){
				if( finish == '100')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,549.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,599.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,649.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,674.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,749.00 each</strong></p>"
				else
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,449.00 each</strong></p>"
			}
			else if( diameter == 19 && width > 10){
				if( finish == '100')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,599.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,649.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,699.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,724.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,799.00 each</strong></p>"
				else
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,499.00 each</strong></p>"
			}
			else if( diameter == 20 && width <= 10){
				if( finish == '100')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,619.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,669.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,719.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,744.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,819.00 each</strong></p>"
				else
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,519.00 each</strong></p>"
			}
			else if( diameter == 20 && width > 10){
				if( finish == '100')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,699.00 each</strong></p>"
				else if( finish == '150')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,749.00 each</strong></p>"
				else if( finish == '200')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,799.00 each</strong></p>"
				else if( finish == '225')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,824.00 each</strong></p>"
				else if( finish == '300')
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,899.00 each</strong></p>"
				else
					document.getElementById("rear_SP").innerHTML = "<p style='font-size:24px; color:#00cc33;'><strong>Rear Cost: $1,599.00 each</strong></p>"
			}
		}

		function proceed(){
			document.getElementById("proceedbtn").innerHTML = "<br><a href='cart.html'><button type='button'  class='btn btn-success btn-lg' style='margin-left: 32%;'>PROCEED TO SUBMIT QUOTE REQUEST <i class='fa fa-arrow-circle-right'></i></button></a>"

		}

	</script>
</body>
</html>