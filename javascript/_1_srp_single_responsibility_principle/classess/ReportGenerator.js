

export class ReportGenerator {

    constructor(calc) {
        this.calc = calc;
    }

    generate(student) {
        console.log(`Name: ${student.getName()} is ${this.calc.status(student)}. Grades: ${this.calc.average(student)}`);
    }

}