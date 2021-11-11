<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
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
	private ?string $title = null;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private ?string $description = null;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private ?string $slug = null;

	public function getId(): ?int
		{
		return $this->id;
		}

	public function getTitle(): ?string
		{
		return $this->title;
		}

	public function setTitle(string $title): self
		{
		$this->title = $title;

		return $this;
		}

	public function getDescription(): ?string
		{
		return $this->description;
		}

	public function setDescription(?string $description): self
		{
		$this->description = $description;

		return $this;
		}

	public function getSlug(): ?string
		{
		return $this->slug;
		}

	public function setSlug(?string $slug): self
		{
		$this->slug = $slug;

		return $this;
		}
	}
