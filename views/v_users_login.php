<!doctype html>
<html>

<head>
<meta charset="UTF-8">

<title>Login Page</title>

<!-- CSS -->
<link href="../css/box.css" rel="stylesheet" type="text/css">
<link href="../css/SpryValidationTextField.css" rel="stylesheet" type="text/css">

<!-- JS -->

<script src="../js/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

</head>

<body>

<div class="container">

<div id="content">

<form action="/users/p_login" method="post" enctype="application/x-www-form-urlencoded">
<h1>Login Form</h1><br />

<span id="sprytextfield1">
<label for="email">Email:</label>
<br />
<input type="text" placeholder="Username" name="email" id="email"><br />
<span class="textfieldRequiredMsg">You must enter your email.</span><br /><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br />

<span id="sprytextfield2">
<label for="password">Password:</label>
<br />
<input type="password" placeholder="Password" name="password" id="password"><br />
<span class="textfieldRequiredMsg">You must enter your password.</span><br /></span>

<br /> 
	<?php if(isset($error)): ?>
        <div class='error'>
            Login failed. Please double check your email and password.
        </div>
        <br>
    <?php endif; ?>


<input type='Submit' value='Log in'>  

</form>

</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none");
</script>

</body>
</html>
