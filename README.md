//17 Program Clg Website

header.php

<!DOCTYPE html>
<html>
<head>
<title>St. Francis College</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="navbar">
<a href="index.php"> Home </a>
<a href="courses.php"> Courses </a>
<a href="about.php"> About </a>
<a href="contact.php"> Contact </a>
</div>


----------------------------------------------------------------------------------------------------------------------------

footer.php

<footer>
<p>&copy; <?php echo date("Y"); ?> St. Francis College. All rights reserved.</p>
</footer>

</body>
</html>


-----------------------------------------------------------------------------------------------------------------------------------------------

index.php (Home)

<?php include("header.php"); ?>

<div class="content home-background">
<h2>Welcome to St. Francis College</h2>
<p>Providing quality education for a brighter future.</p>
</div>

<?php include("footer.php"); ?>


---------------------------------------------------------------------------------------------------------------------------------------------

about.php

<?php include("header.php"); ?>

<h2>About Us</h2>
<p>St. Francis College is one of the leading institutions offering undergraduate and postgraduate programs in Science, Commerce and Arts.</p>

<?php include("footer.php"); ?>


----------------------------------------------------------------------------------------------------------------------------

courses.php

<?php include("header.php"); ?>

<h2>Our Courses</h2>

<table border="1" cellpadding="10" align="center">
<tr style="background-color:#ccebc9;">
<th>Course</th>
<th>Duration</th>
<th>Department</th>
</tr>

<tr>
<td>BCA</td>
<td>3 Years</td>
<td>Computer Applications</td>
</tr>

<tr>
<td>B.Com</td>
<td>3 Years</td>
<td>Commerce</td>
</tr>

<tr>
<td>BBA</td>
<td>3 Years</td>
<td>Management</td>
</tr>

</table>

<?php include("footer.php"); ?>


----------------------------------------------------------------------------------------------------------------------------

contact.php

<?php include("header.php"); ?>

<h2>Contact Us</h2>

<div style="width:50%; margin:auto; border:1px solid #ccc; border-radius:10px; background:#fff; padding:20px;">
<p><strong>St. Francis College</strong></p>
<p>Email: info@stfranciscollege.com</p>
<p>Phone: +91 9876543210</p>
<p>Address: Koramangala, Bangalore – 560034</p>
</div>

<?php include("footer.php"); ?>


-------------------------------------------------------------------------------------------------------------------------

style.css

/* Reset & Base Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html,
body {
  height: 100%;
  font-family: Arial, sans-serif;
}

/* Navbar */
.navbar {
  background-color: #003366;
  padding: 14px 0;
  text-align: center;
}

.navbar a {
  color: #ffffff;
  text-decoration: none;
  margin: 0 15px;
  font-size: 18px;
  padding: 8px 12px;
  border-radius: 4px;
  transition: background-color 0.3s ease;
}

/* Main Content */
.content {
  min-height: calc(100vh - 120px);
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: #f2f7f2;
  color: #333333;

  padding: 20px;
}

/* Home Background */
.home-background {
  background-image: url("https://images.shiksha.com/mediadata/images/1757673011php9PLXcY.jpeg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  color: #fcfcfc;

}

/* Footer */
footer {
  background-color: #003366;
  color: #ffffff;
  text-align: center;
  padding: 10px 0;
}

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
