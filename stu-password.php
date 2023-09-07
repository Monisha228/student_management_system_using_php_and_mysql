<?php
  include "db.php";
  session_start();
  if(!isset($_SESSION['ID']))
  {
  	header("location:student-login.php?mes=AccessDenied...");
  }
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"content="width-device-width, initial-scale=1.0">
	<title>Profile</title>
	<link
	rel="Shortcut Icon"
	type="image/jpg"
	href="images/logo1.jpg"
	>
  <link rel="stylesheet" type="text/css" href="adstyle.css">
  <style>
  	.s-pass{
  		background-color:white;
  		width:450px;
  		height:400px;
  		padding:10px;
  		margin:60px 470px;
  		border-radius:8px;
  	}
  	.s-pass form label,input
  	{
  		margin-left:35px;
  	}
  </style>
	<script src="https://kit.fontawesome.com/e6da320557.js" crossorigin="anonymous"></script>
</head>
<body>
	<?php
	if(isset($_POST["submit"]))
	{
		$sq="select*from student where SPASS='{$_POST["opass"]}' and ID='{$_SESSION["ID"]}'";
		$res=$db->query($sq);
		if($res->num_rows>0)
		{
			if($_POST["npass"]==$_POST["cpass"])
			{
				$s="update student SET SPASS ='{$_POST["npass"]}' where ID='{$_SESSION["ID"]}'";
				$db->query($s);
				echo "<div class='success'>Changed</div>";
				header("location:student_profile.php?mes=success...");

			}
			else
			{
				echo "<div class='error'>Mismatch</div>";
				header("location:stu-password.php?mes=Retry...");
			}
		}
		else
		{
			echo "<div class='error'>Invalid Password</div>";
		}


	}
	

	?>
<div class="s-pass">
	<h4 class="i-name">Change password</h4><br><br>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<label>Old Password</label><br>
		<input type="text" name="opass" required class="pass2"><br>
		<label>New Password</label><br>
		<input type="text" name="npass" required class="pass2"><br>
		<label>Confirm Password</label><br>
		<input type="text" name="cpass" required class="pass3"><br>
		<button type="submit" class="btn" name="submit">Change</button>

</form>
</div>

</body>
</html>