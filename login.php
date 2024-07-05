<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<link rel="stylesheet" href="loginstyle.css">
<br>

<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<body>
<center><font size="4" >
	<div class="wrapper">
	<center>
		<h1>Login</h1>
		<br>
	</center>
	<form action="login_action.php" method="post" id="myform" >

		<input type="text" name="username" value="" placeholder="Username"> 
		<br>
		<br>

		<input type="password" name="password" value="" placeholder="Password">
		<br>
		<br>
		<input class="btn" type="submit" name="login" value="Login" > 
	</form></font>
	</div>
</center>
</body>
<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>

<?php include "footer.php"; ?>