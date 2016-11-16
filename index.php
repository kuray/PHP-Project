<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.message a').click(function() {
                $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
            });
        })
    </script>
</head>

<body>

<?php 
	print_r($_REQUEST);
?>

<div class="login-page">
	<div class="form">
	    <form class="register-form" method="post" action="">
	        <input type="text" placeholder="name" name="name"/>
	        <input type="password" placeholder="password" name="password"/>
	        <input type="text" placeholder="email address" name="email"/>
	        <button name="create" value="registration">create</button>
	        <p class="message">Already registered? <a href="#">Sign In</a></p>
	    </form>
	    <form class="login-form" method="post" action="">
	        <input type="text" placeholder="username" name="username"/>
	        <input type="password" placeholder="password" name="password"/>
	        <button name="login" value="login">login</button>
	        <p class="message">Not registered? <a href="#">Create an account</a></p>
	    </form>
	</div>
</div>

</body>
</html>