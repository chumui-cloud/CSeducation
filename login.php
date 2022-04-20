<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>USER PANEL - Login</title>
<meta name="description" content="">
<meta name="sayma" content="Padmanaban, Mine Web Design">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/loginnormalize.css">
  <link rel="stylesheet" href="css/loginstyle.css">
<body>
	<div class="row">
	<div class="container">
		<h2 class="title">Online Education System</h2>

		<form class="form-signin" action="log_in.php" method="post">
			<h4 class="section-heading"><span>USER LOGIN</span></h4>
			<div class="row">
				<div class="column">
					<label>Email </label>
					<input id="email" class="full-width" type="text" placeholder="" name="email">
				</div>
			</div>
			<div class="row">
				<div class="column">
					<label>PASSWORD </label>
					<input id="password" class="full-width" type="password" placeholder="" name="password">
				</div>
			</div>
			<br/>
			<a href="viewprofile.php" > <input class="button-submit"  type="submit" value="SIGN IN"> </a>

			<div class="row">
				<a href=" " class="forgot">Forgot your password?</a>
			</div>
		</form>

	</div>
</div>
</body>

</html>
