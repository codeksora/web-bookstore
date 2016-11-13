<?php
echo'
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Agregar libro</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form id="libro" enctype="multipart/form-data">
								<div class="form-group">
									<label>Titulo</label>
									<input type="text" name="titulo" class="form-control" placeholder="Placeholder">
								</div>

								<div class="form-group">
									<label>Url</label>
									<input type="text" name="url" class="form-control" placeholder="Ej. el-resplandor">
								</div>

								<div class="form-group">
									<label>Precio</label>
									<input type="text" name="precio" class="form-control">
								</div>

								<div class="form-group">
									<label>Descripción</label>
									<textarea class="form-control" name="descripcion" rows="3"></textarea>
								</div>

								<div class="form-group">
									<label>Imagen</label>
									<input type="file" name="imagen">
									 <p class="help-block">Insertar imagen para el libro.</p>
								</div>

								<div class="form-group">
									<label>Categoría</label>
									<select class="form-control" name="categoria">
										<option>Seleccionar</option>';
									foreach ($findAllCategorias->result() as $categoria) {
										echo '<option value="' . $categoria->categoriaId . '">' . $categoria->descripcion . '</option>';
									}
									echo'
									</select>
								</div>

								<div class="form-group">
									<label>Autor</label>
									<select class="form-control" name="autor">
										<option>Seleccionar</option>';
									foreach ($findAllAutores->result() as $autor) {
										echo '<option value="' . $autor->autorId . '">' . $autor->nombre . '</option>';
									}
									echo'
									</select>
								</div>
								<input type="hidden" name="method" value="agregar-libro">
								<button type="submit" class="btn btn-primary">Agregar libro</button>
								<button type="reset" class="btn btn-default">Limpiar</button>
							</form>
							</div>
							<div class="col-md-6">
								<form id="categoria">
									<div class="form-group">
										<label>Agregar nueva categoría</label>
										<input type="text" name="categoria" class="form-control" placeholder="categoria" required>
										<input type="text" name="rewrite" class="form-control" placeholder="url" required>
									</div>

									<button type="submit" class="btn btn-primary">Agregar categoría</button>
									<button type="reset" class="btn btn-default">Limpiar</button>
								</form>
								<hr>
								<form id="autor">
									<div class="form-group">
										<label>Agregar nuevo autor</label>
										<input type="text" name="autor" class="form-control" required>
									</div>

									<button type="submit" class="btn btn-primary">Agregar autor</button>
									<button type="reset" class="btn btn-default">Limpiar</button>
								</form>
							</div>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
';
