<?php

namespace App\Model;

use App\Entity\Line;

class LinesDataModel
{
    public function __construct(
        private Line $line,
        private array $directions,
        private array $directionStation
    ){}

    public function getLine(): Line
    {
        return $this->line;
    }

    public function setLine(Line $line): void
    {
        $this->line = $line;
    }

    public function getDirections(): array
    {
        return $this->directions;
    }

    public function setDirections(array $directions): void
    {
        $this->directions = $directions;
    }

    public function getDirectionStation(): array
    {
        return $this->directionStation;
    }

    public function setDirectionStation(array $directionStation): void
    {
        $this->directionStation = $directionStation;
    }
}