<?php

namespace App\Application\Direction;

class CreateDirectionCommand
{
    /**
     * @Serializer\Type("string")
     */
    private string $name;

    /**
     * @Serializer\Type("int")
     */
    private int $lineId;

    /**
     * @Serializer\Type("int")
     */
    private int $typeId;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLineId(): int
    {
        return $this->lineId;
    }

    public function setLineId(int $lineId): void
    {
        $this->lineId = $lineId;
    }

    public function getTypeId(): int
    {
        return $this->typeId;
    }

    public function setTypeId(int $typeId): void
    {
        $this->typeId = $typeId;
    }
}