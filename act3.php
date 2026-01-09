<?php
$name = "Kamal";
$marks = array(85, 89, 92, 95, 99);

echo $name;
echo "<br>";


for ($i = 0; $i < 5; $i++) {
    echo $marks[$i] , "<br>";
}


$result = 0;
for ($i = 0; $i < 5; $i++) {
    $result = $result + $marks[$i];
}

echo "Total: " . $result;
echo "<br>";


$average = $result/count($marks);
echo "Average: " . $average;
echo "<br>";


function findGrade($average) {
    if ($average >= 90) {
        echo "Grade: A";
    } elseif ($average >= 70) {
        echo "Grade: B";
    } elseif ($average >= 50) {
        echo "Grade: C";
    } else {
        echo "Grade: S";
    }
}


findGrade($average);
?>
