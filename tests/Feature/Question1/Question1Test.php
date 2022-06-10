<?php

namespace Tests\Feature\Question1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Question1Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_list_district()
    {
        $response = $this->post('/api/question-1/district', [
            'population_greater_than' => 500000
        ]);

        $response->assertOk();

        $response->assertStatus(200);
    }

    public function test_list_regions()
    {
        $response = $this->post('/api/question-1/region', [
            'population_greater_than' => 600000
        ]);

        $response->assertOk();

        $response->assertStatus(200);
    }
}
