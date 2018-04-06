<?php
namespace Carro;

/*
 * creación de la clase carro y sus metodos setear dueño y obtener dueño.
 * Podemos usar constructores para inicializar propiedades de la clase y evitar los setters.
 */
abstract Class CarroBase
{
    private $dueño;
    private $estado;
    private static $cantidad = 0;
    public function __construct($nombreDueño, $estado)
    {
        $this->dueño = $nombreDueño;
        $this->estado = $estado;
        self::$cantidad++;
    }

    public function setDueño($dueño)
    {
        $this->dueño = $dueño;
    }

    public function mover()
    {
        $this->encenderAuto();
        echo '<br> mover <br>';
    }

    public function getDueño()
    {
        return $this->dueño;
    }
    public function getEstado()
    {
        return $this->estado;
    }

    public static function getCantidad()
    {
        return self::$cantidad;
    }

    public abstract function encenderAuto();

}