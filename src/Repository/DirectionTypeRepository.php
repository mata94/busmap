<?php

namespace App\Repository;


use App\Entity\DirectionType;

class DirectionTypeRepository extends BaseRepository
{
    protected function getEntityName()
    {
        return DirectionType::class;
    }
}
