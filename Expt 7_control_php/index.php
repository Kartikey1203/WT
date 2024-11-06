<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Statements</title>
</head>
<body>

    <h1>PHP Control Statements</h1>

    <?php
    // IF-ELSE Statement
    $num = 10;
    echo "<h2>If-Else Statement</h2>";
    if ($num > 0) {
        echo "$num is a positive number.";
    } else {
        echo "$num is not a positive number.";
    }

    // SWITCH Statement
    $day = 3;
    echo "<h2>Switch Statement</h2>";
    switch ($day) {
        case 1:
            echo "Today is Monday.";
            break;
        case 2:
            echo "Today is Tuesday.";
            break;
        case 3:
            echo "Today is Wednesday.";
            break;
        default:
            echo "Invalid day.";
            break;
    }

    // FOR Loop
    echo "<h2>For Loop</h2>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i<br>";
    }

    // WHILE Loop
    echo "<h2>While Loop</h2>";
    $count = 1;
    while ($count <= 3) {
        echo "While count: $count<br>";
        $count++;
    }

    // FOREACH Loop (Array iteration)
    echo "<h2>Foreach Loop</h2>";
    $colors = array("Red", "Green", "Blue");
    foreach ($colors as $color) {
        echo "Color: $color<br>";
    }

    // IF-ELSEIF-ELSE Statement
    echo "<h2>If-Elseif-Else Statement</h2>";
    $grade = 85;
    if ($grade >= 90) {
        echo "You got an A.";
    } elseif ($grade >= 80) {
        echo "You got a B.";
    } elseif ($grade >= 70) {
        echo "You got a C.";
    } else {
        echo "You need to improve your grades.";
    }

    ?>
    
</body>
</html>
