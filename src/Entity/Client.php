<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="CLIENT", uniqueConstraints={@ORM\UniqueConstraint(name="LOGINCLI", columns={"LOGINCLI"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var string
     *
     * @ORM\Column(name="LOGINCLI", type="string", length=25, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logincli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MDPCLI", type="string", length=16, nullable=true, options={"fixed"=true})
     */
    private $mdpcli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMCLI", type="string", length=25, nullable=true, options={"fixed"=true})
     */
    private $nomcli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOMCLI", type="string", length=25, nullable=true, options={"fixed"=true})
     */
    private $prenomcli;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATENAISCLI", type="date", nullable=true)
     */
    private $datenaiscli;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATECREATIONCLI", type="date", nullable=true)
     */
    private $datecreationcli;

    public function getLogincli(): ?string
    {
        return $this->logincli;
    }

    public function getMdpcli(): ?string
    {
        return $this->mdpcli;
    }

    public function setMdpcli(?string $mdpcli): static
    {
        $this->mdpcli = $mdpcli;

        return $this;
    }

    public function getNomcli(): ?string
    {
        return $this->nomcli;
    }

    public function setNomcli(?string $nomcli): static
    {
        $this->nomcli = $nomcli;

        return $this;
    }

    public function getPrenomcli(): ?string
    {
        return $this->prenomcli;
    }

    public function setPrenomcli(?string $prenomcli): static
    {
        $this->prenomcli = $prenomcli;

        return $this;
    }

    public function getDatenaiscli(): ?\DateTimeInterface
    {
        return $this->datenaiscli;
    }

    public function setDatenaiscli(?\DateTimeInterface $datenaiscli): static
    {
        $this->datenaiscli = $datenaiscli;

        return $this;
    }

    public function getDatecreationcli(): ?\DateTimeInterface
    {
        return $this->datecreationcli;
    }

    public function setDatecreationcli(?\DateTimeInterface $datecreationcli): static
    {
        $this->datecreationcli = $datecreationcli;

        return $this;
    }


}
