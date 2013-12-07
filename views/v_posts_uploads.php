<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<title>Upload Files</title>
</head>

<body>

<div class="container">

	<div id="content">
<form enctype="multipart/form-data" action="/posts/uploads" method="post">

<p>P4 Secure Uploads not a part of p3!</p>
 
 <input type="hidden"name="MAX_FILE_SIZE" value="524288">

 <fieldset><legend>File format: (docs, docx, pdf, jpeg, jog, png, xls, txt)</legend><br /><br />

 <div><strong>TWIC Receipt:</strong></div>
 <div>
  <input type="file" name="twic_upload" title="Upload your TWIC Receipt"/>
 </div><br />

 <div><b>Conviction Statement:</b></div>
 <div> <input type="file" name="conviction_upload"  title="Upload your conviction statement" statement />
 </div><br />
 
  <div><strong>Sea Service:</strong></div>
  <div>
    <input type="file"name="seaservice_upload" title="Upload your proof of sea service" />
  </div><br />

 </fieldset>
 <div align="center"><input type="submit"
name="submit" value="Submit" /></div>
 <input type="hidden" name="submitted"value="TRUE" />
 </form>
 
 </div>
 </div></body>
 </html>