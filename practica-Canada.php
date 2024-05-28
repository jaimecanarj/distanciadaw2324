<?php
/**
 * @author Jaime Cañada Arjona
 * @version 1.1
 */
 
/**
 * @param string $fecha1 Fecha inicial de nuestro intervalo
 * @param string $fecha2 Fecha final de nuestro intervalo
 * 
 * @return integer Número de días que hay entre ambas fechas
 * 
 */
function obtener_numero_dias_entre_fechas($fecha1, $fecha2) {
  // Convertimos las fechas a objetos DateTime
  $fecha_inicio = new DateTime($fecha1);
  $fecha_fin = new DateTime($fecha2);
 
  // Calculamos la diferencia entre las fechas
  $intervalo = $fecha_inicio->diff($fecha_fin);
 
  // Obtenemos el número total de días
  $numero_dias = $intervalo->days;
 
  return $numero_dias;
}
 
 /** 
 * @param integer[] $numeros Colección de números a filtrar
 * 
 * @return integer[] Colección de números mayor que 10
 */
function filtrar_numeros_mayores_a_10($numeros) {
    $numeros_filtrados = array();
 
    foreach ($numeros as $numero) {
        if ($numero > 10) {
            $numeros_filtrados[] = $numero;
        }
    }
 
    return $numeros_filtrados;
}
 
?>
