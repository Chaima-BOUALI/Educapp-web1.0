<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
/**
 * Participation
 *
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Participation
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
     * @ORM\Column(name="nom_participation", type="string", length=255, nullable=false)
     */
    private $nomParticipation;

    /**
     * @var string
     *@Assert\Length(
     *      min = 10,
     *      max = 50,
     *      minMessage = "votre objet doit comporter au moins {{ limit }} characteres",
     *      maxMessage = "vous avez atteint votre limite , {{ limit }} characteres"
     * )
     * @ORM\Column(name="objet", type="string", length=255, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *@Assert\Length(
     *      min = 50,
     *      max = 500,
     *      minMessage = "votre contenu doit comporter au moins {{ limit }} characteres",
     *      maxMessage = "vous avez atteint votre limite , {{ limit }} characteres"
     * )
     * @ORM\Column(name="contenu_participation", type="text", length=0, nullable=false)
     */
    private $contenuParticipation;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="participation", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    // ...

    /**
     * @var bool
     *
     * @ORM\Column(name="decision", type="boolean", nullable=false)
     */
    private $decision;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomParticipation(): ?string
    {
        return $this->nomParticipation;
    }

    public function setNomParticipation(string $nomParticipation): self
    {
        $this->nomParticipation = $nomParticipation;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getContenuParticipation(): ?string
    {
        return $this->contenuParticipation;
    }

    public function setContenuParticipation(string $contenuParticipation): self
    {
        $this->contenuParticipation = $contenuParticipation;

        return $this;
    }



    public function __toString()
    {
        return(string)$this->getNomParticipation();
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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
}

