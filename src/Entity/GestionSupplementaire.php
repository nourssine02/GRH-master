<?php

namespace App\Entity;

use App\Entity\Employe;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\GestionSupplementaireRepository;

/**
 * @ORM\Entity(repositoryClass=GestionSupplementaireRepository::class)
 */
class GestionSupplementaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Employe::class, inversedBy="gestionSupplementaires")
     */
    private $employe;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $jourFerie;

    /**
     * @ORM\Column(type="time" ,nullable=true)
     * @ORM\JoinColumn(nullable=true)
     * @var date
     */
    private $nbreHeurSupp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $montant;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getJourFerie(): ?bool
    {
        return $this->jourFerie;
    }

    public function setJourFerie(?bool $jourFerie): self
    {
        $this->jourFerie = $jourFerie;

        return $this;
    }

    public function getNbreHeurSupp()
    {
        return $this->nbreHeurSupp;
    }

    public function setNbreHeurSupp( $nbreHeurSupp): self
    {
        $this->nbreHeurSupp = $nbreHeurSupp;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }
}
