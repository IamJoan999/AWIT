<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="COMMANDE", indexes={@ORM\Index(name="I_FK_COMMANDE_ABONNEMENT", columns={"IDABO"}), @ORM\Index(name="I_FK_COMMANDE_CLIENT", columns={"IDCLI"}), @ORM\Index(name="I_FK_COMMANDE_CLIENT1", columns={"IDCLI_1"})})
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


}
