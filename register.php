<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Register</title>
</head>
<body>
    <div class="container login-container">
        <h2 class="text-center mb-4">Register</h2>
        <form action="done.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your e-mail">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Skills</label>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skills[]" id="skill1" value="PHP">
                                    <label class="form-check-label" for="skill1">PHP</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skills[]" id="skill2" value="JavaScript">
                                    <label class="form-check-label" for="skill2">JavaScript</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skills[]" id="skill3" value="HTML">
                                    <label class="form-check-label" for="skill3">HTML</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skills[]" id="skill4" value="CSS">
                                    <label class="form-check-label" for="skill4">CSS</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <select name="city" class="form-control" id="city" placeholder="Select a City">
                            <option value="Cairo">Cairo</option>
                            <option value="Alex">Alex</option>
                            <option value="Zag">Zag</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" name="department" class="form-control" id="department" value="PHP" readonly>
                    </div>
                </div>
            </div>
            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
</body>
</html>
