<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos", indexes={@ORM\Index(name="id_produit", columns={"id_produit"})})
 * @ORM\Entity
 */
class Photos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_photo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="src", type="string", length=256, nullable=false)
     */
    private $src;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alt", type="string", length=50, nullable=true)
     */
    private $alt;

    /**
     * @var \Produits
     *
     * @ORM\ManyToOne(targetEntity="Produits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produit", referencedColumnName="id_produit")
     * })
     */
    private $idProduit;

    public function getIdPhoto(): ?int
    {
        return $this->idPhoto;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrc(string $src): self
    {
        $this->src = $src;

        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(?string $alt): self
    {
        $this->alt = $alt;

        return $this;
    }

    public function getIdProduit(): ?Produits
    {
        return $this->idProduit;
    }

    public function setIdProduit(?Produits $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
    }


}
