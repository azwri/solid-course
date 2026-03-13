

export class GradeCalculater {
    
    constructor(failGrade = 59.99) {
        this.failGrade = failGrade;
    }

    average(student) {
        const grades = student.getGrades();
        const sum = grades.reduce((acc, grade) => acc + grade, 0);
        return sum / grades.length;
    }

    status(student) {
        const averageGrade = this.average(student);
        return averageGrade >= this.failGrade ? "Passed" : "Failed";
    }

}