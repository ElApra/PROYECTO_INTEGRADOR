<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrientacionController extends Controller
{
    public function index()
    {
        return view('orientacion.orientacion');
    }


    public function show($id)
    {
        $profesor = $this->getProfesorById($id);
        return view('orientacion.detalle-orientacion', compact('profesor'));
    }


    private function getProfesorById($id)
    {
        $profesores = [
            1 => [
                'nombre' => 'Profesor Jirafales',
                'especialidad' => 'Matemáticas',
                'estudio' => 'Universidad Nacional Autónoma de México',
                'descripcion' => 'El Profesor Jirafales es un respetado maestro de matemáticas con una vasta experiencia en la enseñanza.',
                'cursos' => 'Álgebra, Geometría, Cálculo',
                'logros' => 'Ha escrito varios libros sobre métodos de enseñanza de las matemáticas.'
            ],
            2 => [
                'nombre' => 'Profesora María López',
                'especialidad' => 'Ciencias',
                'estudio' => 'Universidad de Buenos Aires',
                'descripcion' => 'La Profesora María López es experta en biología y química con más de 15 años de experiencia en la educación secundaria.',
                'cursos' => 'Biología General, Química Orgánica',
                'logros' => 'Premio a la Excelencia Docente en 2019.'
            ],
            3 => [
                'nombre' => 'Profesor Carlos García',
                'especialidad' => 'Historia',
                'estudio' => 'Universidad de Salamanca',
                'descripcion' => 'Carlos García es un apasionado de la historia, especializado en la historia medieval y moderna.',
                'cursos' => 'Historia Medieval, Historia Contemporánea',
                'logros' => 'Publicación de varios artículos en revistas internacionales de historia.'
            ],
            4 => [
                'nombre' => 'Profesor Martínez',
                'especialidad' => 'Física',
                'estudio' => 'Universidad de Tokio',
                'descripcion' => 'Martínez ha trabajado en varios proyectos de investigación en física teórica y aplicada.',
                'cursos' => 'Mecánica Clásica, Electromagnetismo',
                'logros' => 'Premio Nobel de Física en 2008.'
            ],
            5 => [
                'nombre' => 'Profesor Luis Fernández',
                'especialidad' => 'Literatura',
                'estudio' => 'Universidad Complutense de Madrid',
                'descripcion' => 'Luis Fernández es un reconocido crítico literario y profesor con una gran cantidad de publicaciones en el área.',
                'cursos' => 'Literatura Española, Crítica Literaria',
                'logros' => 'Premio Cervantes por su contribución a la literatura.'
            ],
            6 => [
                'nombre' => 'Profesor Gómez Herandez',
                'especialidad' => 'Química',
                'estudio' => 'Universidad de Harvard',
                'descripcion' => 'Gómez es un experto en química orgánica e inorgánica con una carrera destacada en la investigación.',
                'cursos' => 'Química Orgánica, Química Inorgánica',
                'logros' => 'Ha desarrollado varios compuestos químicos innovadores y ha sido galardonado con múltiples premios.'
            ]
        ];


        return $profesores[$id] ?? ['nombre' => 'Profesor no encontrado', 'especialidad' => 'N/A'];
    }
}




