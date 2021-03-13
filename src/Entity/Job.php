<?php
namespace App\Entity;
use App\Repository\JobRepository;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass=JobRepository::class)
 */
class Job
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
    private $ref;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $salary;
    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="jobs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;
    /**
     * @ORM\ManyToOne(targetEntity=Tag::class, inversedBy="jobs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tag;
    
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getRef(): ?string
    {
        return $this->ref;
    }
    public function setRef(string $ref): self
    {
        $this->ref = $ref;
        return $this;
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
    public function getSalary(): ?string
    {
        return $this->salary;
    }
    public function setSalary(string $salary): self
    {
        $this->salary = $salary;
        return $this;
    }
    public function getCategory(): ?Category
    {
        return $this->category;
    }
    public function setCategory(?Category $category): self
    {
        $this->category = $category;
        return $this;
    }
    public function getTag(): ?Tag
    {
        return $this->tag;
    }
    public function setTag(?Tag $tag): self
    {
        $this->tag = $tag;
        return $this;
    }
}

