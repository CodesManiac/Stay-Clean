<?php
// controller for add_booking

require_once("controller.php") ;

//check the HTTP Request method 

    $name = filter_input(INPUT_POST, 'name') ; 
    $location = filter_input(INPUT_POST, 'location') ; 
    $phoneNumber = filter_input(INPUT_POST, 'phoneNumber') ; 
    $pickUpDate = filter_input(INPUT_POST, 'pickUpDate') ; 
    $deliveryDate = filter_input(INPUT_POST, 'servicePreference') ; 
    $servicePreference = filter_input(INPUT_POST, 'servicePreference') ; 
    $piecesOfClothes = filter_input(INPUT_POST, 'piecesOfClothes') ; 
   
   
    
    // $entryIsSuccess = add_booking($name, $location) ;
    // if($entryIsSuccess){
    //    echo "<script>alert('done')</script>";
        
    // }
if (!empty($location) && !empty($name) && !empty($phoneNumber) && !empty($pickUpDate) && !empty($deliveryDate) && !empty($servicePreference) && !empty($piecesOfClothes)) {

    $entryIsSuccess = add_booking($name, $location, $phoneNumber, $pickUpDate, $deliveryDate, $servicePreference, $piecesOfClothes) ;
    echo 1;
}

    ?>

    