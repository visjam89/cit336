<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require $_SERVER['DOCUMENT_ROOT'] . '../library/library.php';

function getCustomers() {
    $connection = conGrt2User();
    try {
        $sql = 'SELECT customers.cusomerID, firstName,lastName, line1, city, state, zipcode FROM customers INNER JOIN addresses ON customers.customerID = addresses.customerID WHERE customers.billingAddressID = addresses.addressID';
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $customers = $stmt->fethALL();
        $stmt->closeCursor();
    } catch (PDOException $ex) {
        return FALSE;
    }
    return $customers;
}

function addCustomer($firstname, $lastname, $emailaddress, $password) {
//    make connection in library
    $link = conGrt2User();
    try {
        $sql = 'INSERT INTO customers(firstName, lastName, emailAddress, password) VALUES (:firstName, :lastName, :emailAddress, :password)';
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':firstName', $firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastName', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':emailAddress', $emailaddress, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
//        $worked = $stmt->execute();
//        Sends back either a 0(did not work), 1(worked), -1(worked with some errors) 
        $insertRow = $stmt->rowCount();
//        how many rows were changed because of the statement
//        $insertRow= $link->lastInsertID();
//        Give back the primary key of the row created(only works with auto incrementing keys
        $stmt->closeCursor();
    } catch (PDOException $ex) {
        return FALSE;
    }
    return $insertRow;
    

}

function getCustomer($custID) {
    $connection = conGrt2User();
    try {
        $sql = 'SELECT customers.cusomerID, firstName,lastName, line1, city, state, zipcode FROM customers INNER JOIN addresses ON customers.customerID = addresses.customerID WHERE customers.billingAddressID = addresses.addressID AND customers.customerID = :customerID ORDER BY lastName, firstName';
        $stmt = $connection->prepare($sql);
        //fill parameter
        $stmt->bindParam(':customerID', $custID, PDO::PARAM_INT);
        $stmt->execute();
        $customer = $stmt->feth();
        $stmt->closeCursor();
    } catch (PDOException $ex) {
        return FALSE;
    }
    return $customer;
}
