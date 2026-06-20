<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: "1.0.0",
    description: "API de Productos y Categorías",
    title: "Prueba FS - API"
)]
class ApiInfo
{
    #[OA\Get(
        path: '/api/docs/ping',
        summary: 'Ping the API',
        responses: [
            new OA\Response(response: 200, description: 'OK')
        ]
    )]
    public function ping() {}
}
