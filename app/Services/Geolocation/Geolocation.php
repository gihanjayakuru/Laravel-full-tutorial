<?php

namespace App\Services\Geolocation;

use App\Services\Map\Map;
use App\Services\Satelite\Satellite;

class Geolocation
{


    private $map;
    private $satellite;

    public function __constructor(Map $map, Satellite $satellite)
    {

        $this->map = $map;
        $this->satellite = $satellite;
    }

    public function search(string $name)
    {
        //..

        $locationInfo = $this->map->findAddress($name);

        return $this->satellite->pinpoint(info: $locationInfo);
    }
}
