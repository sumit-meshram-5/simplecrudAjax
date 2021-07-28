<?php
include('include/config.php');
//get id
$id=$_REQUEST['id'];

$qry='SELECT * from users where `id`='.$id;
$data=[];
if($result=mysqli_query($conn,$qry)){
    if(mysqli_num_rows($result)>0){
        $data['row']=mysqli_fetch_assoc($result);   
    }else {
        $data['error']='query failed';
    }
    print_r(json_encode($data));
}
