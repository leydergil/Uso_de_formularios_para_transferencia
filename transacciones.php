<?php
function transaccionesUsuario($fila,$puesto,$accion,$listadoSillas){
        //Se evalua la opción del usuario dependiendo de lo contenido en el Array
        //Si el puesto elegido por el usuario esta libre se modifica el Array con la acción elegida
        if($listadoSillas[$fila-1][$puesto-1]=="L"){
            $listadoSillas[$fila-1][$puesto-1]=$accion;
        }
        //Si el puesto elegido por el usuario esta vendido se muestra una alerta
        else if($listadoSillas[$fila-1][$puesto-1]=="V"){
            echo "<script>alert('El puesto ya se encuentra vendido";
            if($accion=="L"){echo " no se puede liberar porque ya esta vendido";}
            else if($accion=="R"){echo " no se puede reservar porque ya esta vendido";}
            else if($accion=="V"){echo " El puesto ya esta vendido y no se puede vover a vender";}
            echo "')";
            echo "</script>'";
        }
        //Si el puesto elegido por el usuario esta reservado y la accion es reservar se muestra una alerta indicando
        else if($listadoSillas[$fila-1][$puesto-1]=="R" && $accion=="R"){
            echo "<script>
            alert('El puesto ya esta Reservado');
            </script>'";
        }
        //Si el puesto esta reservado y la accion es diferente a reservar se modifica el array con la accion elegida por el usuario
        else if($listadoSillas[$fila-1][$puesto-1]=="R" && $accion!="R"){
            $listadoSillas[$fila-1][$puesto-1]=$accion;
        }
        //Se retorna el Array modificado
        return $listadoSillas;
}
?>