<?php

namespace App\Services;

class InvitesService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
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
}
