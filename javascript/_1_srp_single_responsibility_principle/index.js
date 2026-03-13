import { Student } from "./classess/Student.js";
import { GradeCalculater } from "./classess/GradeCalculater.js";
import { ReportGenerator } from "./classess/ReportGenerator.js";

const student_1 = new Student("Abdulrahman", [99, 95, 100]);
const gradeCalculater = new GradeCalculater();
const reportGenerator = new ReportGenerator(gradeCalculater);

reportGenerator.generate(student_1);