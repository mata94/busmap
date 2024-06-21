<?php

namespace App\Application\Zone\Command;

use App\Entity\Zone;
use App\Repository\ZoneRepository;

class CreateZoneHandler
{
    public function __construct(
        private ZoneRepository $zoneRepository
    ){}

    public function execute(CreateZoneCommand $command){

        $zone = new Zone();
        $zone->setName($command->getName());
        $zone->setNumber($command->getNumber());

        $this->zoneRepository->save($zone);
    }
}