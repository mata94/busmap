<?php

namespace App\Presentation\Builder;

use App\Model\LinesDataModel;
use App\Presentation\Model\LineTotalModel;

class LinesTotalBuilder
{
    public function __construct(
        private DirectionTotalBuilder $directionTotalBuilder
    ){}

    public function makeSingle(LinesDataModel $linesModel){
        $model = new LineTotalModel();

        $model->setId($linesModel->getLine()->getId());
        $model->setName($linesModel->getLine()->getName());
        $model->setNumber($linesModel->getLine()->getNumber());
        $model->setCircular($linesModel->getLine()->isCircular());

        if($linesModel->getLine()->isCircular()){
            $model->setDirectionAB(
                $this->directionTotalBuilder->makeSingle(
                    $linesModel->getDirections()[0],
                    $linesModel->getDirectionStation()[0]
                )
            );
        }else{
            $model->setDirectionA(
                $this->directionTotalBuilder->makeSingle(
                    $linesModel->getDirections()[0],
                    $linesModel->getDirectionStation()[0]
                )
            );
            $model->setDirectionB(
                $this->directionTotalBuilder->makeSingle(
                    $linesModel->getDirections()[1],
                    $linesModel->getDirectionStation()[1]
                )
            );
        }

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