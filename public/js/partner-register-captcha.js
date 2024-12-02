// DOM Elements for Password Update CAPTCHA
const partnerRegisterCaptchaCanvas = document.getElementById(
    "partnerRegisterCaptchaCanvas"
  );
  const partnerRegisterCaptchaInput = document.getElementById(
    "partnerRegisterCaptchaInput"
  );
  const partnerUpdateContext = partnerRegisterCaptchaCanvas.getContext("2d");
  
  // Function to generate a random CAPTCHA
  function generateCaptcha() {
    const chars =
      "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghjkmnopqrstuvwxyz0123456789";
    return Array.from(
      { length: 6 },
      () => chars[Math.floor(Math.random() * chars.length)]
    ).join("");
  }
  
  // Function to draw the CAPTCHA on the canvas
  function drawCaptcha(canvasContext, captcha) {
    canvasContext.clearRect(0, 0, 150, 40); // Clear previous CAPTCHA
    canvasContext.font = "20px Arial";
    canvasContext.fillStyle = "#000";
    canvasContext.fillText(captcha, 20, 30);
  }
  
  // Generate and display the initial CAPTCHA
  let passwordUpdateCaptcha = generateCaptcha();
  drawCaptcha(partnerUpdateContext, passwordUpdateCaptcha);
  
  // Refresh the CAPTCHA when the canvas is clicked
  partnerRegisterCaptchaCanvas.addEventListener("click", () => {
    passwordUpdateCaptcha = generateCaptcha(); // Generate new CAPTCHA
    drawCaptcha(partnerUpdateContext, passwordUpdateCaptcha); // Draw new CAPTCHA
  });
  
  // Form validation for Password Update
  document
    .querySelector(".form.password-update")
    .addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      const captchaValue = partnerRegisterCaptchaInput.value; // Get the entered CAPTCHA value
  
      // Validate the CAPTCHA (case-insensitive and trimmed)
      if (
        captchaValue.trim().toLowerCase() !== passwordUpdateCaptcha.toLowerCase()
      ) {
        alert("Invalid CAPTCHA. Please try again.");
        return;
      }
  
      // Proceed if CAPTCHA is valid
      alert("Password update form submitted successfully!");
    });
  