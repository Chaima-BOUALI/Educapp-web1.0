<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 */
class Session
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
     * @ORM\Column(name="nom_session", type="string", length=255, nullable=false)
     */
    private $nomSession;

    /**

     *
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     *
     *
     * @ORM\Column(name="end_date", type="date", nullable=false)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description_session", type="text", nullable=false)
     */
    private $descriptionSession;

    /**
     * @var int
     *
     * @ORM\Column(name="places_disponibles", type="integer", nullable=false)
     */
    private $placesDisponibles;

    /**
     * @var string
     *
     *
     * @Assert\Url(
     *    message = "The url '{{ value }}' is not a valid url",
     * )
     * @ORM\Column(name="url_image", type="string", length=255, nullable=false)
     */
    private $urlImage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CategorieSession;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSession(): ?string
    {
        return $this->nomSession;
    }

    public function setNomSession(string $nomSession): self
    {
        $this->nomSession = $nomSession;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getDescriptionSession(): ?string
    {
        return $this->descriptionSession;
    }

    public function setDescriptionSession(string $descriptionSession): self
    {
        $this->descriptionSession = $descriptionSession;

        return $this;
    }

    public function getPlacesDisponibles(): ?int
    {
        return $this->placesDisponibles;
    }

    public function setPlacesDisponibles(int $placesDisponibles): self
    {
        $this->placesDisponibles = $placesDisponibles;

        return $this;
    }

    public function getUrlImage(): ?string
    {
        return $this->urlImage;
    }

    public function setUrlImage(string $urlImage): self
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    public function getCategorieSession(): ?string
    {
        return $this->CategorieSession;
    }

    public function setCategorieSession(string $CategorieSession): self
    {
        $this->CategorieSession = $CategorieSession;

        return $this;
    }

    public function __toString()
    {
        return(string)$this->getNomSession();
    }

}
