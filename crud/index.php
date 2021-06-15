<h1>Teste NodeMCU</h1>
<h1>Teste NodeMCU</h1>
<?php 
include_once"comm.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);

mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO cliente (nome,email,telefone) VALUES ('$nome', '$email', '$telefone')";
if (mysqli_query($conn, $sql)){

	echo "enviado dados";

}else{

	echo "Deu erro:" . $sql ."<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
