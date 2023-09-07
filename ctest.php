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
	<title>Test</title>
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
		<li><i class="fa fa-inr" aria-hidden="true"></i><a href="Fees.php">Fees</li>
		<li><i class="fa fa-calendar" aria-hidden="true"></i><a href="holiday.php">Holiday</li>
		<li><i class="fa fa-calendar-check-o" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
	 </div>
</section>

<section id="interface">
	<div class="nav">
			<div class="header">
				<h4>Welcome Staff!</h4>
			</div>
		<div class="profile">
			<li><a href="admin_home.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>
			<a href="profile.php">
     	<img src="images/3.jpg"alt="logo">
     </a>
		</div>
	</div>


	<h3 class="i-name">Class test</h3>
	<button class="btn0"name="sub"><a href="view-test.php">View test</a></button>
	<?php
	if(isset($_POST["submit"]))
	{
		$dep=$_POST["dep"];
		$yr=$_POST["yr"];
		$de=$_POST["de"];
		$sub=$_POST["sub"];
		$edate=$_POST["da"].'-'.$_POST["mo"].'-'.$_POST["ye"];
		$test=$_POST["addr"];

		$sq="insert into test(DEPT,YEAR,DEGREE,SUB,DATE,TEST) values('$dep','$yr','$de','$sub','$edate','$test')";
		if($db->query($sq))
		{
			echo "<div class='success'>Insert success</div>";
		}
		else
		{
			echo "<div class='error'>Failed</div>";
		}
	}
	?>
	<div class="information">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
			<label>Department</label>
    <select name="dep" class="input3" required>
    	<?php
    	$sl="select DISTINCT(DNAME) from department";
    	$r=$db->query($sl);
    	if($r->num_rows>0)
    	{
    		echo "<option value=''>Select</option>";
    		while($ro=$r->fetch_assoc())
    		{
    			echo "<option value='{$ro["DNAME"]}'>{$ro["DNAME"]}</option>";
    		}
    	}

    	?>
    </select>

		
<label>Select Year</label>
		<select name="yr" class="input3" required>
			<?php
    	$sl="select DISTINCT(DYEAR) from department";
    	$r=$db->query($sl);
    	if($r->num_rows>0)
    	{
    		echo "<option value=''>Select</option>";
    		while($ro=$r->fetch_assoc())
    		{
    			echo "<option value='{$ro["DYEAR"]}'>{$ro["DYEAR"]}</option>";
    		}
    	}
    	?>
</select><br>
        <br>
    <label>Degree</label>
    <select name="de" class="input3" required>
    	<?php
    	$sl="select DISTINCT(DBM) from department";
    	$r=$db->query($sl);
    	if($r->num_rows>0)
    	{
    		echo "<option value=''>Select</option>";
    		while($ro=$r->fetch_assoc())
    		{
    			echo "<option value='{$ro["DBM"]}'>{$ro["DBM"]}</option>";
    		}
    	}
    	?>
    </select>
    <label>Subjects</label>
    <select name="sub" class="input3" required>
    	<?php
    	$sw="select * from sub";
    	$re=$db->query($sw);
    	if($re->num_rows>0)
    	{
    		echo "<option value=''>Select</option>";
    		while($r=$re->fetch_assoc())
    		{
    			echo "<option value='{$r["SNAME"]}'>{$r["SNAME"]}</option>";
    		}
    	}
    	?>
    </select><br>
<label>Test Date</label>
    <select name="da" class="input8">
    	<option value="1">1</option>
    	<option value="2">2</option>
    	<option value="3">3</option>
    	<option value="4">4</option>
    	<option value="5">5</option>
    	<option value="6">6</option>
    	<option value="7">7</option>
    	<option value="8">8</option>
    	<option value="9">9</option>
    	<option value="10">10</option>
    	<option value="11">11</option>
    	<option value="12">12</option>
    	<option value="13">13</option>
    	<option value="14">14</option>
    	<option value="15">15</option>
    	<option value="16">16</option>
    	<option value="17">17</option>
    	<option value="18">18</option>
    	<option value="19">19</option>
    	<option value="20">20</option>
    	<option value="21">21</option>
    	<option value="22">22</option>
    	<option value="23">23</option>
    	<option value="24">24</option>
    	<option value="25">25</option>
    	<option value="26">26</option>
    	<option value="27">27</option>
    	<option value="28">28</option>
    	<option value="29">29</option>
    	<option value="30">30</option>
    	<option value="31">31</option>
    </select>
    <select name="mo" class="input8">
    	<option value="JAN">JAN</option>
    	<option value="FEB">FEB</option>
    	<option value="MAR">MAR</option>
    	<option value="APR">APR</option>
    	<option value="MAY">MAY</option>
    	<option value="JUNE">JUNE</option>
    	<option value="JULY">JULY</option>
    	<option value="AUG">AUG</option>
    	<option value="SEP">SEP</option>
    	<option value="OCT">OCT</option>
    	<option value="NOV">NOV</option>
    	<option value="DEC">DEC</option>
    </select>
<select name="ye" class="input8">
    	<option value="2023">2023</option>
    	<option value="2024">2024</option>
    	<option value="2025">2025</option>
    	<option value="2026">2026</option>
    	<option value="2027">2027</option>
    	<option value="2028">2028</option>
    	<option value="2029">2029</option>
    	<option value="2030">2030</option>
    	<option value="2031">2031</option>
    	<option value="2032">2032</option>
    	<option value="2033">2033</option>
    	<option value="2034">2034</option>
    </select><br><br>
    <label>Test</label>
    <textarea rows="2"  name="addr" style="width: 250px;"></textarea><br><br>
		  <button type="submit" class="btn2" name="submit">Add Test</button>
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