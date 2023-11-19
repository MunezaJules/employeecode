<?php

require_once("including/DB.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View from database</title>
	<link rel="stylesheet" type="text/css" href="including/Style.css">

</head>

<body>
	<h1 class="Success"><?php echo @$_GET['id'];?></h1>

	<div>
		<fieldset>
			<form>
		<input type="text" name="Search" value="" placeholder="Search by name and ssn">
		<input type="submit" name="SearchButton" value="Search record">
		</form>
</fieldset>
	</div>
	<?php 

if (isset($_GET['SearchButton'])) {
	$ConnectingDB;
	$Search= $_GET['Search'];
	$sql=" SELECT * FROM emp_record WHERE ename =:searcH OR ssn =:searcH";
	$stmt=$ConnectingDB->prepare($sql);
	$stmt->bindValue(':searcH',$Search);
	$stmt->execute();
	while ($DataRows =$stmt->fetch()) {
	$Id         =$DataRows["id"];
	$EName       =$DataRows["ename"];
	$SSN        =$DataRows["ssn"];
	$Department =$DataRows["dept"];
	$Salary     =$DataRows["salary"];
	$HomeAddress=$DataRows["homeaddress"];

	?><div>
	<table width="800" border="8" align="center">
		<caption>Search result</caption>

		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>SSN</th>
		<th>Department</th>
		<th>Salary</th>
		<th>HomeAddress</th>
		<th>Search Again</th>
		
	</tr>
<tr>
	<td><?php echo $Id; ?></td>
	<td><?php echo $EName; ?></td>
	<td><?php echo $SSN; ?></td>
	<td><?php echo $Department; ?></td>
	<td><?php echo $Salary; ?></td>
	<td><?php echo $HomeAddress; ?></td>
	<td><a href="view_from_Database.php" > Search Again</a></td>
</tr>


	</table>
	</div>
	<?php }

}


	?>
<table width="1000" border="5" align="center">
	<caption>View From Database</caption>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>SSN</th>
		<th>Department</th>
		<th>Salary</th>
		<th>HomeAddress</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>


<?php
$ConnectingDB;
$sql="SELECT * FROM emp_record";
$stmt= $ConnectingDB->query($sql);
while ($DataRows=$stmt->fetch()) {
	$Id         =$DataRows["id"];
	$EName       =$DataRows["ename"];
	$SSN        =$DataRows["ssn"];
	$Department =$DataRows["dept"];
	$Salary     =$DataRows["salary"];
	$HomeAddress=$DataRows["homeaddress"];

?>
<tr>
	<td><?php echo $Id; ?></td>
	<td><?php echo $EName; ?></td>
	<td><?php echo $SSN; ?></td>
	<td><?php echo $Department; ?></td>
	<td><?php echo $Salary; ?></td>
	<td><?php echo $HomeAddress; ?></td>
	<td><a href="Update.php?id=<?php echo $Id; ?>">Update</a></td>
	<td><a href="Delete.php?id=<?php echo $Id; ?>">Delete</a></td>
</tr>
<?php } ?>
</table>
<div class="">
		

	</div>

</body>
</html>