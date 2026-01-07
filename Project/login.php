<?php

$email = $password = "";
$emailErr = $passwordErr = $loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    
    if (empty($emailErr) && empty($passwordErr)) {
        
        
        $valid_email = "admin@example.com";
        $valid_pass = "123456";

        if ($email === $valid_email && $password === $valid_pass) {
            
            header("Location: dashboard.php"); 
            exit();
        } else {
            $loginErr = "Invalid email or password.";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-Welfare Bangladesh</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #2E7D32; 
            --primary-hover: #1B5E20;
            --text-dark: #333333;
            --text-light: #666666;
            --bg-color: #F0F2F5;
            --white: #ffffff;
            --border-color: #DDDDDD;
            --error-color: #d32f2f;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

        body {
            background-color: var(--bg-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: var(--white);
            width: 100%;
            max-width: 450px;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .logo-header { text-align: center; margin-bottom: 30px; }
        .logo-text { font-size: 24px; font-weight: 700; color: var(--text-dark); }
        .logo-text span { color: var(--primary-color); }

        .login-header h2 { font-size: 22px; color: var(--text-dark); margin-bottom: 8px; font-weight: 600; }
        .login-header p { font-size: 14px; color: var(--text-light); margin-bottom: 20px; }

        .input-group { margin-bottom: 20px; position: relative; }
        .input-group label { display: block; font-size: 13px; font-weight: 500; color: var(--text-dark); margin-bottom: 8px; }
        
        .input-wrapper { position: relative; }
        .input-wrapper i.icon { position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #888; }
        
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #888;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px 12px 40px; 
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 14px;
            transition: 0.3s;
            outline: none;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.1);
        }

        /* Error Styling */
        .error-msg {
            color: var(--error-color);
            font-size: 12px;
            margin-top: 5px;
            display: block;
        }
        
        .global-error {
            background-color: #ffebee;
            color: var(--error-color);
            padding: 10px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 20px;
            text-align: center;
            border: 1px solid #ffcdd2;
        }

        .form-options { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; font-size: 13px; }
        .remember-me { display: flex; align-items: center; color: var(--text-light); }
        .remember-me input { margin-right: 8px; accent-color: var(--primary-color); }
        .forgot-link { color: var(--primary-color); text-decoration: none; font-weight: 500; }
        .forgot-link:hover { text-decoration: underline; }

        .btn-login {
            width: 100%;
            padding: 14px;
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn-login:hover { background-color: var(--primary-hover); }

        .divider { display: flex; align-items: center; margin: 25px 0; color: var(--text-light); font-size: 13px; }
        .divider::before, .divider::after { content: ""; flex: 1; height: 1px; background-color: var(--border-color); }
        .divider span { padding: 0 10px; }

        .social-buttons { display: flex; gap: 15px; }
        .btn-social {
            flex: 1; display: flex; align-items: center; justify-content: center;
            padding: 10px; border: 1px solid var(--border-color);
            border-radius: 8px; background: var(--white);
            cursor: pointer; transition: 0.2s; text-decoration: none;
            color: var(--text-dark); font-size: 14px; font-weight: 500;
        }
        .btn-social:hover { background-color: #f9f9f9; border-color: #ccc; }
        .btn-social i { margin-right: 8px; font-size: 18px; }
        .google-icon { color: #DB4437; }
        .facebook-icon { color: #4267B2; }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="logo-header">
            <div class="logo-text">E-Welfare <span>Bangladesh</span></div>
        </div>

        <div class="login-header">
            <h2>Member Login</h2>
            <p>Access your E-Welfare Bangladesh account</p>
        </div>

        <?php if(!empty($loginErr)): ?>
            <div class="global-error">
                <i class="fa-solid fa-circle-exclamation"></i> <?php echo $loginErr; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            
            <div class="input-group">
                <label for="email">Email Address</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-user icon"></i>
                    <input type="text" id="email" name="email" class="form-control" 
                           placeholder="Enter your email" value="<?php echo $email; ?>">
                </div>
                <span class="error-msg"><?php echo $emailErr;?></span>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-lock icon"></i>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                    <i class="fa-solid fa-eye toggle-password" id="togglePassword"></i>
                </div>
                <span class="error-msg"><?php echo $passwordErr;?></span>
            </div>

            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="#" class="forgot-link">Forgot password?</a>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>

        <div class="divider">
            <span>or continue with</span>
        </div>

        <div class="social-buttons">
            <a href="#" class="btn-social">
                <i class="fa-brands fa-google google-icon"></i> Google
            </a>
            <a href="#" class="btn-social">
                <i class="fa-brands fa-facebook facebook-icon"></i> Facebook
            </a>
        </div>
    </div>

    <script>
    
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
        
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });
    </script>
</body>
</html>