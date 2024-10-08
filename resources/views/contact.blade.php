<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<style>
        body {
            font-family: "Arial";
        }

		/* Navigation Bar Styles */
		.navbar {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		.navbar a {
			color: #fff;
			text-decoration: none;
			margin: 0 10px;
		}
		.navbar a:hover {
			color: #ccc;
		}
		
		/* Contact Page Styles */
		.contact-page {
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 20px;
			background-color: #f7f7f7; /* added background color */
			border: 1px solid #ddd; /* added border */
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* added box shadow */
			width: 80%; /* added width */
			margin: 40px auto; /* added margin */
		}
		.contact-form {
			background-color: #fff;
			padding: 20px;
			border: 1px solid #ddd;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			width: 50%;
			margin: 20px auto;
		}
		.contact-form h2 {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.contact-form label {
			font-size: 16px;
			margin-bottom: 5px;
		}
		.contact-form input {
			width: 100%;
			height: 40px;
			margin-bottom: 10px;
			padding: 10px;
			border: 1px solid #ccc;
		}
		.contact-form button {
			background-color: #333;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
		}
		.contact-form button:hover {
			background-color: #444;
		}
		
		/* Footer Styles */
		.footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
			clear: both;
		}
		.footer h3 {
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.footer ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}
		.footer li {
			display: inline-block;
			margin-right: 20px;
		}
		.footer a {
			color: #fff;
			text-decoration: none;
		}
		.footer a:hover {
			color: #ccc;
		}
	</style>
</head>
<body>
	<!-- Navigation Bar -->
	<div class="navbar">
		<a href="/">Home</a>
		<a href="/about">About</a>
		<a href="/contact" class="active"><u>Contact</u></a>
	</div>
	
	<!-- Contact Page -->
	<div class="contact-page">
		<div class="contact-form">
			<h2>Get in Touch with me</h2>
			<form>
				<label for="username">Username:</label>
				<input type="text" id="username" name="username">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password">
				<button>Continue</button>
			</form>
		</div>
	</div>
	
	<!-- Footer -->
	<div class="footer">
		<h3>Our Sponsors</h3>
		<ul>
			<li>Bill Gates</li>
			<li>Mark Zuckerberg</li>
			<li>Jeff Bezos</li>
		</ul>
		<h3>Get in Touch</h3>
		<ul>
			<li><a href="https://www.facebook.com/">Facebook</a></li>
			<li><a href="https://x.com/?mx=2&failedScript=vendor">X</a></li>
			<li><a href="https://www.instagram.com/">Instagram</a></li>
			<li><a href="https://www.google.com/intl/en-US/gmail/about/">Email</a></li>
		</ul>
		<p>&copy; 2024 Kenwrick Espinosa</p>
	</div>
</body>
</html>