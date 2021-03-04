<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="tbl_student")
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student extends User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $studentNumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentNumber(): ?string
    {
        return $this->studentNumber;
    }

    public function setStudentNumber(?string $studentNumber): self
    {
        $this->studentNumber = $studentNumber;

        return $this;
    }
}
