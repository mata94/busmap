<?php

namespace App\Application\Station\Command;

use App\Entity\Station;
use App\Entity\Zone;
use App\Repository\StationRepository;
use App\Repository\ZoneRepository;

class CreateStationHandler
{
    public function __construct(
        private StationRepository $stationRepository,
        private ZoneRepository $zoneRepository
    )
    {
    }

    public function execute(CreateStationCommand $command){
        if($command->getZoneId() != null ){
            /** @var Zone $zone */
            $zone = $this->zoneRepository->findById($command->getZoneId());

            if($zone == null){
                throw new \Exception("Zone not found.");
            }

            $station = new Station();
            $station->setName($command->getName());
            $station->setLat($command->getLat());
            $station->setLng($command->getLng());
            $station->setElevation($command->getElevation());
            $station->setZone($zone);

            $this->stationRepository->save($station);

        }else{

            $station = new Station();
            $station->setPrice($command->getPrice());
            $station->setName($command->getName());
            $station->setLat($command->getLat());
            $station->setLng($command->getLng());
            $station->setElevation($command->getElevation());

            $this->stationRepository->save($station);
        }

    }
}