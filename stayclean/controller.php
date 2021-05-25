<?php


    /**
     * function for adding data to the username and password field
     */
    function add_booking($name, $location, $phoneNumber, $pickUpDate, $deliveryDate, $servicePreference, $piecesOfClothes)
    {
        $array = array("name" => $name, "location" => $location,  "phoneNumber" => $phoneNumber, "pickUpDate"=>$pickUpDate, "deliveryDate"=>$deliveryDate, "servicePreference"=>$servicePreference, "piecesOfClothes"=>$piecesOfClothes);
      
        //declaring the store.json     
        $filetxt = __DIR__."/store_bookings.json";
        //declaring an empty array
        $arr_data   = [];
        //fetching existing file from store.json
        $json_data  = file_get_contents($filetxt);
        //decoding/converting the json object to php array string from store.json
        $arr_data   = json_decode($json_data, true);
        //append the array with new form data
        $arr_data[] = $array;
        //decoding/converting php array string  to json object 
        $json_data  = json_encode($arr_data);
        //storing the final data into store.json     
        if(!file_put_contents($filetxt, $json_data)){
            return false;
        }
        return true;
    }


    function add_contact($fullname, $email, $phoneNumber, $message)
    {
        $array = array("fullname" => $fullname, "email" => $email,  "phoneNumber" => $phoneNumber, "message"=>$message);
       
        //declaring the store.json     
        $filetxt = __DIR__."/store_contacts.json";
        //declaring an empty array
        $arr_data   = [];
        //fetching existing file from store.json
        $json_data  = file_get_contents($filetxt);
        //decoding/converting the json object to php array string from store.json
        $arr_data   = json_decode($json_data, true);
        //append the array with new form data
        $arr_data[] = $array;
        //decoding/converting php array string  to json object 
        $json_data  = json_encode($arr_data);
        //storing the final data into store.json     
        if(!file_put_contents($filetxt, $json_data)){
            return false;
        }
        return true;
    }