<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ListeLieuxRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListeLieuxRepository::class)]
#[ORM\Table("listelieux")]
#[ApiResource]
class ListeLieux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $idlieux;


    public function getIdlieux(): ?int
    {
        return $this->idlieux;
    }

    public function setIdlieux(int $idlieux): self
    {
        $this->idlieux = $idlieux;

        return $this;
    }
}
