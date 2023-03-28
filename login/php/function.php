<?php


function emptyInput($userName, $userPass){
    $result;
    if(empty($userName) || empty($userPass)){
        $result = TRUE;
    } else {
        $result = FALSE;
    }
return $result;
}

function invalidUser($userName){
    $result;
    if(!preg_match("/^[a-zA-Z-0-9]*$/", $userName)){
        $result = TRUE;
    }else {
        $result = FALSE;
    }

    return $result;
}