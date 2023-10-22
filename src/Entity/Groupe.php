<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="GROUPE")
 * @ORM\Entity
 */
class Groupe
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDGRP", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgrp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=25, nullable=true, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Musique", mappedBy="idgrp")
     */
    private $refmus = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->refmus = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
