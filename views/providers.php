<?php include "includes/header.php"; ?>
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-truck"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					"Texto"
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabNewProvider" class="mdl-tabs__tab is-active">NUEVO</a>
				<a href="#tabListProvider" class="mdl-tabs__tab">LISTA</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewProvider">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nuevo Proveedor
							</div>
							<div class="full-width panel-content">
								<form>
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATA PROVIDER</legend><br>
									    </div>
									    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="DNIProvider">
												<label class="mdl-textfield__label" for="DNIProvider">DNI</label>
												<span class="mdl-textfield__error">Numero Invalido</span>
											</div>
									    </div>
									    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9 ]*(\.[0-9]+)?" id="NameProvider">
												<label class="mdl-textfield__label" for="NameProvider">Nombre</label>
												<span class="mdl-textfield__error">Nombre Invalido</span>
											</div>
									    </div>
									    <div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="addressProvider">
												<label class="mdl-textfield__label" for="addressProvider">Dirección</label>
												<span class="mdl-textfield__error">Dirección Invalida</span>
											</div>
									    </div>
									    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneProvider">
												<label class="mdl-textfield__label" for="phoneProvider">Telefono</label>
												<span class="mdl-textfield__error">Telefono Invalido</span>
											</div>
									    </div>
									    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="email" id="emailProvider">
												<label class="mdl-textfield__label" for="emailProvider">Correo</label>
												<span class="mdl-textfield__error">Correo Invalido</span>
											</div>
									    </div>
									    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="webProvider">
												<label class="mdl-textfield__label" for="webProvider">Sitio Web</label>
												<span class="mdl-textfield__error">Sitio Web Invalido</span>
											</div>
									    </div>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProvider">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addProvider">Agregar proveedor</div>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mdl-tabs__panel" id="tabListProvider">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista Proveedores
							</div>
							<div class="full-width panel-content">
								<form action="#">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchProvider">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchProvider">
											<label class="mdl-textfield__label"></label>
										</div>
									</div>
								</form>
								<div class="mdl-list">
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-truck mdl-list__item-avatar"></i>
											<span>1. Noimbre del provedor</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" ><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-truck mdl-list__item-avatar"></i>
											<span>2. Nombre del Proveedor</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" ><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-truck mdl-list__item-avatar"></i>
											<span>3. Nombre del Proveedor</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" ><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-truck mdl-list__item-avatar"></i>
											<span>4. Nombre del Proveedor</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" ><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-truck mdl-list__item-avatar"></i>
											<span>5. Nombre del Proveedor</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" ><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-truck mdl-list__item-avatar"></i>
											<span>6. Nombre del Proveedor</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" ><i class="zmdi zmdi-more"></i></a>
									</div>
									<li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-truck mdl-list__item-avatar"></i>
											<span>7. Nombre del Proveedor</span>
											<span class="mdl-list__item-sub-title">DNI</span>
										</span>
										<a class="mdl-list__item-secondary-action" ><i class="zmdi zmdi-more"></i></a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>