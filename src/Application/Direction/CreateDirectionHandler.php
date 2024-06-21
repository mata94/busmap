<?php

namespace App\Application\Direction;

use App\Entity\Direction;
use App\Entity\DirectionType;
use App\Entity\Line;
use App\Repository\DirectionRepository;
use App\Repository\DirectionTypeRepository;
use App\Repository\LineRepository;

class CreateDirectionHandler
{
    public function __construct(
        private DirectionRepository $directionRepository,
        private LineRepository $lineRepository,
        private DirectionTypeRepository $directionTypeRepository
    )
    {
    }

    public function execute(CreateDirectionCommand $command){
        /** @var Line $line */
        $line = $this->lineRepository->findById($command->getLineId());
        if($line == null){
            throw new \Exception("Line not found");
        }

        /** @var DirectionType $type */
        $type = $this->directionTypeRepository->findById($command->getTypeId());
        if($type == null){
            throw new \Exception("Type not found");
        }

        $direction = new Direction();
        $direction->setLine($line);
        $direction->setType($type);
        $direction->setName($command->getName());

        $this->directionRepository->save($direction);
    }
}