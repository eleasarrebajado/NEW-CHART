<?php
require_once 'function.php';
require_once 'dbsample.php';




if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];
    $pwdHas = md5($userPass);



require_once 'classPhp/functionClass.php'; // this is the function class =========



if(emptyInput($userName, $userPass) !== FALSE){
    header("location: login.php?error=emptyInput");
    exit();
}

if(inValidUser($userName) !== FALSE){
    header("location: login.php?error=notAllowed");
   
}





$sql = "SELECT * FROM adminuserpass WHERE userName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userName);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


if($row['userName'] !== $userName){
    header("location: login.php?error=wrongUser");
} else {
    if($row['userPass'] === $pwdHas){
        header("location: ../banilad.php?error=success");
    }else{
        header("location: login.php?error=wrongpass");
    }
}


}



