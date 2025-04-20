function loginWithGoogle() {
  window.open("https://accounts.google.com/signin", "_blank");
}

window.onload = function () {
  alert("Welcome، يرجى تسجيل الدخول");
};

document.getElementById("loginForm").addEventListener("submit", function (event) {
  event.preventDefault();

  let email = document.getElementById("email").value.trim();
  let password = document.getElementById("password").value.trim();

  if (email === "" || password === "") {
    alert("يرجى استكمال باقي البيانات");
  } else {
    alert("تم تسجيل الدخول بنجاح");
    // ✅ التوجيه إلى صفحة الهوم
    window.location.href = "HomePage.html";
  }
});
