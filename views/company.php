<?php include "includes/header.php"; ?>

		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-balance"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Texto Descripcion
				</p>
			</div>
		</section>
		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						Nueva Empresa
					</div>
					<div class="full-width panel-content">
						<form>
							<div class="mdl-grid">
								<div class="mdl-cell mdl-cell--12-col">
		                            <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS DE LA EMPRESA</legend><br>
		                        </div>
								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="DNICompany">
										<label class="mdl-textfield__label" for="DNICompany">DNI</label>
										<span class="mdl-textfield__error">Numero Invalido</span>
									</div>
								</div>
								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameCompany">
										<label class="mdl-textfield__label" for="NameCompany">Nombre</label>
										<span class="mdl-textfield__error">Nombre Invalido</span>
									</div>
								</div>
								<div class="mdl-cell mdl-cell--12-col">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="addressCompany">
										<label class="mdl-textfield__label" for="addressCompany">Direccion</label>
										<span class="mdl-textfield__error">Direccion Invalida</span>
									</div>
								</div>
								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="email" id="emailCompany">
										<label class="mdl-textfield__label" for="emailCompany">Correo</label>
										<span class="mdl-textfield__error">Correo Invalido</span>
									</div>
								</div>
								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="urlCompany">
										<label class="mdl-textfield__label" for="urlCompany">Sitio Web</label>
										<span class="mdl-textfield__error">Sitio WEeb Invalido</span>
									</div>
								</div>
								<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneCompany">
										<label class="mdl-textfield__label" for="phoneCompany">Telefono</label>
										<span class="mdl-textfield__error">Telefono Invalido</span>
									</div>
								</div>
								<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="faxCompany">
										<label class="mdl-textfield__label" for="faxCompany">Fax</label>
										<span class="mdl-textfield__error">Fax Invalido</span>
									</div>
								</div>
								<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="coinCompany">
										<label class="mdl-textfield__label" for="coinCompany">Moneda</label>
										<span class="mdl-textfield__error">Moneda Invalida</span>
									</div>
								</div>
							</div>
							<p class="text-center">
								<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany">
									<i class="zmdi zmdi-plus"></i>
								</button>
								<div class="mdl-tooltip" for="btn-addCompany">Agregar Empresa</div>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>