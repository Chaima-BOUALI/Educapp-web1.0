<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formateur
 *
 * @ORM\Table(name="formateur")
 * @ORM\Entity
 */
class Formateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_formateur", type="string", length=255, nullable=false)
     */
    private $nomFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_formateur", type="string", length=255, nullable=false)
     */
    private $prenomFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_formateur", type="string", length=255, nullable=false)
     */
    private $numeroFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=false)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_naissance", type="date", nullable=false)
     */
    private $dateDeNaissance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFormateur(): ?string
    {
        return $this->nomFormateur;
    }

    public function setNomFormateur(string $nomFormateur): self
    {
        $this->nomFormateur = $nomFormateur;

        return $this;
    }

    public function getPrenomFormateur(): ?string
    {
        return $this->prenomFormateur;
    }

    public function setPrenomFormateur(string $prenomFormateur): self
    {
        $this->prenomFormateur = $prenomFormateur;

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

    public function getNumeroFormateur(): ?string
    {
        return $this->numeroFormateur;
    }

    public function setNumeroFormateur(string $numeroFormateur): self
    {
        $this->numeroFormateur = $numeroFormateur;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $dateDeNaissance): self
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }


}
