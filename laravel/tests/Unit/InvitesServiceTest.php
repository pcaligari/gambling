<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use app\Http\Controllers\InvitesController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $sut  = new InvitesController();
$sut->index()
        $this->assertTrue(true);
    }
}
