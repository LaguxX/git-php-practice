<?php
require_once "Calculator.php";
require_once "Student.php";
require_once "Teacher.php";

$calc = new Calculator();
echo $calc->add(10, 5) . PHP_EOL;
echo $calc->divide(10, 2) . PHP_EOL;
echo $calc->divide(10, 0) . PHP_EOL;

$student = new Student("Алексей", "ИС-21", 4.8);
echo $student->getInfo() . PHP_EOL;

$teacher = new Teacher("Иван Петрович", "Программирование", 10);
echo $teacher->getInfo() . PHP_EOL;
