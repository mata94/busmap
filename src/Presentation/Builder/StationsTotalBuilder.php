<?php

namespace App\Presentation\Builder;

use App\Entity\DirectionStation;
use App\Entity\Station;
use App\Presentation\Model\PositionStationModel;
use App\Presentation\Model\StationsTotalModel;

class StationsTotalBuilder
{
    public function makeSingle(DirectionStation $directionStation){

        $model = new StationsTotalModel();
        $model->setId($directionStation->getStation()->getId());
        $model->setName($directionStation->getStation()->getName());
        if($directionStation->getStation()->getZone() != null){
            $model->setZone($directionStation->getStation()->getZone()->getNumber());
        }else{
            $model->setPrice($directionStation->getStation()->getPrice());
        }

        $positionModel = new PositionStationModel();
        $positionModel->setLat($directionStation->getStation()->getLat());
        $positionModel->setLng($directionStation->getStation()->getLng());
        $positionModel->setElevation($directionStation->getStation()->getElevation());

        $model->setPosition($positionModel);

        return $model;

    }

    public function makeCollection(array $collection){
        $returns = [];

        foreach ($collection as $entity){
            $returns[] = $this->makeSingle($entity);
        }

        return $returns;
    }
}