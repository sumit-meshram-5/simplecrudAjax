<?php
include('include/config.php');
$qry='SELECT * from users';
$data=[];
if($result=mysqli_query($conn,$qry)){
    if(mysqli_num_rows($result)>0){
        $data['allrecords']=mysqli_fetch_all($result,MYSQLI_ASSOC);   
    }else {
        $data['error']='query failed';
    }
    print_r(json_encode($data));
}
