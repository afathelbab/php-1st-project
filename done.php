<?php
if(!isset($_POST["submit"])) {
    die("No data to show here, please go to the form page first") ; 
 } else {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $salutation = ($gender == 'male') ? 'Mr.' : 'Mrs.';
    $skills = $_POST["skills"];
    $city = $_POST["city"];
    $department = $_POST["department"];
 };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Welcome</title>
</head>
<body>
    <div class="container login-container">
        <h2 class="text-center mb-4">Welcome <?php echo $salutation . " " . $username; ?></h2>
        <p>Review your data below:</p>
        <div>
            <p>Username: <?php echo $username; ?></p>
            <p>Email: <?php echo $email; ?></p>
            <p>Skills:</p>
            <ul>
                <?php 
                foreach ($skills as $skill) {
                    echo '<li>' . $skill . '</li>';
                }
                ?>
            </ul>
            <p>City: <?php echo $city; ?></p>
            <p>Department: <?php echo $department; ?></p>
        </div>
    </div>
</body>
</html>
