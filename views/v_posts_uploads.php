<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Uploading your files</title>
<link rel="stylesheet" href="http://jquery.bassistance.de/validate/demo/site-demos.css">
<link rel="stylesheet" href="../css/box.css">
 
</head>
<body>
<div class="container">
<div id="content">

<h1>Uploads</h1>

<form action="/posts/p_upload" enctype="application/x-www-form-urlencoded" id="myform" >
<label for="field"></label><br />
<input name="field" type="file" class="left" id="field" size="30"><br />

<input type="submit" value="Submit">
</form>

<h3>File formats maybe uploaded:</h3>

<p><strong>Exel Spreadsheet: xls | </strong><strong>Adobe files: pdf</strong></p>
<p><strong>Microsoft Word Documents - doc and docx</strong></p>
<p><strong>Image format:  png | </strong><strong>jpeg | </strong><strong> jpg</strong></p>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>
<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
<script>

jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#myform" ).validate({
  rules: {
    field: {
      required: true,
      extension: "xls|pdf|doc|docx|png|jpeg|jpg"
    }
  }
});
</script>


</div>
</div>
</body>
</html>
