<?php

namespace App;
use DateTime;

class Fechas
{
    public function obtenerTimestamp()
    {
        $fecha = new DateTime();
        return $fecha->getTimestamp();
    }
}
