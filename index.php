<?php
require_once 'Calculator.php';
require_once 'Student.php';
require_once 'Teacher.php';

echo "=== ÏÐÎÂÅÐÊÀ ÊÀËÜÊÓËßÒÎÐÀ ===\n";
\ = new Calculator();
echo "10 + 5 = " . \->add(10, 5) . "\n";
echo "10 / 2 = " . \->divide(10, 2) . "\n";
echo "10 / 0 = " . \->divide(10, 0) . "\n\n";

echo "=== ÈÍÔÎÐÌÀÖÈß Î ÑÒÓÄÅÍÒÅ ===\n";
\ = new Student("Àëåêñåé", "ÈÑ-21", 4.8);
echo \->getInfo() . "\n\n";

echo "=== ÈÍÔÎÐÌÀÖÈß Î ÏÐÅÏÎÄÀÂÀÒÅËÅ ===\n";
\ = new Teacher("Èâàí Ïåòðîâè÷", "Ïðîãðàììèðîâàíèå", 10);
echo \->getInfo() . "\n";
