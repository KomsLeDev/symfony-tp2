<?php

namespace App\Entity;

use App\Repository\TitleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TitleRepository::class)]
class Title
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $return;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReturn(): ?string
    {
        return $this->return;
    }

    public function setReturn(?string $return): self
    {
        $this->return = $return;

        return $this;
    }
}
