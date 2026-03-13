from .Student import Student


class StudentRepository:
    def save(self, student: Student) -> None:
        print(f'Data of {student.get_name()} saved in DB!')