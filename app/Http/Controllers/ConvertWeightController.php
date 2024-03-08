<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertWeightController extends Controller
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
        if ($unit == 'kilograms') {
            // Si la unidad es 'kilograms', convierte el valor de kilogramos a libras
            $result = $value * 2.20462;
        } elseif ($unit == 'pounds') {
            // Si la unidad es 'pounds', convierte el valor de libras a kilogramos
            $result = $value / 2.20462;
        } else {
            // Si la unidad no es reconocida, retorna un error en formato JSON
            return response()->json(['error' => 'Unidad no reconocida'], 400);
        }

        // Retorna el resultado de la conversión en formato JSON
        return response()->json(['result' => $result]);
    }
}