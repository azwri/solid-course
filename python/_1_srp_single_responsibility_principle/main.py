from apps.Student import Student
from apps.GradeCalculater import GradeCalculater
from apps.StudentRepository import StudentRepository
from apps.ReportGenerator import ReportGenerator
from apps.EmailService import EmailSerive


student_1 = Student(name='Abdulrahman', grades=[98.0, 99.0, 100.0])
student_2 = Student(name='Eyas', grades=[100, 100, 99])


grade_calculator = GradeCalculater()
reporter = ReportGenerator(calc=grade_calculator)
repo = StudentRepository()
mailer = EmailSerive()


print('---' * 20)
reporter.generate(student=student_1)
mailer.send(to='user@example.com', subject='Congratulations!', body='....')
repo.save(student=student_1)


print('---' * 20)
reporter.generate(student=student_2)
mailer.send(to='user2@exampel.com', subject='Congratulations!', body='....')
repo.save(student=student_2)