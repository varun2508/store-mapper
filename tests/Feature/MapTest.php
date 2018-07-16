<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MapTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMap()
    {
        $response = $this->get('map');

        $response->assertStatus(200);
    }

}
