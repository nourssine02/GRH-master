<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AnnonceRepository;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=AnnonceRepository::class)
 */
class Annonce
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\NotBlank(message="ce champ est  obligatoire ")
     *  * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *    minMessage = "votre titre doit comporter  au moins {{ limit }} caractères",
     *    maxMessage = "votre  titre doit  ne peut pas dépasser {{ limit }} caractères",
     * )
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\NotBlank(message="ce champ est  obligatoire ")
     *  * @Assert\Length(
     *      min = 6,
     *      max = 100,
     *    minMessage = "votre contenu  doit comporter au moins  {{ limit }} caractères",
     *    maxMessage = "votre  contenu doit  ne peut pas dépasser {{ limit }} caractères",
     * )
     */
    private $contenu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

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
}
