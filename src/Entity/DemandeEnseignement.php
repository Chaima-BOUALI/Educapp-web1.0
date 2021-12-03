<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeEnseignement
 *
 * @ORM\Table(name="demande_enseignement", indexes={@ORM\Index(name="IDX_5C1A82B6A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class DemandeEnseignement
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
     * @ORM\Column(name="nom_demande", type="string", length=255, nullable=false)
     */
    private $nomDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="description_demande", type="text", length=0, nullable=false)
     */
    private $descriptionDemande;

    /**
     * @var bool
     *
     * @ORM\Column(name="decision", type="boolean", nullable=false)
     */
    private $decision;

    /**
     * @var string
     *
     * @ORM\Column(name="url_participation", type="string", length=255, nullable=false)
     */
    private $urlParticipation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDemande(): ?string
    {
        return $this->nomDemande;
    }

    public function setNomDemande(string $nomDemande): self
    {
        $this->nomDemande = $nomDemande;

        return $this;
    }

    public function getDescriptionDemande(): ?string
    {
        return $this->descriptionDemande;
    }

    public function setDescriptionDemande(string $descriptionDemande): self
    {
        $this->descriptionDemande = $descriptionDemande;

        return $this;
    }

    public function getDecision(): ?bool
    {
        return $this->decision;
    }

    public function setDecision(bool $decision): self
    {
        $this->decision = $decision;

        return $this;
    }

    public function getUrlParticipation(): ?string
    {
        return $this->urlParticipation;
    }

    public function setUrlParticipation(string $urlParticipation): self
    {
        $this->urlParticipation = $urlParticipation;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }


}
