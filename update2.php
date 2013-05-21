<?php
error_reporting(E_ERROR | E_PARSE);
$con=mysql_connect("localhost","root","66666666");
mysql_select_db("slide");
for($i=1; $i<=3; $i++) {
	$quote='quote'.$i;
	$source='source'.$i;
	$link='link'.$i;
	$sql="UPDATE quotes SET quote='".$_POST[$quote]."',source='".$_POST[$source]."',link='".$_POST[$link]."' WHERE id = ".$i;
	mysql_query($sql);
}
for($i=1; $i<=2; $i++) {
	$rating='rating'.$i;
	$source='rsource'.$i;
	$link='rlink'.$i;
	$sql="UPDATE ratings SET rating='".$_POST[$rating]."',source='".$_POST[$source]."',link='".$_POST[$link]."' WHERE id = ".$i;
	mysql_query($sql);
}
echo "Updated. Goto <a href='index.html'>Home Page</a>";
?>
