<?php
function calculateAverage($scores) {
    return array_sum($scores) / count($scores);
}

$name = $_POST['name'];

$subjects = [
    $_POST['subject1'] => $_POST['score1'],
    $_POST['subject2'] => $_POST['score2'],
    $_POST['subject3'] => $_POST['score3']
];

$scores = array_values($subjects);
$average = calculateAverage($scores);

// Output
echo "<h2>Student Report</h2>";
echo "Name: " . htmlspecialchars($name) . "<br><br>";

foreach ($subjects as $subject => $score) {
    echo "Subject: " . htmlspecialchars($subject) . " - Score: " . htmlspecialchars($score) . "<br>";
}

echo "<br><strong>Average Score:</strong> " . round($average, 2);
?>
