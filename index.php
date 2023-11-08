<?php
include 'class/Jugador.php';
include 'class/Equipo.php';


$equipo = new Equipo("Dream Team");
$jugador0 = new Jugador("Jugador 0", 18, EnumPosicion::DEF, 23, 1, 6);
$jugador1 = new Jugador("Jugador 1", 18, EnumPosicion::POR, 11, 1, 8);
$jugador2 = new Jugador("Jugador 2", 18, EnumPosicion::POR, 23, 1, 6);
$jugador3 = new Jugador("Jugador 3", 18, EnumPosicion::DEL, 43, 1, 4);
$jugador4 = new Jugador("Jugador 4", 18, EnumPosicion::DEF, 4, 1, 2);
$jugador5 = new Jugador("Jugador 5", 18, EnumPosicion::MED, 76, 1, 11);
$jugador6 = new Jugador("Jugador 6", 18, EnumPosicion::DEL, 0, 1, 3);

$equipo->agregarJugador($jugador0);
$equipo->agregarJugador($jugador1);
$equipo->agregarJugador($jugador2);
$equipo->agregarJugador($jugador3);
$equipo->agregarJugador($jugador4);
$equipo->agregarJugador($jugador5);
$equipo->agregarJugador($jugador6);

$equipo->buscarPichichi();
$equipo->buscarMenosFaltas();
?>
