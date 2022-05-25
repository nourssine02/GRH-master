<?php

namespace App\Entity;

use App\Repository\SocieteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SocieteRepository::class)
 */
class Societe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cnss;

    /**
     * @ORM\Column(type="float")
     */
    private $tauxCnss;

    /**
     * @ORM\Column(type="float")
     */
    private $tauxImpots;

    /**
     * @ORM\Column(type="float")
     */
    private $tauxAccedent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCnss(): ?string
    {
        return $this->cnss;
    }

    public function setCnss(string $cnss): self
    {
        $this->cnss = $cnss;

        return $this;
    }

    public function getTauxCnss(): ?float
    {
        return $this->tauxCnss;
    }

    public function setTauxCnss(float $tauxCnss): self
    {
        $this->tauxCnss = $tauxCnss;

        return $this;
    }

    public function getTauxImpots(): ?float
    {
        return $this->tauxImpots;
    }

    public function setTauxImpots(float $tauxImpots): self
    {
        $this->tauxImpots = $tauxImpots;

        return $this;
    }

    public function getTauxAccedent(): ?float
    {
        return $this->tauxAccedent;
    }

    public function setTauxAccedent(float $tauxAccedent): self
    {
        $this->tauxAccedent = $tauxAccedent;

        return $this;
    }
}
