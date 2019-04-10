<html>
<body>
<?php

$nom=mysqli_real_escape_string($_POST ['nom']);
$missatge=mysqli_real_escape_string($_POST ['missatge']);
$hora=date('Y-m-d H:i:s');
if (strlen($nom)==0 or strlen($missatge)==0){
	//die("ERROR: 1 o mas campos vacios");
	header('Location: error.php');
}
else{
$con = mysqli_connect ('localhost','root','','xat');
$sql = "insert into missatges (usuari,text,hora)values ('$nom','$missatge','$hora')";
$result = mysqli_query($con,$sql);
header('Location: index.php');
}
?>
</body>
</html>

