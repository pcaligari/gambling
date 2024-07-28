<?php

namespace Tests\Unit;

use App\Http\Services\InvitesService;
use PHPUnit\Framework\TestCase;

class InvitesServiceTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_class_exists(): void
    {
        $sut  = new InvitesService();
        $this->assertTrue($sut instanceof InvitesService);
    }
}
