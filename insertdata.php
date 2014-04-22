<?php
$con = mysql_connect("localhost","smapcom1_wedding","m.o7a@bj");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("smapcom1_wedding", $con);


$sql = "INSERT INTO `invitations`(`name`, `cellphone`, `count`, `address`, `note`, `relationship`) VALUES ('$_POST[name]', '$_POST[cellphone]', '$_POST[count]', '$_POST[address]', '$_POST[note]', '$_POST[relationship]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added<br/>";
echo "<a href='getdata.php'>person list...</a>";
mysql_close($con);
?>