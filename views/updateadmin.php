<?php include "includes/header.php"; ?>
    
<div class="mdl-tabs__panel " id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								EDITAR ADMINISTRADOR
							</div>
							<div class="full-width panel-content">
                            <?php

                                foreach ($result as $row) {
                                    $nombre = explode(" ", $row->fullname);
									?>
								<form action="/mvc/admin" method="POST">
                                    <input name = "id" type="hidden" value="<?php echo $row->id_usuario; ?>" >
									<input type="hidden" value="update" name="method">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS ADMINISTRATOR</legend><br>
									    </div>
									    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input name="nombre_usuario" value="<?php echo $nombre[0];?>" class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin">
												<label  class="mdl-textfield__label" for="NameAdmin">Nombre</label>
												<span class="mdl-textfield__error">Nombre Invalido</span>
											</div>
									    </div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input name="apellido_usuario" value="<?php echo $nombre[1]; ?>"  class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin">
												<label class="mdl-textfield__label" for="LastNameAdmin">Apellidos</label>
												<span class="mdl-textfield__error">Apelido Invalido</span>
											</div>
										</div>
										
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Detalles de la cuenta</legend><br>
									    </div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input  name="usuario" value="<?php echo $row->username ?>"  class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ]*(\.[0-9]+)?" id="UserNameAdmin">
												<label class="mdl-textfield__label" for="UserNameAdmin">Nombre del Usuario</label>
												<span class="mdl-textfield__error">Nombre de Usuario Invalido</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input name="password" value="<?php echo $row->password; ?>"  class="mdl-textfield__input" type="password" id="passwordAdmin">
												<label class="mdl-textfield__label" for="passwordAdmin">Contraseña</label>
												<span class="mdl-textfield__error">Contraseña Invalida</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Escoje una foto</legend><br>
									    </div>
										<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
											<div class="mdl-grid">
												<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
														<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="avatar-male.png">
														<img src="assets/img/avatar-male.png" alt="avatar" style="height: 45px; width="45px;" ">
														<span class="mdl-radio__label">Foto 1</span>
													</label>
											    </div>
											    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
														<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="avatar-female.png">
														<img src="assets/img/avatar-female.png" alt="avatar" style="height: 45px; width="45px;" ">
														<span class="mdl-radio__label">Foto 2</span>
													</label>
											    </div>
											    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
														<input type="radio" id="option-3" class="mdl-radio__button" name="options" value="avatar-male2.png">
														<img src="assets/img/avatar-male2.png" alt="avatar" style="height: 45px; width="45px;" ">
														<span class="mdl-radio__label">Foto 3</span>
													</label>
											    </div>
											    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
														<input type="radio" id="option-4" class="mdl-radio__button" name="options" value="avatar-female2.png">
														<img src="assets/img/avatar-female2.png" alt="avatar" style="height: 45px; width="45px;" ">
														<span class="mdl-radio__label">Foto 4</span>
													</label>
											    </div>
											</div>
										</div>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin">
											<i class="zmdi zmdi-edit"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addAdmin">Agregar Administrador</div>
									</p>
                                    <?php } ?>
								</form>
									<a href="/mvc/admin" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin">
												<i class="zmdi zmdi-back fas fa-undo-alt"></i>
									</a>
										<div class="mdl-tooltip" for="btn-addAdmin">Agregar Administrador</div>
							</div>
						</div>
					</div>
				</div>
			</div>