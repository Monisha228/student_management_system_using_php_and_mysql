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
	<title>Result</title>
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
		<li><i class="fa fa-address-book" aria-hidden="true"></i><a href="student_home.php">Dashboard</a></li>
		<li><i class="fa fa-university" aria-hidden="true"></i><a href="s-dept.php">Department</a></li>
		<li><i class="fa fa-book" aria-hidden="true"></i><a href="s_sub.php">Subjects</a></li>
		<li><i class="fas fa-user-graduate" aria-hidden="true"></i><a href="s-student.php">Students</li>
		<li><i class="fa fa-building" aria-hidden="true"></i><a href="s-hostel.php">Hostel</li>
			<li><i class="fa-solid fa-volleyball"></i><a href="s-sports.php">Sports</li>
		<li><i class="fa-solid fa-book-open"></i><a href="s-exam.php">Time Table</a></li>
		<li><i class="fa fa-graduation-cap" aria-hidden="true"></i><a href="s-view-result.php">Result</a></li>
		<li><i class="fas fa-chalkboard-teacher" aria-hidden="true"></i><a href="video.php">Video</li>
		<li><i class="fa fa-sticky-note" aria-hidden="true"></i><a href="s-view-test.php">Test</li>
		<li><i class="fa fa-inr" aria-hidden="true"></i><a href="s-Fees.php">Fees</li>
		<li><i class="fa fa-calendar" aria-hidden="true"></i><a href="s-holiday.php">Holiday</li>
		<li><i class="fa fa-calendar-check-o" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
	 </div>
</section>

<section id="interface">
	<div class="nav">
			<div class="header">
				<h4>Welcome <?php echo $_SESSION["NAME"]; ?>!</h4>
			</div>
		<div class="profile">
			<li><a href="student_home.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>
			<a href="student_profile.php">
     	<img src="images/3.jpg"alt="logo" class="user"></a>
		</div>
	</div>

	<h3 class="i-name">View Result</h3>
<div class="regno">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<label>Enter Roll No</label>
		<input type="text" name="rno" required class="input3">
				<button type="submit" class="btn" name="submit">View details</button>
</form>
	</div>
<div class="output">
	<?php
	if(isset($_POST["submit"]))
	{
		$sql="select*from mark where REGNO='{$_POST['rno']}'";
		$re=$db->query($sql);
		if($re->num_rows>0)
		{
			echo 
			"
			<table width='100%'>
			<thead>
				      <td>S.no</td>
				      <td>Regno</td>
				      <td>Department</td>
				      <td>Exam</td>
				      <td>Subjects</td>
				      <td>Mark</td>
			       </thead>
			";
			$i=0;
			while($r=$re->fetch_assoc())
			{
				$i++;
				echo "
				<tr>
				<td>{$i}</td>
				<td>{$r['REGNO']}</td>
				<td>{$r['YEAR']}</td>
				<td>{$r['EXAM']}</td>
				<td>{$r['SUB']}</td>
				<td>{$r['MARK']}</td>
				</tr>



				";
			}
		}
		else
		{
			echo "no record found";
		}
		echo "</table>";
	}
	?>
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