<?php
include "config/conect.php";
$ID = $_GET['ID'];
if(empty($_GET['ID'])){
	header("location: nuevo_abono.php");
}


?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Cuentas Activas del Cliente</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		<div class="listado_clientes">
		<h1>Cuentas Activas</h1>
		
		<table>
			<tr>
				<th>ID Cuenta</th>
				<th>Nombre</th>
				<th>Saldo</th>
				<th>Plazos</th>
				<th>Articulo</th>
				<th>Capital</th>
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


			$query = mysqli_query($conection,"SELECT * FROM cuentas WHERE estatus = 1 AND $ID = id_cliente
					ORDER BY ID ASC
					LIMIT $desde,$por_pagina");

			$result = mysqli_num_rows($query);

				if($result > 0){

			while ($data = mysqli_fetch_array($query)) {
			?>
					<tr>
						<td><?php echo($data['id_abonos'])?></td>
			<?php
					$cliente = $data['id_cliente'];
					$query_clientes = mysqli_query($conection,"SELECT nombre FROM clientes WHERE $cliente = ID");
					$dats = mysqli_fetch_array($query_clientes);
			?>

						<td><?php echo($dats['nombre'])?></td>			
					
			
						<td><?php echo($data['saldo'])?></td>
						<td><?php echo($data['plazos'])?></td>
			<?php
					$articulo = $data['id_articulo_1'];
					$query_articulos = mysqli_query($conection,"SELECT nombre FROM articulos WHERE $articulo = codigo_articulo");
					$datas = mysqli_fetch_array($query_articulos);
			?>			
											
						<td><?php echo($datas['nombre'])?></td>
						
			<?PHP 
					$suma = 0;
					$abonos = $data['id_abonos'];
					$query_abonos = mysqli_query($conection,"SELECT * FROM abonos WHERE $abonos = ID");
										
					while($abono = mysqli_fetch_array($query_abonos)){

					$abono_1 = $abono['abono_1'];
					$abono_2 = $abono['abono_2'];
					$abono_3 = $abono['abono_3'];
					$abono_4 = $abono['abono_4'];
					$abono_5 = $abono['abono_5'];
					$abono_6 = $abono['abono_6'];
					$abono_7 = $abono['abono_7'];
					$abono_8 = $abono['abono_8'];
					$abono_9 = $abono['abono_9'];
					$abono_10 = $abono['abono_10'];
					$abono_11 = $abono['abono_11'];
					$abono_12 = $abono['abono_12'];
					$abono_13 = $abono['abono_13'];
					$abono_14 = $abono['abono_14'];
					$abono_15 = $abono['abono_15'];
					$abono_16 = $abono['abono_16'];
					$abono_17 = $abono['abono_17'];
					$abono_18 = $abono['abono_18'];
					$abono_19 = $abono['abono_19'];
					$abono_20 = $abono['abono_20'];
					$abono_21 = $abono['abono_21'];
					$abono_22 = $abono['abono_22'];
					$abono_23 = $abono['abono_23'];
					$abono_24 = $abono['abono_24'];
					$abono_25 = $abono['abono_25'];
					$abono_26 = $abono['abono_26'];
					$abono_27 = $abono['abono_27'];
					$abono_28 = $abono['abono_28'];
					$abono_29 = $abono['abono_29'];
					$abono_30 = $abono['abono_30'];
					$abono_31 = $abono['abono_31'];
					$abono_32 = $abono['abono_32'];
					$nabonos = $abono['nabonos'];
				}

					$suma = $abono_1 + 	$abono_2 + $abono_3 + $abono_4 + $abono_5 + $abono_6 + $abono_7 + $abono_8 + $abono_9 + $abono_10 + $abono_11 +
					$abono_12 + $abono_13 + $abono_14 + $abono_15 + $abono_16 + $abono_17 + $abono_18 + $abono_19 + $abono_20 + $abono_21 + $abono_22 + $abono_23 + 
					$abono_24 + $abono_25 + $abono_26 + $abono_27 + $abono_28 + $abono_29 + $abono_30 + $abono_31 + $abono_32; 
				
					
			?>			
				
						
						
						<td><?php echo $suma?></td>
			<?php
						
						if($suma == $data['saldo'] ){
			?>				
						<td>Cuenta Saldada</td>
			<?php
								}else{
			?>			
						<td>
							<form action="nuevo.php" method="post" class="form_ventas">
							<input type="hidden" name="Cnombre" value="<?php echo($dats['nombre'])?> ">
							<input type="hidden" name="Csaldo" value="<?php echo($data['saldo'])?>">
							<input type="hidden" name="Csuma" value="<?php echo $suma?>">
							<input type="hidden" name="Cid_abonos" value="<?php echo $data['id_abonos']?>">	
							<input type="hidden" name="Cnom_prod" value="<?php echo($datas['nombre'])?>">		
							<input type="hidden" name="Cposicion" value="<?php echo $nabonos?>">
							<input type="submit" value="Nuevo Abono" class="btn_cuentas">
							</form>
						</td>
					</tr>
			<?php
			}
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