<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Product Review">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Akshai S,Harish K">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EvaluxeHub | Log out</title>
        <link rel="icon" href="img/EvaluxeHub.png">
        <link rel="stylesheet" href="style_css/style4.css">
        <script src="https://kit.fontawesome.com/69806a9aa8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" id="container">
            <h3><strong>My Details.</strong></h3>
            <table>
                <tr>
                    <td><strong>Name</strong></td>
                    <td><?php echo $_SESSION['name']; ?></td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td><?php echo $_SESSION['user_name'] ?></td>
                </tr>
                <tr rowspan="2">
                    <td><strong>Password</strong></td>
                    <td>
                        <span style="position:relative;bottom:5px;" class="hidden" id="passwordText">............</span></td>
                        <td style="padding-left:0px;"><img src="img/eye-close.png"  width="20%" id="toggleIcon" style="position: relative;cursor:pointer;" >
                    </td>
                </tr>
            </table>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const passwordText = document.getElementById("passwordText");
                    const toggleIcon = document.getElementById("toggleIcon");

                    toggleIcon.addEventListener("click", function () {
                        if (passwordText.classList.contains("hidden")) {
                            passwordText.classList.remove("hidden");
                            passwordText.classList.add("visible");
                            passwordText.textContent = "<?php echo $_SESSION['pass_word'] ?>"
                            toggleIcon.src = "img/eye-open.png";
                        } else {
                            passwordText.classList.remove("visible");
                            passwordText.classList.add("hidden");
                            passwordText.textContent = "............"
                            toggleIcon.src = "img/eye-close.png";
                        }
                    });
                });
            </script>
            <div class="button" style="float:left">
                <a class="link" href="index.php">HOME</a>
            </div>
            <div class="button" style="float:right;margin-right:20px">
                <a class="link" href="log.php">LOG OUT</a>
            </div>
        </div>
    </body>
</html>