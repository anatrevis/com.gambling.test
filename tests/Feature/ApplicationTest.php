<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class ApplicationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response_on_index()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response_on_inviteAffiliates()
    {
        Session::start();
        $response = $this->call('POST', '/inviteAffiliates', ['_token'=> csrf_token(), 'office_id' => '1']);
        $this->assertEquals(200, $response->getStatusCode());
    }
}
