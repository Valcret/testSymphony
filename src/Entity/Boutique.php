<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boutique
 *
 * @ORM\Table(name="boutique")
 * @ORM\Entity
 */
class Boutique
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_boutique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBoutique;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=256, nullable=false)
     */
    private $nom;

    public function getIdBoutique(): ?int
    {
        return $this->idBoutique;
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


}
