document.getElementById("resetForm").addEventListener("submit", function (event) {
  event.preventDefault(); // Prevent default form submission

  const newPassword = document.getElementById("newPassword").value.trim();
  const confirmPassword = document.getElementById("confirmPassword").value.trim();

  if (newPassword === "" || confirmPassword === "") {
    alert("Please fill in all fields.");
  } else if (newPassword !== confirmPassword) {
    alert("Passwords do not match.");
  } else {
    alert("Password changed successfully!");
    window.location.href = "login1.html"; // Redirect after success
  }
});
