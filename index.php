<?php
require_once 'Calculator.php';
require_once 'Student.php';
require_once 'Teacher.php';

\ = new Calculator();
echo '10 + 5 = ' . \->add(10, 5) . PHP_EOL;
echo '10 / 2 = ' . \->divide(10, 2) . PHP_EOL;
echo '10 / 0 = ' . \->divide(10, 0) . PHP_EOL;

\ = new Student('Алексей', 'ИС-21', 4.8);
echo \->getInfo() . PHP_EOL;

\ = new Teacher('Иван Петрович', 'Программирование', 10);
echo \->getInfo() . PHP_EOL;
