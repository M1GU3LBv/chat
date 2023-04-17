<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
       
        if(!empty($message)){
        if (isset($_FILES['imgs'])) {
    
    $img_name = $_FILES['imgs']['name'];
    $img_type = $_FILES['imgs']['type'];
    $tmp_name = $_FILES['imgs']['tmp_name'];
    
    $img_explode = explode('.',$img_name);
    $img_ext = end($img_explode);

    $extensions = ["jpeg", "png", "jpg"];
    if(in_array($img_ext, $extensions) === true){
        $types = ["imgs/jpeg", "imgs/jpg", "imgs/png"];
        if(in_array($img_type, $types) === true){
            $time = time();
            $new_img_name = $time.$img_name;
            if(move_uploaded_file($tmp_name,"imgs/".$new_img_name)){
                $insert_query = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg, imgs)
                VALUES ({$incoming_id}, {$outgoing_id}, '{$message}', '{$new_img_name}')");
            }
        }
        
    }else{
       console.log('sss');
    }
    
}







            
           
                                        
        }
    }else{
        header("location: ../login.php");
    }


    
?>