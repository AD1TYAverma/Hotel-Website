const showPassword = document.getElementById("showPassword");
const password = document.getElementById("password");

showPassword.addEventListener("click", function () {
  if (password.type === "password") {
    password.type = "text";

    this.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
  } else {
    password.type = "password";

    this.innerHTML = '<i class="fa-solid fa-eye"></i>';
  }
});


