<?php
class Student {
    public $name;
    public $group;
    public $averageScore;
    public function __construct($name, $group, $averageScore) {
        $this->name = $name;
        $this->group = $group;
        $this->averageScore = $averageScore;
    }
    public function getInfo() {
        return $this->name . " " . $this->group . " " . $this->averageScore;
    }
}
