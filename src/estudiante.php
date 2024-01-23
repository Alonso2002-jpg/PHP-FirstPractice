<?php
namespace MiProyecto\Clases;
class Estudiante
{
    public $id;
    public $nombre;
    public $nota;
    public $imagen;

    public function __construct($nombre, $nota, $imagen)
    {
        $this->id = rand(1, 10);
        $this->nombre = $nombre;
        $this->nota = $nota;
        $this->imagen = $imagen;
    }

}

