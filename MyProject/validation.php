<?php
// define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = "";  
$name = $email = $mobileno =  "";  

//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

$name = $_POST ["username"];  
if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.";  
             echo $ErrMsg;  
} else {  
    echo $name;  
}  
$mobileno = $_POST ["phone"];  
if (!preg_match ("/^[0-9]*$/", $mobileno) ){  
    $ErrMsg = "Only numeric value is allowed.";  
    echo $ErrMsg;  
} else {  
    echo $mobileno;  
}  
$email = $_POST ["email"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
} else {  
    echo "Your valid email address is: " .$email;  
}  
$mobileno = strlen ($_POST ["phone"]);  
$length = strlen ($mobileno);  
  
if ( $length < 10 && $length > 10) {  
    $ErrMsg = "Mobile must have 10 digits.";  
            echo $ErrMsg;  
} else {  
    echo "Your Mobile number is: " .$mobileno;  
}  
}
?>