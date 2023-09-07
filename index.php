<?php
  include "db.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>
Login
</title>
<link
  rel="Shortcut Icon"
  type="image/jpg"
  href="images/logo1.jpg"
  >
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav>
    <ul>
      <li><a href="index.php">Admin</a></li>
      <li><a href="student-login.php">Student</a></li>
    </ul>
  </nav>
  </div>
<div class="login">
  
<h3 align="center">Login</h3>
<?php
 if(isset($_POST["submit"]))
        {
          $sql="select * from admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
          $res=$db->query($sql);
          if($res->num_rows>0)
          {
            $ro=$res->fetch_assoc();
            $_SESSION["AID"]=$ro["AID"];
            $_SESSION["ANAME"]=$ro["ANAME"];
            header("location:admin_home.php");
          }
          else
          {
            echo "<div class='error'>Invalid Username or Password</div>";
          }
        }
?>
<form align="center" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
<p><i>Username:</i></p>
<input type="text" name="aname" required>
<i><p>Password:</p></i>
<input type="password" name="apass" required><br><br>
<button type="submit" name="submit">Submit</button>
</div>
</form>
</body>
</html>