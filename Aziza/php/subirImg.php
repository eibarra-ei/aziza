<?php
//// subo el archivo al temporal del server #
$target_file = basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


//// codifico el archivo a 64 bits #
$contenidoImagen = file_get_contents($target_file);
$imagen_final = base64_encode($contenidoImagen);


//// abro conexion y grabo imagen en db #
$con = mysqli_connect("localhost","root","","aziza");

mysqli_query($con, "update productos set img='$imagen_final' where(idProducto='2')");

@mysqli_close ($con);


//// elimino archivo del tmp #
unlink($target_file);?>

<meta http-equiv="refresh" content="0; url=index.html">
