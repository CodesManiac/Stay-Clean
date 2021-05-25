<?php
// controller for add_booking

require_once("controller.php") ;

//check the HTTP Request method 

    $fullname = filter_input(INPUT_POST, 'fullname') ; 
    $email = filter_input(INPUT_POST, 'email') ; 
    $phoneNumber = filter_input(INPUT_POST, 'phoneNumber') ; 
    $message = filter_input(INPUT_POST, 'message') ; 

    
    // $entryIsSuccess = add_booking($name, $location) ;
    // if($entryIsSuccess){
    //    echo "<script>alert('done')</script>";
        
    // }
if (!empty($fullname) && !empty($email) && !empty($phoneNumber) && !empty($message)) {
    
    $entryIsSuccess = add_contact($fullname, $email, $phoneNumber, $message) ;
    echo 1;
}

    ?>

    