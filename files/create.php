<?php
include('include/config.php');
$data = [];
$error=[];

//get data 
$name = $_REQUEST['input']['name'];
$email = $_REQUEST['input']['email'];


//validate 

//is empty 
if(empty($name)){
    $error['name'] = 'please enter the name';
} elseif (!ctype_alnum($name)) {
//name aphanumeric
    $error['name'] = 'name should be alpha numeric';
} else {
    if (is_numeric(substr($name, 0, 1))) {

        $error['name'] = 'first letter of name should be alphabetical';
    }
}

//email format and empty
if(empty($email)){
    $error['email'] = 'please enter email';

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $error['email'] = 'Invalid email format';
}

if (empty($error)) {
    //code for insert
    $qry = "INSERT INTO `users`(`name`, `email`) VALUES ('" . $name . "','" . $email . "');";
    if (mysqli_query($conn, $qry)) {

         $data['success']='record created successfully';
    } else {

         $data['fail']='record creation  unsuccessful';
    }
} else {
     
}
$data['error'] =$error;

print_r(json_encode($data));

