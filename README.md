# Uso de formularios para transferencia de datos con PHP
 
## Actividad de aprendizaje 4
### Evidencia: Taller “Uso de formularios para transferencia”

El propósito de esta evidencia, es permitir que el usuario interactúe y seleccione opciones para una tarea específica.

Usted ha sido contratado para desarrollar una aplicación web con PHP para gestionar las sillas de un pequeño teatro, ya que el gerente quiere ofrecer a sus clientes la posibilidad de reservar y/o comprar sus boletas de entrada a través de internet.

El teatro tiene una sala de 5 filas y cada una cuenta con 5 sillas.

Para cumplir con esta evidencia tenga en cuenta lo siguiente:

1. Realice una interfaz sencilla que le muestre al usuario el teatro y los controles necesarios para que elija la fila y el puesto (<input> tipo text) y, si quiere reservar, comprar o liberar una silla (<input> tipo radio o <select>).
 
 2. Para las transacciones se tienen las siguientes reglas:
- Solo se modifica la información de un puesto a la vez.
- Si el puesto está libre debe aparecer la letra “l” en mayúscula (l), si el puesto está reservado debe mostrar la letra “R” en mayúscula (R), si el puesto está vendido debe aparecer la letra “V” en mayúscula (V).
- Un puesto en estado libre (L) puede ser pasado a estado vendido (V) (mediante la opción comprar) o reservado (R).
- Un puesto en estado reservado (R) puede ser pasado a estado vendido (V) o liberado (L).
- Un puesto en estado vendido (V) no puede cambiar a estado reservado (R) ni liberado (L).
- Siempre que el usuario intente hacer una operación no valida (como pasar un puesto en estado vendido (V) ha estado liberado (L)), el sistema debe mostrarle un mensaje (puede hacerse usando JavaScript) que le indique que la operación no pudo realizarse.

- Elemento de lista 1
- Elemento de lista 2
* Elemento de lista 3
* Elemento de lista 4
+ Elemento de lista 5
+ Elemento de lista 6
