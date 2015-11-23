<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="php file" content="this is a file for assignment 5">
  <title></title>
</head>

<body>

  <h2>Having fun with PHP</h2>
  

  <h3>Fill in the blank spaces with your personal information</h3>
  <form method="POST">
    <label>First Name</label><br>
    <input type="text" name="first_name" value=""><br>
    <label>Last Name</label><br>
    <input type="text" name="last_name" value=""><br>
    <label>Your Mother's Maiden Name</label><br>
    <input type="text" name="mother_maiden_name" value=""><br>
    <label>Your Favourite Color</label><br>
    <input type="text" name="favourite_color" value=""><br>
    <label>Postal Code</label><br>
    <input type="text" name="postal_code" value=""><br><br>
    <input type="submit" value="Show Below">
  </form>


  <h3>The paragraph will look like this:</h3>

  <?php
    $first_name = ucwords($_POST["first_name"]);
    $last_name = ucwords($_POST["last_name"]);
    $maiden_name = ucwords($_POST["mother_maiden_name"]);
    $fav_color = $_POST["favourite_color"];
    $postal_code = strtoupper($_POST["postal_code"]);
    echo "Hi $first_name!, I find it interesting to think about how our identity might  change if we had our mother's name. If your name wasn't $first_name $last_name, but instead it was $first_name $maiden_name, would your favourite colour still be $fav_color? Would you still live in $postal_code? ";
   ?>

</body>

</html>