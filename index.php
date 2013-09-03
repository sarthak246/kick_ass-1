<?php include("includes/header.php"); ?>
<?php require_once("includes/connection.php"); ?>

<script>
function check_password_form(form)/*function to check password & re-password*/
{
/*the following code checkes whether the entered password and re-password are matching*/

if(form.signup_password.value != form.signup_repassword.value)
{
form.signup_password.value="";
form.signup_repassword.value="";
document.getElementById("password_error_message").innerHTML="Passwords Don't Match!";
return false;
}
return true;
}
</script>

<div id="home_runner" style="background-color:gold ;height:50px;width:100%;float:left;">
	Sign In :
	<?php
		if(isset($_SESSION['error']))
		{
		echo $_SESSION['error'];
		unset($_SESSION['error']);
		}
		?>
	<form id="login" method="post" action="sign_in.php">
				Username : <input type="text" name="login_username" required> 
				Password : <input type="password" name="login_password" required>
				<input type="submit" value="Sign In!">
	</form>
</div>

<div id="home_about" style="background-color:skyblue ;height:1500px;width:60%;float:left;">
	<h1>About!<h1>
</div>	
<div id="home_signup" style="background-color:Chartreuse ;height:1500px;width:40%;float:left;">
	
	
	<form id="signup_form"   method="get" action="login_checker.php" onsubmit="return check_password_form(this)">
		<fieldset>
				<legend>Sign-Up information:</legend>
				First Name : <input type="text" name="signup_firstname" required>  
				<br />
				Last Name  : <input type="text" name="signup_lastname" required> 
				<br />
				Username   : <input type="text" name="signup_username" required>
				<br />
				<input type="radio" name="signup_sex" value="male" >Male 
				<input type="radio" name="signup_sex" value="female" checked="checked">Female
				<br />
				Age        : <input type="number" name="signup_age" required>
				<br />
				Password : <input type="password" name="signup_password" required>
				<br />
				Re-Type Password : <input type="password" name="signup_repassword" required>
				<br />
				<p id="password_error_message" style="color:red"></p>
				Security Question :
				<br />
				<input type="text" rows="4" cols="30" name="signup_securityquestion" required>
				<br />
				Security Answer : <input type="text" name="signup_securityanswer"required>
				<br />
				<input type="submit" value="Sign Up!">
		</fieldset>
	</form>
	
</div>


 
<?php require("includes/footer.php"); ?>

	
