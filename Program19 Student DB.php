<!DOCTYPE html>
<html>

<head>
  <title>Studend Database Operations</title>
</head>

<body>
  <h2>Student Database-Add,Update,Delete</h2>
  <form method="POST">
    ID(for update/delete):<input type="text" name="id"><br><br>
    Name:<input type="text" name="name"><br><br>
    Course:<input type="text" name="course"><br><br>
    Marks:<input type="text" name="marks"><br><br>
    <input type="submit" name="add" value="Add Student">
    <input type="submit" name="update" value="Update Student">
    <input type="submit" name="delete" value="Delete Student">
  </form>
  <hr>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "student_db");
  if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
  }
  if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $marks = $_POST['marks'];
    if ($id == "" || $name == "" || $course == "" || $marks == "") {
      echo "All fields are required to add a student.</p>";
    } else {
      $query = "INSERT INTO students(id,name,course,marks)VALUES('$id','$name','$course','$marks')";
      if (mysqli_query($conn, $query)) {
        echo "<p>Student added successfully:</p>";
      } else {
        echo "<p>Error adding student:" . mysqli_error($conn) . "</p>";
      }
    }
  }
  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $marks = $_POST['marks'];
    if ($id == "" || $name == "" || $course == "" || $marks == "") {
      echo "</p>All fields are required to add a student.</p>";
    } else {
      $query = "UPDATE students SET name='$name',course='$course',marks='$marks' WHERE id='$id'";
      if (mysqli_query($conn, $query)) {
        echo "<p>Student updated successfully:</p>";
      } else {
        echo "<p>Error updating student:" . mysqli_error($conn) . "</p>";
      }
    }
  }
  if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    if ($id == "") {
      echo "ID are required to update a student.</p>";
    } else {
      $query = "DELETE FROM students WHERE id='$id'";
      if (mysqli_query($conn, $query)) {
        echo "<p>Student deleted successfully!</p>";
      } else {
        echo "<p>Error deleting student:" . mysqli_error($conn) . "</p>";
      }
    }
  }
  echo "<h3>All Students:</h3>";
  $result = mysqli_query($conn, "SELECT * FROM students");
  echo "<table border='1'cellpadding='5'>
                <tr><th>ID</th><th>Name</th><th>Course</th><th>Marks</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['course']}</td>
                        <td>{$row['marks']}</td>
                    </tr>";
  }
  echo "</table>";
  mysqli_close($conn);
  ?>
</body>


</html>

//database name - student_db
//table name - students
