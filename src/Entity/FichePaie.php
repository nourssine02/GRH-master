<?php

namespace App\Entity;

use App\Repository\FichePaieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FichePaieRepository::class)
 */
class FichePaie
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
    private $dateJour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $salaireBrut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $retenueCnss;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $salaireImposable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contributionSocialeSolidaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $IRPP;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $netAPayer;

    /**
     * @ORM\ManyToOne(targetEntity=Employe::class, inversedBy="fichePaies")
     */
    private $employe;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $deductionFamiliale;

    /**
     * @ORM\Column(type="date")
     */
    private $datePaiement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deductionFraisProf;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbjTrav;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbjAbs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbjConges;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avances;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $salaireNet;

  
    public function __construct()
    {
        $this->dateJour = new \DateTime('now');

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateJour(): ?\DateTimeInterface
    {
        return $this->dateJour;
    }

    public function setDateJour(\DateTimeInterface $dateJour): self
    {
        $this->dateJour = $dateJour;

        return $this;
    }

    public function getSalaireBrut(): ?string
    {
        return $this->salaireBrut;
    }

    public function setSalaireBrut(string $salaireBrut): self
    {
        $this->salaireBrut = $salaireBrut;

        return $this;
    }

    public function getRetenueCnss(): ?string
    {
        return $this->retenueCnss;
    }

    public function setRetenueCnss(string $retenueCnss): self
    {
        $this->retenueCnss = $retenueCnss;

        return $this;
    }

    public function getSalaireImposable(): ?string
    {
        return $this->salaireImposable;
    }

    public function setSalaireImposable(string $salaireImposable): self
    {
        $this->salaireImposable = $salaireImposable;

        return $this;
    }

    public function getContributionSocialeSolidaire(): ?string
    {
        return $this->contributionSocialeSolidaire;
    }

    public function setContributionSocialeSolidaire(string $contributionSocialeSolidaire): self
    {
        $this->contributionSocialeSolidaire = $contributionSocialeSolidaire;

        return $this;
    }

    public function getIRPP(): ?string
    {
        return $this->IRPP;
    }

    public function setIRPP(string $IRPP): self
    {
        $this->IRPP = $IRPP;

        return $this;
    }

    public function getNetAPayer(): ?string
    {
        return $this->netAPayer;
    }

    public function setNetAPayer(string $netAPayer): self
    {
        $this->netAPayer = $netAPayer;

        return $this;
    }

    public function getEmploye(): ?Employe
    {
        return $this->employe;
    }

    public function setEmploye($employe): self
    {
        $this->employe = $employe;

        return $this;
    }

    public function getDeductionFamiliale(): ?string
    {
        return $this->deductionFamiliale;
    }

    public function setDeductionFamiliale(string $deductionFamiliale): self
    {
        $this->deductionFamiliale = $deductionFamiliale;

        return $this;
    }

    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    public function setDatePaiement($datePaiement): self
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    public function getDeductionFraisProf(): ?string
    {
        return $this->deductionFraisProf;
    }

    public function setDeductionFraisProf(string $deductionFraisProf): self
    {
        $this->deductionFraisProf = $deductionFraisProf;

        return $this;
    }

    public function getNbjTrav(): ?int
    {
        return $this->nbjTrav;
    }

    public function setNbjTrav(int $nbjTrav): self
    {
        $this->nbjTrav = $nbjTrav;

        return $this;
    }

    public function getNbjAbs(): ?int
    {
        return $this->nbjAbs;
    }

    public function setNbjAbs(?int $nbjAbs): self
    {
        $this->nbjAbs = $nbjAbs;

        return $this;
    }

    public function getNbjConges(): ?int
    {
        return $this->nbjConges;
    }

    public function setNbjConges(?int $nbjConges): self
    {
        $this->nbjConges = $nbjConges;

        return $this;
    }

    public function getAvances(): ?string
    {
        return $this->avances;
    }

    public function setAvances(?string $avances): self
    {
        $this->avances = $avances;

        return $this;
    }

    public function getSalaireNet(): ?string
    {
        return $this->salaireNet;
    }

    public function setSalaireNet(string $salaireNet): self
    {
        $this->salaireNet = $salaireNet;

        return $this;
    }

  
}
