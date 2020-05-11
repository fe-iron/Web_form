
<?php
	$result = "";
	if(isset($_POST['submit'])){
		require 'PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port =587;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		// from where the mail will be send
		$mail->Username = 'differences690@gmail.com';
		$mail->Password = '12345678differences';

		$mail->setFrom($_POST['email'],$_POST['fname']);
//		whom you want to receive
		$mail->addAddress($_POST['email']);

		$mail->isHTML(true);
		$mail->Subject = 'Wheel Quote: '.$_POST['fname'];
		$mail->Body = 'Hii, '.$_POST['fname'].'<br><hr><h1>Welcome to our Wheels service. We’re so glad you’re interested in buying new wheels!</h1><br><h3>'.$_POST['fname'].'s personal info</h3><br>First Name '.$_POST['fname'].' Last Name '.$_POST['lname'].'<br>Email  '.$_POST['email'].'<br>Address  '.$_POST['address'].'<br>Phone Number  '.$_POST['Pnumber'].'<br>State  '.$_POST['state'].'  Zip Code '.$_POST['zip'].'<br>Country '.$_POST['country'].'<hr>';

		if(!$mail->send()){
			$result = "Something went wrong, Email has not been sent, Please try again.";
		}else{
			$result = "Thanks! ".$_POST['fname']." for contacting  us. We'll get back to you soon!";
		}


	}

?>
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
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>




	<section class="">
		
		<div class="container py-5">
			<div class="row">
				<div class="col-md">
					<!-- <button type="button" class="btn btn-danger btn-sm" style="background-color: #FF0000;">Your Contact Information:</button> -->
					<h5><span class="badge badge-danger" style="font-size: 16px;"><strong>Your Contact Information:</strong></span></h5>
					<!--					<label class="label label-danger" style="background-color: #FF0000;">Your Vehicle Information:</label>-->
				</div>
			</div>
			<div class="bg-light p-4 mx">
				<h5 class="text-center text-success"><?=$result;?></h5>
				<form action="" method="post">
					<div class="form-row">
						<div class="col-md mb-3">
							<label class="font-weight-bold">First Name:</label>
						<input type="text"  name="fname" id="fname" placeholder="" class="form-control">
							
						</div>
						<div class="col-md mb-3">
							<label class="font-weight-bold">Last Name:</label>
							<input type="text" name="lname" id="lname" class="form-control" placeholder="">
						</div>
						
					</div>

					<div class="form-row">
						<div class="col-md mb-3">
							<label class="font-weight-bold">Address:</label>
							<input type="text" name="address" id="address" placeholder="" class="form-control">
							
						</div>
						<div class="col-md mb-3">
							<label class="font-weight-bold">Phone Number:</label>
							<input type="tel" name="Pnumber" id="Pnumber" class="form-control" placeholder="">
						</div>
						
					</div>

					<div class="form-row">
						<div class="col-md mb-3">
							<label class="font-weight-bold">City:</label>
						<input type="text" name="city" id="city" placeholder="" class="form-control">
							
						</div>
						<div class="col-md mb-3">
							<label class="font-weight-bold">Province/State:</label>
							<input type="text" name="state" id="state" class="form-control" placeholder="">
						</div>
						<div class="col-md mb-3">
							<label class="font-weight-bold">Counrty:</label>
							<input type="text" name="country" id="country" class="form-control" placeholder="">
						</div>
						<div class="col-md">
							<label class="font-weight-bold">Postal/Zip Code::</label>
							<input type="number" name="zip" id="zip" class="form-control" placeholder="">
						</div>
					</div>

					<div class="form-row">
						<div class="col-md mb-3">
							<label class="font-weight-bold">Email Address:</label>
						<input type="email" name="email" id="email" placeholder="" class="form-control">
							
						</div>
						
						
					</div>
<!--						<button class="btn btn-success" id="send_mail" name="submit">SUBMIT QUOTE REQUEST</button>-->
					<input type="submit" name="submit" id="submit" class="btn btn-success" value="SUBMIT QUOTE REQUEST"/>
				</form>

			</div>
			<br>

		</div>
		
	</section>


	<script>

		$('#send_mail').submit(function(e){
			var fname = document.getElementById("fname").value;
			var lname = document.getElementById("lname").value;
			var address = document.getElementById("address").value;
			var Pnumber = document.getElementById("Pnumber").value;
			var state = document.getElementById("state").value;
			var zip = document.getElementById("zip").value;
			var email = document.getElementById("email").value;


		});
	</script>
</body>
</html>