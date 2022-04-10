<?php
include "config/conect.php";
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Cuentas Activas</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		<div class="listado_clientes">
		<h1>Lista de Clientes con Cuentas Activas</h1>
		
			
		<table>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Direccion</th>
				<th>No. Exterior</th>
				<th>Colonia</th>
				<th>Telefono</th>
				<th>Acciones</th>
			</tr>

			<?php
			/*paginador*/
			$sql_register = mysqli_query($conection,"SELECT COUNT(*) as total_registro FROM clientes WHERE estatus = 1");
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


				$query = mysqli_query($conection,"SELECT * FROM clientes WHERE estatus = 1 
					ORDER BY ID ASC
					LIMIT $desde,$por_pagina");

				$result = mysqli_num_rows($query);

				if($result > 0){

					while ($data = mysqli_fetch_array($query)) {
			?>
					<tr>
						<td><?php echo($data['ID'])?></td>
						<td><?php echo($data['nombre'])?></td>
						<td><?php echo($data['apellidos'])?></td>
						<td><?php echo($data['direccion'])?></td>
						<td># <?php echo($data['no'])?></td>
						<td><?php echo($data['colonia'])?></td>
						<td><?php echo($data['telefono'])?></td>
						<td>
							<a href="./cuentas.php?ID=<?php echo $data['ID']?>" class="btn_cuentas" >CUENTAS</a>
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
						echo '<li><a href=?pagina='.$i.'>'.$i.'</a></li>';
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