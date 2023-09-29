<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="stylesheet.css">
    </style>
</head>
<body>
    <div class="container">
        <form action="store.php" method="post"></form>
            <h2>Registration</h2>
            <div class="content">
                <div class="input-box">
                    <label></label>First Name</label>
                    <input type="text" name="name" placeholder="Enter your first name" required>
                </div> 
                <div class="input-box">
                    <label></label>Last Name</label>
                    <input type="text" name="name" placeholder="Enter your last name" required>
                </div>  
                <div class="input-box">
                    <label></label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>   
                <div class="input-box">
                    <label></label>Phone Number</label>
                    <input type="tel" name="phone" placeholder="Enter your phone number" required>
                </div>  
                <div class="input-box">
                    <label></label>Password</label>
                    <input type="password" name="password" placeholder="Enter new Password" required>
                </div>  
                <div class="input-box">
                    <label></label>Confirm Password</label>
                    <input type="password" name="password" placeholder="Confirm your Password" required>
                </div>
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male">
                    <label>Male</label>
                    <input type="radio" name="gender" id="female">
                    <label>Female</label>
                    <input type="radio" name="gender" id="other">
                    <label>Other</label>
                </div>
            </div>
            <div class="alert">
                <p>By clicking sign up, you agree <a href="#">Terms&Policy</a>.You may receive SMS notifications from us and opt out at any time.</p>
            </div>
            <div class="button-container">
                <button type="submit" name="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>