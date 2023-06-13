<?php

namespace Tests\Unit;

use App\Http\Controllers\ApplianceController;
use App\Models\Appliance;
use Database\Factories\ApplianceFactory;
use Tests\TestCase;
use Illuminate\Http\JsonResponse;

class ApplianceControllerTest extends TestCase
{
    public function testIndex()
    {
        // Crie alguns registros de teste
        ApplianceFactory::new()->count(3)->create();

        // Instancie o controlador
        $controller = new ApplianceController();

        // Chame o método index do controlador
        $response = $controller->index();

        // Obtenha o conteúdo JSON da resposta
        $json = $response->getContent();

        // Decodifique o conteúdo JSON para um array
        $data = json_decode($json, true);

        // Verifique se o número de registros é igual a 3
        $this->assertCount(3, $data);
    }

}
