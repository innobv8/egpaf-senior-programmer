<?php

namespace Tests\Feature\Question2;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Question2Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_maxi_and_mini()
    {
        $response = $this->get('/api/question-2/12340');

        $response->assertOk();

        $response->assertExactJson([
            "maxi" => "42310",
            "mini" => "10342",
        ]);

        $response->assertStatus(200);
    }
}
