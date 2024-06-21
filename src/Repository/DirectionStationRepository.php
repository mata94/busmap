<?php

namespace App\Repository;

use App\Entity\Direction;
use App\Entity\DirectionStation;

class DirectionStationRepository extends BaseRepository
{
    protected function getEntityName()
    {
        return DirectionStation::class;
    }

    public function findALlByDirection(Direction $direction){
        return $this->getRepository()
            ->createQueryBuilder('ds')
            ->select('ds')
            ->where('ds.direction =:direction')
            ->orderBy("ds.number")
            ->setParameter("direction",$direction)
            ->getQuery()
            ->getResult();
    }
}
