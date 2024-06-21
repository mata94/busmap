<?php

namespace App\Application\DirectionType\Command;

use App\Entity\DirectionType;
use App\Repository\DirectionTypeRepository;

class CreateDirectionTypeHandler
{
    public function __construct(
        private DirectionTypeRepository $directionTypeRepository
    ){}

    public function execute(CreateDirectionTypeCommand $command){
        $type = new DirectionType();
        $type->setName($command->getName());

        $this->directionTypeRepository->save($type);
    }
}