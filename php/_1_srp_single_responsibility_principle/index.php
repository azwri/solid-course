<?php

require_once __DIR__ . '/vendor/autoload.php';

use SRP\App\EmailService;
use SRP\App\GradeCalculater;
use SRP\App\ReportGenerator;
use SRP\App\Student;
use SRP\App\StudentRepository;

$student_1 = new Student("Abdulrahman", [97, 98, 100]);
$student_2 = new Student("Eyas", [99, 100, 100]);


$calculator = new GradeCalculater();
$mailer = new EmailService();
$reportor = new ReportGenerator($calculator);
$repo = new StudentRepository();

echo("---------------------------------------\n");
$reportor->generate($student_1);
$mailer->send("user@example.com", "Congratulations!", "....");
$repo->save($student_1);

echo("---------------------------------------\n");
$reportor->generate($student_2);
$mailer->send("user@example.com", "Congratulations!", "....");
$repo->save($student_2);