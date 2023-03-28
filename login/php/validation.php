<?php
require_once 'function.php';
require_once 'dbsample.php';




if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];



require_once 'classPhp/functionClass.php'; // this is the function class =========



if(emptyInput($userName, $userPass) !== FALSE){
    header("location: login.php?error=emptyInput");
    exit();
}

if(inValidUser($userName) !== FALSE){
    header("location: login.php?error=notAllowed");
   
}














// $sql = "SELECT * FROM adminuserpass WHERE userName = ? AND userPass = ?";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("ss", $userName, $userPass);
// $stmt->execute();
// $result = $stmt->get_result();
// $row = $result->fetch_assoc();


// if($row['userName'] !== $userName){
//     $null = is_null($row['userName']);
//     echo $null;
//     // header("location: login.php?error=wrongUser");

// } else {
//     $pwdHas = password_hash($userPass, PASSWORD_DEFAULT);
//     if(password_verify($row['userPass'], $pwdHas)){
//         header("location: login.php?error=success");
//     }else{
//         header("location: login.php?error=InvalidPass");
//     }
// }











}



