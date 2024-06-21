<?php

namespace App\Application\Station\Command;

class CreateStationCommand
{
    /**
     * @Serializer\Type("string")
     */
    private string $name;

    /**
     * @Serializer\Type("float")
     */
    private float $lng;

    /**
     * @Serializer\Type("float")
     */
    private float $lat;

    /**
     * @Serializer\Type("float")
     */
    private float $elevation;

    /**
     * @Serializer\Type("float")
     */
    private float $price;

    /**
     * @Serializer\Type("int")
     */
    private int $zoneId;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

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

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getZoneId(): int
    {
        return $this->zoneId;
    }

    public function setZoneId(int $zoneId): void
    {
        $this->zoneId = $zoneId;
    }
}