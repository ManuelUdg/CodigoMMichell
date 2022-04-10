<?PHP 
include"../config/conect.php";

		
	if(!empty($_POST))
	{
		$alert='';
		if(empty($_POST['abono']))
		{
			
		}else{

			$id = $_POST['id'];
			$abono = $_POST['abono'];
			$noabono = $_POST['Cpos'];
			$nabo = $_POST['Cposicion'];
			$Csaldo = $_POST['Csaldo'];
			$Csuma = $_POST['Csuma'];
			
			$Cpos = (int)$nabo + 1;
			$restante = (int)$Csaldo-(int)$Csuma;

			if($abono > $restante)
			{
				$alert='<p class="msg_error">El Abono No puede ser mayor a la deuda actual</p>';		
			}else{
				$Cpos = (int)$nabo + 1;
				$query_insert = mysqli_query($conection,"UPDATE abonos SET $noabono = $abono, nabonos = $Cpos WHERE $id = ID ");
				if($query_insert){
					$alert='<p class="msg_save">El Abono se Agrego Correctamente</p>';
					if($query_insert){
					sleep(3);
					header("location: cuentas.php");
					}
				}else{
					$alert='<p class="msg_error">* Error al Agregar el Abono</p>';
				}
				
		}
	}
	
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Nuevo Abono</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
	<?php
		$Cnombre =$_POST['Cnombre'];
		$Csaldo = $_POST['Csaldo'];
		$Csuma = $_POST['Csuma'];
		$Cid_abonos = $_POST['Cid_abonos'];
		$Cnom_prod = $_POST['Cnom_prod'];
		$Cposicion = $_POST['Cposicion'];
		$Cpos = (int)$Cposicion + 1;
		
				
	?>	
		<div class="form_registro">
			<h1>Nuevo Abono</h1>
			<hr>
			<div class="alert"><?PHP echo isset($alert) ? $alert:'' ?> </div>
			<?php
				$restante = (int)$Csaldo-(int)$Csuma;
			?>
			<form action="" method="post">
				<input name="id" id="id" type="hidden" value="<?php echo $Cid_abonos?>"></input>
				<label for="nombre">Nombre Cliente</label>
				<input value="<?php echo $Cnombre?>"></input>
			
			
				<label for="cuenta">Cuenta</label>
				<input value="<?php echo $Cid_abonos?>   <?php echo $Cnom_prod?>" disabled></input>
				
				<label for="saldo">Saldo</label>
				<input type="text" name="saldo" id="saldo" value="<?php echo $Csaldo?>" disabled>
				<label for="abono">Cantidad a Abonar</label>
				<input type="number" name="abono" id="abono" placeholder="">
				<label for="restante">Restante</label>
				<input type="text" name="restante" id="restante" value="<?php echo $restante?>" disabled>
				<input type="hidden" name="Cposicion" id="Cposicion" value="<?php echo $Cposicion?>">
				<input type="hidden" name="Cposicion" id="Cposicion" value="<?php echo $Cposicion?>">	
				<input type="hidden" name="Cpos" id="Cpos" value="abono_<?php echo $Cpos?>">
				<input type="hidden" name="Cnombre" value="<?php echo $Cnombre?>">
				<input type="hidden" name="Csaldo" value="<?php echo $Csaldo?>">
				<input type="hidden" name="Csuma" value="<?php echo $suma?>">
				<input type="hidden" name="Cid_abonos" value="<?php echo $Cid_abonos?>">
				<input type="hidden" name="Cnom_prod" value="<?php echo $Cnom_prod?>">
			
				
				<input type="submit" value="Guardar Abono" class="btn_save">

			</form>

	</section>

<?php include "includes/footer.php"; ?>	
</body>
</html>