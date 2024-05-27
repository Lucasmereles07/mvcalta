<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Controller;
use Empresa\App\Models\Auto;
use Empresa\App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        echo 'Welcome to the Home Page!';
    }
    public function nuevo()
    {
        //var_dump($_GET);
        //formulario de autos
        $this->render('persona/nuevo');
    }
    public function crear()
    {
        $mensaje = "";
        try {
            //code...

            $nombre = $_POST['nombre'] ?? "defecto";
            $apellido = $_POST['apellido'] ?? "defecto";
            $email = $_POST['email'] ?? "defecto";
            $fechaNac = $_POST['fechaNac'] ?? "defecto";
            $numero = $_POST['numero'] ?? "defecto";
            $genero = $_POST['genero'] ?? "defecto";
            $pais = $_POST['pais'] ?? "defecto";
            $persona = new Persona($nombre, $apellido, $email, $fechaNac, $numero, $genero, $pais);
            $mensaje = $persona->crear();


            // Crear instancia de Auto
            // $auto = new Auto($marca, $modelo, $fechaCompra);

            // Insertar en la base de datos
            // if ($auto->insertar()) {
            //     $mensaje = "El auto ha sido registrado con éxito.";
            // } else {
            //     $mensaje = "Error al registrar el auto.";
            // }
            $this->render('persona/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
