<?php

namespace App\Application\Line\Command;

use App\Entity\Line;
use App\Repository\LineRepository;

class CreateLineHandler
{
    public function __construct(
        private LineRepository $lineRepository
    ){}

    public function execute(CreateLineCommand $command){

        $line = new Line();
        $line->setName($command->getName());
        $line->setNumber($command->getNumber());
        $line->setCircular($command->isCircular());

        $this->lineRepository->save($line);
    }
}