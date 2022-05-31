<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PointageRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=PointageRepository::class)
 */
class Pointage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datePointage;



    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $total;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $listeJours = [];

    /**
     * @ORM\Column(type="string" , length=255 )
     */
    private $mois;

    /**
     * @ORM\ManyToOne(targetEntity=Employe::class, inversedBy="pointages")
     */
    private $employe;



    public function __construct()
    {
        $this->datePointage = new \DateTime('now');
    }

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getDatePointage(): ?\DateTimeInterface
    {
        return $this->datePointage;
    }

    public function setDatePointage(\DateTimeInterface $datePointage): self
    {
        $this->datePointage = $datePointage;

        return $this;
    }



    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getListeJours(): ?array
    {
        return $this->listeJours;
    }

    public function setListeJours( $listeJours): self
    {
        $this->listeJours = $listeJours;

        return $this;
    }

    public function getMois()
    {
        return $this->mois;
    }

    public function setMois( $mois )
    {
        $this-> mois = $mois;
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
