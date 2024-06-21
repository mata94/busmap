<?php

namespace App\Entity;

use App\Repository\DirectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class Direction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'directions')]
    private ?Line $line = null;

    #[ORM\ManyToOne(inversedBy: 'directions')]
    private ?DirectionType $type = null;

    /**
     * @var Collection<int, DirectionStation>
     */
    #[ORM\OneToMany(targetEntity: DirectionStation::class, mappedBy: 'direction')]
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

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLine(): ?Line
    {
        return $this->line;
    }

    public function setLine(?Line $line): static
    {
        $this->line = $line;

        return $this;
    }

    public function getType(): ?DirectionType
    {
        return $this->type;
    }

    public function setType(?DirectionType $type): static
    {
        $this->type = $type;

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
            $directionStation->setDirection($this);
        }

        return $this;
    }

    public function removeDirectionStation(DirectionStation $directionStation): static
    {
        if ($this->directionStations->removeElement($directionStation)) {
            // set the owning side to null (unless already changed)
            if ($directionStation->getDirection() === $this) {
                $directionStation->setDirection(null);
            }
        }

        return $this;
    }
}
