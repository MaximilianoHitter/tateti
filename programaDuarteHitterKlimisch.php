<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */
/*  Klimisch, Marcia Leonela. FAI-3573. TUDW. marcia.klimisch@est.fi.uncoma.edu.ar. Khaleesi89.
    Duarte, Micaela Florencia. FAI-3252. TUDW. micaela.duarte@est.fi.uncoma.edu.ar. micaeladuarte.
    Hitter, Maximiliano Ariel. FAI-3523. TUDW. maximiliano.hitter@est.fi.uncoma.edu.ar. MaximilianoHitter. 
*/
 
/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/
/** Función para cargar juegos, esta función se usa, al inicio del programa para cargar una colección de juegos (1)
 * @param void
 * @return array
 */
function cargarJuegos()
{
    /*esta usa otras funciones, como la función (5) agregarJuego
    array $juntarColeccion, $unJuego
    */
    $juntarColeccion = array();
    $unJuego = [];
    $unJuego = array(
        'jugadorCruz' => 'PEPE',
        'jugadorCirculo' => 'CARLOS',
        'puntosCruz' => '6',
        'puntosCirculo' => '0'
    );
    $juntarColeccion = agregarJuego($juntarColeccion, $unJuego);
    $unJuego = array(
        'jugadorCruz' => 'CARLOS',
        'jugadorCirculo' => 'MARCIA',
        'puntosCruz' => '0',
        'puntosCirculo' => '6'
    );
    $juntarColeccion = agregarJuego($juntarColeccion, $unJuego);
    $unJuego = array(
        'jugadorCruz' => 'PEPE',
        'jugadorCirculo' => 'MICA',
        'puntosCruz' => '1',
        'puntosCirculo' => '1'
    );
    $juntarColeccion = agregarJuego($juntarColeccion, $unJuego);
    $unJuego = array(
        'jugadorCruz' => 'MICA',
        'jugadorCirculo' => 'MAXI',
        'puntosCruz' => '5',
        'puntosCirculo' => '0'
    );
    $juntarColeccion = agregarJuego($juntarColeccion, $unJuego);
    $unJuego = array(
        'jugadorCruz' => 'SERGIO',
        'jugadorCirculo' => 'CARLOS',
        'puntosCruz' => '0',
        'puntosCirculo' => '5'
    );
    $juntarColeccion = agregarJuego($juntarColeccion, $unJuego);
    $unJuego = array(
        'jugadorCruz' => 'PEPE',
        'jugadorCirculo' => 'MARCIA',
        'puntosCruz' => '1',
        'puntosCirculo' => '1'
    );
    $juntarColeccion = agregarJuego($juntarColeccion, $unJuego);
    $unJuego = array(
        'jugadorCruz' => 'GISELLE',
        'jugadorCirculo' => 'MAXI',
        'puntosCruz' => '0',
        'puntosCirculo' => '5'
    );
    $juntarColeccion = agregarJuego($juntarColeccion, $unJuego);
    $unJuego = array(
        'jugadorCruz' => 'MICA',
        'jugadorCirculo' => 'CARLOS',
        'puntosCruz' => '6',
        'puntosCirculo' => '0'
    );
    $juntarColeccion = agregarJuego($juntarColeccion, $unJuego);
    $unJuego = array(
        'jugadorCruz' => 'PEPE',
        'jugadorCirculo' => 'MAXI',
        'puntosCruz' => '1',
        'puntosCirculo' => '1'
    );
    $juntarColeccion = agregarJuego($juntarColeccion, $unJuego);
    $unJuego = array(
        'jugadorCruz' => 'CARLOS',
        'jugadorCirculo' => 'SERGIO',
        'puntosCruz' => '0',
        'puntosCirculo' => '6'
    );
    $juntarColeccion = agregarJuego($juntarColeccion, $unJuego);
    return $juntarColeccion;
}

/** Funcion para seleccionar opcion, esta función se encarga de presentar por pantalla las opciones del switch y validar lo ingresado(2)
 * @param void
 * @return int
 */
function seleccionarOpcion()
{
    /*Se utiliza la siguiente función (3) para validar el dato ingresado
    int $val1, $val2, $numerito
    */
    echo "1) Jugar al tateti.\n";
    echo "2) Mostrar un juego.\n";
    echo "3) Mostrar el primer juego ganador.\n";
    echo "4) Mostrar porcentaje de juegos ganados.\n";
    echo "5) Mostrar resumen de Jugador.\n";
    echo "6) Mostrar listado de juegos Ordenado por jugador O.\n";
    echo "7) Salir.\n";
    $val1 = 1;
    $val2 = 7;
    $numerito = validarValor($val1, $val2);
    return $numerito;
}

/** Funcion para pedir número en un rango y validarlo, se pasan los valores del rango por parametro y dentro de la funcion se le pide al usuario (3)
 * @param int $valor1
 * @param int $valor2
 * @return int
 */
function validarValor($valor1, $valor2)
{
    /* int $seleccion
     */
    echo "Ingrese un número entre el " . $valor1 . " y el " . $valor2 . "\n";
    $seleccion = trim(fgets(STDIN));
    while ($seleccion > $valor2 || $seleccion < $valor1) {
        echo "Número inválido, debe estar entre " . $valor1 . " y el " . $valor2 . "\n";
        $seleccion = trim(fgets(STDIN));
    }
    return $seleccion;
}

/** Funcion para mostrar el juego buscado, se ingresa un int y un array por parametro y se muestra $array[$int] por pantalla (4)
 * @param int $num
 * @param array $juegos
 * @return void
 */
function mostrarJuego($num, $juegos)
{
    
    if($juegos[$num]['puntosCruz'] > $juegos[$num]['puntosCirculo']){
        echo "***********************************\n";
        echo "Juego TATETI: " . $num . " (gano X)\n";
        echo "Jugador X: " . $juegos[$num]['jugadorCruz'] . " obtuvo " . $juegos[$num]['puntosCruz'] . " puntos\n";
        echo "Jugador O: " . $juegos[$num]['jugadorCirculo'] . " obtuvo " . $juegos[$num]['puntosCirculo'] . " puntos\n";
        echo "***********************************\n";
    }elseif($juegos[$num]['puntosCirculo'] > $juegos[$num]['puntosCruz']){
        echo "***********************************\n";
        echo "Juego TATETI: " . $num . " (gano O)\n";
        echo "Jugador X: " . $juegos[$num]['jugadorCruz'] . " obtuvo " . $juegos[$num]['puntosCruz'] . " puntos\n";
        echo "Jugador O: " . $juegos[$num]['jugadorCirculo'] . " obtuvo " . $juegos[$num]['puntosCirculo'] . " puntos\n";
        echo "***********************************\n";
    }else{
        echo "***********************************\n";
        echo "Juego TATETI: " . $num . " (empate)\n";
        echo "Jugador X: " . $juegos[$num]['jugadorCruz'] . " obtuvo " . $juegos[$num]['puntosCruz'] . " puntos\n";
        echo "Jugador O: " . $juegos[$num]['jugadorCirculo'] . " obtuvo " . $juegos[$num]['puntosCirculo'] . " puntos\n";
        echo "***********************************\n";
    }
}

/** Funcion para agregar juego, se pasa por parametro un array de coleccion y un array de juego y se añade el juego a la ultima posicion de la coleccion (5) 
 * @param array $coleccion
 * @param array $seleccionado
 * @return array
 */
function agregarJuego($coleccion, $seleccionado)
{
    if (count($coleccion) > 0) {
        $coleccion[count($coleccion)] = $seleccionado;
    } else {
        $coleccion[0] = $seleccionado;
    }
    return $coleccion;
}


/** Funcion para obtener primer juego ganado, se pasa por parametro una coleccion y un nombre, y se devuelve la posicion del array donde se encontro como ganador ese nombre (6)
 * @param array $todosJuegos
 * @param string $nombreJugador
 * @return int
 */
function primerGanado($todosJuegos, $nombreJugador)
{
    /*retornar número de indice del jugador que gano o sino retornar -1
    int $cont, $numGanador
    boolean $flag1
    */
    $cont = 0;
    $flag1 = false;
    $numGanador = -1;
    do{
        if ($nombreJugador == $todosJuegos[$cont]['jugadorCruz'] && ($todosJuegos[$cont]['puntosCruz'] > $todosJuegos[$cont]['puntosCirculo'])) {
            $flag1 = true;
            $numGanador = $cont;
        }elseif($nombreJugador == $todosJuegos[$cont]['jugadorCirculo'] && ($todosJuegos[$cont]['puntosCirculo'] > $todosJuegos[$cont]['puntosCruz'])){
            $flag1 = true;
            $numGanador = $cont;
        }
        $cont++;
    }while(($cont < (count($todosJuegos))) && $flag1);

    return $numGanador;

}

//Funcion para obtener resumen, se pasa por parametro la coleccion y el nombre y se muestran todos los datos de ese nombre (7)


/** Funcion pedir valor de simbolo, validarlo y devolverlo (8)
 * @param void
 * @return string
 */
function obtenerSimbolo()
{
    /*pedir simbolo, validarlo y devolverlo
    boolean $validado
    string $simbol
    */
    echo "Por favor ingrese un símbolo, sea X o O:\n";
    $validado = true;
    $simbol = trim(fgets(STDIN));
    $simbol = strtoupper($simbol);
    while ($validado) {
        if ($simbol == "X") {
            $validado = false;
        } elseif ($simbol == "O") {
            $validado = false;
        } else {
            echo "Ingrese un caracter válido: \n";
            $simbol = trim(fgets(STDIN));
            $simbol = strtoupper($simbol);
        }
    }
    return $simbol;
}


/** Función retornar juegos ganados/perdidos, se pasa por parametro la coleccion de juegos (9)
 * @param array $muchosJuegos
 * @return int
 */
function obtenerGanados($muchosJuegos)
{
    /*Devolver array con los juegos con ganador/perdedor solo
    int $ganados, $t
    */
    $ganados = 0;
    for ($t = 0; $t < count($muchosJuegos); $t++) {
        if ($muchosJuegos[$t]['puntosCruz'] !=1 && $muchosJuegos[$t]['puntosCirculo'] !=1) {
            $ganados++;
        }
    }
    return $ganados;
}

/** Función para obtener la cantidad de ganados segun un simbolo (10)
 * @param array $pocosJuegos
 * @param string $simboloElegido
 * @return int
 */
function ganadosSegunSimbolo($pocosJuegos, $simboloElegido)
{
    /*devuelve la cantidad de juegos ganados segun simbolo
    int $contadorX, $contadorO, $numeroSimbolo, $j
    */
    $contadorX = 0;
    $contadorO = 0;
    for ($j = 0; $j < count($pocosJuegos); $j++) {
        if ($pocosJuegos[$j]['puntosCruz'] > $pocosJuegos[$j]['puntosCirculo']) {
            $contadorX++;
        } elseif ($pocosJuegos[$j]['puntosCirculo'] > $pocosJuegos[$j]['puntosCruz']) {
            $contadorO++;
        }
    }
    if ($simboloElegido == "X") {
        $numeroSimbolo = $contadorX;
    } elseif ($simboloElegido == "O") {
        $numeroSimbolo = $contadorO;
    }
    return $numeroSimbolo;
}


//Función para obtener los juegos del jugador O (11)


/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

/** Declaración de variables: */
/** Array $juego, $jugados, $jugadosCrudo
* int $numJuego, $i, $opcion, $j, $cont, $valorUno , $valorDos ,$soloGyP, $cantGanadosSimbol, $l,
* string $nombreGanador , $simbolo, $jugadorResumen, 
* boolean $flag, $salir,  $bandera, 
* float $promedioSimbolo, 
*/
/** Inicialización de variables: */
$jugadosCrudo = [];
$juego = [];
$salir = true;

/** Proceso: */
$jugadosCrudo = cargarJuegos();
/**Switch para la botonera o menu selector */

do {
    $opcion = seleccionarOpcion();

    switch ($opcion) {
        case 1:
            /**Jugar tateti */
            $juego = jugar();
            imprimirResultado($juego);
            /** Guardar resultado en crudo*/
            $jugadosCrudo = agregarJuego($jugadosCrudo, $juego);
            break;
        case 2:
            /** Mostrar un juego*/
            if (count($jugadosCrudo) > 0) {
                echo "Ingrese el número de juego que desea ver: \n";
                $valorUno = 0;
                $valorDos = (count($jugadosCrudo)-1);
                $numJuego = validarValor($valorUno, $valorDos);
                /** Mostrar el juego pedido */
                mostrarJuego($numJuego, $jugadosCrudo);
            } else {
                echo "No hay ningún juego registrado.\n";
            }
            break;
            case 3:
                /** Mostrar el primer juego ganador*/
                if (count($jugadosCrudo) > 0) {
                    echo "Ingrese el nombre del Jugador a buscar: ";
                    $nombreGanador = trim(fgets(STDIN));
                    $nombreGanador = strtoupper($nombreGanador);
                    $numeroDeGanador = primerGanado($jugadosCrudo, $nombreGanador);
                    if ($numeroDeGanador >= 0) {
                        mostrarJuego($numeroDeGanador, $jugadosCrudo);
                    } else {
                        echo "El jugador " . $nombreGanador . " no ha ganado ningún juego.\n";
                    }
                } else {
                    echo "No hay ningún juego registrado.\n";
                }
                break;
            case 4:
                /** Mostrar porcentaje de juegos ganados*/ 
                if (count($jugadosCrudo) > 0) {
                    $simbolo = obtenerSimbolo();
                    $soloG = obtenerGanados($jugadosCrudo);
                    $cantGanadosSimbol = ganadosSegunSimbolo($jugadosCrudo, $simbolo);
                    $promedioSimbolo = ($cantGanadosSimbol / $soloG) * 100;
                    echo $simbolo . " ganó el " . $promedioSimbolo . "% de las partidas ganadas.\n";
                } else {
                    echo "No hay ningún juego registrado.\n";
                }
                break;
            case 5:
                /** Mostrar resumen de jugador*/
                if (count($jugadosCrudo) > 0) {
                    //Aca va el codigo
                } else {
                    echo "No hay ningún juego registrado.\n";
                }
                break;
            case 6:
                /** Mostrar listado de juegos ordenado por jugador O */
                if (count($jugadosCrudo) > 0) {
                    //Aca va el codigo
                } else {
                    echo "No hay ningún juego registrado.\n";
                }
                break;
            case 7:
                /**salir*/
                $salir = false;
                break;
            default:
                echo "Ingrese un número del 1 al 7.\n";
                echo "\n";
        }
    } while ($salir);
    