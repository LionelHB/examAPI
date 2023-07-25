<?php

namespace App\Entity;

use App\Repository\NftRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NftRepository::class)]
class Nft
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $owner = null;

    #[ORM\Column(length: 255)]
    private ?string $creator = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $creationDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateFirstSale = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateLastSale = null;

    #[ORM\Column(length: 255)]
    private ?string $identifyKey = null;

    #[ORM\Column(length: 255)]
    private ?string $nftPath = null;

    #[ORM\Column]
    private ?float $priceETH = null;

    #[ORM\Column]
    private ?float $priceEUR = null;

    #[ORM\Column]
    private ?float $priceUSD = null;

    #[ORM\Column]
    private ?bool $isPublic = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'nft')]
    private ?Anthology $anthology = null;

    #[ORM\ManyToOne(inversedBy: 'nft')]
    private ?Comment $comment = null;

    #[ORM\ManyToOne(inversedBy: 'nft')]
    private ?SubCategory $subCategory = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(string $owner): static
    {
        $this->owner = $owner;

        return $this;
    }

    public function getCreator(): ?string
    {
        return $this->creator;
    }

    public function setCreator(string $creator): static
    {
        $this->creator = $creator;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): static
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getDateFirstSale(): ?\DateTimeInterface
    {
        return $this->dateFirstSale;
    }

    public function setDateFirstSale(\DateTimeInterface $dateFirstSale): static
    {
        $this->dateFirstSale = $dateFirstSale;

        return $this;
    }

    public function getDateLastSale(): ?\DateTimeInterface
    {
        return $this->dateLastSale;
    }

    public function setDateLastSale(\DateTimeInterface $dateLastSale): static
    {
        $this->dateLastSale = $dateLastSale;

        return $this;
    }

    public function getIdentifyKey(): ?string
    {
        return $this->identifyKey;
    }

    public function setIdentifyKey(string $identifyKey): static
    {
        $this->identifyKey = $identifyKey;

        return $this;
    }

    public function getNftPath(): ?string
    {
        return $this->nftPath;
    }

    public function setNftPath(string $nftPath): static
    {
        $this->nftPath = $nftPath;

        return $this;
    }

    public function getPriceETH(): ?float
    {
        return $this->priceETH;
    }

    public function setPriceETH(float $priceETH): static
    {
        $this->priceETH = $priceETH;

        return $this;
    }

    public function getPriceEUR(): ?float
    {
        return $this->priceEUR;
    }

    public function setPriceEUR(float $priceEUR): static
    {
        $this->priceEUR = $priceEUR;

        return $this;
    }

    public function getPriceUSD(): ?float
    {
        return $this->priceUSD;
    }

    public function setPriceUSD(float $priceUSD): static
    {
        $this->priceUSD = $priceUSD;

        return $this;
    }

    public function isIsPublic(): ?bool
    {
        return $this->isPublic;
    }

    public function setIsPublic(bool $isPublic): static
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

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

    public function getAnthology(): ?Anthology
    {
        return $this->anthology;
    }

    public function setAnthology(?Anthology $anthology): static
    {
        $this->anthology = $anthology;

        return $this;
    }

    public function getComment(): ?Comment
    {
        return $this->comment;
    }

    public function setComment(?Comment $comment): static
    {
        $this->comment = $comment;

        return $this;
    }

    public function getSubCategory(): ?SubCategory
    {
        return $this->subCategory;
    }

    public function setSubCategory(?SubCategory $subCategory): static
    {
        $this->subCategory = $subCategory;

        return $this;
    }
}
