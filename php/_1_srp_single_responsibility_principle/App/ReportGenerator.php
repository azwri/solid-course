<?php

namespace SRP\App;

use SRP\App\Student;
use SRP\App\GradeCalculater;

class ReportGenerator
{
    private $calc;

    public function __construct(GradeCalculater $calc)
    {
        $this->calc = $calc;
    }

    public function generate(Student $student): void
    {
        echo "Name {$student->getName()} is {$this->calc->status($student)}. Grade = {$this->calc->average($student)}\n";
    }
}