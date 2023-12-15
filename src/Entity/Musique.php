<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
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

    public function getRefmus(): ?string
    {
        return $this->refmus;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getSon(): ?string
    {
        return $this->son;
    }

    public function setSon(?string $son): static
    {
        $this->son = $son;

        return $this;
    }

    public function getParole(): ?string
    {
        return $this->parole;
    }

    public function setParole(?string $parole): static
    {
        $this->parole = $parole;

        return $this;
    }

    public function getIdalbum(): ?Album
    {
        return $this->idalbum;
    }

    public function setIdalbum(?Album $idalbum): static
    {
        $this->idalbum = $idalbum;

        return $this;
    }

    /**
     * @return Collection<int, Abonnement>
     */
    public function getIdabo(): Collection
    {
        return $this->idabo;
    }

    public function addIdabo(Abonnement $idabo): static
    {
        if (!$this->idabo->contains($idabo)) {
            $this->idabo->add($idabo);
        }

        return $this;
    }

    public function removeIdabo(Abonnement $idabo): static
    {
        $this->idabo->removeElement($idabo);

        return $this;
    }

    /**
     * @return Collection<int, Auteur>
     */
    public function getIdaut(): Collection
    {
        return $this->idaut;
    }

    public function addIdaut(Auteur $idaut): static
    {
        if (!$this->idaut->contains($idaut)) {
            $this->idaut->add($idaut);
        }

        return $this;
    }

    public function removeIdaut(Auteur $idaut): static
    {
        $this->idaut->removeElement($idaut);

        return $this;
    }

    /**
     * @return Collection<int, Groupe>
     */
    public function getIdgrp(): Collection
    {
        return $this->idgrp;
    }

    public function addIdgrp(Groupe $idgrp): static
    {
        if (!$this->idgrp->contains($idgrp)) {
            $this->idgrp->add($idgrp);
        }

        return $this;
    }

    public function removeIdgrp(Groupe $idgrp): static
    {
        $this->idgrp->removeElement($idgrp);

        return $this;
    }

}
