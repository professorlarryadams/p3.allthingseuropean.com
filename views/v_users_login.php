
<link href="../css/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="../css/box.css" rel="stylesheet" type="text/css">

<script src="../js/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

<div class="container">

<div id="content">

<form action="/users/p_login" method="post" enctype="application/x-www-form-urlencoded" name="log in">
<h1>Login Form</h1><br />

<span id="sprytextfield1">
<label for="email">Email:</label>
<br />
<input type="text" placeholder="Username" name="email" id="email">
<span class="textfieldRequiredMsg">You must enter your email.</span><br /><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br />

<span id="sprytextfield2">
<label for="password">Password:</label>
<br />
<input type="password" placeholder="Password" name="password" id="password">
<span class="textfieldRequiredMsg">You must enter your password.</span><br /></span>

<br /><br /> 
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
