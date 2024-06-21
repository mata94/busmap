<?php

namespace App\Presentation\Model;

class PositionStationModel
{
    private float $lng;
    private float $lat;
    private float $elevation;

    public function getLng(): float
    {
        return $this->lng;
    }

    public function setLng(float $lng): void
    {
        $this->lng = $lng;
    }

    public function getLat(): float
    {
        return $this->lat;
    }

    public function setLat(float $lat): void
    {
        $this->lat = $lat;
    }

    public function getElevation(): float
    {
        return $this->elevation;
    }

    public function setElevation(float $elevation): void
    {
        $this->elevation = $elevation;
    }
}