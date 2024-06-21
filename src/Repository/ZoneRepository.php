<?php

namespace App\Repository;


use App\Entity\Zone;

class ZoneRepository extends BaseRepository
{
    protected function getEntityName()
    {
        return Zone::class;
    }
}
