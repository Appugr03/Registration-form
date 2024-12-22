<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h1>Register</h1>
        <form action="submit_form.php" method="POST">
            <!-- Username Field -->
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            
            <!-- Email Field -->
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            
            <!-- Phone Number Field -->
            <div class="input-box">
                <input type="tel" name="phone" placeholder="Phone Number" required>
            </div>
            
            <!-- Age Field -->
            <div class="input-box">
                <input type="number" name="age" placeholder="Age" required min="1">
            </div>
            
            <!-- Submit Button -->
            <div class="input-box">
                <button type="submit" class="btn">Register</button>
            </div>
        </form>
        <div class="register-link">
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>
</html>
