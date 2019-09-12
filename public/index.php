<?php require_once("../includes/layouts/header.php"); ?>

	<div class="row vh-100 justify-content-center align-items-center flex-column">
		<h1 class="text-primary p-4">Instagran</h1>
		<form action="" method="post" class="d-flex flex-column p-3 border">
				<input type="text" name="username" placeholder="Username" class="form-group p-2">
				<input type="text" name="password" placeholder="Password" class="form-group p-2">
				<input type="submit" name="login" value="Log in" class="btn btn-warning form-group" >
				<a href="" class="btn btn-primary form-group">Register</a>
		</form>
	</div>

<?php require_once("../includes/layouts/footer.php"); ?>