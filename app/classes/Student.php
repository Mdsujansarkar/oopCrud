<?php
namespace App\classes;

class Student{
    public function saveInfo($data)
    {
        $connect = mysqli_connect('localhost','root','root','student');
        $insert = "INSERT INTO stuinfo(f_name,email,father_name,p_number,id_number) VALUES('$data[f_name]','$data[email]','$data[father_name]','$data[p_number]','$data[id_number]')";
        $insert_query = mysqli_query($connect, $insert);

        if($insert_query){
          $message = "Data insert Successfully";
          return $message;
        }else{
            die("Data Not insert Successfully". mysqli_error($connect));
        }
    }

    public function viewInfo(){
        $connect = mysqli_connect('localhost','root','root','student');
        $view_data = "SELECT * FROM stuinfo";  
        $view_query = mysqli_query($connect, $view_data);
        if($view_query){
            $view_query = mysqli_query($connect, $view_data);
            return $view_query;
          }else{
              die("Data Not insert Successfully". mysqli_error($connect));
          }
      
    }
}