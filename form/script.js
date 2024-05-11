document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission
  
    // Show success message popup
    document.getElementById("overlay").style.display = "flex";
  });
  
  document.getElementById("closeBtn").addEventListener("click", function() {
    // Hide the success message popup when close button is clicked
    document.getElementById("overlay").style.display = "none";
  });
  