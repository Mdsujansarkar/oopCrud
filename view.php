<?php 

require'vendor/autoload.php';
use App\classes\Student;
$view_data = Student::viewInfo();
if(isset($_GET['delete'])){
  $id = $_GET['id'];
  $message = Student::deleteStudentInfo($id);
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
    
<table border="1" width="800">
  <tr>
    <th>ID</th>
    <th>Student Namke</th>
    <th>Email</th>
    <th>Father Name</th>
    <th>Phone Number</th>
    <th>versity id</th>
    <th>Action edit/delete</th>
    
  </tr>
  <?php while($row= mysqli_fetch_assoc($view_data)): ?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['f_name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['father_name']; ?></td>
    <td><?php echo $row['p_number']; ?></td>
    <td><?php echo $row['id_number']; ?></td>
    <td>
      <a href="edit.php?id=<?php echo $row['id']; ?>">edit</a>
      <a href="?delete=true&id=<?php echo $row['id']; ?>">Delete</a>
    </td>
  </tr>
<?php endwhile; ?>
  
</table>
</body>
</html>