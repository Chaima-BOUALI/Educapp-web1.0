<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var string
     *
     * @ORM\Column(name="start_sate", type="string", length=255, nullable=false)
     */
    private $startSate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=false)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description_session", type="text", length=0, nullable=false)
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
     * @ORM\Column(name="url_image", type="string", length=255, nullable=false)
     */
    private $urlImage;

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

    public function getStartSate(): ?string
    {
        return $this->startSate;
    }

    public function setStartSate(string $startSate): self
    {
        $this->startSate = $startSate;

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


}