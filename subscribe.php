<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			body {
				padding: 20% 5%;
				text-align: center;
				background: #00CBC8;
				color: white;
			}
			#gif {
				margin-top: 30px;
			}
		</style>
	</head>
	<body>
		<?php

			// Put your MailChimp API and List ID hehe
			$api_key = 'cf88ff331cd76a3af49e0237bb1f238f-us5';
			$list_id = '42a46c1bb9';

			// Let's start by including the MailChimp API wrapper
			include('./inc/MailChimp.php');
			// Then call/use the class
			use \DrewM\MailChimp\MailChimp;
			$MailChimp = new MailChimp($api_key);

			// Submit subscriber data to MailChimp
			// For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
			// For wrapper's doc, visit: https://github.com/drewm/mailchimp-api
			$result = $MailChimp->post("lists/$list_id/members", [
									'email_address' => $_POST["email"],
									'status'        => 'subscribed',
								]);

			if ($MailChimp->success()) {
				// Success message
				echo "<div><h4>Thank you, you have been added to our mailing list.</h4></div><div id='gif'><iframe src='https://giphy.com/embed/d31w24psGYeekCZy' width='480' height='267' frameBorder='0' class='giphy-embed' allowFullScreen></iframe><p></p></div>";
			} else {
				// Display error
				echo $MailChimp->getLastError();
				// Alternatively you can use a generic error message like:
				// echo "<h4>Please try again.</h4>";
			}
		?>

	</body>
</html>
