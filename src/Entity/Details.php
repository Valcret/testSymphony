<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Details
 *
 * @ORM\Table(name="details", indexes={@ORM\Index(name="id_commande", columns={"id_commande"}), @ORM\Index(name="id_produit", columns={"id_produit"})})
 * @ORM\Entity
 */
class Details
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_details", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetails;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \Commandes
     *
     * @ORM\ManyToOne(targetEntity="Commandes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commande", referencedColumnName="id_commandes")
     * })
     */
    private $idCommande;

    /**
     * @var \Produits
     *
     * @ORM\ManyToOne(targetEntity="Produits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produit", referencedColumnName="id_produit")
     * })
     */
    private $idProduit;

    public function getIdDetails(): ?int
    {
        return $this->idDetails;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getIdCommande(): ?Commandes
    {
        return $this->idCommande;
    }

    public function setIdCommande(?Commandes $idCommande): self
    {
        $this->idCommande = $idCommande;

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
