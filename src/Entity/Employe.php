<?php

namespace App\Entity;

use App\Entity\Prime;
use App\Entity\Titre;
use App\Entity\Avance;
use App\Entity\Conges;
use App\Entity\Mission;
use App\Entity\Service;
use App\Entity\FichePaie;
use App\Entity\Departement;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\GestionSupplementaire;
use App\Repository\EmployeRepository;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



/**
 * @ORM\Entity(repositoryClass=EmployeRepository::class)
 * @UniqueEntity(
 *     fields = {"matricule"} ,
 *     message = "cette matricule est déjà utilisé !"
 * )
 */
class Employe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255 ,  unique=true)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     * @Assert\Positive
     *
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     *  @Assert\Length(
     *      min = 3,
     *      max = 12,
     *      minMessage = "votre nom  doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Votre  nom ne peut pas dépasser {{ limit }} caractères"
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     * @Assert\Length(
     *      min = 3,
     *      max = 12,
     *      minMessage = "votre prenom doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Votre prenom ne peut pas dépasser {{ limit }} caractères"
     * )
     *
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     *  * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *    minMessage = "votre numero cnss doit comporter exactement {{ limit }} caractères",
     *    maxMessage = "votre numero cnss doit comporter exactement {{ limit }} caractères",
     * )
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=8)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
    * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *       minMessage = "votre numero cin doit comporter exactement {{ limit }} caractères",
     *       maxMessage = "votre numero cin doit comporter exactement {{ limit }} caractères",
     * )
     */
    private $cin;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="ce champ est  obligatoire ")

     */
    private $dateNais;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     */
    private $situationFamilial;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\PositiveOrZero
     */
    private $nbreEnfants;

   
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     *     @Assert\Length(
     *      min = 10,
     *      max = 10,
     *       minMessage = "votre numero cnss doit comporter exactement {{ limit }} caractères",
     *       maxMessage = "votre numero cnss doit comporter exactement {{ limit }} caractères",
     * )
  
     */
    private $cnss;

    /**
     * @ORM\Column(type="date")

     */
    private $dateEmbauche;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $echelon;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     */
    private $typeContrat;

    /**
     * @ORM\Column(type="float")
     * @Assert\PositiveOrZero
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     *
     */
    private $salaireBase;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     */
    private $typePaie;

    /**
     * @ORM\ManyToOne(targetEntity=Departement::class, inversedBy="employes")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $departement;

    /**
     * @ORM\ManyToOne(targetEntity=Service::class, inversedBy="employes")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $service;

    /**
     * @ORM\ManyToOne(targetEntity=Titre::class, inversedBy="employes")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ce champ est  obligatoire ")
     */
    private $moyenPaiement;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true )
     */
    private $nomBanque;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $numCompteBanc;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Email( message = "'l'email '{{ value }}' n'est pas un email valide.")
     */
    private $email;

    /**
     * @ORM\ManyToMany(targetEntity=Prime::class , cascade={"persist"})
     */
    private $prime;

    /**
     * @ORM\OneToMany(targetEntity=Conges::class, mappedBy="employe")
     */
    private $conges;

    /**
     * @ORM\OneToMany(targetEntity=Mission::class, mappedBy="employe")
     */
    private $missions;


    /**
     * @ORM\OneToMany(targetEntity=FichePaie::class, mappedBy="employe")
     */
    private $fichePaies;

    /**
     * @ORM\OneToMany(targetEntity=Avance::class, mappedBy="employe")
     */
    private $avances;

    /**
     * @ORM\OneToMany(targetEntity=GestionSupplementaire::class, mappedBy="employe")
     */
    private $gestionSupplementaires;

    /**
     * @ORM\OneToOne(targetEntity=User::class, mappedBy="name", cascade={"persist", "remove"})
     */
    private $user;


    /**
     * @ORM\OneToMany(targetEntity=DatesConges::class, mappedBy="employe")
     */
    private $datesConges;

    /**
     * @ORM\OneToMany(targetEntity=Pointage::class, mappedBy="employe")
     */
    private $pointages;




    public function __construct()
    {
        $this->prime = new ArrayCollection();
        $this->conges = new ArrayCollection();
        $this->missions = new ArrayCollection();
        $this->fichePaies = new ArrayCollection();
        $this->avances = new ArrayCollection();
        $this->gestionSupplementaires = new ArrayCollection();
        $this->matricule = '000'. $this->matricule;
        $this->datesConges = new ArrayCollection();
        $this->pointages = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getDateNais(): ?\DateTimeInterface
    {
        return $this->dateNais;
    }

    public function setDateNais(\DateTimeInterface $dateNais): self
    {
        $this->dateNais = $dateNais;

        return $this;
    }

    public function getSituationFamilial(): ?string
    {
        return $this->situationFamilial;
    }

    public function setSituationFamilial(string $situationFamilial): self
    {
        $this->situationFamilial = $situationFamilial;

        return $this;
    }

    public function getNbreEnfants(): ?int
    {
        return $this->nbreEnfants;
    }

    public function setNbreEnfants(?int $nbreEnfants): self
    {
        $this->nbreEnfants = $nbreEnfants;

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

    public function getDateEmbauche(): ?\DateTimeInterface
    {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche(\DateTimeInterface $dateEmbauche): self
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getEchelon(): ?string
    {
        return $this->echelon;
    }

    public function setEchelon(string $echelon): self
    {
        $this->echelon = $echelon;

        return $this;
    }

    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(string $typeContrat): self
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    public function getSalaireBase(): ?float
    {
        return $this->salaireBase;
    }

    public function setSalaireBase(float $salaireBase): self
    {
        $this->salaireBase = $salaireBase;

        return $this;
    }

    public function getTypePaie(): ?string
    {
        return $this->typePaie;
    }

    public function setTypePaie(string $typePaie): self
    {
        $this->typePaie = $typePaie;

        return $this;
    }

    public function getDepartement(): ?Departement
    {
        return $this->departement;
    }

    public function setDepartement(?Departement $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getTitre(): ?Titre
    {
        return $this->titre;
    }

    public function setTitre(?Titre $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getMoyenPaiement(): ?string
    {
        return $this->moyenPaiement;
    }

    public function setMoyenPaiement(string $moyenPaiement): self
    {
        $this->moyenPaiement = $moyenPaiement;

        return $this;
    }

    public function getNomBanque(): ?string
    {
        return $this->nomBanque;
    }

    public function setNomBanque(string $nomBanque): self
    {
        $this->nomBanque = $nomBanque;

        return $this;
    }

    public function getNumCompteBanc(): ?string
    {
        return $this->numCompteBanc;
    }

    public function setNumCompteBanc(string $numCompteBanc): self
    {
        $this->numCompteBanc = $numCompteBanc;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection<int, Prime>
     */
    public function getPrime(): Collection
    {
        return $this->prime;
    }

    public function addPrime(Prime $prime): self
    {
        if (!$this->prime->contains($prime)) {
            $this->prime[] = $prime;
        }

        return $this;
    }

    public function removePrime(Prime $prime): self
    {
        $this->prime->removeElement($prime);

        return $this;
    }

    public function __toString(): string
    {
        return $this->getNom();
        return $this->getPrenom();
        return $this->prime;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection<int, Conges>
     */
    public function getConges(): Collection
    {
        return $this->conges;
    }

    public function addConge(Conges $conge): self
    {
        if (!$this->conges->contains($conge)) {
            $this->conges[] = $conge;
            $conge->setEmploye($this);
        }

        return $this;
    }

    public function removeConge(Conges $conge): self
    {
        if ($this->conges->removeElement($conge)) {
            // set the owning side to null (unless already changed)
            if ($conge->getEmploye() === $this) {
                $conge->setEmploye(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Mission>
     */
    public function getMissions(): Collection
    {
        return $this->missions;
    }

    public function addMission(Mission $mission): self
    {
        if (!$this->missions->contains($mission)) {
            $this->missions[] = $mission;
            $mission->setEmploye($this);
        }

        return $this;
    }

    public function removeMission(Mission $mission): self
    {
        if ($this->missions->removeElement($mission)) {
            // set the owning side to null (unless already changed)
            if ($mission->getEmploye() === $this) {
                $mission->setEmploye(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection<int, FichePaie>
     */
    public function getFichePaies(): Collection
    {
        return $this->fichePaies;
    }

    public function addFichePaie(FichePaie $fichePaie): self
    {
        if (!$this->fichePaies->contains($fichePaie)) {
            $this->fichePaies[] = $fichePaie;
            $fichePaie->setEmploye($this);
        }

        return $this;
    }

    public function removeFichePaie(FichePaie $fichePaie): self
    {
        if ($this->fichePaies->removeElement($fichePaie)) {
            // set the owning side to null (unless already changed)
            if ($fichePaie->getEmploye() === $this) {
                $fichePaie->setEmploye(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Avance>
     */
    public function getAvances(): Collection
    {
        return $this->avances;
    }

    public function addAvance(Avance $avance): self
    {
        if (!$this->avances->contains($avance)) {
            $this->avances[] = $avance;
            $avance->setEmploye($this);
        }

        return $this;
    }

    public function removeAvance(Avance $avance): self
    {
        if ($this->avances->removeElement($avance)) {
            // set the owning side to null (unless already changed)
            if ($avance->getEmploye() === $this) {
                $avance->setEmploye(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, GestionSupplementaire>
     */
    public function getGestionSupplementaires(): Collection
    {
        return $this->gestionSupplementaires;
    }

    public function addGestionSupplementaire(GestionSupplementaire $gestionSupplementaire): self
    {
        if (!$this->gestionSupplementaires->contains($gestionSupplementaire)) {
            $this->gestionSupplementaires[] = $gestionSupplementaire;
            $gestionSupplementaire->setEmploye($this);
        }

        return $this;
    }

    public function removeGestionSupplementaire(GestionSupplementaire $gestionSupplementaire): self
    {
        if ($this->gestionSupplementaires->removeElement($gestionSupplementaire)) {
            // set the owning side to null (unless already changed)
            if ($gestionSupplementaire->getEmploye() === $this) {
                $gestionSupplementaire->setEmploye(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        // unset the owning side of the relation if necessary
        if ($user === null && $this->user !== null) {
            $this->user->setName(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getName() !== $this) {
            $user->setName($this);
        }

        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, DatesConges>
     */
    public function getDatesConges(): Collection
    {
        return $this->datesConges;
    }

    public function addDatesConge(DatesConges $datesConge): self
    {
        if (!$this->datesConges->contains($datesConge)) {
            $this->datesConges[] = $datesConge;
            $datesConge->setEmploye($this);
        }

        return $this;
    }

    public function removeDatesConge(DatesConges $datesConge): self
    {
        if ($this->datesConges->removeElement($datesConge)) {
            // set the owning side to null (unless already changed)
            if ($datesConge->getEmploye() === $this) {
                $datesConge->setEmploye(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Pointage>
     */
    public function getPointages(): Collection
    {
        return $this->pointages;
    }

    public function addPointage(Pointage $pointage): self
    {
        if (!$this->pointages->contains($pointage)) {
            $this->pointages[] = $pointage;
            $pointage->setEmploye($this);
        }

        return $this;
    }

    public function removePointage(Pointage $pointage): self
    {
        if ($this->pointages->removeElement($pointage)) {
            // set the owning side to null (unless already changed)
            if ($pointage->getEmploye() === $this) {
                $pointage->setEmploye(null);
            }
        }

        return $this;
    }









}
