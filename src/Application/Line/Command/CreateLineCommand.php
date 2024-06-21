<?php

namespace App\Application\Line\Command;

use phpDocumentor\Reflection\Types\Boolean;

class CreateLineCommand
{
    /**
     * @Serializer\Type("string")
     */
    private string $name;

    /**
     * @Serializer\Type("int)
     */
    private int $number;

    /**
     * @Serializer\Type("bool")
     */
    private bool $circular;

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

    public function isCircular(): bool
    {
        return $this->circular;
    }

    public function setCircular(bool $circular): void
    {
        $this->circular = $circular;
    }
}