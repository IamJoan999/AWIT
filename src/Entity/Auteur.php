<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
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

    public function getIdaut(): ?string
    {
        return $this->idaut;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Musique>
     */
    public function getRefmus(): Collection
    {
        return $this->refmus;
    }

    public function addRefmu(Musique $refmu): static
    {
        if (!$this->refmus->contains($refmu)) {
            $this->refmus->add($refmu);
            $refmu->addIdaut($this);
        }

        return $this;
    }

    public function removeRefmu(Musique $refmu): static
    {
        if ($this->refmus->removeElement($refmu)) {
            $refmu->removeIdaut($this);
        }

        return $this;
    }

}
