<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">   
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    /* Custom CSS styles */
    .error {
      color: red;
    }
  </style>
  <title>Registration Form</title>
</head>
<body>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12">
                <div class="login_f">
                    
                 <div class="client_cl">
                    <h1>Registration Form</h1>
                    <form action="login.php" method="POST" id="registrationForm" onsubmit="validateForm(event)">
                          
                              <label for="username" class="form-label">Username</label>
                              <input type="text" class="input_form" id="username" name="username">
                              <small class="error" id="usernameError"></small>
                           
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="input_form" id="email" name="email">
                            <small class="error" id="emailError"></small>
                          

                         
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="input_form" id="password" name="password">
                            <small class="error" id="passwordError"></small>
                          

                        
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="input_form" id="confirmPassword" name="confirmPassword">
                            <small class="error" id="confirmPasswordError"></small>
                         

                         

                          
                            <div class="submit_cl  ">
                                <button type="submit" class="submit_btn btn btn-primary form-control" id="Login"><a href="login.php" style="color:black;text-decoration:none;">Register</a></button>
                            
                           </div>
                       </form>
                   </div>
                </div>
           </div>
        </div>
   </div>
</div>

<!-- JS CODE Validation Code -->
  <script>
    function validateForm(event) {
      event.preventDefault();
      const errorElements = document.getElementsByClassName('error');
      Array.from(errorElements).forEach((element) => {
        element.textContent = '';
      });

      const username = document.getElementById('username').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;

      let isValid = true;

      if (username.trim() === '') {
        document.getElementById('usernameError').textContent = 'Username is required.';
        isValid = false;
      }

      if (email.trim() === '') {
        document.getElementById('emailError').textContent = 'Email is required.';
        isValid = false;
      } else if (!validateEmail(email)) {
        document.getElementById('emailError').textContent = 'Invalid email format.';
        isValid = false;
      }

      if (password.trim() === '') {
        document.getElementById('passwordError').textContent = 'Password is required.';
        isValid = false;
      }

      if (confirmPassword.trim() === '') {
        document.getElementById('confirmPasswordError').textContent = 'Confirm Password is required.';
        isValid = false;
      } else if (password !== confirmPassword) {
        document.getElementById('confirmPasswordError').textContent = 'Passwords do not match.';
        isValid = false;
      }

      if (isValid) {
        document.getElementById('registrationForm').submit();
      }
    }

    function validateEmail(email) {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailPattern.test(email);
    }
  </script>
</body>
</html>
