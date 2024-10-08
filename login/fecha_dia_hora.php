<?php
$diasSemamas = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];
$mesesAno = ["Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre"];
date_default_timezone_set("America/Caracas");
$hora = date("h:i:s");
$fecha = date("d");
$mes = date("n");
$dia = date("w");
echo $diasSemamas[$dia] . ", " . $fecha . " de " . $mesesAno[$mes] . " del " . date("Y") . " " . $hora;

?>