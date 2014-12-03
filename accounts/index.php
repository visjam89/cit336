<?php 
//session_start();
/* 
 * Account Controller
 
 */
// do update, do delete, do login
require('model.php');

if(isset($_POST['action'])){
    $submit= $_POST['action'];
}elseif (isset($_GET['action'])) {
   $submit= $_GET['action']; 
}
//accounts/?action=regform
//You must have a case for the form and the process
switch($submit) {
    case 'RegSubmit':
        addCustomer($firstname, $lastname, $emailaddress, $password);
        break;
    case 'RegForm':
        include('register.php');
        break;
    case 'UpdSubmit':
        break;
    case 'UpdForm':
        $custID = $_POST['cust'];
        $customer = getCustomer($custID);
        $title = 'Update';
        include('update.php');
        break;
    case 'DelSubmit':
        break;
    case 'DelForm':
        //Request for Delete form
        //get the data for the view
        $custID = $_POST['cust'];
        $customer = getCustomer($custID);
        $title = 'Delete';
        include('delete.php');
        break;
    case 'Getcustomers':
        $customers = getCustomers();
        $title = 'Customers';
        include('customer.php');
        break;
    case 'login';
        break;
    case 'logout';
        break;
    default: 
        //deliver the login view
        $title = 'Login';
        include 'login.php';
        break;
       }
    


if($$submit == 'Register')
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname']; 
$emailaddress = $_POST['emailAddress'];
$password = $_POST['password'];











