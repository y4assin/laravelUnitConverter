<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertVolumeController extends Controller
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
        if ($unit == 'liters') {
            // Si la unidad es 'liters', convierte el valor de litros a galones americanos
            $result = $value * 0.264172;
        } elseif ($unit == 'gallons') {
            // Si la unidad es 'gallons', convierte el valor de galones americanos a litros
            $result = $value / 0.264172;
        } else {
            // Si la unidad no es reconocida, retorna un error en formato JSON
            return response()->json(['error' => 'Unidad no reconocida'], 400);
        }

        // Retorna el resultado de la conversión en formato JSON
        return response()->json(['result' => $result]);
    }
}