<?php
require_once 'estudiante.php';
use MiProyecto\Clases\Estudiante;

$notas = array(new Estudiante("Alonso", rand(1, 10), "https://picsum.photos/200"),
    new Estudiante("Luis",  rand(1, 10), "https://picsum.photos/200"),
    new Estudiante( "Pedro",  rand(1, 10), "https://picsum.photos/200"),
    new Estudiante( "Juan",  rand(1, 10), "https://picsum.photos/200"),
    new Estudiante("Maria",  rand(1, 10), "https://picsum.photos/200"));

$mediaNotas = array_reduce($notas, function ($total, $alumno) {
    return $total + $alumno->nota;
}) / count($notas);

$alumnosApro = count(array_filter($notas, function ($alumno) {
    return $alumno->nota >= 5;
}));

$alumnosDesapro = count($notas) - $alumnosApro;
?>