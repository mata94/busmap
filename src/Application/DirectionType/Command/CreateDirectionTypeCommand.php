<?php

namespace App\Application\DirectionType\Command;

class CreateDirectionTypeCommand
{
    /**
     * @Serializer\Type("string")
     */
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}