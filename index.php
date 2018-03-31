<!DOCTYPE html>
<html>

<head>
    <title>Taller: Uso de formularios para transferencia</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="styles.css">
</head>
<?php   
require_once("teatro.php"); //Funciones para impirmir las sillas del teatro
require_once("transacciones.php");//Funcion para Cambiar el esatdo de la Silla.
//Se ejecuta el if cuando el usuario envie la informacion del formulario
if(isset($_POST["Enviar"])){
                //Se captura la información enviada del formulario dentro de las siguientes variables
                $fila = $_POST['fila'];
                $puesto= $_POST['puesto'];
                $accion= $_POST['accion'];
                $StringEscenario=$_POST['ListEscenario'];
                //El String generado en el input oculto se convierte en un Array
                $count=0;
                for($i=0;$i<5;$i++){
                    for($j=0;$j<5;$j++){
                        $count=5*$i+$j;
                        //Cada captura cada elemento del Array extrayendo dicho elemento del String
                        $ListEscenario[$i][$j]=substr($StringEscenario,$count,1);
                    }
                    $count=0;
                }
        //Se devuelve el Array con la información modificada por el usuario
        $ListEscenario=transaccionesUsuario($fila,$puesto,$accion,$ListEscenario);
        //Se ejecuta la funcion para mostrar el Escenario, dado el Array modificado
        sillasTeatro($ListEscenario);
}
//Se ejecuta el else if cuando el usario borra la informacion del formulario y cuando se carga la página
else if(isset($_POST["Reset"]) || !isset($_POST["Enviar"])){
    $ListEscenario=array(array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"));
    sillasTeatro($ListEscenario);
}
?>
    
<body>
    <table style="margin:auto;">
        <form method="post">
            <!-- Se separa el array $ListEscenario en un String y se oculta-->
            <input type="text" name="ListEscenario" value="<?php foreach ($ListEscenario as $fila) {foreach ($fila as $puesto){echo $puesto;}}?>"  />
            <!-- Se crean los inputs que van a capturar la información introducida por el usario y las acciones-->
            <tr>
                <td>Fila: </td>
                <td>
                    <!-- Se muesta la lista con las opciones posibles para la fila-->
                    <select name="fila">
                        <option size="4">1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Puesto: </td>
                <td>
                    <!-- Se muesta la lista con las opciones posibles para la puesto-->
                    <select name="puesto">
                        <option size="4">1</option>
                        <option size="4">2</option>
                        <option size="4">3</option>
                        <option size="4">4</option>
                        <option size="4">5</option>
                    </select>
                </td>
            </tr>
            <!-- Se muestra el radio button con las acciones posibles-->
            <tr>
                <td>Reservar: </td>
                <td>
                    <input type="radio" name="accion" value="R" />
                </td>
            </tr>
            <tr>
                <td>Comprar: </td>
                <td>
                    <input type="radio" name="accion" value="V" />
                </td>
            </tr>
            <tr>
                <td>Liberar: </td>
                <td>
                    <input type="radio" name="accion" value="L" checked="checked" />
                </td>
            </tr>
            <tr>
                <!-- Se muestran los botones con las acciones de enviar la información o borrar toda la informacion ingresada-->
                <td>
                    <input type="submit" value="Enviar" name="Enviar" />
                </td>
                <td>
                    <input type="submit" value="Borrar" name="Reset" />
                </td>
            </tr>
        </form>
    </table>
</body>