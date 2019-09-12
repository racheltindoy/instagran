<?php require_once("../includes/layouts/header.php"); ?>

	<div class="row vh-100 justify-content-center align-items-center flex-column">
		<h1 class="text-primary py-2">Instagran</h1>
		<h2>Register</h2>
		<form action="" method="post" class="d-flex flex-column p-3 border">
				<input type="text" name="firstName" placeholder="First Name" class="form-group p-2">
				<input type="text" name="lastName" placeholder="Last Name" class="form-group p-2">
				<input type="text" name="username" placeholder="Username" class="form-group p-2">
				<input type="text" name="password" placeholder="Password" class="form-group p-2">
				<input type="submit" name="register" value="Register" class="btn btn-success form-group">
				<a href="login.php" class="btn btn-warning form-group">Log In</a>
		</form>
	</div>

<?php require_once("../includes/layouts/footer.php"); ?>