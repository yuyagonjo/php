<?php 

	include("conection.php");

	$r = mysqli_query($dbc,"SELECT * FROM  users order by last_name asc");

	echo "<<table align='conter' border='1' cellspacing='3' cellpadding='3' width='75%'>
		 <tr>	
			<td align='left'><b>Name</b></td><td align='left'><b>Email</b></td>
		</tr>";

	while($row = mysqli_fetch_array($r)){

		echo "<tr><td align='left'>".$row['first_name'] ." ." .$row['last_name']."</td><td align='left'>".$row['email']."</td></tr>";

	}

 ?>