<?php
namespace App\classes;

class Student{
    private function dbConnection()
    {
        $host = "localhost";
        $usernam = "root";
        $password = "root";
        $db       = "student";
        $connect = mysqli_connect($host, $usernam,$password, $db);
        return $connect; 
    }
    public function saveInfo($data)
    {
        // $connect = mysqli_connect('localhost','root','root','student');
        $insert = "INSERT INTO stuinfo(f_name,email,father_name,p_number,id_number) VALUES('$data[f_name]','$data[email]','$data[father_name]','$data[p_number]','$data[id_number]')";
        $insert_query = mysqli_query(Student::dbConnection(), $insert);

        if($insert_query){
          $message = "Data insert Successfully";
          return $message;
        }else{
            die("Data Not insert Successfully". mysqli_error(Student::dbConnection()));
        }
    }

    public function viewInfo()
    {
        // $connect = mysqli_connect('localhost','root','root','student');
        $view_data = "SELECT * FROM stuinfo";  
        $view_query = mysqli_query(Student::dbConnection(), $view_data);
        if($view_query){
            $view_query = mysqli_query(Student::dbConnection(), $view_data);
            return $view_query;
          }else{
              die("Data Not insert Successfully". mysqli_error(Student::dbConnection()));
        }
      
    }
    public function getStudentInfo($id)
    {
        // $connect = mysqli_connect('localhost','root','root','student');
        $read_data = "SELECT * FROM stuinfo WHERE id='$id'";
        $view_by_id =  mysqli_query(Student::dbConnection(), $read_data);
        return $view_by_id;
    }
    public function updateInfo($data)
    {
    // $connect = mysqli_connect('localhost','root','root','student');
     $update_data = "UPDATE stuinfo SET f_name='$data[f_name]', email='$data[email]', father_name='$data[father_name]', p_number='$data[p_number]', id_number='$data[id_number]'  WHERE id='$data[id]'";
     
     if(mysqli_query(Student::dbConnection(), $update_data)){
        header("Location:view.php");
      }else{
          die("Data Not insert Successfully". mysqli_error(Student::dbConnection()));
     }
    }
    public function deleteStudentInfo($id)
    {
        $delete = "DELETE FROM stuinfo WHERE id='$id'";
        $message = mysqli_query(Student::dbConnection(), $delete);
        if($message){
             $message = mysqli_query(Student::dbConnection(), $delete);
             return $message;
          }else{
              die("Data Not insert Successfully". mysqli_error(Student::dbConnection()));
         }
    }
}