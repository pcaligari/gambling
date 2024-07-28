<?php
namespace Tests\Feature;

use Illuminate\Testing\TestResponse;
use PHPUnit\Framework\Attributes\Depends;
use Tests\TestCase;

class AffiliateTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_invites_can_be_rendered(): TestResponse
    {
        $response = $this->get('/invites');

        $response->assertStatus(200);

        return $response;
    }


     #[Depends('test_the_invites_can_be_rendered')]
    public function test_the_invites_table_is_present(TestResponse $response) :void
    {
        // Not the best test but it'll do to demonstrate the principle..
        $response->assertSee([
            'Affiliate Id',
            'Name',
            'Lat',
            'Long'
        ]);
    }
}
