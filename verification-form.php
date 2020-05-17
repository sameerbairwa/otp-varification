<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div class="error"></div>
	<div class="success"></div>
	<form id="frm-mobile-verification">
		<div class="form-row">
			<label>OTP is sent to Your Mobile Number</label>
		</div>

		<div class="form-row">
			<input type="number" id="mobileOtp" class="form-input" placeholder="Enter the OTP">
		</div>

		<div class="row">
			<input id="verify" type="button" class="btnVerify" value="Verify" onClick="verifyOTP();">
		</div>
	</form>

</body>
</html>