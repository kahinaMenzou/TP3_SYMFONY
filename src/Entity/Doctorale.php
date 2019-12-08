<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DoctoraleRepository")
 */
class Doctorale
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\theses", mappedBy="doctorale")
     */
    private $nomD;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien;

    public function __construct()
    {
        $this->nomD = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|theses[]
     */
    public function getNomD(): Collection
    {
        return $this->nomD;
    }

    public function addNomD(theses $nomD): self
    {
        if (!$this->nomD->contains($nomD)) {
            $this->nomD[] = $nomD;
            $nomD->setDoctorale($this);
        }

        return $this;
    }

    public function removeNomD(theses $nomD): self
    {
        if ($this->nomD->contains($nomD)) {
            $this->nomD->removeElement($nomD);
            // set the owning side to null (unless already changed)
            if ($nomD->getDoctorale() === $this) {
                $nomD->setDoctorale(null);
            }
        }

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }
}
