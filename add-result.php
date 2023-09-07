<?php
  include "db.php";
  session_start();
  if(!isset($_SESSION['AID']))
  {
  	header("location:index.php?mes=AccessDenied...");
  }

?>
<?php

  if(isset($_GET["rno"]))
  {
  	$sql="select*from student where RNO='{$_GET["rno"]}'";
  	$res=$db->query($sql);
  	if($res->num_rows<=0)
  	{
  		header("location:result.php?err=Invalidregno..");
  	}
  	else
  	{
  		$rows=$res->fetch_assoc();
  		$dept=$rows["SDEPT"];
  		$regno=$_GET["rno"];
  	}
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"content="width-device-width, initial-scale=1.0">
	<title>Add result</title>
	<link
	rel="Shortcut Icon"
	type="image/jpg"
	href="images/logo1.jpg"
	>
  <link rel="stylesheet" type="text/css" href="adstyle.css">
	<script src="https://kit.fontawesome.com/e6da320557.js" crossorigin="anonymous"></script>
</head>
<body>
<section id="menu">
	<div class="logo">
		<img src="images/logo1.jpg">
		<h1>HMN College</h1>
	</div>

	  <div class="items">
		<li><i class="fa fa-address-book" aria-hidden="true"></i><a href="admin_home.php">Dashboard</a></li>
		<li><i class="fa fa-university" aria-hidden="true"></i><a href="add_dept.php">Department</a></li>
		<li><i class="fa fa-book" aria-hidden="true"></i><a href="subjects.php">Subjects</a></li>
		<li><i class="fas fa-user-graduate" aria-hidden="true"></i><a href="student.php">Students</li>
		<li><i class="fa fa-building" aria-hidden="true"></i><a href="Hostel.php">Hostel</li>
			<li><i class="fa-solid fa-volleyball"></i><a href="sport.php">Sport</li>
		<li><i class="fa-solid fa-book-open"></i><a href="exam.php">Set Exam</a></li>
		<li><i class="fa-solid fa-book-open"></i><a href="view-exam.php">View Exam</a></li>
		<li><i class="fa fa-graduation-cap" aria-hidden="true"></i><a href="result.php">Add Result</a></li>
		<li><i class="fa fa-graduation-cap" aria-hidden="true"></i><a href="view-result.php">View Result</a></li>
		<li><i class="fa fa-sticky-note" aria-hidden="true"></i><a href="ctest.php">Test</li>
		<li><i class="fa fa-inr" aria-hidden="true"></i></i><a href="Fees.php">Fees</li>
		<li><i class="fa fa-calendar" aria-hidden="true"></i><a href="holiday.php">Holiday</li>
		<li><i class="fa fa-calendar-check-o" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
	 </div>
</section>

<section id="interface">
	<div class="nav">
			<div class="header">
				<h4>Welcome <?php echo $_SESSION["ANAME"]; ?>!</h4>
			</div>
		<div class="profile">
			<li><a href="admin_home.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>
			<a href="profile.php">
     	<img src="images/3.jpg"alt="logo" class="user"></a>
		</div>
	</div>

	<h3 class="i-name">Add Result</h3>
	<?php
	if(isset($_POST["submit"]))
	{
		$mark=$_POST['mark'];
		$regno=$_POST['regno'];
		$sub=$_POST['sub'];
		$etype=$_POST['etype'];
		$dept=$_POST['dept'];
		$sql="insert into mark(REGNO,SUB,MARK,EXAM,YEAR) values('{$regno}','{$sub}','{$mark}','{$etype}','{$dept}')";
		if($db->query($sql))
		{
			echo "<div class='success'>Insert success</div>";
		}
		else
		{
			echo "<div class='error'>no sucess</div>";
		}

	}
	?>
	<div class="add-res">

<form method="post" action="<?php echo $_SERVER["REQUEST_URI"];?>">
						
							<label> Register No</label>
							<input type="text" style="background:#b1b1b1;" value="<?php echo $regno;?>" class="input3" name="regno" readonly>
							
							<label>Department</label>
							<input type="text" style="background:#b1b1b1;" value="<?php echo $dept ?>" class="input3" name="dept" readonly>
						
							<label> Select Exam</label>
							<select name="etype" required class="input3">
								<option value="">Select</option>
								<option value="I-Internal">I-Internal</option>
								<option value="II-Internal">II-Internal</option>
								<option value="III-Internal">III-Internal</option>
							</select>
							
							
						<label>Subject</label>
							<select name="sub" required class="input3">
						
								<?php 
									 $s="SELECT *  FROM sub";
									$re=$db->query($s);
										if($re->num_rows>0)
											{
												echo"<option value=''>Select</option>";
												while($r=$re->fetch_assoc())
												{
													echo "<option value='{$r["SNAME"]}'>{$r["SNAME"]}</option>";
												}
											}
								?>
							</select><br>
							<label >Mark :</label>
							<input class="input3" name="mark"  id="mark" type="mark" required>
							<br>
							<button type="submit" class="btnz" name="submit"> Add Mark Details</button>
					</form>							
						</div>

<footer>
		<div class="footer-content">
			<h3> HMN College</h3>
			<p>This is a Student management system of hmn college</p>
			<ul class="social">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
				
			</ul>
		</div>
		<div class="footer-bottom">
			<p>Designed by <span>Mosaa</span></p>
		</div>
	</footer>
</section>
</body>
</html>