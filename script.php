<?php
require "dbConnection.php"; // this is the connection from database ===========


//==================================================================
//this is the category_db database division =====================

// $sql_db = ("CREATE DATABASE category_db");

// if($conn->query($sql_db) === true){
//     echo "Successfully category_db database created";
// } else {
//     echo "Failed to create category_db";
// }

// ===========================================================================
// = THIS IS THE LINE GRAPH SALES CURRENT AND PREVIOUS START =================================================
// ===========================================================================



$sql = "CREATE TABLE baniladTable(
    baniladID INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    salesPrev1 VARCHAR(200)NOT NULL,
    salesPrev2 VARCHAR(200)NOT NULL,
    salesPrev3 VARCHAR(200)NOT NULL,
    salesPrev4 VARCHAR(200)NOT NULL,
    salesPrev5 VARCHAR(200)NOT NULL,
    salesPrev6 VARCHAR(200)NOT NULL,
    salesPrev7 VARCHAR(200)NOT NULL,
    salesPrev8 VARCHAR(200)NOT NULL,
    salesPrev9 VARCHAR(200)NOT NULL,
    salesPrev10 VARCHAR(200)NOT NULL,
    salesPrev11 VARCHAR(200)NOT NULL,
    salesPrev12 VARCHAR(200)NOT NULL,
    salesCurrent1 VARCHAR(200)NOT NULL,
    salesCurrent2 VARCHAR(200)NOT NULL,
    salesCurrent3 VARCHAR(200)NOT NULL,
    salesCurrent4 VARCHAR(200)NOT NULL,
    salesCurrent5 VARCHAR(200)NOT NULL,
    salesCurrent6 VARCHAR(200)NOT NULL,
    salesCurrent7 VARCHAR(200)NOT NULL,
    salesCurrent8 VARCHAR(200)NOT NULL,
    salesCurrent9 VARCHAR(200)NOT NULL,
    salesCurrent10 VARCHAR(200)NOT NULL,
    salesCurrent11 VARCHAR(200)NOT NULL,
    salesCurrent12 VARCHAR(200)NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)";


if($conn->query($sql) === TRUE){
    echo "Successfully to create banilad table";
} else {
    echo "Failed to create table" .$conn->error;
}






// ===========================================================================
// = THIS IS THE LINE GRAPH SALES CURRENT AND PREVIOUS START =================================================
// ===========================================================================