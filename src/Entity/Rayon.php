<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rayon
 *
 * @ORM\Table(name="rayon", indexes={@ORM\Index(name="id_boutique", columns={"id_boutique"})})
 * @ORM\Entity
 */
class Rayon
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rayon", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRayon;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var \Boutique
     *
     * @ORM\ManyToOne(targetEntity="Boutique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_boutique", referencedColumnName="id_boutique")
     * })
     */
    private $idBoutique;

    public function getIdRayon(): ?int
    {
        return $this->idRayon;
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

    public function getIdBoutique(): ?Boutique
    {
        return $this->idBoutique;
    }

    public function setIdBoutique(?Boutique $idBoutique): self
    {
        $this->idBoutique = $idBoutique;

        return $this;
    }


}
