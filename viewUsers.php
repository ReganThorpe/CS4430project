<?php
	include 'required.php';
	include 'redirect.php';
	include 'header.inc.php';
	
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wish List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/captions.css" />
    <link rel="stylesheet" type="text/css" href="css/profileCSS.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/gallery.css"> -->


    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
       
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body class=>

	<h2 align="center">View Other Users' Wish Lists<h2>
	<hr>

<?php
							$sql= "SELECT * FROM user order by Username";

							$stmt = $pdo->prepare($sql);

							

							$stmt->execute();

							$result = $stmt->fetchAll();

							//echo count($result);


							for($i =0; $i<count($result); $i++){
								echo '<div>
  										<h4 align="center"><a href="profile.php?UID=' . $result[$i]['UID'] . '">' . $result[$i]['Username'] . '</a></h4>
 										 <hr>
 									   </div>';
							}
								
								
?>								


</body>
</html>