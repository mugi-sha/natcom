<?php
include 'conn.php';
if (isset($_POST['submit']))
    { // button is clicked 1.
    // get values from form 2.
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // validate inputs 3.
    $sql = "INSERT INTO admin (id,user_name,,email,password) VALUES (NULL,'$username','$email','$password')";
    // execute query 4.
    $result = mysqli_query($conn,$sql);
    // check if query was successful 5.
    if($result) {
        echo "Registration successful!";
        header("Location: list.php"); // redirect to list page
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --primary-dark: #2e59d9;
            --text-color: #fff;
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        body {
            min-height: 100vh;
            background: url('bg form.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        .login-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
            overflow: hidden;
            width: 100%;
            max-width: 450px;
            transition: var(--transition);
            animation: fadeInUp 0.8s;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.5);
        }

        .card-header {
            background: rgba(255, 255, 255, 0.2);
            border-bottom: 1px solid var(--glass-border);
            padding: 1.5rem;
            text-align: center;
            position: relative;
        }

        .card-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 3px;
        }

        .card-title {
            color: white;
            font-weight: 700;
            margin: 0;
            font-size: 1.8rem;
        }

        .card-body {
            padding: 2rem;
        }

        .form-floating label {
            color: rgba(255, 255, 255, 0.8);
            left: 40px;
        }

        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-select~label {
            transform: scale(0.85) translateY(-0.8rem) translateX(-1.5rem);
            color: white;
            background: var(--primary-color);
            padding: 0 10px;
            border-radius: 5px;
        }

        .input-group-text {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 45px;
            justify-content: center;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding-left: 15px;
            height: calc(3.5rem + 2px);
            transition: var(--transition);
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
            color: white;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: var(--transition);
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .forgot-pass {
            text-align: center;
            margin-top: 1.5rem;
        }

        .forgot-pass a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .forgot-pass a:hover {
            color: white;
            text-decoration: underline;
        }

        /* Floating animation */
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .glass-card {
                margin: 0 15px;
            }
            
            .card-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="glass-card animate__animated animate__fadeIn">
            <div class="card-header">
                <h2 class="card-title">ADMIN PORTAL</h2>
            </div>
            <div class="card-body">
                <form method="POST" class="needs-validation" novalidate>
                    <div class="form-floating mb-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" id="username" name="user_name" placeholder="Username" required>
                            
                            <div class="invalid-feedback">
                              
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                          
                            <div class="invalid-feedback">
                            
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                           
                            <div class="invalid-feedback">
                              
                            </div>
                        </div>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <a href="=list.php"><i class="fas fa-sign-in-alt me-2"></i> LOGIN
                        </button></a>
                    </div>

                    <div class="forgot-pass">
                        <a href="#" class="animate__animated animate__fadeIn animate__delay-1s">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form validation
        (function () {
            'use strict'
            
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
        
        // Add floating animation to card on hover
        document.querySelector('.glass-card').addEventListener('mouseenter', function() {
            this.classList.add('floating');
        });
        
        document.querySelector('.glass-card').addEventListener('mouseleave', function() {
            this.classList.remove('floating');
        });
    </script>
</body>
</html>

<?php

?>