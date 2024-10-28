<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MetricsController extends Controller
{
    public function metricsViews(Request $request) {

        $url = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?';

        // Parámetros opcionales para la consulta, si se requieren
        $params = [
            'url' => $request->get('url'),
            'key' => 'AIzaSyDCrPAzhzWxZbJxPYIEURODTvBFVVRNHbY',
            'category' => $request->get('category', []),
            'strategy' => $request->get('strategy')
        ];

        // Configuración del cliente Guzzle
        $client = new Client([
            'base_uri' => 'https://www.googleapis.com'
        ]);

        try {
            $response = $client->request('GET', $url, [
                'query' => $params,
            ]);

            // Decodificar la respuesta JSON
            $data = json_decode($response->getBody(), true);
            dd($data);
            return response()->json($data);

        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
