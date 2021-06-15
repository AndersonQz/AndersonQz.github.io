<?php 
include_once"conexao.php";

$red = $_POST['red'];
$green = $_POST['green'];
$blue = $_POST['blue'];
$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);

mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO cliente (red,green,blue) VALUES ('$red', '$green', '$blue')";
if (mysqli_query($conn, $sql)){

	echo "enviado dados";

}else{

	echo "Deu erro:" . $sql ."<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
