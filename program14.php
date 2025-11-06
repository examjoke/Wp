<!DOCTYPE html>
<html>

<head>
   <title>FORM VALIDATION IN PHP</title>
</head>

<body>
   <h2>PHP FORM VALIDATION EXAMPLE</h2>

   <form method="post" action="">
      Name: <input type="text" name="name"><br><br>
      Email: <input type="text" name="email"><br><br>
      Age: <input type="text" name="age"><br><br>
      <input type="submit" name="submit" value="Validate">
   </form>

   <hr>

   <?php
   if (isset($_POST['submit'])) {
      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $age = trim($_POST['age']);

      $error = "";

      // Check for empty fields
      if (empty($name) || empty($email) || empty($age)) {
         $error .= "<p style='color:red;'>All fields are required!</p>";
      }

      // Validate email format
      if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $error .= "<p style='color:red;'>Invalid email format!</p>";
      }

      // Validate age (must be numeric)
      if (!empty($age) && !is_numeric($age)) {
         $error .= "<p style='color:red;'>Age must be a number!</p>";
      }

      // Validate name (only alphabets and spaces)
      if (!empty($name) && !preg_match("/^[a-zA-Z\s]+$/", $name)) {
         $error .= "<p style='color:red;'>Name must contain only alphabets and spaces!</p>";
      }

      // Display results
      if ($error == "") {
         echo "<p style='color:green;'>All inputs are valid!</p>";
         echo "<h3>Entered Details:</h3>";
         echo "Name: $name<br>";
         echo "Email: $email<br>";
         echo "Age: $age<br>";
      } else {
         echo $error;
      }
   }
   ?>
</body>

</html>
