<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musique
 *
 * @ORM\Table(name="MUSIQUE", indexes={@ORM\Index(name="I_FK_MUSIQUE_ALBUM", columns={"IDALBUM"})})
 * @ORM\Entity
 */
class Musique
{
    /**
     * @var int
     *
     * @ORM\Column(name="REFMUS", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refmus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TITRE", type="string", length=50, nullable=true, options={"fixed"=true})
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SON", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $son;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PAROLE", type="text", length=65535, nullable=true)
     */
    private $parole;

    /**
     * @var \Album
     *
     * @ORM\ManyToOne(targetEntity="Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDALBUM", referencedColumnName="IDALBUM")
     * })
     */
    private $idalbum;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Abonnement", inversedBy="refmus")
     * @ORM\JoinTable(name="contenir",
     *   joinColumns={
     *     @ORM\JoinColumn(name="REFMUS", referencedColumnName="REFMUS")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IDABO", referencedColumnName="IDABO")
     *   }
     * )
     */
    private $idabo = array();

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Auteur", inversedBy="refmus")
     * @ORM\JoinTable(name="creermusiqueaut",
     *   joinColumns={
     *     @ORM\JoinColumn(name="REFMUS", referencedColumnName="REFMUS")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IDAUT", referencedColumnName="IDAUT")
     *   }
     * )
     */
    private $idaut = array();

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Groupe", inversedBy="refmus")
     * @ORM\JoinTable(name="creermusiquegrp",
     *   joinColumns={
     *     @ORM\JoinColumn(name="REFMUS", referencedColumnName="REFMUS")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IDGRP", referencedColumnName="IDGRP")
     *   }
     * )
     */
    private $idgrp = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idabo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idaut = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idgrp = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
