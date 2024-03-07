<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AnnonceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnnonceRepository::class)]
#[ApiResource]
class Annonce
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $surface = null;

    #[ORM\Column(length: 255)]
    private ?string $loyer = null;

    #[ORM\ManyToMany(targetEntity: Admin::class, inversedBy: 'annonces')]
    private Collection $_admin;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Client $_client = null;

    public function __construct()
    {
        $this->_admin = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getSurface(): ?string
    {
        return $this->surface;
    }

    public function setSurface(string $surface): static
    {
        $this->surface = $surface;

        return $this;
    }

    public function getLoyer(): ?string
    {
        return $this->loyer;
    }

    public function setLoyer(string $loyer): static
    {
        $this->loyer = $loyer;

        return $this;
    }

    /**
     * @return Collection<int, Admin>
     */
    public function getAdmin(): Collection
    {
        return $this->_admin;
    }

    public function addAdmin(Admin $admin): static
    {
        if (!$this->_admin->contains($admin)) {
            $this->_admin->add($admin);
        }

        return $this;
    }

    public function removeAdmin(Admin $admin): static
    {
        $this->_admin->removeElement($admin);

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->_client;
    }

    public function setClient(?Client $_client): static
    {
        $this->_client = $_client;

        return $this;
    }
}
