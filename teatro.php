<?php
function sillasTeatro($listadoSillas)
{
	echo "<div class = 'contenedor2'><table class='tabla'>";
	echo "<tr>";
	echo "<th id='titulo' colspan='6'>SILLAS DEL TEATRO</th>";
	echo "<tr>";
	echo "<th></th>
                <th>Puesto 1</th>
                <th>Puesto 2</th>
                <th>Puesto 3</th>
                <th>Puesto 4</th> 
                <th>Puesto 5</th>
            </tr>";
	//Se recorre el Array mediante con un foreach y se imprime cada fila y columna de la tabla
	$i=1;
	foreach ($listadoSillas as $fila) {
		echo "<tr>";
		echo "<th>";
		echo "Fila ".$i;
		echo "</th>";
		foreach ($fila as $silla) {
			echo "<td>";
			echo $silla;
			echo "</td>";
		}
		echo "</tr>";
		$i++;
	}
	echo "</table></div>";
}
?>