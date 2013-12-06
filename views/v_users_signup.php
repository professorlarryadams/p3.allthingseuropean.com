<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<title>Online Form</title>

<!-- CSS -->

<link href="../css/box.css" rel="stylesheet" type="text/css">
<link href="../css/SpryValidationTextField.css" rel="stylesheet" type="text/css">

<!-- JS -->

<script src="../js/Script/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="../js/Script/jquery.password-strength(new).min.js" type="text/javascript"></script>
<script src="../js/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2527523" binding="#txtPassword" />
</oa:widgets>
-->
</script>

 <script type="text/javascript">
  $(document).ready(function() {
	
	var password_settings = { minLength: '10', 
		maxLength: '20', 
		specialLength: '1', 
		upperLength: '1',
		numberLength: '1' 
	 	 
		 }; 
     
	   var myPSPlugin = $("[id$='txtPassword']").password_strength(password_settings);

    });    
	 
  </script>

</head>

<body>

<div class="container">

<div id="content">

<form action="/users/p_signup" method="post" enctype="multipart/form-data" name="signup">

<h1>Sign Up</h1>

  <span id="sprytextfield1">
  <label for="first_name">First Name:</label><br />
  <input type="text" name="first_name" placeholder="first_name" id="first_name" title="Enter your first name.">
  <span class="textfieldRequiredMsg">You must enter your first name.</span></span><br />
  
  <span id="sprytextfield2">
  <label for="last_name">Last Name:</label><br />
  <input type="text" name="last_name" placeholder="last_name" id="last_name" title="Enter your last name.">
  <span class="textfieldRequiredMsg">You must enter your last name.</span></span><br />
  
  <span id="sprytextfield3">
  <label for="email">Email:</label><br />
  <input type="text" name="email" placeholder="email" id="email" title="Enter your email address.">
  <span class="textfieldRequiredMsg">You must enter your email address.</span></span><br />
<br />
  
	<div>
      <span id="sprytextfield4">
      <label for="txtPassword">Password:</label><br />
      <input type="password" name="password" placeholder="password" id="txtPassword" title="Min 8 characters, 1 Capitol letter, 1 lower case, 1 number, and 1 special character"><br />
      <span class="textfieldRequiredMsg">You must enter a password.</span></span> 
    </div>
 
  <br />                    
  
  <input type='submit' value='Sign Up'>
</form>
 </div>
 </div>
 
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
</body>
</html>