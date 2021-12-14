<?php
    $conn = mysqli_connect('localhost' ,'root', '' , 'studentapplication');

    if(!$conn){
        echo "connection error " . mysqli_connect_error;
    }

    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['email']) && !empty($_POST['number'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $number = $_POST['number'];
   
    $query = "insert into student_detail(name , address , email , number) values ('$name','$address' , '$email', '$number')"  ;
    
    $run = mysqli_query($conn , $query) or die (mysqli_error());
    
    if(!$run){
        echo "error occured <br />";
        }
        }
}
?>
