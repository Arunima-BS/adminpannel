// logout and profile in the top right corner admin dashboard

document.addEventListener("DOMContentLoaded", function() {
  const profileBtn = document.getElementById("profileMenuBtn");
  const profileDropdown = document.getElementById("profileDropdown");

  if (profileBtn && profileDropdown) {
    // Toggle dropdown visibility
    profileBtn.addEventListener("click", function(e) {
      e.stopPropagation(); // Stops the window click from firing immediately
      profileDropdown.classList.toggle("show");
    });

    // Close dropdown if clicking outside of it
    window.addEventListener("click", function(e) {
      if (!profileDropdown.contains(e.target) && !profileBtn.contains(e.target)) {
        profileDropdown.classList.remove("show");
      }
    });
  }
});