<?php 


$students_exam = [
    1 => [
        "id" => "S001",
        "name" => "Ahmad Khalid",
        "email" => "ahmad.khalid@example.com",
        "exam_score" => 85
    ],
    2 => [
        "id" => "S002",
        "name" => "Sarah Ali",
        "email" => "sarah.ali@example.com",
        "exam_score" => 92
    ],
    3 => [
        "id" => "S003",
        "name" => "Adam Yehya",
        "email" => "adam.yehya@example.com",
        "exam_score" => 74
    ]
];

class Node {
    public $id;
    public $next;

    public function __construct($id) {
        $this->id = $id;
        $this->next = null;
    }
}

class LinkedList {

    public $head;

    public function __construct() {
        $this->head = null;
    }

    public function addNode($id) {
        $newNode = new Node($id);

        if ($this->head === null) {
            $this->head = $newNode;

        } else {
            
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }
}





?>