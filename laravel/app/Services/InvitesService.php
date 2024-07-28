<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class InvitesService
{
    private $jsonObjects = [];
    private $dublinLat = 53.3340285;
    private $dublinLong = -6.2535495;
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    private function loadFromFile(): array
    {
        File::lines(storage_path('app/affiliates.txt'))->each(function ($line) {
            $json = json_decode($line);
            if (
                floor(
                    $this->greatCircleDistance($this->dublinLat, $this->dublinLong, $json->latitude, $json->longitude))
                <= 100
            ) {
                $this->jsonObjects[$json->affiliate_id] = $json;
            }
        });

       return $this->jsonObjects;
    }

    public function greatCircleDistance($lat1,$long1,$lat2,$long2) :float
    {
        $r = 6371.009; // mean Earth radius
        $l1 = deg2rad($long1);
        $l2 = deg2rad($long2);
        $deltaLat = deg2rad(abs($lat1 - $lat2));

        $centralAngle = acos( sin($l1) * sin($l2) + cos($l1) * cos($l2) * cos($deltaLat) );

        return $r * $centralAngle;
    }

    public function getInvites(): array
    {
        $affiliates = $this->loadFromFile();
        ksort($affiliates);
        return $affiliates;
    }
}
