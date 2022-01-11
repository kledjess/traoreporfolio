<?php
// database connection code
if(isset($_POST['tkName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_portfolio');

// get the post records

$tkName = $_POST['tkName'];
$tkEmail = $_POST['tkEmail'];
$tkPhone = $_POST['tkPhone'];
$tkMessage = $_POST['tkMessage'];

// database insert SQL code
$sql = "INSERT INTO `tb_portfolio` (`Id`, `klName`, `klEmail`, `klPhone`, `klMessage`) VALUES ('0', '$tkName', '$tkEmail', '$tkPhone', '$tkMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "<p style='margin-left:300px; color:red; font-weight: 600; font-size: 27px;'> 
	Merci de contacter Klêdjéni Arouna.<p>
	<p style='margin-left:300px; font-weight: 500; font-size: 20px;' >Votre message a bien été envoyé.<p>";
}
 }
else
{
	echo "Rentrez en contact avec Kledjess...";
	
}
?>