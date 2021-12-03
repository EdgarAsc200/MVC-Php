
	<?php
	include "includes/header.php";
	?>
	
	<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-account"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					ADMINISTRADORES
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabNewAdmin" class="mdl-tabs__tab ">NUEVO</a>
				<a href="#tabListAdmin" class="mdl-tabs__tab is-active">LISTA</a>
			</div>
			<div class="mdl-tabs__panel " id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								NUEVO ADMINISTRADOR
							</div>
							<div class="full-width panel-content">
								<form action="/mvc/admin" method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS ADMINISTRATOR</legend><br>
									    </div>
									    
									    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input name="nombre_usuario" class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin">
												<label  class="mdl-textfield__label" for="NameAdmin">Nombre</label>
												<span class="mdl-textfield__error">Nombre Invalido</span>
											</div>
									    </div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input name="apellido_usuario" class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin">
												<label class="mdl-textfield__label" for="LastNameAdmin">Apellidos</label>
												<span class="mdl-textfield__error">Apelido Invalido</span>
											</div>
										</div>
										
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Detalles de la cuenta</legend><br>
									    </div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input  name="usuario" class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ]*(\.[0-9]+)?" id="UserNameAdmin">
												<label class="mdl-textfield__label" for="UserNameAdmin">Nombre del Usuario</label>
												<span class="mdl-textfield__error">Nombre de Usuario Invalido</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input name="password" class="mdl-textfield__input" type="password" id="passwordAdmin">
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
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addAdmin">Agregar Administrador</div>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabListAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista Administratores
							</div>
							<div class="full-width panel-content">
								<form action="#">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchAdmin">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchAdmin">
											<label class="mdl-textfield__label"></label>
										</div>
									</div>
								</form>
								<?php
								foreach ($result as $row) {
									?>
								<div class="mdl-list">
								  <div class="mdl-list__item mdl-list__item--two-line">
									  <span class="mdl-list__item-primary-content">
										  <i class="zmdi zmdi-account mdl-list__item-avatar"></i>
										  $query->bindParam(":fullname", $fullname, PDO::PARAM_STR);                         
										  <span> <?php echo $row->id_usuario.'.'.$row->usuario; ?></span>
										  <span class="mdl-list__item-sub-title">DNI</span>
									  </span>
									  <a href="/mvc/admin?id=<?php echo $row->id_usuario ?>" style="margin:2px;" class="mdl-list__item-secondary-action" ><i class="fas fa-edit"></i></a>
									  <a  href="/mvc/admin?delete=<?php echo $row->id_usuario ?>"class="mdl-list__item-secondary-action" ><i class="fas fa-trash"></i></a>
								  </div>
								  <li class="full-width divider-menu-h"></li>
							  </div>
							<?php	} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
			<?php include "includes/footer.php"; ?>