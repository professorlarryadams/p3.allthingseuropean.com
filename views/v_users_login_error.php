<script src="../js/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../css/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<h2>Log in</h2>

<form action="/users/p_login" method="post" enctype="application/x-www-form-urlencoded" name="log in">

<span id="sprytextfield1">
<label for="email">Email:</label>
<br />
<input type="text" name="email" id="email">
<span class="textfieldRequiredMsg">You must enter your email.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br />

<span id="sprytextfield2">
<label for="password">Password:</label>
<br />
<input type="password" name="password" id="password">
<span class="textfieldRequiredMsg">You must enter your password.</span></span><br />

<br /><br />

<?php if(isset($error)): ?>
        <div class='error'>
            Login failed. Please double check your email and password.
        </div>
    <?php endif; ?>
    
    <br />

<input type='Submit' value='Log in'>  

</form>


<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none");
</script>
