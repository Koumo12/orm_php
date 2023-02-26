<?php

use Doctrine\ORM\Mapping as ORM;

// Code first
// Database first
// Model first
#[ORM\Entity]
#[ORM\Table]

class User
{
    #[ORM\Id]
    #[ORM\Column(name: 'id', type: 'string'), ORM\GeneratedValue(strategy: 'UUI')]
    private string $id;

    #[ORM\Column(name: 'email', type: 'string')]
    private string $email;

    #[ORM\Column(name: 'password', type: 'string')]
    private string $password;

    #[ORM\ManyToOne(targetEntity: 'Group', inversedBy: 'users')]
    private Group $group;
}