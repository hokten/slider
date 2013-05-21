<html>
	<body>

		<form action="update2.php" method="post">
<?php
error_reporting(E_ERROR | E_PARSE);

		$con=mysql_connect("localhost","root","66666666");
		mysql_select_db("slide");
		$sql="SELECT * FROM quotes";
		$query = mysql_query($sql);
		while($row=mysql_fetch_assoc($query)) {
			echo 'Quote '. $row['id'];
			echo '<input type="text" name="quote'. $row['id'].'" value="'. $row['quote'].'"/> <br />';
			echo 'Source '. $row['id'];
			echo '<input type="text" name="source'. $row['id'].'" value="'. $row['source'].'"/> <br />';
			echo 'Link '. $row['id'];
			echo '<input type="text" name="link'. $row['id'].'" value="'. $row['link'].'"/> <br /><br />';
		}
		$sql="SELECT * FROM ratings";
		$query = mysql_query($sql);
		while($row=mysql_fetch_assoc($query)) {
			echo 'Rating '. $row['id'];
			echo '<input type="text" name="rating'. $row['id'].'" value="'. $row['rating'].'"/> <br />';
			echo 'Source '. $row['id'];
			echo '<input type="text" name="rsource'. $row['id'].'" value="'. $row['source'].'"/> <br />';
			echo 'Link 1'. $row['id'];
			echo '<input type="text" name="rlink'. $row['id'].'" value="'. $row['link'].'"/> <br /><br />';
		}
		mysql_close($con);
?>
  <input type="submit" name="gonder" value="Submit">
</form>
</body>
</html>

