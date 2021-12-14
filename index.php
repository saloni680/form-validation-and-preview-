<?php
    $errors = array('name' => '','address'=>'','email'=>'','number'=>'');

    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            $errors['name'] = "enter name of applicant";
        }
        if(empty($_POST['address'])){
            $errors['address'] = "Address Required !!";
        }
        if(empty($_POST['email'])){
            $errors['email'] = "Email Required!!!";
        }else{
            $email = $_POST['email'];
            if(!filter_var($email , FILTER_VALIDATE_EMAIL))
            {
                $errors['email'] = 'ENTER VALID EMAIL!';
            }
        }
        if(empty($_POST['number'])){
            $errors['number'] = "Enter Mobile Number!!"; 
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Application Form</title>
        <link href = "index.css" rel = "stylesheet" type = "text/css">
    </head>
    <body>   
        <form method = "POST" action = "index.php" >
          <div class= "data" style = "text-align : center">
         
          <h1 ><p style =" text-align : center"> Application Form </h1>
          <hr><hr><br>
            Name of applicant : <input trpe = "text" name = "name" > 
            <h4><div><p style = "color : red"> <?php echo $errors['name']; ?></div></h4>
            <br>
            Address : <input type = "text" name = "address"  >
            <h4><div><p style = "color :red"> <?php echo $errors['address']; ?></div></h4>
            <br>
            Email : <input type = "email" name = "email" >
            <h4><div><p style = "color : red"> <?php echo $errors['email']; ?></div></h4>
            <br>
            Number : <input type = "tel" name = "number" >
            <h4><div><p style = "color : red"> <?php echo $errors['number']; ?></div></h4>
            <br>
            <input id="btn" type = "submit" name = "submit" >
            <?php include('dataBase.php') ?>
           </div>
        </form>
    </body>
</html>