<html>
<body>
<?php

$nom=$_POST ['nom'];
$missatge=$_POST ['missatge'];
$hora=date('Y-m-d H:i:s');
if (strlen($nom)==0 or strlen($missatge)==0){
	//die("ERROR: 1 o mas campos vacios");
	header('Location: public_html/error.php');
}
else{
$con = mysqli_connect ('localhost','id9189559_root','P@ssw0rd','id9189559_xat');
$sql = "insert into missatges (usuari,text,hora)values ('$nom','$missatge','$hora')";
$result = mysqli_query($con,$sql);
header('Location: public_html/index.php');
}
?>
</body>
</html>

