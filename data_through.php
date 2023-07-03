<?php
var_dump($_POST);

// Define $emailaddress and initialize it to an empty string
$emailaddress = '';
$message = '';
//  if(isset($_POST['submit'])) 

// {echo '';} 
// if(isset($_POST['submit'])) {
     $firstname = $_POST["firstname"];
     $lastname = $_POST["lastname"];
     $emailaddress = $_POST["emailaddress"];
     $message = $_POST["message"];

     //Database Connection
     $conn = new mysqli('localhost','root','','test');
     if($conn->connect_error){
         die('connection failed : '.$conn->connect_error);
     } else {    
        $stmt = $conn->prepare("INSERT INTO registration(firstname, lastname, emailaddress, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstname, $lastname, $emailaddress, $message);
        if ($stmt->execute()) {
            header("location:http://localhost/PROJECT/index.php? success = Registration Successful");
            // echo "Registration successfully...";
            
        } else {
            echo "Error: " . $stmt->error;
        }
        // $_POST['submit'];
        // echo '';
        $stmt->close();
        $conn->close();
    }
// }
?>
<!-- I hope this helps! -->









     <!-- // $host = "localhost";
// $username = "your_username";
// $password = "your_password";
// $dbname = "your_database_name";


//  require "index.html";
//     $firstName = $_POST["first_name"];
//     $lastName = $_POST["last_name"];
//     $youremail = $_POST["email_address"];
//     $message = $_POST["message"];
//     // $sql = "SELECT * FROM `to_be_contacte`;";
//     $conn = new mysqli('localhost','root','','contact')
//     if($conn->connect_error){
//         die('connection failed : ',$conn->connect_error);
//         }else{
//             $stmt = $conn->prepare("INSERT INTO `data` values(`first_name`, `last_name`, `email_address`, `message`)");
//             $stmt->bind_param("ssss",$firstName,$lastName,$youremail,$message);
//             $stmt->execute();
//             echo "registration Sucessfully...";
//             $stmt->close();
//             $conn->close();
//         }
// ?> -->