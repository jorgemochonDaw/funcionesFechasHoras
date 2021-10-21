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
}
