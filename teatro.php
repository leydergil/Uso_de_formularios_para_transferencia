<?php
function sillasTeatro($listadoSillas){
    //Se crea la tabla y sus encabezados
echo "<table class='tg' border='1' style='margin:auto;'>";
            echo "<tr>";
            echo "<th colspan='6'>SILLAS DEL TEATRO</th>";
            echo "<tr>";
                /*-- Se crean los encabezados de las tabla*/
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
echo "</table>";
}
?>