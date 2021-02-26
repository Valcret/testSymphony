<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity
 */
class Clients
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="email_cli", type="string", length=64, nullable=false)
     */
    private $emailCli;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd_cli", type="string", length=256, nullable=false)
     */
    private $pwdCli;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cli", type="string", length=64, nullable=false)
     */
    private $nomCli;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_cli", type="string", length=64, nullable=false)
     */
    private $prenomCli;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_cli", type="string", length=256, nullable=false)
     */
    private $adressCli;

    /**
     * @var string
     *
     * @ORM\Column(name="codepost_cli", type="string", length=10, nullable=false)
     */
    private $codepostCli;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_cli", type="string", length=256, nullable=false)
     */
    private $villeCli;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_cli", type="string", length=128, nullable=false)
     */
    private $paysCli;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_cli", type="string", length=20, nullable=false)
     */
    private $telCli;

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function getEmailCli(): ?string
    {
        return $this->emailCli;
    }

    public function setEmailCli(string $emailCli): self
    {
        $this->emailCli = $emailCli;

        return $this;
    }

    public function getPwdCli(): ?string
    {
        return $this->pwdCli;
    }

    public function setPwdCli(string $pwdCli): self
    {
        $this->pwdCli = $pwdCli;

        return $this;
    }

    public function getNomCli(): ?string
    {
        return $this->nomCli;
    }

    public function setNomCli(string $nomCli): self
    {
        $this->nomCli = $nomCli;

        return $this;
    }

    public function getPrenomCli(): ?string
    {
        return $this->prenomCli;
    }

    public function setPrenomCli(string $prenomCli): self
    {
        $this->prenomCli = $prenomCli;

        return $this;
    }

    public function getAdressCli(): ?string
    {
        return $this->adressCli;
    }

    public function setAdressCli(string $adressCli): self
    {
        $this->adressCli = $adressCli;

        return $this;
    }

    public function getCodepostCli(): ?string
    {
        return $this->codepostCli;
    }

    public function setCodepostCli(string $codepostCli): self
    {
        $this->codepostCli = $codepostCli;

        return $this;
    }

    public function getVilleCli(): ?string
    {
        return $this->villeCli;
    }

    public function setVilleCli(string $villeCli): self
    {
        $this->villeCli = $villeCli;

        return $this;
    }

    public function getPaysCli(): ?string
    {
        return $this->paysCli;
    }

    public function setPaysCli(string $paysCli): self
    {
        $this->paysCli = $paysCli;

        return $this;
    }

    public function getTelCli(): ?string
    {
        return $this->telCli;
    }

    public function setTelCli(string $telCli): self
    {
        $this->telCli = $telCli;

        return $this;
    }


}
