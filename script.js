document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("loginForm");
  
    loginForm.addEventListener("submit", function(event) {
      event.preventDefault(); 
  
      const username = loginForm.username.value;
      const password = loginForm.password.value;
  
      
      if (username === "user" && password === "pass") {
        alert("Login successful!");
        
        window.location.href = "index.html";
      } else {
        alert("Incorrect username or password.");
      }
    });
  });
  