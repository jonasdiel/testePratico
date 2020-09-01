<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TesteApi extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testeApiMedico()
    {
        $response = $this->get('api/medico');
        $response->assertStatus(200);
    }
}
