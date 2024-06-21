<?php

namespace App\Application\DirectionStation\Command;

class CreateDirectionStationCommand
{
    /**
     * @Serializer\Type("int")
     */
    private int $directionId;

    /**
     * @Serializer\Type("array")
     */
    private array $stations;


    public function getDirectionId(): int
    {
        return $this->directionId;
    }

    public function setDirectionId(int $directionId): void
    {
        $this->directionId = $directionId;
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