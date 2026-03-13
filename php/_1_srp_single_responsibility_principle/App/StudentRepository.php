<?php

namespace SRP\App;

use SRP\App\Student;


class StudentRepository
{
    public function save(Student $student): void
    {
        echo "Data of {$student->getName()} saved in DB!\n";
    }
}