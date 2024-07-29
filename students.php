<?php
/* var_dump(); */
/*foreach() loop*/
$students = [
    ['name' => 'Fath', 'gender' => 'm', 'image' => 'imgFath.jpg', 'skills' => ['Power BI','Python']],
    ['name' => 'Ahmed', 'gender' => 'm', 'image' => 'imgAhmed.jpg', 'skills' => ['JavaScript','Python']],
    ['name' => 'Hadeer', 'gender' => 'f', 'image' => 'imgHadeer.jpg', 'skills' => ['JavaScript','HTML', 'CSS']],
    ['name' => 'Malak', 'gender' => 'f', 'image' => 'imgMalak.jpg', 'skills' => ['HTML','Bootstrap']],
    ['name' => 'Yahya', 'gender' => 'm', 'image' => 'imgYahya.jpg', 'skills' => ['Python','C++']]
];
function studentTable() {
    global $students;
    $output = '';
    foreach($students as $student) {
    $output .= '<tr>';
    $output .= '<td>' . $student['name'] . '</td>';
    $output .= '<td>' . $student['gender'] . '</td>';
    $output .= '<td>' . '<img src="img/'. $student['image'] .'" width="50" height="50">'. '</td>';
    $output .= '<td><ul>';
        foreach ($student['skills'] as $skill) {
            $output .= '<li>' . $skill . '</li>';
        }
    $output .= '</ul></td>';
    $output .= '</tr>';
    };
    return $output;
};

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <title>Students Data</title>

    </head>
    <body>
        <div class="container login-container">
            <h2 class="text-center mb-4">Students Data</h2>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Photo</th> 
                        <th>Skills</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        echo studentTable();
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>