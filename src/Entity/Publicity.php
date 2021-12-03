<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Publicity
 *
 *
 * @ORM\Table(name="publicity", indexes={@ORM\Index(name="IDX_9381276613FECDF", columns={"session_id"})})
 * @ORM\Entity
 *
 */
class Publicity
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
     * )  n
     * @ORM\Column(name="nom_publicity", type="string", length=255, nullable=false)
     */
    private $nomPublicity;

    /**
     * @var \DateTime
     * 
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     * 
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description_pub", type="text", length=0, nullable=true)
     */
    private $descriptionPub;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPublicity(): ?string
    {
        return $this->nomPublicity;
    }

    public function setNomPublicity(string $nomPublicity): self
    {
        $this->nomPublicity = $nomPublicity;

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

    public function getDescriptionPub(): ?string
    {
        return $this->descriptionPub;
    }

    public function setDescriptionPub(string $descriptionPub): self
    {
        $this->descriptionPub = $descriptionPub;

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
