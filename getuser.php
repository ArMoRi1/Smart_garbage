<?php
$q = intval($_GET['q']);
include_once ('include/database.php');
global $conn;
$conn = mysqli_connect('localhost','root','');
if (!$conn) {
  die('Could not connect: ' . mysqli_error($conn));
}

mysqli_select_db($conn,"garbagedb");
$sql="SELECT * FROM garbages WHERE id = '".$q."'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
	echo "<h3>".$row['name']."</h3>";
	echo "<p><span>Location:</span>       " .$row['location']. "</p>";
}
mysqli_close($conn);
?>	
	<a href="#map" class="btn view_map">View map</a>