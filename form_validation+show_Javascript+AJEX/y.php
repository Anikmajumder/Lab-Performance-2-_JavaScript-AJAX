
<?php
include("db.php");
$query="SELECT * FROM users  ";
$conn = getConnection();
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);



?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>

<body>

<table  border="1">
		
		    
			<th>UserName</th>
			<th>Email</th>
			<th>Password</th>
			
			<th>gender</th> 
			<th>date</th> 

		</tr>
		
		<?php
		while($result=mysqli_fetch_assoc($data))
		{
			echo "<tr>
		     <td>".$result['name']."</td>
			<td> ".$result['email']."</td>
			<td>".$result['password']."</td>
			<td>".$result['gender']."</td>
			
			<td>".$result['date']."/".$result['month']."/".$result['year']."</td>
			
			
			</tr>";
				
		}
				?>
			
		
	

	
	</table>