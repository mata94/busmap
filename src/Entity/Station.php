<?php

namespace App\Entity;

use App\Repository\StationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class Station
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?float $lng = null;

    #[ORM\Column(nullable: true)]
    private ?float $lat = null;

    #[ORM\Column(nullable: true)]
    private ?float $elevation = null;

    #[ORM\Column(nullable: true)]
    private ?float $price = null;

    #[ORM\ManyToOne(inversedBy: 'stations')]
    private ?Zone $zone = null;

    /**
     * @var Collection<int, DirectionStation>
     */
    #[ORM\OneToMany(targetEntity: DirectionStation::class, mappedBy: 'station')]
    private Collection $directionStations;

    public function __construct()
    {
        $this->directionStations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLng(): ?float
    {
        return $this->lng;
    }

    public function setLng(?float $lng): static
    {
        $this->lng = $lng;

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(?float $lat): static
    {
        $this->lat = $lat;

        return $this;
    }

    public function getElevation(): ?float
    {
        return $this->elevation;
    }

    public function setElevation(?float $elevation): static
    {
        $this->elevation = $elevation;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getZone(): ?Zone
    {
        return $this->zone;
    }

    public function setZone(?Zone $zone): static
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * @return Collection<int, DirectionStation>
     */
    public function getDirectionStations(): Collection
    {
        return $this->directionStations;
    }

    public function addDirectionStation(DirectionStation $directionStation): static
    {
        if (!$this->directionStations->contains($directionStation)) {
            $this->directionStations->add($directionStation);
            $directionStation->setStation($this);
        }

        return $this;
    }

    public function removeDirectionStation(DirectionStation $directionStation): static
    {
        if ($this->directionStations->removeElement($directionStation)) {
            // set the owning side to null (unless already changed)
            if ($directionStation->getStation() === $this) {
                $directionStation->setStation(null);
            }
        }

        return $this;
    }
}
