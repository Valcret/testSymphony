<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits", indexes={@ORM\Index(name="id_rayon", columns={"id_rayon"})})
 * @ORM\Entity
 */
class Produits
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=256, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marque", type="string", length=256, nullable=true)
     */
    private $marque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", length=256, nullable=true)
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etiquettes", type="string", length=256, nullable=true)
     */
    private $etiquettes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ecoparticipation", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $ecoparticipation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut", type="string", length=256, nullable=true)
     */
    private $statut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_principale", type="text", length=65535, nullable=true)
     */
    private $descriptionPrincipale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre_1", type="string", length=256, nullable=true)
     */
    private $titre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_1", type="string", length=256, nullable=true)
     */
    private $image1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_1", type="text", length=65535, nullable=true)
     */
    private $description1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre_2", type="string", length=256, nullable=true)
     */
    private $titre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_2", type="string", length=256, nullable=true)
     */
    private $image2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_2", type="text", length=65535, nullable=true)
     */
    private $description2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre_3", type="string", length=256, nullable=true)
     */
    private $titre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_3", type="string", length=256, nullable=true)
     */
    private $image3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_3", type="text", length=65535, nullable=true)
     */
    private $description3;

    /**
     * @var \Rayon
     *
     * @ORM\ManyToOne(targetEntity="Rayon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rayon", referencedColumnName="id_rayon")
     * })
     */
    private $idRayon;

    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getEtiquettes(): ?string
    {
        return $this->etiquettes;
    }

    public function setEtiquettes(?string $etiquettes): self
    {
        $this->etiquettes = $etiquettes;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getEcoparticipation(): ?string
    {
        return $this->ecoparticipation;
    }

    public function setEcoparticipation(?string $ecoparticipation): self
    {
        $this->ecoparticipation = $ecoparticipation;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDescriptionPrincipale(): ?string
    {
        return $this->descriptionPrincipale;
    }

    public function setDescriptionPrincipale(?string $descriptionPrincipale): self
    {
        $this->descriptionPrincipale = $descriptionPrincipale;

        return $this;
    }

    public function getTitre1(): ?string
    {
        return $this->titre1;
    }

    public function setTitre1(?string $titre1): self
    {
        $this->titre1 = $titre1;

        return $this;
    }

    public function getImage1(): ?string
    {
        return $this->image1;
    }

    public function setImage1(?string $image1): self
    {
        $this->image1 = $image1;

        return $this;
    }

    public function getDescription1(): ?string
    {
        return $this->description1;
    }

    public function setDescription1(?string $description1): self
    {
        $this->description1 = $description1;

        return $this;
    }

    public function getTitre2(): ?string
    {
        return $this->titre2;
    }

    public function setTitre2(?string $titre2): self
    {
        $this->titre2 = $titre2;

        return $this;
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }

    public function setImage2(?string $image2): self
    {
        $this->image2 = $image2;

        return $this;
    }

    public function getDescription2(): ?string
    {
        return $this->description2;
    }

    public function setDescription2(?string $description2): self
    {
        $this->description2 = $description2;

        return $this;
    }

    public function getTitre3(): ?string
    {
        return $this->titre3;
    }

    public function setTitre3(?string $titre3): self
    {
        $this->titre3 = $titre3;

        return $this;
    }

    public function getImage3(): ?string
    {
        return $this->image3;
    }

    public function setImage3(?string $image3): self
    {
        $this->image3 = $image3;

        return $this;
    }

    public function getDescription3(): ?string
    {
        return $this->description3;
    }

    public function setDescription3(?string $description3): self
    {
        $this->description3 = $description3;

        return $this;
    }

    public function getIdRayon(): ?Rayon
    {
        return $this->idRayon;
    }

    public function setIdRayon(?Rayon $idRayon): self
    {
        $this->idRayon = $idRayon;

        return $this;
    }


}
