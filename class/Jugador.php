<?php
include 'EnumPosicion.php';
class Jugador{
    private string $nombre;
    private int $edad;
    private EnumPosicion $posicion ;
    private int $golesFavor;
    private int $faltasRecibidas;
    private int $faltasCometidas;

    public function __construct(string $nombre, int $edad, EnumPosicion  $posicion , int $golesFavor, int $faltasRecibidas, int $faltasCometidas){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->posicion = $posicion;
        $this->golesFavor = $golesFavor;
        $this->faltasRecibidas = $faltasRecibidas;
        $this->faltasCometidas = $faltasCometidas;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getPosicion()
    {
        return $this->posicion;
    }

    public function getGolesFavor()
    {
        return $this->golesFavor;
    }

    public function getFaltasRecibidas()
    {
        return $this->faltasRecibidas;
    }

    public function getFaltasCometidas()
    {
        return $this->faltasCometidas;
    }
}
?>
