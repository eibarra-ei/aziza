<?php

if(isset($_GET['producto'])){
    $mProducto = $_GET['producto'];
    //echo "idP".$mProducto;
}
$con = mysqli_connect("localhost","root","","aziza");

mysqli_set_charset($con,'utf8');

$sqlI = "SELECT * FROM tipoproductos";
$rTipoProducto = mysqli_query($con, $sqlI);


$result= "SELECT * FROM productos WHERE idProducto='$mProducto'";
$DatosProd = mysqli_query($con, $result);
$rowDatosProd = mysqli_fetch_array($DatosProd,MYSQLI_ASSOC);

mysqli_close($con);
?>

<div class="container">
        <div class="col-md-12 text-center"> 
        <h3>Producto</h3> 
        <form action="php/cargarProducto.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="mProducto" id="mProducto" value="<?php echo $mProducto; ?>">   
            <div class="row">
                <div class="col-sm-6">
                    <label><p class="text-center">Tipos de Productos</p></label>
                </div>
                <div class="col-sm-6">
                    <select name="tipoProducto" id="tipoProducto" >
                        <?php
                        While($rowTipoProducto = mysqli_fetch_array($rTipoProducto,MYSQLI_ASSOC)){?>
                            <option value="<?php echo $rowTipoProducto['idTipo']; ?>" ><?php echo $rowTipoProducto['descripcion'];?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label><p class="text-center">Descripcion</p></label>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="descripcion" maxlength="20" id="descripcion" value ="<?php echo $rowDatosProd['nproducto']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label><p class="text-center">Precio</p></label>
                </div>
                <div class="col-sm-6">
                    <input type="number" name="precio" maxlength="5" id="precio" value ="<?php echo $rowDatosProd['precio'];?>">
                </div>
            </div>
            <?php if(isset($_GET['producto'])){ ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p>Imagen de referencia:</p>
                    </div>
                </div>                                        
                <div class="row">
                    <div class="col-sm-12 text-center">
                    <?php $img = $rowDatosProd['img']; echo "<img width='200' border='0' src='data:image/jpg;base64,".$img."'>";?>
                    </div>
                </div>
            </div>
            <?php }?>
            <br><br>
            <div class="row">
                <div class="col s6 offset-s3 borde">
                        <p class=" title center">Seleccione una imagen</p>

                        <input type="file" name="fileToUpload" id="fileToUpload" value ="<?php echo $rowDatosProd['img'];?>">

                </div>
            </div>                                  
            <div class="row">
                <div class="col-sm-10">
                    <input type="submit" name="boton" value="Agregar" class="float-right" id="boton"> 
                </div>
            </div>							
        </form>	
        </div>
    </div>
<br><br>   
