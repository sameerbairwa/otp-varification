<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> OTP SMS Mobile Verification </title>
	<link href="style.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="build/css/intlTelInput.css">
	<link rel="stylesheet" href="build/css/demo.css">
</head>

<body>

	<div class="container">
		<div class="error"></div>
		<form id="frm-mobile-verification">
			<div class="form-heading">Mobile Number Verification</div>

			<div class="form-row">
				<input type="tel" id="mobile" class="form-input" placeholder="Enter the 10 digit mobile">
			</div>

			<input type="button" class="btnSubmit" value="Send OTP" onClick="sendOTP();">
		</form>
	</div>
	<script src="build/js/intlTelInput.js"></script>
	<script>
		var input = document.querySelector("#mobile");
		window.intlTelInput(input, {
			utilsScript: "utils.js",
		});

		function phonenumber(inputtxt) {
			var phoneno = /^\d{10}$/;
			if (inputtxt.value.match(phoneno)) {
				alert('sent a OTP on your mobile Number')
				return true;
			} else {
				alert("Not a valid Mobile Number");
				return false;
			}
		}
	</script>
	<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="verification.js"></script>
</body>

</html>