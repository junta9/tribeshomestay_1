<?php

namespace App\Entity;

use App\Repository\SejourRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SejourRepository::class)
 */
class Sejour
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_sejour;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\OneToMany(targetEntity=PhotosSejours::class, mappedBy="sejour_id")
     */
    private $url;

    /**
     * @ORM\OneToMany(targetEntity=PhotosSejours::class, mappedBy="sejour_id")
     */
    private $photosSejours;

    public function __construct()
    {
        $this->url = new ArrayCollection();
        $this->photosSejours = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSejour(): ?string
    {
        return $this->nom_sejour;
    }

    public function setNomSejour(string $nom_sejour): self
    {
        $this->nom_sejour = $nom_sejour;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return Collection<int, PhotosSejours>
     */
    public function getPhotosSejours(): Collection
    {
        return $this->photosSejours;
    }

    public function addPhotosSejour(PhotosSejours $photosSejour): self
    {
        if (!$this->photosSejours->contains($photosSejour)) {
            $this->photosSejours[] = $photosSejour;
            $photosSejour->setSejourId($this);
        }

        return $this;
    }

    public function removePhotosSejour(PhotosSejours $photosSejour): self
    {
        if ($this->photosSejours->removeElement($photosSejour)) {
            // set the owning side to null (unless already changed)
            if ($photosSejour->getSejourId() === $this) {
                $photosSejour->setSejourId(null);
            }
        }

        return $this;
    }

   
}
