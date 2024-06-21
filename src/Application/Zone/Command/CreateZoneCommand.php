<?php

namespace App\Application\Zone\Command;

class CreateZoneCommand
{
    /**
     * @Serializer\Type("string")
     */
    private string $name;

    /**
     * @Serializer\Type("int")
     */
    private int $number;

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
}