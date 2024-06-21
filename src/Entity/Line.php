<?php

namespace App\Entity;

use App\Repository\LineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class Line
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $number = null;

    #[ORM\Column(nullable: true)]
    private ?bool $circular = null;

    /**
     * @var Collection<int, Direction>
     */
    #[ORM\OneToMany(targetEntity: Direction::class, mappedBy: 'line')]
    private Collection $directions;

    public function __construct()
    {
        $this->directions = new ArrayCollection();
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

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): static
    {
        $this->number = $number;

        return $this;
    }

    public function isCircular(): ?bool
    {
        return $this->circular;
    }

    public function setCircular(?bool $circular): static
    {
        $this->circular = $circular;

        return $this;
    }

    /**
     * @return Collection<int, Direction>
     */
    public function getDirections(): Collection
    {
        return $this->directions;
    }

    public function addDirection(Direction $direction): static
    {
        if (!$this->directions->contains($direction)) {
            $this->directions->add($direction);
            $direction->setLine($this);
        }

        return $this;
    }

    public function removeDirection(Direction $direction): static
    {
        if ($this->directions->removeElement($direction)) {
            // set the owning side to null (unless already changed)
            if ($direction->getLine() === $this) {
                $direction->setLine(null);
            }
        }

        return $this;
    }
}
