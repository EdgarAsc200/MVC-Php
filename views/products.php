<?php include "includes/header.php"; ?>
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-washing-machine"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					"Texto"
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabNewProduct" class="mdl-tabs__tab is-active">NUEVO</a>
				<a href="#tabListProducts" class="mdl-tabs__tab">LISTA</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nuevo Producto
							</div>
							<div class="full-width panel-content">
								<form>
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Informacion Basica</legend><br>
									    </div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" pattern="-?[0-9- ]*(\.[0-9]+)?" id="BarCode">
												<label class="mdl-textfield__label" for="BarCode">Codigos de Barras</label>
												<span class="mdl-textfield__error"> Codigo de Barras Invalido</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameProduct">
												<label class="mdl-textfield__label" for="NameProduct">Codigos de Barras</label>
												<span class="mdl-textfield__error">Nombre Invalido</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="StrockProduct">
												<label class="mdl-textfield__label" for="StrockProduct">Unidades</label>
												<span class="mdl-textfield__error">Numero Invalido</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[0-9.]*(\.[0-9]+)?" id="PriceProduct">
												<label class="mdl-textfield__label" for="PriceProduct">Precio</label>
												<span class="mdl-textfield__error">Precio Invalido</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="discountProduct">
												<label class="mdl-textfield__label" for="discountProduct">% Descuento</label>
												<span class="mdl-textfield__error">Descuento Invalido</span>
											</div>	
										</div>
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; CATEGORY</legend><br>
									    </div>
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input">
													<option value="" disabled="" selected="">Seleccionar Categoria</option>
													<option value="">Categoria 1</option>
													<option value="">Categoria 2</option>
												</select>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; COMPLEMENTOS DATOS Y MODELOS</legend><br>
									    </div>
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input">
													<option value="" disabled="" selected="">Seleccionar provedor</option>
													<option value="">Proveedor 1</option>
													<option value="">Proveedor 2</option>
												</select>
											</div>
									    </div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="modelProduct">
												<label class="mdl-textfield__label" for="modelProduct">Modelo</label>
												<span class="mdl-textfield__error">Modelo Invalido</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="markProduct">
												<label class="mdl-textfield__label" for="markProduct">Marca</label>
												<span class="mdl-textfield__error">Marca Invalida</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; OTROS DATOS</legend><br>
									    </div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<input type="date" class="mdl-textfield__input">
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input">
													<option value="" disabled="" selected="">Seleccionar Estado</option>
													<option value="">Activado</option>
													<option value="">Desactivado</option>
												</select>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<input type="file">
											</div>
										</div>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProduct">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addProduct">Agregar Producto</div>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mdl-tabs__panel" id="tabListProducts">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<form action="#">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
								<label class="mdl-button mdl-js-button mdl-button--icon" for="searchProduct">
									<i class="zmdi zmdi-search"></i>
								</label>
								<div class="mdl-textfield__expandable-holder">
									<input class="mdl-textfield__input" type="text" id="searchProduct">
									<label class="mdl-textfield__label"></label>
								</div>
							</div>
						</form>
						<nav class="full-width menu-categories">
							<ul class="list-unstyle text-center">
								<li><a >Categoria 1</a></li>
								<li><a >Categoria 2</a></li>
								<li><a >Categoria 3</a></li>
								<li><a >Categoria 4</a></li>
							</ul>
						</nav>
						<div class="full-width text-center" style="padding: 30px 0;">
							<div class="mdl-card mdl-shadow--2dp full-width product-card">
								<div class="mdl-card__title">
									<img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
								</div>
								<div class="mdl-card__supporting-text">
									<small>Stock</small><br>
									<small>Categoria</small>
								</div>
								<div class="mdl-card__actions mdl-card--border">
									Nombre del producto
									<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
										<i class="zmdi zmdi-more"></i>
									</button>
								</div>
							</div>
							<div class="mdl-card mdl-shadow--2dp full-width product-card">
								<div class="mdl-card__title">
									<img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
								</div>
								<div class="mdl-card__supporting-text">
									<small>Cantidad</small><br>
									<small>Categoria</small>
								</div>
								<div class="mdl-card__actions mdl-card--border">
								Nombre del producto
									<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
										<i class="zmdi zmdi-more"></i>
									</button>
								</div>
							</div>
							<div class="mdl-card mdl-shadow--2dp full-width product-card">
								<div class="mdl-card__title">
									<img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
								</div>
								<div class="mdl-card__supporting-text">
									<small>Cantidad</small><br>
									<small>Categoria</small>
								</div>
								<div class="mdl-card__actions mdl-card--border">
									Nombre del Producto
									<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
										<i class="zmdi zmdi-more"></i>
									</button>
								</div>
							</div>
							<div class="mdl-card mdl-shadow--2dp full-width product-card">
								<div class="mdl-card__title">
									<img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
								</div>
								<div class="mdl-card__supporting-text">
									<small>Cantidad</small><br>
									<small>Categoria</small>
								</div>
								<div class="mdl-card__actions mdl-card--border">
									Nombre del Producto
									<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
										<i class="zmdi zmdi-more"></i>
									</button>
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