<?php

namespace App\Presentation\Model;

class StationsTotalModel
{
    private int $id;
    private string $name;
    private ?int $zone;
    private ?float $price;
    private PositionStationModel $position;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getZone(): ?int
    {
        return $this->zone;
    }

    public function setZone(?int $zone): void
    {
        $this->zone = $zone;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    public function getPosition(): PositionStationModel
    {
        return $this->position;
    }

    public function setPosition(PositionStationModel $position): void
    {
        $this->position = $position;
    }
}