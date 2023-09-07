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
	<title>Home</title>
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
				<h4>Welcome <?php echo $_SESSION["ANAME"]; ?>!</h4>
			</div>
		<div class="profile">
			<li><a href="admin_home.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>
			<a href="profile.php">
     	<img src="images/3.jpg"alt="logo" class="user"></a>
		</div>
	</div>

	<h3 class="i-name">Dashboard</h3>

	<div class="values">
		<div class="val-box">
			  <i class="fas fa-user-graduate"></i>
			  <div>
				 <h3>5,000</h3>
				 <span>Students</span>
			  </div>
		</div>

		<div class="val-box">
			  <i class="fas fa-chalkboard-teacher"></i>
			  <div>
				 <h3>70+</h3>
				 <span>Staff</span>
			  </div>
		</div>

		<div class="val-box">
			  <i class="fas fa-award"></i>
			  <div>
				 <h3>50+</h3>
				 <span>Awards</span>
			  </div>
		</div>

		<div class="val-box">
			  <i class="fas fa-university"></i>
			  <div>
				 <h3>15+</h3>
				 <span>Department</span>
			  </div>
		</div>
	</div>
<!-- table --->
	<div class="card">
			<table width="100%">
				<thead>
					<tr>
							<td>ID</td>
							<td>Name</td>
							<td>Department</td>
							<td>DOB</td>
							<td>Phone no</td>
							<td>Topper</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="id">
							<h5>1</h5>
						</td>
						<td class="people">
							<img src="images/1.png"alt="">
							<div class="details">
								<h5>Hapsha</h5>
								<p>hapshat123@gmail.com</p>
							</div>
						</td>
						<td class="dept">
							<h5>B.Sc Computer Science</h5>
							<p> IIIrd Year</p>
						</td>
						<td class="dob">
							<h5>26.06.2003</h5>
						</td>
						<td class="Phone">
							<h5>8976432698</h5>
						</td>
						<td>
							<h5>Maths</h5>
						</td>
						

					<tr>
						<td class="id">
							<h5>2</h5>
						</td>
						<td class="people">
							<img src="images/2.jpg"alt="">
							<div class="details">
								<h5>Nandhini</h5>
								<p>nandhini123@gmail.com</p>
							</div>
						</td>
						<td class="dept">
							<h5>B.Sc Computer Science</h5>
							<p> IIIrd Year</p>
						</td>
						<td class="dob">
							<h5>05.12.2002</h5>
						</td>
						<td class="Phone">
							<h5>8976452698</h5>
						</td>
						<td>
							<h5>Python</h5>
						</td>
					</tr>

					<tr>
						<td class="id">
							<h5>3</h5>
						</td>
						<td class="people">
							<img src="images/3.jpg"alt="">
							<div class="details">
								<h5>Naveena</h5>
								<p>naveena123@gmail.com</p>
							</div>
						</td>
						<td class="dept">
							<h5>B.Sc Computer Science</h5>
							<p> IIIrd Year</p>
						</td>
						<td class="dob">
							<h5>18.07.2003</h5>
						</td>
						<td class="Phone">
							<h5>9976432998</h5>
						</td>
						<td>
							<h5>Java</h5>
						</td>
					
					</tr>

					<tr>
						<td class="id">
							<h5>4</h5>
						</td>
						<td class="people">
							<img src="images/4.png"alt="">
							<div class="details">
								<h5>Lalitha</h5>
								<p>Lalli123@gmail.com</p>
							</div>
						</td>
						<td class="dept">
							<h5>B.Sc Computer Science</h5>
							<p> IIIrd Year</p>
						</td>
						<td class="dob">
							<h5>26.09.2003</h5>
						</td>
						<td class="Phone">
							<h5>9753232998</h5>
						</td>
						<td>
							<h5>Database</h5>
						</td>
					</tr>

					<tr>
						<td class="id">
							<h5>5</h5>
						</td>
						<td class="people">
							<img src="images/5.png"alt="">
							<div class="details">
								<h5>Dharunika</h5>
								<p>dharu123@gmail.com</p>
							</div>
						</td>
						<td class="dept">
							<h5>B.Sc Computer Science</h5>
							<p> IIIrd Year</p>
						</td>
						<td class="dob">
							<h5>12.07.2003</h5>
						</td>
						<td class="Phone">
							<h5>9753132998</h5>
						</td>
						<td>
							<h5>Networks</h5>
						</td>
						
					</tr>
				</tbody>
			</table>
		
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