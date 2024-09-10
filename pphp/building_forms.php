<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>building forms</title>
</head>

<body>
  <form action="setting_headers.php" method="POST">
    <label for="name">first name</label>
    <!-- first name -->
    <input type="text" name="name" id="name">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="phone">phone</label>
    <input type="phone" name="phone" id="phone">
    <input type="submit" value="send" name="submit">



  </form>



</body>

</html>