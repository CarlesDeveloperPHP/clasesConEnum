<?php
class Equipo{
    private string $nombre;
    private array $jugadores;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
        $this->jugadores = [];
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getJugadores()
    {
        return $this->jugadores;
    }

    public function agregarJugador(Jugador $jugador){
        $this->jugadores[] = $jugador;
    }

    public function buscarPichichi(){
        $goles = 0;
        $pichichi = null;
        foreach ($this->jugadores as $jugador) {
            if($jugador->getGolesFavor() > $goles){
                $goles = $jugador->getGolesFavor();
                $pichichi = $jugador;
            }
        }
        echo "El pichichi es : " . $pichichi->getNombre()."\n";
    }
    

    public function buscarMenosFaltas(){
        $faltas = 100000000;
        $jugadorMenosFaltas = null;
        foreach ($this->jugadores as $jugador) {
            if($jugador->getFaltasCometidas() < $faltas){
                $faltas = $jugador->getFaltasCometidas();
                $jugadorMenosFaltas = $jugador;
            }
        }
        echo "El jugador que recibe menos faltas es: " . $jugadorMenosFaltas->getNombre()."\n";
    }
}
?>
