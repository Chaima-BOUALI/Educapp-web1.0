<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Session;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Publicity
 *
 *@Vich\Uploadable
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
    *@Assert\Length(
     *      min = 10,
     *      max = 100,
     *      minMessage = "votre contenu doit comporter au moins {{ limit }} characteres",
     *      maxMessage = "vous avez atteint votre limite , {{ limit }} characteres"
     * )
     *
     * @ORM\Column(name="description_pub", type="text", length=0, nullable=true)
     */
    private $descriptionPub;

    /**
     * @var \Session
     *
     * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="id" )
     * })
     */
    private $session;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="publicity", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNomPublicity(): ?string
    {
        return $this->nomPublicity;
    }

    /**
     * @param string $nomPublicity
     */
    public function setNomPublicity(string $nomPublicity): self
    {
        $this->nomPublicity = $nomPublicity;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTimeInterface $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTimeInterface $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getDescriptionPub(): ?string
    {
        return $this->descriptionPub;
    }

    /**
     * @param string $descriptionPub
     */
    public function setDescriptionPub(string $descriptionPub): void
    {
        $this->descriptionPub = $descriptionPub;
    }

    /**
     * @return \Session
     */
    public function getSession(): ?\Session
    {
        return $this->session;
    }

    /**
     * @param \Session $session
     */
    public function setSession(\Session $session): void
    {
        $this->session = $session;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return File
     *
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param File $imageFile
     */
    public function setImageFile(File $imageFile): void
    {
        $this->imageFile = $imageFile;
    }




}
