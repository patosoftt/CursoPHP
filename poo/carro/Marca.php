<?php
namespace Carro;
require_once 'CarroBase.php';

Class marca extends CarroBase
{
    private $tipo;
     public function __construct($nombreDueño, $estado, $tipo)
    {
        $this->tipo = $tipo;
        parent::__construct($nombreDueño, $estado);
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function encenderAuto()
    {
        echo 'Encendido!';
    }

}