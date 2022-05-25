<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\MissionRepository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=MissionRepository::class)
 */
class Mission
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\NotBlank(message="ce champ est  obligatoire ")
     *     @Assert\Length(
     *      min = 5,
     *      max = 100,
     *      minMessage = "votre motif doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Votre motif ne peut pas dépasser {{ limit }} caractères"
     * )
     */
    private $motif;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     */
    private $datefinPrevue;



    /**
     * @ORM\Column(type="string" , length=255 ,nullable=true)
     * @Assert\Date
     */
    private $dateFin;

    /**
     * @ORM\ManyToOne(targetEntity=Employe::class, inversedBy="missions")
     */
    private $employe;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDatefinPrevue(): ?\DateTimeInterface
    {
        return $this->datefinPrevue;
    }

    public function setDatefinPrevue(\DateTimeInterface $datefinPrevue): self
    {
        $this->datefinPrevue = $datefinPrevue;

        return $this;
    }



    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    public function setDateFin( $dateFin): self
    {
        $this->dateFin = $dateFin;

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
