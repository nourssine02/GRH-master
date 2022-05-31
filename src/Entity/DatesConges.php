<?php

namespace App\Entity;

use App\Repository\DatesCongesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DatesCongesRepository::class)
 */
class DatesConges
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="date")
     */
    private $start;

    /**
     * @ORM\Column(type="date")
     */
    private $end;

    /**
     * @ORM\ManyToOne(targetEntity=Employe::class, inversedBy="datesConges")
     */
    private $employe;



    public function getId(): ?int
    {
        return $this->id;
    }



    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart( $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd( $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getEmploye(): ?Employe
    {
        return $this->employe;
    }

    public function setEmploye(?Employe $employe): self
    {
        $this->employe = $employe;

        return $this;
    }

}
