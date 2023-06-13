<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApplianceApiTest extends TestCase
{
    /**
     * Test the index route.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/api/appliances');

        $response->assertStatus(200);
        $response->assertJsonCount(3);
    }

    /**
     * Test the store route.
     *
     * @return void
     */
    public function testStore()
    {
        $data = [
            'name' => 'Test Appliance',
            'description' => 'This is a test appliance.',
            'voltage' => '220v',
            'brand' => 'Test Brand',
        ];

        $response = $this->post('/api/appliances', $data);

        $response->assertStatus(201);
        $response->assertJson($data);
    }
}
