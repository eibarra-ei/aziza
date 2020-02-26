<div class="col-md-6"> 
    <h3>Ingresar</h3> 
    <form action="php/login.php" method="POST">
        <div class="row">
            <div class="col-sm-6">
                <label><p class="text-center">E-Mail:</p></label>
            </div>
            <div class="col-sm-6">
                <input type="email" name="email" id="email" onkeyup="valida()">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label><p class="text-center">Contraseña</p></label>
            </div>
            <div class="col-sm-6">
                <input type="password" name="password" maxlength="10" id="password" onkeyup="valida()">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <input type="submit" name="boton" value="Ingresar" class="float-right" id="boton"> 
            </div>
        </div>							
    </form>	
</div>