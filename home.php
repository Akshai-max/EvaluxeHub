<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Product Review">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Akshai S,Harish K">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvaluxeHub</title>
    <link rel="icon" href="img/EvaluxeHub.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style_css/style0.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="login.php" method="post" onsubmit="return validateForm()">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" placeholder="Name" id="name" name="name">
                <span id="name-error" class="error" style="color: red;"></span>
                <input type="email" placeholder="E-mail" id="username" name="username">
                <span id="username-error" class="error" style="color: red;"> </span>

                <div class="input">
                    <input type="password" placeholder="Password" class="pas" id="password" name="password">
                    <img src="images/eye-close.png" class="pass" id="eye" style="display: inline; width: 35px; cursor:pointer;">
                </div>
                
                <script>

                    const togglePassword = document.getElementById("eye");
                    const password = document.getElementById("password");

                        togglePassword.addEventListener("click", function () {
                        const type = password.getAttribute("type") === "password" ? "text" : "password";
                        password.setAttribute("type", type);
                            
                        if (type === "text") {
                            togglePassword.src = "images/eye-open.png";
                        }else {
                            togglePassword.src = "images/eye-close.png";
                        }
                            
                    });

                </script>

                <span id="password-error" class="error" style="color: red;"> </span>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="signin.php" method="post" onsubmit="return validate_Form()">
                <h1>Sign In</h1>
                <div class='social-icons'>
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" placeholder="E-mail" id="user_name" name="user_name">
                <span id="usernameerror" class="error" style="color: red;"></span>
                
                <div class="input">
                    <input type="password" placeholder="Password" class="pas" id="pass_word" name="pass_word">
                    <img src="images/eye-close.png" class="pass" id="eyeto" style="display: inline; width: 35px;cursor:pointer;">
                </div>

                <script>

                    const toggle_Password = document.getElementById("eyeto");
                    const pass_word = document.getElementById("pass_word");

                        toggle_Password.addEventListener("click", function () {
                        const type = pass_word.getAttribute("type") === "password" ? "text" : "password";
                        pass_word.setAttribute("type", type);
                            
                        if (type === "text") {
                            toggle_Password.src = "images/eye-open.png";
                        }else {
                            toggle_Password.src = "images/eye-close.png";
                        }
                            
                    });

                </script>

                <span id="passworderror" class="error" style="color: red;"></span>
                <?php
                if (isset($_GET['error'])) {
                    $error = htmlspecialchars($_GET['error'], ENT_QUOTES, 'UTF-8');
                    echo "<span class='erro'>"."$error"."</span>";
                }
                ?>
                <a href="#">Forget Your Password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back !</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome, Friend!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script/script.js"></script>
</body>

</html>
