<?php

namespace App\Presentation\Model;

class LineTotalModel
{
    private int $id;
    private string $name;
    private int $number;
    private ?bool $circular;
    private ?DirectionTotalModel $directionA;
    private ?DirectionTotalModel $directionB;
    private ?DirectionTotalModel $directionAB;

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

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    public function getCircular(): ?bool
    {
        return $this->circular;
    }

    public function setCircular(?bool $circular): void
    {
        $this->circular = $circular;
    }

    public function getDirectionA(): ?DirectionTotalModel
    {
        return $this->directionA;
    }

    public function setDirectionA(?DirectionTotalModel $directionA): void
    {
        $this->directionA = $directionA;
    }

    public function getDirectionB(): ?DirectionTotalModel
    {
        return $this->directionB;
    }

    public function setDirectionB(?DirectionTotalModel $directionB): void
    {
        $this->directionB = $directionB;
    }

    public function getDirectionAB(): ?DirectionTotalModel
    {
        return $this->directionAB;
    }

    public function setDirectionAB(?DirectionTotalModel $directionAB): void
    {
        $this->directionAB = $directionAB;
    }
}