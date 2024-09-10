<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="#" method="post">
    Length: <input type="text" name="length"><br>
    Breadth: <input type="text" name="breadth"><br>
    <input type="submit" value="Calculate Area">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST["length"];
    $breadth = $_POST["breadth"];

    $area = $length * $breadth;

    echo "The area of the rectangle is: " . $area;
  }
  ?>
</body>

</html>