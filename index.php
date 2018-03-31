<!DOCTYPE html>
<html>

	<head>
		<title>Taller: Uso de formularios para transferencia</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="styles.css">
	</head>
	<?php   
	require_once("teatro.php"); // Aqui esta la Funcion para impirmir las sillas del teatro
	require_once("transacciones.php");//Auqui esta la Funcion para Cambiar el esatdo de la Silla.
	//Se ejecuta el if cuando el usuario envie la informacion del formulario
	if(isset($_POST["ejecutar"])){
		//Se captura la información enviada del formulario dentro de las siguientes variables
		$fila = $_POST['fila'];
		$puesto= $_POST['puesto'];
		$accion= $_POST['accion'];
		$cadenaEstadoSilla=$_POST['listadoSillas']; //Se almacena la informacion del Input oculto
		$count=0;
		for($i=0;$i<5;$i++){
			for($j=0;$j<5;$j++){
				$count=5*$i+$j;
				//Se captura cada elemento del Array extrayendo dicho elemento de la cadena
				$listadoSillas[$i][$j]=substr($cadenaEstadoSilla,$count,1);
			}
			$count=0;
		}
		//Se devuelve el arreglo con la informacion nueva que se ingres por el usuario
		$listadoSillas=transaccionesUsuario($fila,$puesto,$accion,$listadoSillas);
		//Se ejecuta la funcion para mostrar el teatro, dado el arreglo con sus modificaciones
		sillasTeatro($listadoSillas);
	}
	//Si el usuario presiona Borrar o se carga la pagina 
	else if(isset($_POST["borrar"]) || !isset($_POST["ejecutar"]))
	{
		$listadoSillas=array(
			array("L","L","L","L","L"),					 
			array("L","L","L","L","L"),
			array("L","L","L","L","L"),
			array("L","L","L","L","L"),
			array("L","L","L","L","L")
		);
		sillasTeatro($listadoSillas);
	}
	?>

	<body>
		<div class="contenedor">
			<table style="margin:auto;">
				<form method="post">
					<!-- Se separa el array $ListEscenario en un String y se oculta-->
					<input id = "escenario" type="text" name="listadoSillas" value="<?php foreach ($listadoSillas as $fila) {foreach ($fila as $puesto){echo $puesto;}}?>"  />
					<!-- Se crean los inputs que van a capturar la información introducida por el usario y las acciones-->
					<tr>
						<td>Escoja su Fila: </td>
						<td>
							<!-- Se muesta la lista con las opciones posibles para la fila-->
							<select name="fila">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Escoja su Puesto: </td>
						<td>
							<!-- Se muesta la lista con las opciones posibles para la puesto-->
							<select name="puesto">
								<option >1</option>
								<option >2</option>
								<option >3</option>
								<option >4</option>
								<option >5</option>
							</select>
						</td>
					</tr>
					<!-- Se muestra el radio button con las acciones posibles-->
					<tr>
						<td>Reservar Puesto: </td>
						<td>
							<input type="radio" name="accion" value="R" />
						</td>
					</tr>
					<tr>
						<td>Comprar Puesto: </td>
						<td>
							<input type="radio" name="accion" value="V" />
						</td>
					</tr>
					<tr>
						<td>Dejar Disponible: </td>
						<td>
							<input type="radio" name="accion" value="L" checked="checked" />
						</td>
					</tr>
					<tr>
						<!-- Se muestran los botones con las acciones de enviar la información o borrar toda la informacion ingresada-->
						<td>
							<input class = "boton" type="submit" value="Ejecutar" name="ejecutar" />
						</td>
						<td>
							<input class = "boton" type="submit" value="Borrar Todo" name="borrar" />
						</td>
					</tr>
				</form>
			</table>
		</div>
	</body>