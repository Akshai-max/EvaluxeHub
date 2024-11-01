const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
                                        container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var name=document.getElementById("name").value;
    var usernameError = document.getElementById("username-error");
    var passwordError = document.getElementById("password-error");
    var nameError = document.getElementById("name-error");
    var isValid = true;
    usernameError.innerHTML = "";
    passwordError.innerHTML = "";
    nameError.innerHTML = "";
    if (username.trim() === "") {
        usernameError.innerHTML = "Username is required";
        isValid = false;
    }
    if (password.trim() === "") {
        passwordError.innerHTML = "Password is required";
        isValid = false;
    }
    if (name.trim() === "") {
        nameError.innerHTML = "Name is required";
        isValid = false;
    }
    return isValid;
}
function validate_Form() {
    var username = document.getElementById("user_name").value;
    var password = document.getElementById("pass_word").value;
    var usernameError = document.getElementById("usernameerror");
    var passwordError = document.getElementById("passworderror");
    var isValid = true;
    usernameError.innerHTML = "";
    passwordError.innerHTML = "";
    if (username.trim() === "") {
        usernameError.innerHTML = "Username is required";
        isValid = false;
    }
    if (password.trim() === "") {
        passwordError.innerHTML = "Password is required";
        isValid = false;
    }
    return isValid;
}
