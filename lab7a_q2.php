<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q2</title>
</head>
<body>
    <?php
    $students = [
        [
            'name' => 'Faiz',
            'program' => 'BIK',
            'age' => 21
        ],
        [
            'name' => 'Sulwan',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Syahir',
            'program' => 'BIT',
            'age' => 22
        ]
    ];
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php
        // Loop through the array and generate table rows
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student['name'] . "</td>";
            echo "<td>" . $student['program'] . "</td>";
            echo "<td>" . $student['age'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>