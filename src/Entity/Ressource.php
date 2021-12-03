<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

/**
 * Ressource
 *
 * @ORM\Table(name="ressource", indexes={@ORM\Index(name="IDX_939F4544613FECDF", columns={"session_id"})})
 * @ORM\Entity
 */
class Ressource
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
     *@Assert\Length(
     *      min = 2,
     *      max = 50,
     * )
     * @ORM\Column(name="nom_ressource", type="string", length=255, nullable=false)
     */
    private $nomRessource;

    /**
     * @var string
     *
     * @ORM\Column(name="url_ressource", type="string", length=255, nullable=false)
     * @Assert\Url(
     *    message = "The url '{{ value }}' is not a valid url",
     * )
     */
    private $urlRessource;

    /**
     * @var \Session
     *
     * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="id")
     * })
     */
    private $session;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRessource(): ?string
    {
        return $this->nomRessource;
    }

    public function setNomRessource(string $nomRessource): self
    {
        $this->nomRessource = $nomRessource;

        return $this;
    }

    public function getUrlRessource(): ?string
    {
        return $this->urlRessource;
    }

    public function setUrlRessource(string $urlRessource): self
    {
        $this->urlRessource = $urlRessource;

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
