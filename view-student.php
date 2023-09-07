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
	<title>View Student</title>
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


	<h3 class="i-name">View Student</h3>
<button style="width: 150px;
	height: 35px;
   margin-left:720px;
   margin-bottom: 0px;
    border: none;
    background-color: #ff578d;
    color: white;
    font-size: 15px;
    font-weight: 1000;
    border-radius: 5px;"name="sub"><a href="view-specific.php"style="color:white; text-decoration: none;">View specific</a></button>

	<div class="news2">
					<table width="100%">
			      <thead>
				      <td>S.no</td>
				      <td>Roll no</td>
				      <td>Name</td>
				      <td>Father Name</td>
				      <td>DOB</td>
				      <td>Gender</td>
				      <td>Phone</td>
				      <td>Mail</td>
				      <td>Department</td>
				      <td>Year</td>
				      <td>Image</td>
				      <td>Address</td>
				      <td>Delete</td>
			       </thead>
			<?php
		$s="select*from student where AID={$_SESSION['AID']}";
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
				  <td>{$r["RNO"]}</td>
				  <td>{$r["NAME"]}</td>
				  <td>{$r["FNAME"]}</td>
				  <td>{$r["DOB"]}</td>
				  <td>{$r["GEN"]}</td>
				  <td>{$r["PHO"]}</td>
				  <td>{$r["MAIL"]}</td>
				  <td>{$r["SDEPT"]}</td>
				  <td>{$r["SYEAR"]}</td>
				  <td><img src='{$r["SIMG"]}' height='70'width='70'></td>
				  <td>{$r["ADDR"]}</td>
				  <td><a href=''class='btn'>Delete</td>
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

<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
	
	<script>
		$(document).ready(function(){
					$("#txt").keyup(function(){
						var txt=$("#txt").val();
						if(txt!="")
						{
							$.post("asearch.php",{s:txt},function(data){
								$("#box").html(data);
							});
						}
						
					});
					
					
				});
	</script>