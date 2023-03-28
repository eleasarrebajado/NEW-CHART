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
// THIS IS THE MACTAN TABLE START =======================================================================
// ===========================================================================


// THIS IS THE BANILAD TABLE ===================================================

// $sql = "CREATE TABLE baniladTable(
//     baniladID INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     salesPrev1 VARCHAR(200)NOT NULL,
//     salesPrev2 VARCHAR(200)NOT NULL,
//     salesPrev3 VARCHAR(200)NOT NULL,
//     salesPrev4 VARCHAR(200)NOT NULL,
//     salesPrev5 VARCHAR(200)NOT NULL,
//     salesPrev6 VARCHAR(200)NOT NULL,
//     salesPrev7 VARCHAR(200)NOT NULL,
//     salesPrev8 VARCHAR(200)NOT NULL,
//     salesPrev9 VARCHAR(200)NOT NULL,
//     salesPrev10 VARCHAR(200)NOT NULL,
//     salesPrev11 VARCHAR(200)NOT NULL,
//     salesPrev12 VARCHAR(200)NOT NULL,
//     salesCurrent1 VARCHAR(200)NOT NULL,
//     salesCurrent2 VARCHAR(200)NOT NULL,
//     salesCurrent3 VARCHAR(200)NOT NULL,
//     salesCurrent4 VARCHAR(200)NOT NULL,
//     salesCurrent5 VARCHAR(200)NOT NULL,
//     salesCurrent6 VARCHAR(200)NOT NULL,
//     salesCurrent7 VARCHAR(200)NOT NULL,
//     salesCurrent8 VARCHAR(200)NOT NULL,
//     salesCurrent9 VARCHAR(200)NOT NULL,
//     salesCurrent10 VARCHAR(200)NOT NULL,
//     salesCurrent11 VARCHAR(200)NOT NULL,
//     salesCurrent12 VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

// )";


// if($conn->query($sql) === TRUE){
//     echo "Successfully to create banilad table";
// } else {
//     echo "Failed to create table" .$conn->error;
// }

// THIS IS THE BANILAD TABLE END ===================================================



// ===========================================================================
// THIS IS THE DAILY SALES AND FOOT TRAFIC START =======================================================================
// ===========================================================================

// $sql = "CREATE TABLE baniladDailysales_foottr(
//     id_daily_ft INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     dates_server VARCHAR(200)NOT NULL,
//     daily_sales VARCHAR(200)NOT NULL,
//     daily_plan VARCHAR(200)NOT NULL,
//     last_y_dailysales VARCHAR(200)NOT NULL,
//     trans_count VARCHAR(200)NOT NULL,
//     foot_trfic VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON  UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfull Created daily sales foot trafic";   
// } else {
//     echo "Failed to create daily sales foot trafic" .$conn->error;
// }

// $conn->close();

// ===========================================================================
// THIS IS THE BANILAD TABLE END =======================================================================
// ===========================================================================



// ============================================================

// ===========================================================================
// THIS IS THE MACTAN TABLE START =======================================================================
// ===========================================================================



// $sql = "CREATE TABLE mactanTable(
//     mactanID INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     salesPrev1 VARCHAR(200)NOT NULL,
//     salesPrev2 VARCHAR(200)NOT NULL,
//     salesPrev3 VARCHAR(200)NOT NULL,
//     salesPrev4 VARCHAR(200)NOT NULL,
//     salesPrev5 VARCHAR(200)NOT NULL,
//     salesPrev6 VARCHAR(200)NOT NULL,
//     salesPrev7 VARCHAR(200)NOT NULL,
//     salesPrev8 VARCHAR(200)NOT NULL,
//     salesPrev9 VARCHAR(200)NOT NULL,
//     salesPrev10 VARCHAR(200)NOT NULL,
//     salesPrev11 VARCHAR(200)NOT NULL,
//     salesPrev12 VARCHAR(200)NOT NULL,
//     salesCurrent1 VARCHAR(200)NOT NULL,
//     salesCurrent2 VARCHAR(200)NOT NULL,
//     salesCurrent3 VARCHAR(200)NOT NULL,
//     salesCurrent4 VARCHAR(200)NOT NULL,
//     salesCurrent5 VARCHAR(200)NOT NULL,
//     salesCurrent6 VARCHAR(200)NOT NULL,
//     salesCurrent7 VARCHAR(200)NOT NULL,
//     salesCurrent8 VARCHAR(200)NOT NULL,
//     salesCurrent9 VARCHAR(200)NOT NULL,
//     salesCurrent10 VARCHAR(200)NOT NULL,
//     salesCurrent11 VARCHAR(200)NOT NULL,
//     salesCurrent12 VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfully to create mactan table";
// } else {
//     echo "Failed to create table" .$conn->error;
// }



// =============================================================

// $sql = "CREATE TABLE mactanDailysales_foottr(
//     id_daily_ft INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     dates_server VARCHAR(200)NOT NULL,
//     daily_sales VARCHAR(200)NOT NULL,
//     daily_plan VARCHAR(200)NOT NULL,
//     last_y_dailysales VARCHAR(200)NOT NULL,
//     trans_count VARCHAR(200)NOT NULL,
//     foot_trfic VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON  UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfull Created daily sales mactan foot trafic";   
// } else {
//     echo "Failed to create daily sales mactan foot trafic" .$conn->error;
// }

// $conn->close();

// ===========================================================================
// THIS IS THE MACTAN TABLE END =======================================================================
// ===========================================================================

// ===================================================================================



// ===========================================================================
// THIS IS THE CONSOLACION TABLE START =======================================================================
// ===========================================================================



// $sql = "CREATE TABLE consolacionTable(
//     mactanID INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     salesPrev1 VARCHAR(200)NOT NULL,
//     salesPrev2 VARCHAR(200)NOT NULL,
//     salesPrev3 VARCHAR(200)NOT NULL,
//     salesPrev4 VARCHAR(200)NOT NULL,
//     salesPrev5 VARCHAR(200)NOT NULL,
//     salesPrev6 VARCHAR(200)NOT NULL,
//     salesPrev7 VARCHAR(200)NOT NULL,
//     salesPrev8 VARCHAR(200)NOT NULL,
//     salesPrev9 VARCHAR(200)NOT NULL,
//     salesPrev10 VARCHAR(200)NOT NULL,
//     salesPrev11 VARCHAR(200)NOT NULL,
//     salesPrev12 VARCHAR(200)NOT NULL,
//     salesCurrent1 VARCHAR(200)NOT NULL,
//     salesCurrent2 VARCHAR(200)NOT NULL,
//     salesCurrent3 VARCHAR(200)NOT NULL,
//     salesCurrent4 VARCHAR(200)NOT NULL,
//     salesCurrent5 VARCHAR(200)NOT NULL,
//     salesCurrent6 VARCHAR(200)NOT NULL,
//     salesCurrent7 VARCHAR(200)NOT NULL,
//     salesCurrent8 VARCHAR(200)NOT NULL,
//     salesCurrent9 VARCHAR(200)NOT NULL,
//     salesCurrent10 VARCHAR(200)NOT NULL,
//     salesCurrent11 VARCHAR(200)NOT NULL,
//     salesCurrent12 VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfully to create consolacion table";
// } else {
//     echo "Failed to create table" .$conn->error;
// }



// =============================================================

// $sql = "CREATE TABLE consolacionDailysales_foottr(
//     id_daily_ft INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     dates_server VARCHAR(200)NOT NULL,
//     daily_sales VARCHAR(200)NOT NULL,
//     daily_plan VARCHAR(200)NOT NULL,
//     last_y_dailysales VARCHAR(200)NOT NULL,
//     trans_count VARCHAR(200)NOT NULL,
//     foot_trfic VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON  UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfull Created daily sales consolacion foot trafic";   
// } else {
//     echo "Failed to create daily sales consolacion foot trafic" .$conn->error;
// }

// $conn->close();

// ===========================================================================
// THIS IS THE CONSOLACION TABLE END =======================================================================
// ===========================================================================



// ===================================================================================



// ===========================================================================
// THIS IS THE MINGLANILLA TABLE START =======================================================================
// ===========================================================================



// $sql = "CREATE TABLE minglanillaTable(
//     mactanID INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     salesPrev1 VARCHAR(200)NOT NULL,
//     salesPrev2 VARCHAR(200)NOT NULL,
//     salesPrev3 VARCHAR(200)NOT NULL,
//     salesPrev4 VARCHAR(200)NOT NULL,
//     salesPrev5 VARCHAR(200)NOT NULL,
//     salesPrev6 VARCHAR(200)NOT NULL,
//     salesPrev7 VARCHAR(200)NOT NULL,
//     salesPrev8 VARCHAR(200)NOT NULL,
//     salesPrev9 VARCHAR(200)NOT NULL,
//     salesPrev10 VARCHAR(200)NOT NULL,
//     salesPrev11 VARCHAR(200)NOT NULL,
//     salesPrev12 VARCHAR(200)NOT NULL,
//     salesCurrent1 VARCHAR(200)NOT NULL,
//     salesCurrent2 VARCHAR(200)NOT NULL,
//     salesCurrent3 VARCHAR(200)NOT NULL,
//     salesCurrent4 VARCHAR(200)NOT NULL,
//     salesCurrent5 VARCHAR(200)NOT NULL,
//     salesCurrent6 VARCHAR(200)NOT NULL,
//     salesCurrent7 VARCHAR(200)NOT NULL,
//     salesCurrent8 VARCHAR(200)NOT NULL,
//     salesCurrent9 VARCHAR(200)NOT NULL,
//     salesCurrent10 VARCHAR(200)NOT NULL,
//     salesCurrent11 VARCHAR(200)NOT NULL,
//     salesCurrent12 VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfully to create minglanilla table";
// } else {
//     echo "Failed to create table" .$conn->error;
// }



// =============================================================

// $sql = "CREATE TABLE minglanillaDailysales_foottr(
//     id_daily_ft INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     dates_server VARCHAR(200)NOT NULL,
//     daily_sales VARCHAR(200)NOT NULL,
//     daily_plan VARCHAR(200)NOT NULL,
//     last_y_dailysales VARCHAR(200)NOT NULL,
//     trans_count VARCHAR(200)NOT NULL,
//     foot_trfic VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON  UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfull Created daily sales minglanilla foot trafic";   
// } else {
//     echo "Failed to create daily sales minglanilla foot trafic" .$conn->error;
// }

// $conn->close();

// ===========================================================================
// THIS IS THE MINGLANILLA TABLE END =======================================================================
// ===========================================================================

// =================================================================================

// ===========================================================================
// THIS IS THE N. BACALSO TABLE START =======================================================================
// ===========================================================================



// $sql = "CREATE TABLE nBacalsoTable(
//     mactanID INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     salesPrev1 VARCHAR(200)NOT NULL,
//     salesPrev2 VARCHAR(200)NOT NULL,
//     salesPrev3 VARCHAR(200)NOT NULL,
//     salesPrev4 VARCHAR(200)NOT NULL,
//     salesPrev5 VARCHAR(200)NOT NULL,
//     salesPrev6 VARCHAR(200)NOT NULL,
//     salesPrev7 VARCHAR(200)NOT NULL,
//     salesPrev8 VARCHAR(200)NOT NULL,
//     salesPrev9 VARCHAR(200)NOT NULL,
//     salesPrev10 VARCHAR(200)NOT NULL,
//     salesPrev11 VARCHAR(200)NOT NULL,
//     salesPrev12 VARCHAR(200)NOT NULL,
//     salesCurrent1 VARCHAR(200)NOT NULL,
//     salesCurrent2 VARCHAR(200)NOT NULL,
//     salesCurrent3 VARCHAR(200)NOT NULL,
//     salesCurrent4 VARCHAR(200)NOT NULL,
//     salesCurrent5 VARCHAR(200)NOT NULL,
//     salesCurrent6 VARCHAR(200)NOT NULL,
//     salesCurrent7 VARCHAR(200)NOT NULL,
//     salesCurrent8 VARCHAR(200)NOT NULL,
//     salesCurrent9 VARCHAR(200)NOT NULL,
//     salesCurrent10 VARCHAR(200)NOT NULL,
//     salesCurrent11 VARCHAR(200)NOT NULL,
//     salesCurrent12 VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfully to create nBacalso table";
// } else {
//     echo "Failed to create table" .$conn->error;
// }



// =============================================================

// $sql = "CREATE TABLE nBacalsoDailysales_foottr(
//     id_daily_ft INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     dates_server VARCHAR(200)NOT NULL,
//     daily_sales VARCHAR(200)NOT NULL,
//     daily_plan VARCHAR(200)NOT NULL,
//     last_y_dailysales VARCHAR(200)NOT NULL,
//     trans_count VARCHAR(200)NOT NULL,
//     foot_trfic VARCHAR(200)NOT NULL,
//     cnvrt_rate VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON  UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfull Created daily sales nBacalso foot trafic";   
// } else {
//     echo "Failed to create daily sales nBacalso foot trafic" .$conn->error;
// }

// $conn->close();

// ===========================================================================
// THIS IS THE N. BACALSO TABLE END =======================================================================
// ===========================================================================

// =================================================================================

// ===========================================================================
// THIS IS THE N. CARCAR TABLE START =======================================================================
// ===========================================================================



// $sql = "CREATE TABLE carcarTable(
//     mactanID INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     salesPrev1 VARCHAR(200)NOT NULL,
//     salesPrev2 VARCHAR(200)NOT NULL,
//     salesPrev3 VARCHAR(200)NOT NULL,
//     salesPrev4 VARCHAR(200)NOT NULL,
//     salesPrev5 VARCHAR(200)NOT NULL,
//     salesPrev6 VARCHAR(200)NOT NULL,
//     salesPrev7 VARCHAR(200)NOT NULL,
//     salesPrev8 VARCHAR(200)NOT NULL,
//     salesPrev9 VARCHAR(200)NOT NULL,
//     salesPrev10 VARCHAR(200)NOT NULL,
//     salesPrev11 VARCHAR(200)NOT NULL,
//     salesPrev12 VARCHAR(200)NOT NULL,
//     salesCurrent1 VARCHAR(200)NOT NULL,
//     salesCurrent2 VARCHAR(200)NOT NULL,
//     salesCurrent3 VARCHAR(200)NOT NULL,
//     salesCurrent4 VARCHAR(200)NOT NULL,
//     salesCurrent5 VARCHAR(200)NOT NULL,
//     salesCurrent6 VARCHAR(200)NOT NULL,
//     salesCurrent7 VARCHAR(200)NOT NULL,
//     salesCurrent8 VARCHAR(200)NOT NULL,
//     salesCurrent9 VARCHAR(200)NOT NULL,
//     salesCurrent10 VARCHAR(200)NOT NULL,
//     salesCurrent11 VARCHAR(200)NOT NULL,
//     salesCurrent12 VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfully to create carcar table";
// } else {
//     echo "Failed to create table" .$conn->error;
// }



// =============================================================

// $sql = "CREATE TABLE carcarDailysales_foottr(
//     id_daily_ft INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     dates_server VARCHAR(200)NOT NULL,
//     daily_sales VARCHAR(200)NOT NULL,
//     daily_plan VARCHAR(200)NOT NULL,
//     last_y_dailysales VARCHAR(200)NOT NULL,
//     trans_count VARCHAR(200)NOT NULL,
//     foot_trfic VARCHAR(200)NOT NULL,
//     cnvrt_rate VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON  UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfull Created daily sales carcar foot trafic";   
// } else {
//     echo "Failed to create daily sales carcar foot trafic" .$conn->error;
// }

// $conn->close();

// ===========================================================================
// THIS IS THE N. CARCAR TABLE END =======================================================================
// ===========================================================================

// =====================================================================
// THIS IS THE LOGIN IN DIVISION ===================================

// $sql = "CREATE TABLE adminUserPass(
//     idAdminPass INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     userName VARCHAR(200)NOT NULL,
//     userPass VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === TRUE){
//     echo "Successfull created adminUserPass table";
// } else {
//     echo "Failed to create adminUserPass".$conn->error;
// }