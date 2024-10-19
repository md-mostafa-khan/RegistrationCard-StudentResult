<?php

function calculateResult($marks) {
    $totalMarks = 0;
    $subjectCount = count($marks);
    
    // Mark range validation
    foreach ($marks as $subject => $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range for {$subject} is invalid.\n";
            return;
        }
        // Check for fail condition
        if ($mark < 33) {
            echo "Failed in {$subject}. Mark is below 33.\n";
            return;
        }
        $totalMarks += $mark;
    }

    // Calculate total marks and average
    $averageMarks = $totalMarks / $subjectCount;


    switch (true) {
        case ($averageMarks >= 80):
            $grade = "A+";
            break;
        case ($averageMarks >= 70):
            $grade = "A";
            break;
        case ($averageMarks >= 60):
            $grade = "A-";
            break;
        case ($averageMarks >= 50):
            $grade = "B";
            break;
        case ($averageMarks >= 40):
            $grade = "C";
            break;
        case ($averageMarks >= 33):
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    // Output the result
    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: $averageMarks\n";
    echo "Grade: $grade\n";
}

// Example input
$studentMarks = [
    "Math" => 100,
    "Science" => 100,
    "English" => 100,
    "History" => 100,
    "Geography" => 100
];

// Call the function to calculate result
calculateResult($studentMarks);

?>
