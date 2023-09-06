<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crud con PHP API_FETCH</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


</head>

<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-center">Registro de productos</h3>
                    </div>
					<div class="card-body">
						<form action="" method="post" id="frm">
							<div class="form-group">
								<label for="">Codigo</label>
								<input type="hidden" name="idp" id="idp" value="">
								<input type="text" name="codigo" id="codigo" placeholder="codigo" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Producto</label>
								<input type="text" name="producto" id="producto" placeholder="Descripción"
									class="form-control">
							</div>
							<div class="form-group">
								<label for="">Precio</label>
								<input type="text" name="precio" id="precio" placeholder="precio" class="form-control">
							</div>
							<div class="form-group">
								<label for="">cantidad</label>
								<input type="text" name="cantidad" id="cantidad" placeholder="cantidad"
									class="form-control">
							</div>
							<div class="form-group">
								<input type="botton" value="registrar" name="registar" id="registrar"
									class="btn btn-primary btn-block">
							</div>

						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<table class="table table-hover table-responsive">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Descripción</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody id="resultado">

					</tbody>

				</table>
			</div>
		</div>
	</div>



	<script src="script.js">

	</script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>