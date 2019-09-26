<?php 

require'vendor/autoload.php';
use App\classes\Student;

if(isset($_POST['sub'])){
   $message = Student::saveInfo($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add student</title>
</head>
<body>
    <h3 style="color:green;"><?php echo $message; ?></h3>
    <a href="view.php">View Info</a>
<form action="" method="POST">
<table>
  <tr>
    <td>Student Name</td>
    <td><input type="text" name="f_name"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email"></td>
  </tr>
  <tr>
    <td>Father Name</td>
    <td><input type="text" name="father_name"></td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><input type="number" name="p_number"></td>
  </tr>
  <tr>
    <td>ID</td>
    <td><input type="number" name="id_number"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="sub" value="submit"></td>
  </tr>
  
</table>

</form>
</body>
</html>