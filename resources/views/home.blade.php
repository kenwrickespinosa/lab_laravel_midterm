<!DOCTYPE html>
<html>
<head>
	<title>Company Website</title>
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
		
		/* Content Body Styles */
		.content-body {
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
		.company-name {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
			color: #333; /* added text color */
		}
		.company-description {
			font-size: 16px;
			color: #666; /* added text color */
			margin-bottom: 20px;
		}
		.buttons {
			margin-top: 20px;
		}
		.buttons button {
			background-color: #333;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
		}
		.buttons button:hover {
			background-color: #444;
		}
	</style>
</head>
<body>
	<!-- Navigation Bar -->
	<div class="navbar">
		<a href="/"><u>Home</u></a>
		<a href="/about">About</a>
		<a href="/contact">Contact</a>
	</div>
	
	<!-- Content Body -->
	<div class="content-body">
		<div class="company-name">Welcome to Kenwrick Espinosa Charity Donation</div>
		<div class="company-description">
			Kenwrick Espinosa is a Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
		</div>
		<div class="buttons">
			<button>Sign In</button>
			<button>Sign Up</button>
		</div>
	</div>
</body>
</html>