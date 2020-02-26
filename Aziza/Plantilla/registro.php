					<div class="col-md-6">
						<h3>Registrarse</h3> 
						<form action="php/registrar.php" method="POST">
							<div class="row">
								<div class="col-sm-6">
									<label><p class="text-center">Nombre</p></label>
								</div>
								<div class="col-sm-6">
									<input type="text" name="nameR" id="nameR" maxlength="10" onkeyup="validaR()">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label><p class="text-center">Apellido</p></label>
								</div>
								<div class="col-sm-6">
									<input type="text" name="surnameR" id="surnameR"  maxlength="10" onkeyup="validaR()">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label><p class="text-center">Tel&eacute;fono</p></label>
								</div>
								<div class="col-sm-6">
									<input type="number" name="telphoneR" id="telphoneR" onkeyup="validaR()">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label><p class="text-center">E-Mail</p></label>
								</div>
								<div class="col-sm-6">
									<input type="email" name="emailR" id="emailR" onkeyup="validaR()">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label><p class="text-center">Contraseña</p></label>
								</div>
								<div class="col-sm-6">
									<input type="password" name="passwordR" id="passwordR" maxlength="10" onkeyup="validaR(),password()">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<label><p class="text-center">Confirmar contraseña</p></label>
								</div>
								<div class="col-sm-6">
									<input type="password" name="passwordRConfirm" id="passwordRConfirm" maxlength="10" onkeyup="validaR(),password()">
									<div id="passok"> </div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<input type="submit" name="botonR" value="Aceptar" class="float-right" id="botonR"> 
								</div>								
							</div>
						</form>
					</div>
