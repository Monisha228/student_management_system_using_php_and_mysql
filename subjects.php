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
	<title>Subjects</title>
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
				<h4>Welcome Admin!</h4>
			</div>
		<div class="profile">
			<li><a href="admin_home.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>
			<a href="profile.php">
     	<img src="images/3.jpg"alt="logo">
     </a>
		</div>
	</div>


	<h3 class="i-name">Subjects</h3>
<?php
if(isset($_POST["submit"]))
{
	$sq="insert into sub(SNAME,DPRT) values('{$_POST["sname"]}','{$_POST["dname"]}')";
	if($db->query($sq))
	{
		echo "<div class='success'>Inserted</div>";
	}
}

?>
	<div class="total">
	<div class="sub">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<label>Subject Name</label><br>
		<input type="text" name="sname" required class="input4"><br>
		<label>Department Name</label><br>
		<input type="text" name="dname" required class="input5"><br>
		<button type="submit" class="btn" name="submit">Add Subject</button>
</form>
	</div>
	<div class="news">
				<table width="100%">
			      <thead>
				      <td>S.no</td>
				      <td>Subject name</td>
				      <td>Department</td>
				      <td>Delete</td>
			       </thead>
			<?php
		$s="select*from sub";
		$res=$db->query($s);
		if($res->num_rows>0)
		{
			$i=0;
			while($r=$res->fetch_assoc())
			{
				$i++;
				echo "
				<tbody>
				  <tr>
				  <td>{$i}</td>
				  <td>{$r["SNAME"]}</td>
				  <td>{$r["DPRT"]}</td>
				  <td><a href='sub-delete.php?id={$r["SID"]} 'class='btnr'>Delete</a></td>
				  </tr>
				  </tbody>"
				  ;
			}
		}
		?>
		</table>
	</div>
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
</section>
</body>
</html>