window.onload = function () {
  alert("Welcome, please create an account.");
};

document.getElementById("registerForm").addEventListener("submit", function (event) {
  event.preventDefault(); // Stop default submission

  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();

  if (email === "" || password === "") {
    alert("Please complete the required fields.");
  } else {
    alert("Account created successfully!");
    window.location.href = "index.html"; // Redirect after success
  }
});
