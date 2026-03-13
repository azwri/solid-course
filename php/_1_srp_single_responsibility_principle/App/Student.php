<?php

namespace SRP\App;

class Student
{
    private string $name;
    private array $grades;

    public function __construct(string $name, array $grades)
    {
        $this->name = $name;
        $this->grades = $grades;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getGrades(): array
    {
        return $this->grades;
    }

    public function setGrades(array $grades): void
    {
        $this->grades = $grades;
    }
}