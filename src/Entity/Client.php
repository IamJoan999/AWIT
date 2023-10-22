<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="CLIENT")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCLI", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcli;

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
     * @var string|null
     *
     * @ORM\Column(name="LOGINCLI", type="string", length=25, nullable=true, options={"fixed"=true})
     */
    private $logincli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MDPCLI", type="string", length=16, nullable=true, options={"fixed"=true})
     */
    private $mdpcli;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATECREATIONCLI", type="date", nullable=true)
     */
    private $datecreationcli;


}
