<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoreTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStore()
    {
        $response = $this->get('stores');

        $response->assertStatus(200);
    }

    public function testStoreCreate()
    {
        $response = $this->json('POST', 'stores/store', [
            'name' => 'Disney Store',
            'address' => '1540 Broadway',
            'city' => 'New York',
            'state' => 'NY',
            'zip' => '10036',
            'phone' => '+1 212-626-2910',
        ]);

        $response->assertStatus(302)
                ->assertLocation('stores');
    }

}
