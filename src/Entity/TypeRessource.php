<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

/**
 * TypeRessource
 *
 * @ORM\Table(name="type_ressource")
 * @ORM\Entity
 */
class TypeRessource
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
     * @ORM\Column(name="nom_type_ressource", type="string", length=255, nullable=false)
     */
    private $nomTypeRessource;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="date_ressource", type="date", nullable=false)
     */
    private $dateRessource;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTypeRessource(): ?string
    {
        return $this->nomTypeRessource;
    }

    public function setNomTypeRessource(string $nomTypeRessource): self
    {
        $this->nomTypeRessource = $nomTypeRessource;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDateRessource(): ?\DateTimeInterface
    {
        return $this->dateRessource;
    }

    public function setDateRessource(\DateTimeInterface $dateRessource): self
    {
        $this->dateRessource = $dateRessource;

        return $this;
    }


}
