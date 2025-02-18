<?php
	if (isset($_POST['save'])) {
		$name=$_POST['name'];
		echo "user name is : ".$name;
		echo "you can  use this form again to enter name ";
		// code...
	}
?>

<form action="php_self.php" method="post" <?php echo $_SERVER['PHP_SELF'];?>>
	<input type="text" name="name"><br>
	<input type="submit" name="save" value="submit"><br>
</form><br>