<?php

namespace App\Service;

use App\Entity\Direction;
use App\Entity\Line;
use App\Model\LinesDataModel;
use App\Repository\DirectionRepository;
use App\Repository\DirectionStationRepository;
use App\Repository\LineRepository;

class LineService
{
    public function __construct(
        private LineRepository $lineRepository,
        private DirectionRepository $directionRepository,
        private DirectionStationRepository $directionStationRepository
    )
    {
    }

    public function findAllLinesData(array $lines){
        $returns = [];

        /** @var Line $line */
        foreach ($lines as $line){
            $directions = $this->directionRepository->findByLine($line);
            $directionStations = [];
            /** @var Direction $direction */
            foreach ($directions as $direction){
                $directionStations[] = $this->directionStationRepository->findALlByDirection($direction);
            }

            $returns[] = new LinesDataModel($line,$directions,$directionStations);
        }

        return $returns;
    }
}