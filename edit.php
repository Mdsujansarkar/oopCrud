<?php 

require'vendor/autoload.php';
use App\classes\Student;
$id = $_GET['id'];
$view_data = Student::getStudentInfo($id); 
$get_data = mysqli_fetch_assoc($view_data);

if(isset($_POST['sub'])){
   $message = Student::updateInfo($_POST);
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
    <td>
      <input type="text" name="f_name" value="<?php echo $get_data['f_name']; ?>">
      <input type="hidden" name="id" value="<?php echo $get_data['id']; ?>" >
  </td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email" value="<?php echo $get_data['email']; ?>" ></td>
  </tr>
  <tr>
    <td>Father Name</td>
    <td><input type="text" name="father_name" value="<?php echo $get_data['father_name']; ?>"></td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><input type="number" name="p_number" value="<?php echo $get_data['p_number']; ?>"></td>
  </tr>
  <tr>
    <td>ID</td>
    <td><input type="number" name="id_number" value="<?php echo $get_data['id_number']; ?>"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="sub" value="update"></td>
  </tr>
  
</table>

</form>
</body>
</html>