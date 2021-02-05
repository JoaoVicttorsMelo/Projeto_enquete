<?php 
$servidor= "Localhost";
$usuario= "root";
$senha= "";
$dbname= "";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if(!$conn){
	die("falha na conexão:".mysqli_connect_error());
}else{

}
 ?>
