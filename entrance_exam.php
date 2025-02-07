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

    public function printList() {
        $current = $this->head;
        if ($current === null) {
            echo "No students in interview phase.\n";
        } else {
            while ($current !== null) {
                echo "Student ID: " . $current->id . "\n";
                $current = $current->next;
            }
        }
    }
}

$interviewList = new LinkedList();

function addStudent(&$students, $id, $name, $email, $exam_score) {
    $student = [
        'id' => $id,
        'name' => $name,
        'email' => $email,
        'exam_score' => $exam_score
    ];

    $students[$id] = $student;
}

function validateAndAddToInterview(&$students, &$interviewList) {
    $passing_score = 70;

    foreach ($students as $student) {
        if ($student['exam_score'] >= $passing_score) {
            $interviewList->addNode($student['id']);
        }
    }
}






?>