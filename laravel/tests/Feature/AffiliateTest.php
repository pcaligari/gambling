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
        // Looking for an affiliate we know should be in the list to force us to
        // add a list to the view - crappy but lets us make progress quickly
        $response->assertSee([
            'Affiliate Id',
            'Name',
            'Lat',
            'Long',
            'Yosef Giles'
        ]);
    }

    #[Depends('test_the_invites_can_be_rendered')]
    public function test_the_invites_table_is_filtered(TestResponse $response) :void
    {
        // Not the best test but it'll do to demonstrate the principle..
        // Looking for an affiliate we know should be in the list to force us to
        // add a list to the view - crappy but lets us make progress quickly
        $response->assertDontSee([
            'Lance Keith'
        ]);
    }
}
