<?php

namespace App\Presentation\Model;

class DirectionTotalModel
{
    private int $id;
    private string $direction;
    private string $name;
    private array $stations;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDirection(): string
    {
        return $this->direction;
    }

    public function setDirection(string $direction): void
    {
        $this->direction = $direction;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStations(): array
    {
        return $this->stations;
    }

    public function setStations(array $stations): void
    {
        $this->stations = $stations;
    }
}