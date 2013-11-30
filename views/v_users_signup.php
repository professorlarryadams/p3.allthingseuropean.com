<script src="../js/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../css/SpryValidationTextField.css" rel="stylesheet" type="text/css">

<script src="../js/Script/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="../js/Script/jquery.password-strength(new).min.js" type="text/javascript"></script>

<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2527523" binding="#txtPassword" />
</oa:widgets>
-->
</script>

<h2>Sign Up</h2>

<form action="/users/p_signup" method="post" enctype="application/x-www-form-urlencoded" name="signup">

  <span id="sprytextfield1">
  <label for="first_name">First Name:</label><br />
  <input type="text" name="first_name" id="first_name" title="Enter your first name.">
  <span class="textfieldRequiredMsg">You must enter your first name.</span></span><br />
  
  <span id="sprytextfield2">
  <label for="last_name">Last Name:</label><br />
  <input type="text" name="last_name" id="last_name" title="Enter your last name.">
  <span class="textfieldRequiredMsg">You must enter your last name.</span></span><br />
  
  <span id="sprytextfield3">
  <label for="email">Email:</label><br />
  <input type="text" name="email" id="email" title="Enter your email address.">
  <span class="textfieldRequiredMsg">You must enter your email address.</span></span><br />
<br />
  
  <script type="text/javascript">
  $(document).ready(function() {
	
	var password_settings = { minLength: '8', 
		maxLength: '20', 
		specialLength: '1', 
		upperLength: '1',
		numberLength: '1' 
	 	 
		 }; 
     
	   var myPSPlugin = $("[id$='txtPassword']").password_strength(password_settings);

    });    
	 
  </script>
  <div>
    <label for="txtPassword">Password:</label>
    <br />
    <input id="txtPassword" name="password" type="password" title="Min 8 characters, 1 Capitol letter, 1 lower case, 1 number, and 1 special character">
  </div>
  <br /><br />

  
  <input type='submit' value='Sign Up'>
</form>
 
 
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
 </script>
