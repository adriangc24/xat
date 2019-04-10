<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8" />
<title>xateja-ho!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<section id="titol">
<h1>xateja-ho!</h1>
</section>
<section id="missatges">
<!--p><span>10:45PM - Homer: </span>Never mind.</p-->
<!--p><span>10:44PM - Marge: </span>Well, who was it?</p-->
<?php

$con = mysqli_connect ('localhost','root','','xat');

if (mysqli_connect_errno()) {
	echo 'Failed to connect to MySql: '.mysqli_connect_error();
}

$sql = "select usuari,text,hora from missatges order by id desc";
$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result)) {
	?><p><span><?php echo $row['hora'] ?> - <?php echo $row['usuari'] ?>: </span><?php echo $row['text'] ?></p><?php
}


mysqli_free_result($result);

mysqli_close($con);

?>
</section>
<section id="formulari">
<form method="post" action="insertar.php">
<input type="text" name="nom" placeholder="el teu nom" size=100%>
<br>
<input type="text" name="missatge" placeholder="el teu missatge" size=100%>
<br>
<div class="boton" align="center">
<input type="submit" name="enviar" value="xateja-ho" class="search" id="search" >
</div>
</form>
<section id="errors">
<p>Error: 1 o mas campos vacíos</p>
</section>
</body>
</html>
