<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');

$id = $_POST['iden'];
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM information_about_pations WHERE id='$id' AND pwd='$pwd' ;";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		session_start();
		$_SESSION['id'] = $id;
	}
	header("Location: medicard_.php");
}
else
{
	echo $sql;
}
?>