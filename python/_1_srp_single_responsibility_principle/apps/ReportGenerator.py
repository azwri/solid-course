from .Student import Student
from .GradeCalculater import GradeCalculater


class ReportGenerator:
    def __init__(self, calc: GradeCalculater):
        self.calc = calc
    
    def generate(self, student: Student) -> None:
        average = self.calc.average(student=student)
        status = self.calc.status(student=student)
        print(f'Name: {student.get_name()} is {status}. Grade Avg = {average:.2f}')