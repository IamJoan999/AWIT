<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="ABONNEMENT")
 * @ORM\Entity
 */
class Abonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDABO", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idabo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=25, nullable=true, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPTION", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRIXMENSUEL", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $prixmensuel;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE", type="text", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Musique", mappedBy="idabo")
     */
    private $refmus = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->refmus = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdabo(): ?string
    {
        return $this->idabo;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrixmensuel(): ?string
    {
        return $this->prixmensuel;
    }

    public function setPrixmensuel(?string $prixmensuel): static
    {
        $this->prixmensuel = $prixmensuel;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

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
            $refmu->addIdabo($this);
        }

        return $this;
    }

    public function removeRefmu(Musique $refmu): static
    {
        if ($this->refmus->removeElement($refmu)) {
            $refmu->removeIdabo($this);
        }

        return $this;
    }

}
