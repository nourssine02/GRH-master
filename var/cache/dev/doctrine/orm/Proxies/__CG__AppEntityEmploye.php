<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Employe extends \App\Entity\Employe implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'matricule', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'sexe', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'cin', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'dateNais', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'situationFamilial', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'nbreEnfants', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'cnss', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'dateEmbauche', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'echelon', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'typeContrat', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'salaireBase', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'typePaie', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'departement', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'service', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'moyenPaiement', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'nomBanque', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'numCompteBanc', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'prime', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'conges', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'missions', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'fichePaies', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'avances', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'gestionSupplementaires', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'pointages'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'matricule', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'sexe', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'cin', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'dateNais', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'situationFamilial', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'nbreEnfants', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'cnss', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'dateEmbauche', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'echelon', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'typeContrat', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'salaireBase', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'typePaie', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'departement', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'service', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'moyenPaiement', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'nomBanque', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'numCompteBanc', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'prime', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'conges', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'missions', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'fichePaies', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'avances', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'gestionSupplementaires', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Employe' . "\0" . 'pointages'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Employe $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getMatricule(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatricule', []);

        return parent::getMatricule();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatricule(string $matricule): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatricule', [$matricule]);

        return parent::setMatricule($matricule);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', []);

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe(string $sexe): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', [$sexe]);

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(string $adresse): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone(string $telephone): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getCin(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCin', []);

        return parent::getCin();
    }

    /**
     * {@inheritDoc}
     */
    public function setCin(string $cin): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCin', [$cin]);

        return parent::setCin($cin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNais(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNais', []);

        return parent::getDateNais();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNais(\DateTimeInterface $dateNais): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNais', [$dateNais]);

        return parent::setDateNais($dateNais);
    }

    /**
     * {@inheritDoc}
     */
    public function getSituationFamilial(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSituationFamilial', []);

        return parent::getSituationFamilial();
    }

    /**
     * {@inheritDoc}
     */
    public function setSituationFamilial(string $situationFamilial): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSituationFamilial', [$situationFamilial]);

        return parent::setSituationFamilial($situationFamilial);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbreEnfants(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbreEnfants', []);

        return parent::getNbreEnfants();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbreEnfants(?int $nbreEnfants): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbreEnfants', [$nbreEnfants]);

        return parent::setNbreEnfants($nbreEnfants);
    }

    /**
     * {@inheritDoc}
     */
    public function getCnss(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCnss', []);

        return parent::getCnss();
    }

    /**
     * {@inheritDoc}
     */
    public function setCnss(string $cnss): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCnss', [$cnss]);

        return parent::setCnss($cnss);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateEmbauche(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateEmbauche', []);

        return parent::getDateEmbauche();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateEmbauche(\DateTimeInterface $dateEmbauche): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateEmbauche', [$dateEmbauche]);

        return parent::setDateEmbauche($dateEmbauche);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', []);

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(string $categorie): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', [$categorie]);

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getEchelon(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEchelon', []);

        return parent::getEchelon();
    }

    /**
     * {@inheritDoc}
     */
    public function setEchelon(string $echelon): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEchelon', [$echelon]);

        return parent::setEchelon($echelon);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeContrat(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeContrat', []);

        return parent::getTypeContrat();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeContrat(string $typeContrat): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeContrat', [$typeContrat]);

        return parent::setTypeContrat($typeContrat);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalaireBase(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalaireBase', []);

        return parent::getSalaireBase();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalaireBase(float $salaireBase): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalaireBase', [$salaireBase]);

        return parent::setSalaireBase($salaireBase);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypePaie(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypePaie', []);

        return parent::getTypePaie();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypePaie(string $typePaie): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypePaie', [$typePaie]);

        return parent::setTypePaie($typePaie);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartement(): ?\App\Entity\Departement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartement', []);

        return parent::getDepartement();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartement(?\App\Entity\Departement $departement): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartement', [$departement]);

        return parent::setDepartement($departement);
    }

    /**
     * {@inheritDoc}
     */
    public function getService(): ?\App\Entity\Service
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getService', []);

        return parent::getService();
    }

    /**
     * {@inheritDoc}
     */
    public function setService(?\App\Entity\Service $service): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setService', [$service]);

        return parent::setService($service);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre(): ?\App\Entity\Titre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(?\App\Entity\Titre $titre): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoyenPaiement(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoyenPaiement', []);

        return parent::getMoyenPaiement();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoyenPaiement(string $moyenPaiement): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoyenPaiement', [$moyenPaiement]);

        return parent::setMoyenPaiement($moyenPaiement);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomBanque(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomBanque', []);

        return parent::getNomBanque();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomBanque(string $nomBanque): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomBanque', [$nomBanque]);

        return parent::setNomBanque($nomBanque);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumCompteBanc(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumCompteBanc', []);

        return parent::getNumCompteBanc();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumCompteBanc(string $numCompteBanc): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumCompteBanc', [$numCompteBanc]);

        return parent::setNumCompteBanc($numCompteBanc);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrime(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrime', []);

        return parent::getPrime();
    }

    /**
     * {@inheritDoc}
     */
    public function addPrime(\App\Entity\Prime $prime): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPrime', [$prime]);

        return parent::addPrime($prime);
    }

    /**
     * {@inheritDoc}
     */
    public function removePrime(\App\Entity\Prime $prime): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePrime', [$prime]);

        return parent::removePrime($prime);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getConges(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConges', []);

        return parent::getConges();
    }

    /**
     * {@inheritDoc}
     */
    public function addConge(\App\Entity\Conges $conge): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addConge', [$conge]);

        return parent::addConge($conge);
    }

    /**
     * {@inheritDoc}
     */
    public function removeConge(\App\Entity\Conges $conge): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeConge', [$conge]);

        return parent::removeConge($conge);
    }

    /**
     * {@inheritDoc}
     */
    public function getMissions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMissions', []);

        return parent::getMissions();
    }

    /**
     * {@inheritDoc}
     */
    public function addMission(\App\Entity\Mission $mission): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMission', [$mission]);

        return parent::addMission($mission);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMission(\App\Entity\Mission $mission): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMission', [$mission]);

        return parent::removeMission($mission);
    }

    /**
     * {@inheritDoc}
     */
    public function getFichePaies(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFichePaies', []);

        return parent::getFichePaies();
    }

    /**
     * {@inheritDoc}
     */
    public function addFichePaie(\App\Entity\FichePaie $fichePaie): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFichePaie', [$fichePaie]);

        return parent::addFichePaie($fichePaie);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFichePaie(\App\Entity\FichePaie $fichePaie): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFichePaie', [$fichePaie]);

        return parent::removeFichePaie($fichePaie);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvances(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvances', []);

        return parent::getAvances();
    }

    /**
     * {@inheritDoc}
     */
    public function addAvance(\App\Entity\Avance $avance): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAvance', [$avance]);

        return parent::addAvance($avance);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAvance(\App\Entity\Avance $avance): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAvance', [$avance]);

        return parent::removeAvance($avance);
    }

    /**
     * {@inheritDoc}
     */
    public function getGestionSupplementaires(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGestionSupplementaires', []);

        return parent::getGestionSupplementaires();
    }

    /**
     * {@inheritDoc}
     */
    public function addGestionSupplementaire(\App\Entity\GestionSupplementaire $gestionSupplementaire): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGestionSupplementaire', [$gestionSupplementaire]);

        return parent::addGestionSupplementaire($gestionSupplementaire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGestionSupplementaire(\App\Entity\GestionSupplementaire $gestionSupplementaire): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGestionSupplementaire', [$gestionSupplementaire]);

        return parent::removeGestionSupplementaire($gestionSupplementaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getPointages(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPointages', []);

        return parent::getPointages();
    }

    /**
     * {@inheritDoc}
     */
    public function addPointage(\App\Entity\Pointage $pointage): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPointage', [$pointage]);

        return parent::addPointage($pointage);
    }

    /**
     * {@inheritDoc}
     */
    public function removePointage(\App\Entity\Pointage $pointage): \App\Entity\Employe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePointage', [$pointage]);

        return parent::removePointage($pointage);
    }

}