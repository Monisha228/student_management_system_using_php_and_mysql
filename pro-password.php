<?php
  include "db.php";
  session_start();
  if(!isset($_SESSION['AID']))
  {
  	header("location:index.php?mes=AccessDenied...");
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
	<script src="https://kit.fontawesome.com/e6da320557.js" crossorigin="anonymous"></script>
</head>
<body>
	<?php
	if(isset($_POST["submit"]))
	{
		$sq="select*from admin where APASS='{$_POST["opass"]}' and AID='{$_SESSION["AID"]}'";
		$res=$db->query($sq);
		if($res->num_rows>0)
		{
			if($_POST["npass"]==$_POST["cpass"])
			{
				$s="update admin SET APASS ='{$_POST["npass"]}' where AID='{$_SESSION["AID"]}'";
				$db->query($s);
				echo "<div class='success'>Changed</div>";
			}
			else
			{
				echo "<div class='error'>Mismatch</div>";
			}
		}
		else
		{
			echo "<div class='error'>Invalid Password</div>";
		}


	}
	

	?>
<div class="pro-pass">
	<h4 class="k-name">Change password</h4>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<label>Old Password</label><br>
		<input type="text" name="opass" required class="pass1"><br>
		<label>New Password</label><br>
		<input type="text" name="npass" required class="pass2"><br>
		<label>Confirm Password</label><br>
		<input type="text" name="cpass" required class="pass3"><br>
		<button type="submit" class="btn" name="submit">Change</button>

</form>
</div>

</body>
</html>