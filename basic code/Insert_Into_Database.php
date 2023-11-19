<?php

require_once("including/DB.php");
if (isset($_POST['Submit'])) {
	if (!empty($_POST["EName"])&& !empty($_POST['SSN'])) {
		$EName=$_POST['EName'];
		$SSN = $_POST['SSN'];
		$Depart= $_POST['Depart'];
		$Salary =$_POST['Salary'];
		$HomeAddress =$_POST['HomeAddress'];
		$ConnectingDB;
		$sql = "INSERT INTO emp_record(ename,ssn,dept,salary,homeaddress)
		VALUES(:enamE,:ssN,:depT,:salarY,:homeadresS)";
		$stmt= $ConnectingDB->prepare($sql);
		$stmt-> bindvalue(':enamE',$EName);
		$stmt-> bindvalue(':ssN',$SSN);
		$stmt-> bindvalue(':depT',$Depart);
		$stmt-> bindvalue(':salarY',$Salary);
		$stmt-> bindvalue(':homeadresS',$HomeAddress);
		$Execute =$stmt->execute();
		if ($Execute) {
			echo "Record has been added successfull";
			echo '<script>window.open("view_from_Database.php?id= Record added Successfull","_self")</script>';
		}


		


	}else{
		echo "Please insert atleast name and social security number";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert into database</title>
	<link rel="stylesheet" href="including/Style.css">


	
</head>

<body>
<?php ?>
<div class="">
		
<form class="" action="Insert_Into_Database.php" method="post">
	<fieldset>
		<span class="FieldInfo">Employee Name:</span>
		<br>
		<input type="text" name="EName" value="">
		<br>
		<span class="FieldInfo">Social Security Number:</span>
		<br>
		<input type="text" name="SSN" value="">
		<br>
		<span class="FieldInfo">Department:</span>
		<br>
		<input type="text" name="Depart" value="">
		<br>
		<span class="FieldInfo">Salary:</span>
		<br>
		<input type="text" name="Salary" value="">
		<br>
		<span class="FieldInfo">Home Address:</span>
		<br>
		<textarea name="HomeAddress" rows="8" cols="80"></textarea>
		<br>
		<input type="submit" name="Submit" value="Submit your record">




	</fieldset>
	




</form>



	</div>

</body>
</html>