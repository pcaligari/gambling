<?php

namespace Tests\Unit;

use App\Services\InvitesService;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class InvitesServiceTest extends TestCase
{
    /**
     * A basic test we probably don't need unless we're trying to do TDD from first principles.
     */
    public function test_that_class_exists(): void
    {
        $sut  = new InvitesService();
        $this->assertTrue($sut instanceof InvitesService);
    }

    /**
     * To thoroughly exercise our calculation we need lots of precalculated values
     * I've used the function itself (before adding it to the class) to precalculate these test values.
     * This will not let me know the calculation is correct but will let me know if the calculation CHANGES.
     */
    public static function distanceProvider(): array
    {
        return [
            [53.3340285, -6.2535495, 0],
            [53.3340285, -7.2535495, 111],
            [52.986375, -6.043701, 44],
            [51.92893, -10.27699, 473],
            [51.8856167, -10.4240951, 490],
            [52.3191841, -8.5072391, 274],
            [53.807778, -7.714444, 170],
            [53.4692815, -9.436036, 354],
            [54.0894797, -6.18671, 83],
            [53.038056, -7.653889, 159],
            [54.1225, -8.143333, 227],
            [53.1229599, -6.2705202, 23],
            [52.2559432, -7.1048927, 152],
            [52.240382, -6.972413, 144],
            [53.2451022, -6.238335, 9],
            [53.1302756, -6.2397222, 22],
            [53.008769, -6.1056711, 39],
            [53.1489345, -6.8422408, 68],
            [53, -7, 90],
            [51.999447, -9.742744, 414],
            [52.966, -6.463, 46],
            [52.366037, -8.179118, 239],
            [54.180238, -5.920898, 100],
            [53.0033946, -6.3877505, 39],
            [52.228056, -7.915833, 221],
            [54.133333, -6.433333, 90],
            [55.033, -8.112, 278],
            [53.521111, -9.831111, 398],
            [51.802, -9.442, 392],
            [54.374208, -8.371639, 261],
            [53.74452, -7.11167, 105],
            [53.761389, -7.2875, 124],
            [54.080556, -6.361944, 83],
            [52.833502, -8.522366, 258]
        ];

    }

    #[DataProvider('distanceProvider')]
    public function test_distance_calculation(float $testLat, float $testLong, int $distance): void
    {
        $dublinLat = 53.3340285;
        $dublinLong = -6.2535495;
        $sut  = new InvitesService();

        $this->assertEquals($distance, floor($sut->greatCircleDistance($dublinLat,$dublinLong,$testLat,$testLong)));

    }


}
