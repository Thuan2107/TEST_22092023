<?php
    if(isset($_POST['submit'])){
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        // $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
        // $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : "";
        $bio = isset($_POST['bio']) ? $_POST['bio'] : "";
        
        if (ctype_alpha($name)) {
            echo "Name is alphabetic";
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }else if(!isset($_POST['gender'])){ 
            echo "Please select gender."; 
        }else if(!isset($_POST['hobbies'])){ 
            echo "Please select gender"; 
        }


        echo "Name: $name \n";
        echo "<br>";
        echo "Email: $email \n";
        echo "<br>";
        echo "Gender: $gender \n";
        echo "<br>";
        echo "Hobbies:   \n";
        echo "<br>";
        echo "Bio: $bio \n";

        
    }

?>
