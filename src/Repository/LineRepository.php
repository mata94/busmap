<?php

namespace App\Repository;


use App\Entity\Line;

class LineRepository extends BaseRepository
{
    protected function getEntityName()
    {
        return Line::class;
    }
}
