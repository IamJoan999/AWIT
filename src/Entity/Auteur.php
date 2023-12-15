<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteur
 *
 * @ORM\Table(name="AUTEUR")
 * @ORM\Entity
 */
class Auteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDAUT", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=25, nullable=true, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Musique", mappedBy="idaut")
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
