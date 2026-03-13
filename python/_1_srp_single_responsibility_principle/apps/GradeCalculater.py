from .Student import Student


class GradeCalculater:
    def __init__(self, fail_grade: float = 59.99):
        self.fail_grade = fail_grade

    def average(self, student: Student) -> float:
        grades = student.get_grades()
        return sum(grades) / len(grades)
    
    def status(self, student: Student) -> str:
        return 'Pass' if self.average(student=student) > self.fail_grade else 'Fail'