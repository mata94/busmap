<?php

namespace App\Repository;


use App\Entity\Direction;
use App\Entity\Line;

class DirectionRepository extends BaseRepository
{
    protected function getEntityName()
    {
        return Direction::class;
    }

    public function findByLine(Line $line){
        return $this->findBy([
            "line"=>$line
        ]);
    }
}
