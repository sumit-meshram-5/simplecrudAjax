<?php
include('include/config.php');
//get id
$id=$_REQUEST['id'];

// var_dump($id);
// die;

$qry='DELETE from users where `id`='.$id;
$data=[];
if($result=mysqli_query($conn,$qry)){
    if(mysqli_affected_rows($conn)){
        $data['success']='Record deleted successfully';   
    }else {
        $data['fail']='Record deletion unsuccessful';
    }
    print_r(json_encode($data));
}
