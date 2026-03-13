


class Student:
    def __init__(self, name: str, grades: list[float]):
        self.name = name
        self.grades = grades
    
    def get_name(self) -> str:
        return self.name
    
    def get_grades(self) -> list[float]:
        return self.grades