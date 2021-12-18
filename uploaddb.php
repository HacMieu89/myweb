<?php
    session_start();
    include_once("conn.php");

        
    function CheckXSS($text){
        if(preg_match("/script|alert|javascript|prompt|style|address|xss|body|svg|src|href|input|marquee|dialog|draggable|ondrop|onfullscreenchange|oninput|oninvalid|onkeydown|onkeypress|onkeyup|onload|window.|document.|JSON./is", $text)) {
            $text = str_replace("\\", "\\\\", $text);
            $text = preg_replace('/"|\'|\<|\>|\(|\)|\$|\@|\=|\:|\//', " ", $text);
        }
        return $text;
    }


    //Get data variable from Session
    $_SESSION['message'] = "";  
    $address = $_SESSION['useraddress'];
    $subject = $_POST['subject'];
    $decription = $_POST['decription'];
    $cost = $_POST['cost'];
    $timepost= date("d-m-Y h:i:s");
    $filename=basename($_FILES['file']['name']);

    $sanitized_subject = mysqli_real_escape_string($conn, $subject);
	$sanitized_decription = mysqli_real_escape_string($conn, $decription);

    $upload_dir="uploads/";
    $target_file="";
    $tmp_file="";
    if(isset($_POST['submit']))
    {

        $sql="INSERT INTO product (address,subject,decription,filename, timeup,cost) 
        VALUES ('".$address."','".$sanitized_subject."','".$sanitized_decription."','".$filename."',NOW(),'".$cost."')";
        #$stmt->bind_param("sssssi",$address, $sanitized_subject, $sanitized_decription, $filename,$timepost,$cost)
        //store file into db
        $tmp_file=$_FILES['file']['tmp_name'];
        $filename=basename($_FILES['file']['name']);
        if(move_uploaded_file($tmp_file, $upload_dir."/".$filename)&&$conn->query($sql))
        {  
                $_SESSION['message']= "File uploaded successfully! <br />";
                header("Location: http://".$_SERVER['HTTP_HOST']."/Web-blockchain/newpost.php");
            
        }
        else {
            
            header("Location: http://".$_SERVER['HTTP_HOST']."/Web-blockchain/newpost.php");
            $_SESSION['message']= "Something went Wrong !!<br/>";
        }

    
    }
?>