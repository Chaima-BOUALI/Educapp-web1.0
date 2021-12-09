<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Promotion
 *@Vich\Uploadable

 *
 * @ORM\Table(name="promotion", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_C11D7DD1613FECDF", columns={"session_id"})})
 * @ORM\Entity
 */
class Promotion
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
     * @ORM\Column(name="nom_promotion", type="string", length=255, nullable=false)
     */
    private $nomPromotion;

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
    private $Pourcentage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;


    /**
     * @Vich\UploadableField(mapping="promotion", fileNameProperty="image")
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
    public function getNomPromotion(): ?string
    {
        return $this->nomPromotion;
    }

    /**
     * @param string $nomPromotion
     */
    public function setNomPromotion(string $nomPromotion): void
    {
        $this->nomPromotion = $nomPromotion;
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
    public function getPourcentage()
    {
        return $this->Pourcentage;
    }

    /**
     * @param mixed $Pourcentage
     */
    public function setPourcentage($Pourcentage): void
    {
        $this->Pourcentage = $Pourcentage;
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
