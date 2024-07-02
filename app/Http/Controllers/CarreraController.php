<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index()
    {
        return view('Carreras.explorar-carreras');
    }


    public function show($id)
    {
        $carrera = $this->getCarreraById($id);
        return view('Carreras.carrera', compact('carrera'));
    }


    private function getCarreraById($id)
    {
        $carreras = [
            1 => [
                'nombre' => 'Ingeniería Biomédica',
                'descripcion' => 'La Ingeniería Biomédica aplica principios de la ingeniería y ciencias biológicas para crear soluciones en el ámbito de la salud.',
                'duracion' => 5,
                'campo' => 'Hospitales, empresas de dispositivos médicos, investigación biomédica.',
                'universidades' => 'Universidad Nacional, Universidad de Antioquia'
            ],
            2 => [
                'nombre' => 'Ingeniería en Ciencia de la Administración',
                'descripcion' => 'Esta carrera se enfoca en la gestión de recursos y la optimización de procesos en organizaciones.',
                'duracion' => 4,
                'campo' => 'Empresas privadas y públicas, consultorías, administración de proyectos.',
                'universidades' => 'Universidad de los Andes, Universidad del Rosario'
            ],
            3 => [
                'nombre' => 'Ingeniería Civil Arquitectónica',
                'descripcion' => 'Combina conocimientos de la ingeniería civil y la arquitectura para diseñar y construir infraestructuras estéticamente agradables y funcionales.',
                'duracion' => 5,
                'campo' => 'Constructoras, oficinas de diseño arquitectónico, gestión de proyectos.',
                'universidades' => 'Pontificia Universidad Javeriana, Universidad de la Sabana'
            ],
            4 => [
                'nombre' => 'Ingeniería Industrial',
                'descripcion' => 'Se dedica a la optimización de procesos y sistemas de producción para mejorar la eficiencia y reducir costos.',
                'duracion' => 5,
                'campo' => 'Industria manufacturera, empresas de logística, consultorías en eficiencia operativa.',
                'universidades' => 'Universidad de los Andes, Universidad EAFIT'
            ],
            5 => [
                'nombre' => 'Ingeniería Química',
                'descripcion' => 'Involucra la aplicación de principios químicos, físicos y biológicos para desarrollar procesos industriales.',
                'duracion' => 5,
                'campo' => 'Industrias químicas, petroquímicas, farmacéuticas, y ambientales.',
                'universidades' => 'Universidad Nacional, Universidad del Valle'
            ],
            6 => [
                'nombre' => 'Ingeniería de Sistemas',
                'descripcion' => 'Se enfoca en el diseño, desarrollo e implementación de sistemas de información y software.',
                'duracion' => 5,
                'campo' => 'Empresas de tecnología, desarrollo de software, consultorías en sistemas.',
                'universidades' => 'Universidad Nacional, Universidad de Antioquia'
            ]
        ];


        return $carreras[$id] ?? ['nombre' => 'Carrera no encontrada', 'descripcion' => '', 'duracion' => '', 'campo' => '', 'universidades' => ''];
    }
}



