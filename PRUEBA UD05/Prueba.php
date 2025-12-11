<?php
require_once "Persona.php";
require_once "Empleado.php";

use Persona;
use Empleado;

$persona1 = new Persona("Ana", "Garcia");
echo "Persona1: " . $persona1;
echo "Nombre: " . $persona1->getNombre();
echo "Cambio de nombre: " . $persona1->setNombre("Adrian");
echo "Nombre cambiado: " . $persona1->getNombre();
echo "Nombre completo: " . $persona1->getNombreCompleto();


$empleado1 = new Empleado("Pepe", "Jimenez", 23 , [666345434, 654755341]);
$empleado2 = new Empleado("Lucia", "Garcia", 345, [696647634, 634257341]);

echo "Nombre completo del Empleado 1: " . $empleado1->getNombreCompleto();
echo "Salario Empleado 1: " . $empleado1->getSalario();
echo "Cambiar salario: " . $empleado1->setSalario();
echo "Este empleado debe para impuestos?" . $empleado1->debePagarImpuestos();

echo "Nombre completo del Empleado 2: " . $empleado2->getNombreCompleto();
echo "Salario Empleado 2: " . $empleado2->getSalario();
echo "Cambiar salario: " . $empleado2->setSalario();
echo "Este empleado debe para impuestos?" . $empleado2->debePagarImpuestos();

echo "Añadir telefono: " . $empleado1->anyadirTelefono();
echo "Mostrar Telefonos: " . listarTelefonos();
echo "Vaciar Listin Telefonico " . vaciarTelefonos();

echo Empleado::toHtml($empleado1);

echo $empleado;