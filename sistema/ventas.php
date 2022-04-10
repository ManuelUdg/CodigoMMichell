<?php
include "config/conect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Ventas</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	
	<section id="container">
				<div class="Produ">
				<div class="New">
	<table>
		<?php
		$i = 0;
		$ids = array();
				if(empty($_POST["IDS"])){
					$id = 0;
				}else{
					$id = $_POST['IDS'];
					array_push($ids);
					
						
			$query = mysqli_query($conection,"SELECT * FROM articulos WHERE estatus = 1 AND $ids = codigo_articulo");

				$result = mysqli_num_rows($query);
					
				$i++;

				if($result > 0){

					while ($data = mysqli_fetch_array($query)) {
		?>
					
					<tr> 
						<td><?php echo($data['nombre'])?></td>
					</tr>
					
				
		<?PHP
		}}}?>
	</table>
				</div>
				
				<div class="Total">
					<label>Subtotal</label>
					<input type="" name="" readonly>
					<label>Iva</label>
					<input type="" name="" readonly>
					<label>Pazos</label>
					<!-- colocar if para plazos dependiendo delmoto a comprar-->
					<select>
						<option value="0">0 Semanas</option>
						<option value="4">4 Semanas</option>
						<option value="8">8 Semanas</option>
						<option value="12">12 Semanas</option>
						<option value="16">16 Semanas</option>
						<option value="20">20 Semanas</option>
						<option value="24">24 Semanas</option>
						<option value="28">28 Semanas</option>
						<option value="32">32 Semanas</option>
					</select>
					<label>Cliente</label>
					<select>
						
			<?php			
			$query = mysqli_query($conection,"SELECT * FROM clientes WHERE estatus = 1 
					");

				$result = mysqli_num_rows($query);

				if($result > 0){

					while ($data = mysqli_fetch_array($query)) {
			?>

						<
						<option value="<?php echo($data['ID'])?>"><?php echo($data['nombre'])?>  <?php echo($data['apellidos'])?></option>
			<?php
		}
				}?>
					</select>
					<label>Tipon de Pago</label>
					<select>
						<option>Efectivo</option>
						<option>Tarjeta Credito</option>
						<option>Tarjeta Debito</option>
						<option>Credito</option>
					</select>
					<input type="submit" value="PAGAR" class="btn_pagar">
				</div>
				</div>
			
			<div class="Products" >
				<label>Productos</label>
				<table>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Estock</th>
				<th></th>
			</tr>
			<?php	
			$query = mysqli_query($conection,"SELECT * FROM articulos WHERE estatus = 1 
				ORDER BY codigo_articulo");

				$result = mysqli_num_rows($query);

				if($result > 0){

					while ($data = mysqli_fetch_array($query)) {
			?>
					<tr>
						<td><form action="" method="post" class="form_ventas">
							<input type="hidden" name="ID" value="<?php echo($data['codigo_articulo'])?>"> </input>
							<input type="submit" Value="<?php echo($data['codigo_articulo'])?>" ></input>
						</form></td>
						<td><?php echo($data['nombre'])?></td>
						<td><?php echo($data['precio'])?></td>
						<td><?php echo($data['stok'])?></td>
						<td><!--<a href="?IDS=<?php echo($data['codigo_articulo'])?>"><img src="./img/mas.png" class="btn_nuevo"></a>-->
							<form action="" method="post" class="form_ventas">
							<input type="hidden" name="IDS" value="<?php echo($data['codigo_articulo'])?>"> 
							<input type="image"  src="./img/mas.png" class="btn_nuevo"></input></form></td>
					</tr>
				
			<?PHP
		}}?>
			</table>
			</div>
	<hr>
			<div class="datas"><!--<?php include("./includes/descripcion.php")?>-->
			<?php
	if(empty($_POST["ID"])){
		$id = 0;
	}else{
		$id = $_POST['ID'];
	
		
			$query = mysqli_query($conection,"SELECT * FROM articulos WHERE estatus = 1 AND $id = codigo_articulo");

				$result = mysqli_num_rows($query);

				if($result > 0){

					while ($data = mysqli_fetch_array($query)) {
			?>
				<table class="descriptions">
					<tr><td>Nombre</td><td>Descripcion</td></tr>
					<tr>
						<td><?php echo($data['nombre'])?></td>
						<td><?php echo($data['descripcion'])?></td>
					</tr>
				</table
				
			<?PHP
					}	}}?>
	
			</table
			
			</div>
			

			</div>
			

		</form>

	</section>

<?php include "includes/footer.php"; ?>	
</body>
</html>