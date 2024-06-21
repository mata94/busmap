<?php

namespace App\Presentation\Builder;

use App\Entity\Direction;
use App\Entity\DirectionStation;
use App\Presentation\Model\DirectionTotalModel;

class DirectionTotalBuilder
{
    public function __construct(
        private StationsTotalBuilder $stationsTotalBuilder
    )
    {
    }

    public function makeSingle(
        Direction $direction,
        array $directionStation
    ):DirectionTotalModel
    {
        $model = new DirectionTotalModel();
        $model->setId($direction->getId());
        $model->setName($direction->getName());
        $model->setDirection($direction->getType()->getName());
        $model->setStations($this->stationsTotalBuilder->makeCollection($directionStation));

        return $model;
    }
}