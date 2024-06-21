<?php

namespace App\Application\DirectionStation\Command;

use App\Entity\Direction;
use App\Entity\DirectionStation;
use App\Entity\Station;
use App\Repository\DirectionRepository;
use App\Repository\DirectionStationRepository;
use App\Repository\StationRepository;

class CreateDirectionStationHandler
{
    public function __construct(
        private DirectionStationRepository $directionStationRepository,
        private DirectionRepository $directionRepository,
        private StationRepository $stationRepository
    ){}

    public function execute(CreateDirectionStationCommand $command){
        /** @var Direction $direction */
        $direction = $this->directionRepository->findById($command->getDirectionId());
        if($direction == null){
            throw new \Exception("Direction not found");
        }

        foreach ($command->getStations() as $stationData){
            /** @var Station $station */
            $station = $this->stationRepository->findById($stationData["stationId"]);

            if($station == null){
                throw new \Exception("Station not found");
            }

            $directionStation = new DirectionStation();
            $directionStation->setDirection($direction);
            $directionStation->setStation($station);
            $directionStation->setNumber($stationData["number"]);

            $this->directionStationRepository->save($directionStation);
        }
    }
}