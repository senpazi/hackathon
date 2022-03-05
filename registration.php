<?php
require_once('connection.php');
$fname = $_POST['firstname'];
$lname = $_POST['secondname'];
$iden = $_POST['iden'];
$pwd = $_POST['pwd'];
$num = $_POST['num'];
$num_em = $_POST['num_em'];
$ch = "";
$id = $iden . $num;
$sql = "INSERT INTO information_about_pations (id,firstname , secondname  , num ,
document,iden,pwd,gender, num_em) VALUES($id,'$fname' , '$lname','$num','$ch','$iden','$pwd','$ch','$num_em');";
echo $sql;
$result = mysqli_query($conn , $sql);
if($result)
{
	header("Location: medicard.php");
}
else
{
	echo $sql;
}

?>