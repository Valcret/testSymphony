<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs", indexes={@ORM\Index(name="INDEX", columns={"id_role"})})
 * @ORM\Entity
 */
class Utilisateurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false, options={"comment"="ID de l'utilisateur"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=256, nullable=false, options={"comment"="Email de l'utilisateur"})
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=256, nullable=false, options={"comment"="Mot de passe utilisateur"})
     */
    private $motDePasse;

    /**
     * @var \Roles
     *
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_role", referencedColumnName="id_role")
     * })
     */
    private $idRole;

    public function getIdUser(): ?int
    {
        return $this->idUser;
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

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getIdRole(): ?Roles
    {
        return $this->idRole;
    }

    public function setIdRole(?Roles $idRole): self
    {
        $this->idRole = $idRole;

        return $this;
    }


}
