<?php
include "config/conect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Lista de Productos</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	
	<section id="container">
	<?php 
		$busqueda = strtolower($_REQUEST['busqueda']);
		if(empty($busqueda)){
			header("location: lista_productos.php");
		}
	?>
		<div class="listado_productos">
		<h1>Lista de Productos</h1>
			<form action="buscar.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar.." value="<?php echo $busqueda; ?>">
			<input type="submit" value="Buscar" class="btn_search" >
		</form>
			
		<a href="nuevo_producto.php" class="btn_new">Agregar Nuevo Producto</a>
		<table>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Descripcion</th>
				<th>Estock</th>
				<th>Acciones</th>
			</tr>

			<?php
			/*paginador*/
			$sql_register = mysqli_query($conection,"SELECT COUNT(*) as total_registro FROM articulos WHERE 
			nombre LIKE '$busqueda' OR
			descripcion LIKE '$busqueda' AND 		
			estatus = 1
			");
			$result_registros = mysqli_fetch_array($sql_register);
			$total_registro = $result_registros['total_registro'];

			$por_pagina = 10;

			if(empty($_GET['pagina'])){
				$pagina = 1;
			}else{
				$pagina = $_GET['pagina'];
			}

			$desde = ($pagina-1) * $por_pagina;
			$total_paginas = ceil($total_registro/$por_pagina);





				$query = mysqli_query($conection,"SELECT * FROM articulos WHERE 
			nombre LIKE '%$busqueda%' OR
			descripcion LIKE '%$busqueda%' AND estatus = 1 
				ORDER BY codigo_articulo ASC
				LIMIT $desde,$por_pagina
				");

				$result = mysqli_num_rows($query);

				if($result > 0){

					while ($data = mysqli_fetch_array($query)) {
			?>
					<tr>
						<td><?php echo($data['codigo_articulo'])?></td>
						<td><?php echo($data['nombre'])?></td>
						<td><?php echo($data['precio'])?></td>
						<td><?php echo($data['descripcion'])?></td>
						<td><?php echo($data['stok'])?></td>
						<td>
							<a href="editar_producto.php?id=<?php echo($data['codigo_articulo'])?>" class="link_edit">Editar</a>
							<a > | </a> 
							<a href="eliminar_producto.php?id=<?php echo($data['codigo_articulo'])?>" class="link_eliminar">Eliminar</a>
						</td>
					</tr>
			<?php
				}	
				}
			?>	

		</table>
		<div class="paginador">
			<ul>
			<?php 
				if ($pagina != 1) {
					?>
				<li><a href="?pagina=<?php echo 1; ?>"> |< </a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>"> << </a></li>
				<?php }?><?php
					for ($i=1;$i <= $total_paginas; $i++) { 
						if($i == $pagina)
						{
							echo '<li class="paginaActual">'.$i.'</li>';
						}else{
						echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
					}}
				?>
			<?php if($pagina != $total_paginas){ ?>
				<li><a href="?pagina=<?php echo $pagina+1; ?>"> >> </a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?>"> >| </a></li>
			<?php }?>
			</ul>

		</div>
	</div>
	</section>

<?php include "includes/footer.php"; ?>	
</body>
</html>