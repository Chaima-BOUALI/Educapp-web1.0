<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompteRendu
 *
 * @ORM\Table(name="compte_rendu", indexes={@ORM\Index(name="IDX_D39E69D2613FECDF", columns={"session_id"}), @ORM\Index(name="IDX_D39E69D28D0EB82", columns={"candidat_id"}), @ORM\Index(name="IDX_D39E69D2A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class CompteRendu
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
     * @ORM\Column(name="non_compte_rendu", type="string", length=255, nullable=false)
     */
    private $nonCompteRendu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_limite", type="date", nullable=true)
     */
    private $dateLimite;

    /**
     * @var \Session
     *
     * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="id")
     * })
     */
    private $session;

    /**
     * @var \Candidat
     *
     * @ORM\ManyToOne(targetEntity="Candidat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidat_id", referencedColumnName="id")
     * })
     */
    private $candidat;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNonCompteRendu(): ?string
    {
        return $this->nonCompteRendu;
    }

    public function setNonCompteRendu(string $nonCompteRendu): self
    {
        $this->nonCompteRendu = $nonCompteRendu;

        return $this;
    }

    public function getDateLimite(): ?\DateTimeInterface
    {
        return $this->dateLimite;
    }

    public function setDateLimite(\DateTimeInterface $dateLimite): self
    {
        $this->dateLimite = $dateLimite;

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

    public function getCandidat(): ?Candidat
    {
        return $this->candidat;
    }

    public function setCandidat(?Candidat $candidat): self
    {
        $this->candidat = $candidat;

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


}
