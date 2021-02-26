<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
 */
class Roles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=256, nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="droits", type="string", length=256, nullable=false)
     */
    private $droits;

    public function getIdRole(): ?int
    {
        return $this->idRole;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getDroits(): ?string
    {
        return $this->droits;
    }

    public function setDroits(string $droits): self
    {
        $this->droits = $droits;

        return $this;
    }


}
