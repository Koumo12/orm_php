<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table]
class Group
{
    #[ORM\Id]
    #[ORM\Column(name: 'id', type: 'string'), ORM\GeneratedValue(strategy: 'UUI')]
    private string $id;

    #[ORM\Column(name: 'name', type: 'string')]
    private string $name;

    #[ORM\OneToMany(mappedBy: 'group', targetEntity: 'User')]
    private array $users;
}