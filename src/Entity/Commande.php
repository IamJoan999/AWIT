<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="COMMANDE", indexes={@ORM\Index(name="I_FK_COMMANDE_ABONNEMENT", columns={"IDABO"}), @ORM\Index(name="I_FK_COMMANDE_CLIENT", columns={"IDCLI"}), @ORM\Index(name="I_FK_COMMANDE_CLIENT1", columns={"IDCLI_1"})})
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
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
     * @var \Abonnement
     *
     * @ORM\ManyToOne(targetEntity="Abonnement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDABO", referencedColumnName="IDABO")
     * })
     */
    private $idabo;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCLI", referencedColumnName="IDCLI")
     * })
     */
    private $idcli;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCLI_1", referencedColumnName="IDCLI")
     * })
     */
    private $idcli1;

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

    public function getIdabo(): ?Abonnement
    {
        return $this->idabo;
    }

    public function setIdabo(?Abonnement $idabo): static
    {
        $this->idabo = $idabo;

        return $this;
    }

    public function getIdcli(): ?Client
    {
        return $this->idcli;
    }

    public function setIdcli(?Client $idcli): static
    {
        $this->idcli = $idcli;

        return $this;
    }

    public function getIdcli1(): ?Client
    {
        return $this->idcli1;
    }

    public function setIdcli1(?Client $idcli1): static
    {
        $this->idcli1 = $idcli1;

        return $this;
    }


}
