<?php

function  upload_file($myfile,$dir,$max_file_size=102400)
{
    $error=0;
    $obj=new stdClass();
    $file_name=rinse(time().$_FILES[$myfile]['name']);
    $file_name=str_replace(" ", "", $file_name);
    $file_add=$_FILES[$myfile]['tmp_name'];
    
    $file_size = $_FILES[$myfile]['size'];
    if ($_FILES[$myfile]['error'] !== UPLOAD_ERR_OK) 
    {
       $error=1;
       $message="File not uploaded properly.";
    }
    elseif (($file_size > $max_file_size))
    {      
        $message = 'File too large. File must be within '.($max_file_size/1024).' KB.'; 
        $error=1;
     }

     $info = getimagesize($_FILES[$myfile]['tmp_name']);
    if ($info === FALSE) 
    {
       $error=1;
       $message="Unable to determine image type of uploaded file";
    }

    if (($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) 
    {
       $error=1;
       $message="Only JPEG or PNG image allowed";
    }
    
    if($error==0)
    {
        if(move_uploaded_file($file_add,$dir."/".$file_name))
        {
            $message="file uploaded succesfuly";
        }
        else
        {
            $message = $_FILES[$myfile]['error'];
            $error=1;
                // $message=$dir;
        }
    }
    $obj->error=$error;
    $obj->message=$message;
    $obj->file_name=$file_name;

    return $obj;
  
}

function  upload_file_modified($myfile,$dir,$max_file_size=102400,$i)
{
    
    $error=0;
    $obj=new stdClass();
    $file_name=rinse(time().$_FILES[$myfile]['name'][$i]);
    $file_name=str_replace(" ", "", $file_name);
    $file_add=$_FILES[$myfile]['tmp_name'][$i];
    
    $file_size = $_FILES[$myfile]['size'][$i];
    if ($_FILES[$myfile]['error'][$i] !== UPLOAD_ERR_OK) 
    {
       $error=1;
       $message="File not uploaded properly.";
    }
    elseif (($file_size > $max_file_size))
    {      
        $message = 'File too large. File must be within '.($max_file_size/1024).' KB.'; 
        $error=1;
     }

    $info = getimagesize($_FILES[$myfile]['tmp_name'][$i]);
    $mime   = $info['mime'];
  
    if ($info === FALSE) 
    {
       $error=1;
       $message="Unable to determine image type of uploaded file";
    }
    
    if (($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) 
    {
       $error=1;
       $message="Only JPEG or PNG image allowed";
    }
    
    if($error==0)
    {
        if(move_uploaded_file($file_add,$dir."/".$file_name))
        {
            $message="file uploaded succesfuly";
        }
        else
        {
            $message = $_FILES[$myfile]['error'];
            $error=1;
                // $message=$dir;
        }
    }
    $obj->error=$error;
    $obj->message=$message;
    $obj->file_name=$file_name;

    return $obj;
  
}


function deleteImage($path)
{
    global $hostname;
    $new_path=str_replace($hostname, "", $path);
    if(strlen($new_path)!=0)
    {
        return unlink("../../".$new_path);
        // return "inside";
    }
    return "0";
}
        
function redirect_to( $location = NULL ) {
    if ($location != NULL) {
      header("Location: {$location}");
      exit;
    }
}

function clean($input)
 {
  return preg_replace('/[^A-Za-z0-9 ]/', '', $input); // Removes special chars.
 }
function rinse($input)
{
    return preg_replace('/[^A-Za-z0-9\-,@.\ ]/', '', $input); // Removes special chars.
}

 function numOnly($input)
 {
  return preg_replace('/[^0-9]/', '', $input); // Removes special chars.
 }

function securityToken(){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring.=$characters[rand(0, strlen($characters))];
        }
        return $randstring;
}

function logincheck()
{
    global $con;

    if(isset($_SESSION["user_id"]))
    {
        $output='{"status":"success"}';
    }
    elseif(isset($_REQUEST["user_id"]) && isset($_REQUEST["security_token"]))
    {    
        $query="select `security_token` from `wryton_user` where `id`='".$_REQUEST["user_id"]."'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        if($row["security_token"]==$_REQUEST["security_token"]){
            $output='{"status":"success"}';
        }
        else
            $output='{"status":"failure","remark":"Incorrect Security token. User id entered is '.$_REQUEST["user_id"].' and security token entere is '.$_REQUEST["security_token"].'"}';
    }
    else
    {
        $output='{"status":"failure","remark":"You are not login, Please login"}';
    }

    $obj=json_decode($output,true);

    if($obj['status']!="success")
        die($output);
}

function admincheck()
{
    if(!isset($_SESSION["user_type"])=="admin")
    {
        die("You are not authorized for this request");
    }
}

function userLoginCheck()
{
    $data=logincheck();
    $arr=json_decode($data);
    if($arr->status!="success"){
        header("Location: index.php");
        die();
    }
}

function getIPAddress()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    return $ip;
}

function pagination($query,$limit){
    global $con;
    $limit=(int)$limit;
    $row_count=mysqli_num_rows(mysqli_query($con,$query));
    return ceil($row_count/$limit);
}

function countData(){
    global $con;

    $query="select (select count(*) from nf2_internship where status=1) as internship,(select count(*) from nf2_project where status=1) as project,(select count(*) from nf2_certificate where status=1) as certificate,(select count(*) from nf2_achievement where status=1) as achievement";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
        $internship=$row["internship"];
        $project=$row["project"];
        $certificate=$row["certificate"];
        $achievement=$row["achievement"];

        $output='{"status":"success", "internship":"'.$internship.'", "project":"'.$project.'", "certificate":"'.$certificate.'", "achievement":"'.$achievement.'"}';
    }else{
        $output='{"status":"failure", "remark":"Sorry, Something is wrong"}';
    }

    return $output;
}

function skillList()
{
    global $con;
    $skill=array();

    $query="select * from `nf2_skill` where `status`=1 order by `skill` asc";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $output='{"status":"success","skill":';
        while ($row=mysqli_fetch_assoc($result)) {
            $skill[] = $row;
        }
        $output.=json_encode($skill).'}';
    }else{
        $output='{"status":"failure","remark":"No skill return"}';
    }
    return $output;
}

function achievementList()
{
    global $con;
    $achievement=array();

    $query="select * from `nf2_achievement` where `status`=1 order by `datetime` desc";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $output='{"status":"success","achievement":';
        while ($row=mysqli_fetch_assoc($result)) {
            $achievement[] = $row;
        }
        $output.=json_encode($achievement).'}';
    }else{
        $output='{"status":"failure","remark":"No achievement return"}';
    }
    return $output;
}

function internshipList()
{
    global $con,$DATETIME_FORMAT;
    $internship=array();

    $query="select * from `nf2_internship` where `status`=1 order by `start` desc";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $output='{"status":"success","internship":';
        while ($row=mysqli_fetch_assoc($result)) {
            $row["start"]=date($DATETIME_FORMAT,strtotime($row["start"]));
            
            if($row["end"]=="0000-00-00"){
                $row["end"]="Present";
            }else{
                $row["end"]=date($DATETIME_FORMAT,strtotime($row["end"]));
            }

            $internship[] = $row;
        }
        $output.=json_encode($internship).'}';
    }else{
        $output='{"status":"failure","remark":"No internship return"}';
    }
    return $output;
}

function projectList()
{
    global $con,$DATETIME_FORMAT;
    $project=array();

    $query="select * from `nf2_project` where `status`=1 order by `start` desc";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $output='{"status":"success","project":';
        while ($row=mysqli_fetch_assoc($result)) {
            $row["start"]=date($DATETIME_FORMAT,strtotime($row["start"]));
            
            if($row["end"]=="0000-00-00"){
                $row["end"]="Present";
            }else{
                $row["end"]=date($DATETIME_FORMAT,strtotime($row["end"]));
            }

            $project[] = $row;
        }
        $output.=json_encode($project).'}';
    }else{
        $output='{"status":"failure","remark":"No project return"}';
    }
    return $output;
}

function certificateList()
{
    global $con,$DATETIME_FORMAT,$CERTIFICATE;
    $certificate=array();

    $query="select * from `nf2_certificate` where `status`=1 order by `datetime` desc";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $output='{"status":"success","certificate":';
        while ($row=mysqli_fetch_assoc($result)) {
            $row["datetime"]=date($DATETIME_FORMAT,strtotime($row["datetime"]));
            $row["image"]=$CERTIFICATE."".$row["image"];

            $certificate[] = $row;
        }
        $output.=json_encode($certificate).'}';
    }else{
        $output='{"status":"failure","remark":"No certificate return"}';
    }
    return $output;
}

?>