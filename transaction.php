<?php 
    session_start();
    include_once ('conn.php');
    // echo $_SESSION['seller'];
    // echo $_SESSION['idproduct'];
    // echo $_SESSION['price'];
    // echo $_SESSION['userid'];
    $_SESSION['message'] = "";
    $seller = $_POST['seller'];
    $buyer = $_POST['buyer'];
    $idproduct = $_POST['idproduct'];
    $price = $_POST['price'];
    echo $seller;
    echo $buyer;
    echo $idproduct;
    echo $price;
    $sql_command = "INSERT INTO transaction (seller, buyer, idproduct, price) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql_command);
    $stmt->bind_param("ssss", $seller, $buyer, $idproduct, $price);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    $_SESSION['message']= "Product is bought successfully! <br />";
    //  header("location: detail.php?id=$idproduct ");
    
?>
