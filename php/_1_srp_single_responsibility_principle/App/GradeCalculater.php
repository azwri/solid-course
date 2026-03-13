<?php

namespace SRP\App;

use SRP\App\Student;

class GradeCalculater
{
    private float $failGrad;

    public function __construct(float $failGrad = 59.99)
    {
        $this->failGrad = $failGrad;
    }

    public function average(Student $student) : float
    {
        $average = array_sum($student->getGrades()) / count($student->getGrades());
        return $average;
    }

    public function status(Student $student): string
    {
        $status = $this->average($student) > $this->failGrad ? "Pass" : "Fail";
        return $status;
    }
}