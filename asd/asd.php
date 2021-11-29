<?php
$flag = true;
$contador = 0;
$jugador = 'Kevin';
//Busco el primer juego de kevin ganado
do{
    if($array[$contador]['jugadorCirculo'] == $jugador && $array[$contador]['puntosCirculo'] > $array[$contador]['puntosCruz']){
        $flag = false;
        $numGanador = $contador;
    }
    if($array[$contador]['jugadorCruz'] == $jugador && $array[$contador]['puntosCruz'] > $array[$contador]['puntosCirculo']){
        $flag = false;
        $numGanador = $contador;
    }

    $contador++;
}while($flag && $contador < count($array))
if($flag){
    echo "El jugador $jugador no ha ganado ningún juego o no ha jugado";
}else{
    mostrarJuego($numGanador, $array);
}
//Condicion 1 lo haya encontrado
//Condicion 2 haya terminado el array

