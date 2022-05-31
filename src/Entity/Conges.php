<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CongesRepository;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=CongesRepository::class)
 */
class Conges
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Employe::class, inversedBy="conges")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     */
    private $employe;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     * 
     */
    private $dateDemande;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
    *
     */
    private $start;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="ce champ est  obligatoire ")

     */
    private $end;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     *   @Assert\Length(
     *      min = 5,
     *      max = 12,
     *      minMessage = "votre titre  doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Votre  titre ne peut pas dépasser {{ limit }} caractères"
     * )
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nbreJours;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $backgroundColor;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $textColor;

    /**
     * @ORM\Column(type="boolean")
     */
    private $allDay;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;


    public function __construct()
    {
        $this->dateDemande = new \DateTime('now');
        $this->statut = 'sans décision';
        $this->nbreJours = 0;


    }
    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande( $dateDemande): self
    {
        $this->dateDemande = $dateDemande;

        return $this;
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

    public function setEnd($end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getNbreJours(): ?string
    {
        return $this->nbreJours;
    }

    public function setNbreJours(string $nbreJours): self
    {
        $this->nbreJours = $nbreJours;

        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor(?string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    public function getTextColor(): ?string
    {
        return $this->textColor;
    }

    public function setTextColor(?string $textColor): self
    {
        $this->textColor = $textColor;

        return $this;
    }


    public function getAllDay(): ?bool
    {
        return $this->allDay;
    }

    public function setAllDay(bool $allDay): self
    {
        $this->allDay = $allDay;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }


}
