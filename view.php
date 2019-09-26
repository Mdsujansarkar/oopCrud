<?php 

require'vendor/autoload.php';
use App\classes\Student;
$view_data = Student::viewInfo();

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
    <th>Student Name</th>
    <th>Email</th>
    <th>Father Name</th>
    <th>Phone Number</th>
    <th>id</th>
    <th>Action</th>
    
  </tr>
  <?php while($row= mysqli_fetch_assoc($view_data)): ?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td>Demo</td>
    <td>Demo</td>
    <td>Demo</td>
    <td>Demo</td>
    <td>Demo</td>
  </tr>
<?php endwhile; ?>
  
</table>
</body>
</html>