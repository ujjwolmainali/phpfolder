<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>file upload</title>
</head>

<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="myFile" id="fileToUpload">
    <input type="submit" value="Send" name="upload">
  </form>


</body>

</html>