<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;

/**
 * Candidat
 *
 * @ORM\Table(name="candidat")
 * @ORM\Entity
 */
class Candidat
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
     * @ORM\Column(name="nom_candidat", type="string", length=255, nullable=false)
     */
    private $nomCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_candidat", type="string", length=255, nullable=false)
     */
    private $prenomCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="email_candidat", type="string", length=255, nullable=false)
     */
    private $emailCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_telephone_candidat", type="string", length=255, nullable=false)
     */
    private $numeroTelephoneCandidat;

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

    /**
     * * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="id")
     * })
     */
    private $Session;



    public function __construct()
    {
        $this->Session = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCandidat(): ?string
    {
        return $this->nomCandidat;
    }

    public function setNomCandidat(string $nomCandidat): self
    {
        $this->nomCandidat = $nomCandidat;

        return $this;
    }

    public function getPrenomCandidat(): ?string
    {
        return $this->prenomCandidat;
    }

    public function setPrenomCandidat(string $prenomCandidat): self
    {
        $this->prenomCandidat = $prenomCandidat;

        return $this;
    }

    public function getEmailCandidat(): ?string
    {
        return $this->emailCandidat;
    }

    public function setEmailCandidat(string $emailCandidat): self
    {
        $this->emailCandidat = $emailCandidat;

        return $this;
    }

    public function getNumeroTelephoneCandidat(): ?string
    {
        return $this->numeroTelephoneCandidat;
    }

    public function setNumeroTelephoneCandidat(string $numeroTelephoneCandidat): self
    {
        $this->numeroTelephoneCandidat = $numeroTelephoneCandidat;

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

    public function getSession(): ?Session
    {
        return $this->session;
    }

    public function setSession(?Session $session): self
    {
        $this->session = $session;

        return $this;
    }


}
