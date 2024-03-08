<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertTemperatureController extends Controller
{
    public function __invoke($value, $unit)
    {
        // Verifica si el valor proporcionado es numérico
        if (!is_numeric($value)) {
            // Si el valor no es numérico, retorna un error en formato JSON
            return response()->json(['error' => 'El valor debe ser numérico'], 400);
        }

        // Convierte la unidad a minúsculas para evitar problemas de coincidencia de mayúsculas y minúsculas
        $unit = strtolower($unit);

        // Inicializa el resultado
        $result = 0;

        // Dependiendo de la unidad proporcionada, realiza la conversión correspondiente
        if ($unit == 'celsius') {
            // Si la unidad es 'celsius', convierte el valor de Celsius a Fahrenheit
            $result = ($value * 9 / 5) + 32;
        } elseif ($unit == 'fahrenheit') {
            // Si la unidad es 'fahrenheit', convierte el valor de Fahrenheit a Celsius
            $result = ($value - 32) * 5 / 9;
        } else {
            // Si la unidad no es reconocida, retorna un error en formato JSON
            return response()->json(['error' => 'Unidad no reconocida'], 400);
        }

        // Retorna el resultado de la conversión en formato JSON
        return response()->json(['result' => $result]);
    
}
}
