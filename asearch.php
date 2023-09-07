<?php 
	include"db.php";
	$sql="SELECT * FROM student WHERE SDEPT LIKE '{$_POST['s']}%'";//sname starting
	$res=$db->query($sql);
		echo "<div class='que-tab'>
		<table class='table'>
				<tr>
					<th>S.No</th>
					<th>Name</th>
					<th>Department</th>
					<th>Year</th>
					<th>RegNo</Ah>
				</tr>
				";
	if($res->num_rows>0)
	{
		$i=0;
		while($row=$res->fetch_assoc())
		{
			$i++;
			echo 
			"<tr>
				<td>{$i}</td>
				<td>{$row["NAME"]}</td>
				<td>{$row["SDEPT"]}</td>
				<td>{$row["SYEAR"]}</td>
				<td>{$row["RNO"]}</td>
				</td>
				</tr>
			";
		}
				echo "</table></div>";
	}
	else
	{
		echo "<p>No Record Found</p>";
	}
?>


