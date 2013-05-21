<?php
error_reporting(E_ERROR | E_PARSE);

		$con=mysql_connect("localhost","root","66666666");
		mysql_select_db("slide");
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

