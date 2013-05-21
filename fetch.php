<?php
include('config.php');
error_reporting(E_ERROR | E_PARSE);
$connection = mysql_connect($mysql_host,$mysql_username,$mysql_password);
mysql_select_db($mysql_database);

$sql="SELECT * FROM quotes";
$query = mysql_query($sql);
$response='';
while($row=mysql_fetch_assoc($query)) {
	$response .= '"'.$row['quote'].'" - ';
	$response .= $row['source'];
	$response .= '('.$row['link'].')';
	$response .= "<br>";

}
$response .= "***************************<br>";
$sql="SELECT * FROM ratings";
$query = mysql_query($sql);
while($row=mysql_fetch_assoc($query)) {
	$response .= "(".$row['rating']." / 10) at ";
	$response .= $row['source'];
	$response .= '('.$row['link'].')';
	$response .= "<br>";


}
mysql_close($con);
echo $response;
?>

