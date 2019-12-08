<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ThesesRepository")
 */
class Theses
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phrasedaccroche;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomD;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Doctorale", inversedBy="nomD")
     */
    private $doctorale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPhrasedaccroche(): ?string
    {
        return $this->phrasedaccroche;
    }

    public function setPhrasedaccroche(string $phrasedaccroche): self
    {
        $this->phrasedaccroche = $phrasedaccroche;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNomD(): ?string
    {
        return $this->nomD;
    }

    public function setNomD(string $nomD): self
    {
        $this->nomD = $nomD;

        return $this;
    }

    public function getDoctorale(): ?Doctorale
    {
        return $this->doctorale;
    }

    public function setDoctorale(?Doctorale $doctorale): self
    {
        $this->doctorale = $doctorale;

        return $this;
    }
}
