<?php
	$dbconnection = mysqli_connect('mysqldb', 'b7i-u', 'ers');
	$errornumber = $dbconnection->connect_error;
	
	$dbconnection->close();
?>

<!doctype html>
<html>
	<head>
		<title>B7I-U docker web development container</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<h1>
			<?php
				echo $errornumber == 0 ? 'Everything ok.' : 'Could not establish database connection.';
			?>
		</h1>
	</body>
</html>