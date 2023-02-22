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

// this is the category_db database division end ==================
//===================================================================
//this is the table chbc_chart_table division ======================
//==================================================================
//THIS IS THE BRANCHES PIE CHART DIVISION ==========================

// $branches_sales_pie_table = "CREATE TABLE branches_sales_pie_table(
//     id INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     sap_dates VARCHAR(200)NO NULL,
//     banilad VARCHAR(200)NOT NULL,
//     mactan VARCHAR(200)NOT NULL,
//     consolacion VARCHAR(200)NOT NULL,
//     minglanilla VARCHAR(200)NOT NULL,
//     n_bacalso VARCHAR(200)NOT NULL,
//     car_car VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";


// if($conn->query($branches_sales_pie_table) === true){
//     echo "Successfully created branches_sales_pie_table";
// } else {
//     echo "Failed to create branches_sales_pie_table";
// }

// $conn->close();

//THIS IS THE BRANCHES PIE CHART DIVISION END ==========================

// THIS IS THE PRODUCT SCRIPT START ===========================

// $product_category_table = "CREATE TABLE product_category_table(
//     id INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     sap_dates VARCHAR(200)NO NULL,
//     appliance VARCHAR(200)NOT NULL,
//     automotive VARCHAR(200)NOT NULL,
//     bathroom VARCHAR(200)NOT NULL,
//     building_materials VARCHAR(200)NOT NULL,
//     consumable VARCHAR(200)NOT NULL,
//     electrical VARCHAR(200)NOT NULL,
//     faucet_bath_mixer VARCHAR(200)NOT NULL,
//     furniture VARCHAR(200)NOT NULL,
//     garden_outdoor VARCHAR(200)NOT NULL,
//     home_improvement VARCHAR(200)NOT NULL,
//     kitchen VARCHAR(200)NOT NULL,
//     sanitarywares VARCHAR(200)NOT NULL,
//     services VARCHAR(200)NOT NULL,
//     tile_stone VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($product_category_table) === true){
    //     echo "Successfully created new product_category_table";
    // } else {
        //     echo "Failed to create new product_category_table";
        // }
        
        // $conn->close();

// THIS IS THE PRODUCT SCRIPT START ===========================
//===============================================================
// THIS IS THE CHBC SALES TABLE DIVISION =======================
    // $chbc_sales = "CREATE TABLE chbc_sales(
    //     id INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     sap_dates VARCHAR(200)NO NULL,
    //     date_identifier VARCHAR(200)NOT NULL,
    //     dates VARCHAR(200)NOT NULL,
    //     banilad VARCHAR(200)NOT NULL,
    //     mactan VARCHAR(200)NOT NULL,
    //     consolacion VARCHAR(200)NOT NULL,
    //     minglanilla VARCHAR(200)NOT NULL,
    //     n_bacalso VARCHAR(200)NOT NULL,
    //     car_car VARCHAR(200)NOT NULL,
    //     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    // )";

    // if($conn->query($chbc_sales) === true){
    //     echo "Successfully created new chbc_sales";
    // } else {
    //     echo "Failed to create new chbc_sales";
    // }
    // $conn->close();

// THIS IS THE CHBC SALES TABLE DIVISION =======================
//==================================================================
// this is the product_category_table division end ======================
//=======================================================================

// ================================================================================
// THIS IS THE TRAFIC TRANSACTION CCOUNT TABLE DIVISION ========================================
// ================================================================================

// $trafic_count = "CREATE TABLE trafic_count_table(
//     id INT(200)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     sap_dates VARCHAR(200)NO NULL,
//     banilad_acc_transc VARCHAR(200)NOT NULL,
//     banilad_acc_foot VARCHAR(200)NOT NULL,
//     mactan_acc_transc VARCHAR(200)NOT NULL,
//     mactan_acc_foot VARCHAR(200)NOT NULL,
//     consolacion_acc_transc VARCHAR(200)NOT NULL,
//     consolacion_acc_foot VARCHAR(200)NOT NULL,
//     minglanilla_acc_transc VARCHAR(200)NOT NULL,
//     minglanilla_acc_foot VARCHAR(200)NOT NULL,
//     n_bacalso_acc_transc VARCHAR(200)NOT NULL,
//     n_bacalso_acc_foot VARCHAR(200)NOT NULL,
//     carcar_acc_transc VARCHAR(200)NOT NULL,
//     carcar_acc_foot VARCHAR(200)NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($trafic_count) === true){
//     echo "Successfully created new trafic count  table";
// } else {
//     echo "Failed to create new trafic count table";
// }

// $conn->close();