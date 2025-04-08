<?php

namespace App\Models;

// Definimos la clase PooEjemplo
class PooEjemplo
{
    // Propiedad privada para almacenar el nombre
    private $nombre;

    // Propiedad privada para almacenar la edad
    private $edad;

    // Constructor de la clase, se ejecuta al crear una instancia de la clase
    public function __construct($nombre, $edad)
    {
        // Asignamos el valor del parámetro $nombre a la propiedad $nombre
        $this->nombre = $nombre;
        // Asignamos el valor del parámetro $edad a la propiedad $edad
        $this->edad = $edad;
    }

    // Método público para obtener el valor de la propiedad $nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    // Método público para establecer el valor de la propiedad $nombre
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    // Método público para obtener el valor de la propiedad $edad
    public function getEdad()
    {
        return $this->edad;
    }

    // Método público para establecer el valor de la propiedad $edad
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    // Método público para mostrar un saludo
    public function saludar()
    {
        return "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
}

// Crear una instancia de la clase PooEjemplo
$persona = new PooEjemplo("Juan", 25);

// Mostrar el saludo
echo $persona->saludar() . "<br>\n"; // aqui debe mostrar los datos de juan. (. "<br>\n") -> esto parael salto de linea.

// Cambiar el nombre y la edad
$persona->setNombre("Carlos");
$persona->setEdad(30);

// Mostrar el saludo actualizado
echo $persona->saludar() . "<br>\n"; // aqui debe mostrar los datos de carlos.
