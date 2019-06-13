<?php
    include '../../DB/connection.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<style>
			table {
				
				border-collapse: collapse;
			}
			table, th, td {
				border: 1px solid violet;
				padding: 5px;
			}
			h3{
				color: violet;
			}
		</style>
	</head>
	<body>
		<h3>DB Test Table</h3>
		
		<?php
			$tableOfUsers = "<table><tr><th>ID</th><th>E-mail</th></tr>";
	
			$sqlQuery = "SELECT id, user FROM testTable";
			$queryResult = $connection->query($sqlQuery);
			
			if($queryResult->num_rows > 0){
				while($row = $queryResult->fetch_assoc()){
					$tableOfUsers .= "<tr><td>".$row["id"]."</td><td>".$row["user"]."</td></tr>";
					//echo "<p>".$row["id"]." > ".$row["email"]."</p>";
				}	
			}
			
			$tableOfUsers .= "</table>";
			echo $tableOfUsers;
			
			echo "<br>num_rows: ".mysqli_num_rows($queryResult);
			
			include '../../DB/connection_close.php';
			
		?>
		
	</body>
</html>