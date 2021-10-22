<?php

namespace App;

use DateTime;

class Fechas
{
    public function obtenerTimestamp()
    {
        $fecha = new DateTime();
        $timestamp = $fecha->getTimestamp();
        return date('d M Y H:i:s Z', $timestamp);
    }

    public function obtenerFechaActual()
    {
        $fechaActual = getDate();
        return $fechaActual;
    }

    public function edadPersona($fechaNacimiento)
    {
        $fecha_nacimiento = new DateTime($fechaNacimiento);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento);
        return $edad->y;
    }

    public function marcaTiempo()
    {
        return date("M-d-Y", mktime(23, 14, 0, 07, 30, 2013));
    }

    public function obtenerGMT()
    {
        return date("F j, Y, g:i a", gmmktime());
    }

    public function verificarDate()
    {
        return var_dump(checkdate(2, 29, 200));
    }

    public function contarMinutosSegundosVivo()
    {
        $fecha_nacimiento = "22-09-2000";
        $dia_actual = date("Y-m-d");
        $edad_diff = date_diff(date_create($fecha_nacimiento), date_create($dia_actual));
        return $edad_diff->days;
    }
}
