<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login - Nexmove Solutions</title>
	<meta name="description" content="Nexmove Admin Panel - Login">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
		rel="stylesheet">

	<!-- Tailwind CSS -->
	<script src="https://cdn.tailwindcss.com"></script>

	<!-- Font Awesome 6 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: 'Inter', sans-serif;
			height: 100vh;
			margin: 0;
			overflow: hidden;
			display: flex;
			align-items: center;
			justify-content: center;
			position: relative;
			background: #f8fafc;
		}

		/* Animated background orbs */
		.orb {
			position: absolute;
			border-radius: 50%;
			filter: blur(80px);
			opacity: 0.4;
			animation: float 20s ease-in-out infinite;
			pointer-events: none;
		}

		.orb-1 {
			width: 500px;
			height: 500px;
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			top: -150px;
			right: -100px;
			animation-delay: 0s;
		}

		.orb-2 {
			width: 400px;
			height: 400px;
			background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
			bottom: -100px;
			left: -80px;
			animation-delay: -7s;
		}

		.orb-3 {
			width: 350px;
			height: 350px;
			background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
			top: 40%;
			left: 60%;
			animation-delay: -14s;
		}

		@keyframes float {

			0%,
			100% {
				transform: translate(0, 0) scale(1);
			}

			25% {
				transform: translate(50px, -50px) scale(1.1);
			}

			50% {
				transform: translate(-30px, 30px) scale(0.9);
			}

			75% {
				transform: translate(40px, 40px) scale(1.05);
			}
		}

		/* Grid overlay */
		.grid-overlay {
			position: fixed;
			inset: 0;
			background-image:
				linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
				linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
			background-size: 60px 60px;
			pointer-events: none;
			z-index: 0;
		}

		/* Login card glassmorphism */
		.login-card {
			position: relative;
			z-index: 10;
			width: 100%;
			max-width: 460px;
			margin: 20px;
			background: rgba(255, 255, 255, 0.05);
			backdrop-filter: blur(24px);
			-webkit-backdrop-filter: blur(24px);
			border: 1px solid rgba(255, 255, 255, 0.1);
			border-radius: 28px;
			padding: 48px 40px;
			box-shadow:
				0 25px 60px rgba(0, 0, 0, 0.3),
				inset 0 1px 0 rgba(255, 255, 255, 0.1);
			animation: cardIn 0.8s ease-out;
		}

		@keyframes cardIn {
			from {
				opacity: 0;
				transform: translateY(30px) scale(0.98);
			}

			to {
				opacity: 1;
				transform: translateY(0) scale(1);
			}
		}

		/* Logo */
		.login-logo {
			width: 180px;
			height: auto;
			margin: 0 auto 28px;
			display: block;
		}

		/* Typography */
		.login-title {
			color: #000000;
			font-size: 28px;
			font-weight: 700;
			text-align: center;
			margin-bottom: 6px;
			font-family: 'Plus Jakarta Sans', sans-serif;
			letter-spacing: -0.5px;
		}

		.login-subtitle {
			color: rgba(3, 3, 3, 0.6);
			text-align: center;
			font-size: 14px;
			font-weight: 400;
			margin-bottom: 36px;
		}

		/* Form groups */
		.form-group {
			margin-bottom: 22px;
			position: relative;
		}

		.form-group label {
			display: block;
			color: rgba(0, 0, 0, 0.8);
			font-size: 13px;
			font-weight: 600;
			margin-bottom: 8px;
			letter-spacing: 0.3px;
		}

		.input-wrapper {
			position: relative;
		}

		.input-wrapper .input-icon {
			position: absolute;
			left: 16px;
			top: 50%;
			transform: translateY(-50%);
			color: rgba(0, 0, 0, 0.4);
			font-size: 16px;
			transition: color 0.3s ease;
			pointer-events: none;
		}

		.input-wrapper .toggle-password {
			position: absolute;
			right: 16px;
			top: 50%;
			transform: translateY(-50%);
			color: rgba(1, 1, 1, 0.4);
			cursor: pointer;
			font-size: 16px;
			transition: color 0.3s ease;
			background: none;
			border: none;
			padding: 0;
		}

		.input-wrapper .toggle-password:hover {
			color: rgba(1, 1, 1, 0.7);
		}

		.form-input {
			width: 100%;
			padding: 14px 16px 14px 48px;
			background: rgba(255, 255, 255, 0.06);
			border: 1.5px solid #000000;
			border-radius: 14px;
			color: #000000;
			font-size: 15px;
			font-family: 'Inter', sans-serif;
			transition: all 0.3s ease;
			outline: none;
		}

		.form-input:focus {
			border-color: rgba(1, 1, 1, 0.6);
			background: #010101 box-shadow: 0 0 0 4px rgba(0, 0, 0, 0.15);
		}

		.form-input::placeholder {
			color: rgba(1, 1, 1, 0.3);
			font-size: 14px;
		}

		.form-input.input-error {
			border-color: rgba(24, 22, 22, 0.6);
			box-shadow: 0 0 0 4px rgba(1, 1, 1, 0.1);
		}

		/* Error message */
		.error-message {
			display: none;
			color: #f5576c;
			font-size: 12px;
			font-weight: 500;
			margin-top: 6px;
			padding-left: 4px;
		}

		.error-message.show {
			display: block;
			animation: shake 0.3s ease-in-out;
		}

		@keyframes shake {

			0%,
			100% {
				transform: translateX(0);
			}

			25% {
				transform: translateX(-5px);
			}

			75% {
				transform: translateX(5px);
			}
		}

		/* Alert */
		.alert {
			display: none;
			padding: 14px 18px;
			border-radius: 14px;
			font-size: 13px;
			font-weight: 500;
			margin-bottom: 24px;
			animation: slideDown 0.4s ease-out;
		}

		.alert.show {
			display: flex;
			align-items: center;
			gap: 10px;
		}

		.alert-error {
			background: rgba(245, 87, 108, 0.15);
			border: 1px solid rgba(245, 87, 108, 0.3);
			color: #fca5a5;
		}

		.alert-success {
			background: rgba(16, 185, 129, 0.15);
			border: 1px solid rgba(16, 185, 129, 0.3);
			color: #6ee7b7;
		}

		@keyframes slideDown {
			from {
				opacity: 0;
				transform: translateY(-10px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		/* Remember me & Forgot password */
		.form-options {
			display: flex;
			align-items: center;
			justify-content: space-between;
			margin-bottom: 28px;
			flex-wrap: wrap;
			gap: 12px;
		}

		.remember-me {
			display: flex;
			align-items: center;
			gap: 10px;
			cursor: pointer;
			color: rgba(255, 255, 255, 0.6);
			font-size: 13px;
			font-weight: 500;
			user-select: none;
		}

		.remember-me input[type="checkbox"] {
			display: none;
		}

		.checkmark {
			width: 20px;
			height: 20px;
			border-radius: 6px;
			border: 2px solid rgba(255, 255, 255, 0.2);
			display: flex;
			align-items: center;
			justify-content: center;
			transition: all 0.3s ease;
			flex-shrink: 0;
		}

		.remember-me input:checked~.checkmark {
			background: #667eea;
			border-color: #667eea;
		}

		.remember-me input:checked~.checkmark::after {
			content: '\f00c';
			font-family: 'Font Awesome 6 Free';
			font-weight: 900;
			font-size: 10px;
			color: #060606;
		}

		.forgot-link {
			color: rgba(0, 0, 0, 0.5);
			font-size: 13px;
			font-weight: 500;
			text-decoration: none;
			transition: color 0.3s ease;
		}

		.forgot-link:hover {
			color: rgba(3, 3, 3, 0.8);
		}

		/* Button */
		.login-btn {
			width: 100%;
			padding: 16px 24px;
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			border: none;
			border-radius: 14px;
			color: #0d0d0d;
			font-size: 16px;
			font-weight: 600;
			font-family: 'Inter', sans-serif;
			cursor: pointer;
			transition: all 0.3s ease;
			position: relative;
			overflow: hidden;
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 10px;
		}

		.login-btn:hover:not(:disabled) {
			transform: translateY(-2px);
			box-shadow: 0 8px 30px rgba(102, 126, 234, 0.4);
		}

		.login-btn:active:not(:disabled) {
			transform: translateY(0);
		}

		.login-btn:disabled {
			opacity: 0.7;
			cursor: not-allowed;
		}

		.login-btn .btn-shimmer {
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
			animation: shimmer 2s infinite;
		}

		@keyframes shimmer {
			0% {
				left: -100%;
			}

			100% {
				left: 100%;
			}
		}

		.spinner {
			display: none;
			width: 20px;
			height: 20px;
			border: 2.5px solid rgba(3, 3, 3, 0.3);
			border-top-color: #060606;
			border-radius: 50%;
			animation: spin 0.7s linear infinite;
		}

		.login-btn.loading .spinner {
			display: inline-block;
		}

		.login-btn.loading .btn-text {
			display: none;
		}

		@keyframes spin {
			to {
				transform: rotate(360deg);
			}
		}

		/* Footer */
		.login-footer {
			text-align: center;
			margin-top: 28px;
			color: rgba(6, 6, 6, 0.3);
			font-size: 12px;
			font-weight: 400;
		}

		.login-footer a {
			color: rgba(3, 3, 3, 0.5);
			text-decoration: none;
			transition: color 0.3s ease;
		}

		.login-footer a:hover {
			color: rgba(0, 0, 0, 0.8);
		}

		/* Divider */
		.divider {
			display: flex;
			align-items: center;
			gap: 16px;
			margin: 24px 0;
			color: rgba(255, 255, 255, 0.2);
			font-size: 11px;
			font-weight: 500;
			text-transform: uppercase;
			letter-spacing: 1px;
		}

		.divider::before,
		.divider::after {
			content: '';
			flex: 1;
			height: 1px;
			background: rgba(255, 255, 255, 0.08);
		}

		/* Responsive */
		@media (max-width: 500px) {
			.login-card {
				padding: 36px 24px;
				margin: 16px;
				border-radius: 20px;
			}

			.login-title {
				font-size: 24px;
			}

			.form-options {
				flex-direction: column;
				align-items: flex-start;
			}

			.orb-1 {
				width: 300px;
				height: 300px;
			}

			.orb-2 {
				width: 250px;
				height: 250px;
			}

			.orb-3 {
				display: none;
			}
		}

		@media (prefers-color-scheme: light) {
			body {
				background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #4facfe 100%);
			}

			.login-card {
				background: rgba(255, 255, 255, 0.12);
			}
		}

	</style>
</head>

<body>

	<!-- Animated background orbs -->
	<div class="orb orb-1"></div>
	<div class="orb orb-2"></div>
	<div class="orb orb-3"></div>
	<div class="grid-overlay"></div>

	<!-- Login Card -->
	<div class="login-card">

		<!-- Logo -->
		<img src="<?php echo base_url('assets/img/black.png'); ?>" alt="Nexmove Logo" class="login-logo">

		<!-- Title -->
		<h1 class="login-title">Welcome Back</h1>
		<p class="login-subtitle">Sign in to access the admin dashboard</p>

		<!-- Alert Message -->
		<?php if ($this->session->flashdata('error')): ?>
		<div class="alert alert-error show" id="alertMessage">
			<i class="fas fa-exclamation-circle"></i>
			<span><?php echo $this->session->flashdata('error'); ?></span>
		</div>
		<?php endif; ?>

		<?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success show" id="alertMessage">
			<i class="fas fa-check-circle"></i>
			<span><?php echo $this->session->flashdata('success'); ?></span>
		</div>
		<?php endif; ?>

		<div class="alert alert-error" id="jsAlert">
			<i class="fas fa-exclamation-circle"></i>
			<span id="jsAlertText"></span>
		</div>

		<!-- Login Form -->
		<form id="loginForm" action="<?php echo base_url('admin/authenticate'); ?>" method="POST" autocomplete="off">

			<!-- Username / Email -->
			<div class="form-group">
				<label for="username">
					<i class="fas fa-user" style="margin-right: 6px; opacity: 0.6;"></i>
					Username or Email
				</label>
				<div class="input-wrapper">
					<i class="fas fa-envelope input-icon"></i>
					<input type="text" id="username" name="username" class="form-input"
						placeholder="Enter your username or email" required autofocus autocomplete="username">
				</div>
				<span class="error-message" id="usernameError">Please enter your username or email</span>
			</div>

			<!-- Password -->
			<div class="form-group">
				<label for="password">
					<i class="fas fa-lock" style="margin-right: 6px; opacity: 0.6;"></i>
					Password
				</label>
				<div class="input-wrapper">
					<i class="fas fa-key input-icon"></i>
					<input type="password" id="password" name="password" class="form-input"
						placeholder="Enter your password" required autocomplete="current-password">
					<button type="button" class="toggle-password" id="togglePassword"
						aria-label="Toggle password visibility">
						<i class="far fa-eye-slash"></i>
					</button>
				</div>
				<span class="error-message" id="passwordError">Please enter your password</span>
			</div>

			<!-- Options -->
			<div class="form-options">
				<label class="remember-me">
					<input type="checkbox" name="remember" id="remember">
					<span class="checkmark"></span>
					Remember me
				</label>
				<a href="#" class="forgot-link"
					onclick="alert('Contact administrator to reset password.'); return false;">
					<i class="fas fa-question-circle" style="margin-right: 4px;"></i>
					Forgot password?
				</a>
			</div>

			<!-- Submit Button -->
			<button type="submit" class="login-btn" id="loginBtn">
				<span class="btn-shimmer"></span>
				<span class="spinner"></span>
				<span class="btn-text">
					<i class="fas fa-arrow-right-to-bracket" style="margin-right: 8px;"></i>
					Sign In
				</span>
			</button>

		</form>

		<!-- Divider -->
		<div class="divider">Nexmove Admin Panel</div>

		<!-- Footer -->
		<div class="login-footer">
			&copy; <?php echo date('Y'); ?> <a href="#">Nexmove Solutions</a>. All rights reserved.
		</div>

	</div>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const form = document.getElementById('loginForm');
			const username = document.getElementById('username');
			const password = document.getElementById('password');
			const usernameError = document.getElementById('usernameError');
			const passwordError = document.getElementById('passwordError');
			const loginBtn = document.getElementById('loginBtn');
			const togglePassword = document.getElementById('togglePassword');
			const jsAlert = document.getElementById('jsAlert');
			const jsAlertText = document.getElementById('jsAlertText');

			// Auto-hide flash messages after 5 seconds
			const alertMessage = document.getElementById('alertMessage');
			if (alertMessage) {
				setTimeout(() => {
					alertMessage.style.transition = 'opacity 0.5s ease';
					alertMessage.style.opacity = '0';
					setTimeout(() => alertMessage.classList.remove('show'), 500);
				}, 5000);
			}

			// Toggle password visibility
			togglePassword.addEventListener('click', function () {
				const icon = this.querySelector('i');
				if (password.type === 'password') {
					password.type = 'text';
					icon.className = 'far fa-eye';
				} else {
					password.type = 'password';
					icon.className = 'far fa-eye-slash';
				}
			});

			// Real-time validation clearing
			username.addEventListener('input', function () {
				if (this.value.trim()) {
					this.classList.remove('input-error');
					usernameError.classList.remove('show');
				}
			});

			password.addEventListener('input', function () {
				if (this.value.trim()) {
					this.classList.remove('input-error');
					passwordError.classList.remove('show');
				}
			});

			// Submit handler
			form.addEventListener('submit', function (e) {
				e.preventDefault();

				// Reset errors
				username.classList.remove('input-error');
				password.classList.remove('input-error');
				usernameError.classList.remove('show');
				passwordError.classList.remove('show');
				jsAlert.classList.remove('show');

				// Validate
				let valid = true;

				if (!username.value.trim()) {
					username.classList.add('input-error');
					usernameError.classList.add('show');
					valid = false;
				}

				if (!password.value.trim()) {
					password.classList.add('input-error');
					passwordError.classList.add('show');
					valid = false;
				}

				if (!valid) return;

				// Show loading state
				loginBtn.classList.add('loading');
				loginBtn.disabled = true;

				// Submit form
				this.submit();
			});

			// Enter key support (native form behavior handles this, but added for completeness)
			form.addEventListener('keypress', function (e) {
				if (e.key === 'Enter') {
					e.preventDefault();
					form.requestSubmit();
				}
			});
		});

	</script>

</body>

</html>
