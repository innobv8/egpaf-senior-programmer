<?php

namespace Tests\Feature\Question3;

use App\Models\QuestionThreeString;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Question3Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_random_alphanumeric_string()
    {
        $response = $this->get('/api/question-3/create');

        $response->assertOk();

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_disable_alphanumeric_string()
    {
        $factory = QuestionThreeString::factory()->create();
        $response = $this->get('/api/question-3/disable/'.$factory['string']);

        $response->assertOk();

        $response->assertStatus(200);
    }
}
