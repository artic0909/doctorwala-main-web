// Generate Captcha and Verify
const canvas = document.getElementById('partnerRegisterCaptchaCanvas');
const captchaInput = document.getElementById('partnerRegisterCaptchaInput');
const context = canvas.getContext('2d');
let captchaText = '';

function generateCaptcha() {
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    captchaText = '';
    for (let i = 0; i < 6; i++) {
        captchaText += chars[Math.floor(Math.random() * chars.length)];
    }

    // Style and draw captcha on canvas
    context.clearRect(0, 0, canvas.width, canvas.height);
    context.font = '30px Arial';
    context.fillStyle = '#333';
    context.fillText(captchaText, 20, 35);
}

canvas.addEventListener('click', generateCaptcha);

// Verify Captcha
function verifyCaptcha() {
    const userInput = captchaInput.value;
    if (userInput === captchaText) {
        showAlert('Captcha Verified', 'success');
        setTimeout(() => {
            document.querySelector('form').submit(); // Automatically submit the form
        }, 1000);
    } else {
        showAlert('Captcha Incorrect', 'danger');
    }
}

// Bootstrap Alert
function showAlert(message, type) {
    const alertPlaceholder = document.getElementById('alertPlaceholder');
    alertPlaceholder.innerHTML = `
        <div class="alert alert-${type} alert-dismissible fade show" role="alert">
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;
}

// Initialize Captcha on Page Load
generateCaptcha();
