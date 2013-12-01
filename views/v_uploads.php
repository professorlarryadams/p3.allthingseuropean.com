<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Uplaod Files</title>
</head>

<body>
<form enctype="multipart/form-data" action="upload.php" method="post">
    <input name="file[]" type="file" />
    <button class="add_more">Add More Files</button>
    <input type="button" value="Upload File" id="upload"/>
</form>



</body>
</html>
