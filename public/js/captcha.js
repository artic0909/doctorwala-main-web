// DOM elements for Sign-Up CAPTCHA
const signupCaptchaCanvas = document.getElementById('signupCaptchaCanvas');
const signupCaptchaInput = document.getElementById('signupCaptchaInput');
const signupContext = signupCaptchaCanvas.getContext('2d');

// DOM elements for Login CAPTCHA
const loginCaptchaCanvas = document.getElementById('loginCaptchaCanvas');
const loginCaptchaInput = document.getElementById('loginCaptchaInput');
const loginContext = loginCaptchaCanvas.getContext('2d');


// Function to generate CAPTCHA
function generateCaptcha() {
    const chars = 'ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghjkmnopqrstuvwxyz0123456789';
    return Array.from({ length: 6 }, () => chars[Math.floor(Math.random() * chars.length)]).join('');
}

// Function to draw CAPTCHA on canvas
function drawCaptcha(canvasContext, captcha) {
    canvasContext.clearRect(0, 0, 150, 40); // Clear previous CAPTCHA
    canvasContext.font = '20px Arial';
    canvasContext.fillStyle = '#000';
    canvasContext.fillText(captcha, 20, 30);
}

// Generate and set initial CAPTCHAs
let signupCaptcha = generateCaptcha();
let loginCaptcha = generateCaptcha();

drawCaptcha(signupContext, signupCaptcha);
drawCaptcha(loginContext, loginCaptcha);

// Refresh CAPTCHAs on canvas click
signupCaptchaCanvas.addEventListener('click', () => {
    signupCaptcha = generateCaptcha();
    drawCaptcha(signupContext, signupCaptcha);
});

loginCaptchaCanvas.addEventListener('click', () => {
    loginCaptcha = generateCaptcha();
    drawCaptcha(loginContext, loginCaptcha);
});

// Show/Hide Password with Icon Toggle
document.querySelectorAll('.fa-eye, .fa-lock').forEach(icon => {
    icon.addEventListener('click', function () {
        const input = this.nextElementSibling; // Find the associated input
        if (input && (input.type === 'password' || input.type === 'text')) {
            input.type = input.type === 'password' ? 'text' : 'password';
            // Toggle the eye icon
            if (this.classList.contains('fa-eye')) {
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            } else {
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            }
        }
    });
});

// Form validations for Sign-Up
document.querySelector('.form.sign-up').addEventListener('submit', function (e) {
    e.preventDefault();
    const password = document.getElementById('user_password').value;
    const confirmPassword = document.querySelector('input[placeholder="Confirm password"]').value;
    const captchaValue = signupCaptchaInput.value;

    // Check password match
    if (password !== confirmPassword) {
        alert('Passwords do not match!');
        return;
    }

    // Check CAPTCHA validation
    if (captchaValue !== signupCaptcha) {
        alert('Invalid CAPTCHA. Please try again.');
        return;
    }

    alert('Sign-up form submitted successfully!');
});

// Form validations for Login
document.querySelector('.form.sign-in').addEventListener('submit', function (e) {
    e.preventDefault();
    const captchaValue = loginCaptchaInput.value;

    // Check CAPTCHA validation
    if (captchaValue !== loginCaptcha) {
        alert('Invalid CAPTCHA. Please try again.');
        return;
    }

    alert('Login form submitted successfully!');
});

// Toggle between forms
function toggle() {
    document.querySelector('.sign-up').classList.toggle('active');
    document.querySelector('.sign-in').classList.toggle('active');
}
