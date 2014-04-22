<!Doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>User datas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table table-hover">
<thead><th>name</th><th>cellphone</th><th>address</th></thead>
<tbody>


<?php
	$con = mysql_connect("localhost","smapcom1_wedding","m.o7a@bj");
	mysql_query("set character set 'utf8'");//读库 
	mysql_query("set names 'utf8'");//写库 
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("smapcom1_wedding", $con);

	$result = mysql_query("SELECT * FROM invitations");

	while($row = mysql_fetch_array($result))
	  {
	  echo "<tr><td>".$row['name'] . " </td><td>" . $row['cellphone'] . "</td><td> " . $row['address']. "</td></tr>";
	  //echo "<br />";
	  }

?>

</tbody>

<tfoot></tfoot>	</table>

<?php 
	echo "<a href='add.html'>add person...</a>";
	mysql_close($con);

?>
</body>
</html>



