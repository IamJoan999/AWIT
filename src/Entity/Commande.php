<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="COMMANDE", indexes={@ORM\Index(name="I_FK_COMMANDE_ABONNEMENT", columns={"IDABO"}), @ORM\Index(name="I_FK_COMMANDE_CLIENT", columns={"LOGINCLI"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="REFCOM", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refcom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATECRE", type="date", nullable=true)
     */
    private $datecre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEDEBUT", type="date", nullable=true)
     */
    private $datedebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEFIN", type="date", nullable=true)
     */
    private $datefin;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="LOGINCLI", referencedColumnName="LOGINCLI")
     * })
     */
    private $logincli;

    /**
     * @var \Abonnement
     *
     * @ORM\ManyToOne(targetEntity="Abonnement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDABO", referencedColumnName="IDABO")
     * })
     */
    private $idabo;

    public function getRefcom(): ?string
    {
        return $this->refcom;
    }

    public function getDatecre(): ?\DateTimeInterface
    {
        return $this->datecre;
    }

    public function setDatecre(?\DateTimeInterface $datecre): static
    {
        $this->datecre = $datecre;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(?\DateTimeInterface $datedebut): static
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(?\DateTimeInterface $datefin): static
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getLogincli(): ?Client
    {
        return $this->logincli;
    }

    public function setLogincli(?Client $logincli): static
    {
        $this->logincli = $logincli;

        return $this;
    }

    public function getIdabo(): ?Abonnement
    {
        return $this->idabo;
    }

    public function setIdabo(?Abonnement $idabo): static
    {
        $this->idabo = $idabo;

        return $this;
    }


}
