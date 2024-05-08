<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";


// Instanciar el objeto

$plantilla = new ControladorPlantilla();

// Ejecutar el metodo

$plantilla->ctrGetPlantilla();