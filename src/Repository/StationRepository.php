<?php

namespace App\Repository;


use App\Entity\Station;

class StationRepository extends BaseRepository
{
    protected function getEntityName()
    {
        return Station::class;
    }
}
