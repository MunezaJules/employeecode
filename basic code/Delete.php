<?php

require_once("including/DB.php");
$SearchQueryParameter = $_GET["id"];
if (isset($_POST['Submit'])) {
	
		$EName=$_POST['EName'];
		$SSN = $_POST['SSN'];
		$Depart= $_POST['Depart'];
		$Salary =$_POST['Salary'];
		$HomeAddress =$_POST['HomeAddress'];
		$ConnectingDB;
		$sql = "DELETE FROM emp_record  WHERE id='$SearchQueryParameter'";

		$Execute= $ConnectingDB->query($sql);
	
		if ($Execute) {
			echo '<script>window.open("view_from_Database.php?id= Record Delete Successfull","_self")</script>';
		}


		


	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update into database</title>
	<link rel="stylesheet" href="including/Style.css">

	
</head>

<body>
<?php
$ConnectingDB;
$sql="SELECT * FROM emp_record WHERE id='$SearchQueryParameter'";
$stmt= $ConnectingDB->query($sql);
while ($DataRows=$stmt->fetch()) {
	$Id         =$DataRows["id"];
	$EName       =$DataRows["ename"];
	$SSN        =$DataRows["ssn"];
	$Department =$DataRows["dept"];
	$Salary     =$DataRows["salary"];
	$HomeAddress=$DataRows["homeaddress"];
}
 ?>
<div class="">
		
<form class="" action="Delete.php?id=<?php echo $SearchQueryParameter; ?>" method="post">
	<fieldset>
		<span class="FieldInfo">Employee Name:</span>
		<br>
		<input type="text" name="EName" value="<?php echo $EName; ?>">
		<br>
		<span class="FieldInfo">Social Security Number:</span>
		<br>
		<input type="text" name="SSN" value="<?php echo $SSN; ?>">
		<br>
		<span class="FieldInfo">Department:</span>
		<br>
		<input type="text" name="Depart" value="<?php echo $Department; ?>">
		<br>
		<span class="FieldInfo">Salary:</span>
		<br>
		<input type="text" name="Salary" value="<?php echo $Salary; ?>">
		<br>
		<span class="FieldInfo">Home Address:</span>
		<br>
		<textarea name="HomeAddress" rows="8" cols="80"><?php echo $HomeAddress; ?></textarea>
		<br>
		<input type="submit" name="Submit" value="Delete your record">




	</fieldset>
	




</form>



	</div>

</body>
</html>