<?php

namespace App\Entity;

use App\Repository\DirectionStationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class DirectionStation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'directionStations')]
    private ?Direction $direction = null;

    #[ORM\ManyToOne(inversedBy: 'directionStations')]
    private ?Station $station = null;

    #[ORM\Column(nullable: true)]
    private ?int $number = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDirection(): ?Direction
    {
        return $this->direction;
    }

    public function setDirection(?Direction $direction): static
    {
        $this->direction = $direction;

        return $this;
    }

    public function getStation(): ?Station
    {
        return $this->station;
    }

    public function setStation(?Station $station): static
    {
        $this->station = $station;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): static
    {
        $this->number = $number;

        return $this;
    }
}
