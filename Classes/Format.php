<?php
class Format{
    public function FormatDate($date){
        //i - Minutes with leading zeros (00 to 59)
//a - Lowercase am or pm
//g - 12-hour format of an hour (1 to 12)
//j - The day of the month without leading zeros (1 to 31)
//F - A full textual representation of a month (January through December)
//Y - A four digit representation of a year

        return date('F j, Y, g:i a', strtotime($date));
    }

public function clean($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
return $data;
}

public function getTitle(){
    global $pageTitle;
if(isset($pageTitle)){
      echo $pageTitle;
}
else{
    echo 'Default';
}

}

function validate($input,$flag,$length = 6){
   
    $status = true;

    switch ($flag) {
        case 1:
            # code...
            if(empty($input)){
                $status = false;
            }
            break;

        case 2: 
            # code ... 
             if(!filter_var($input,FILTER_VALIDATE_EMAIL)){
                $status = false;
             }
            break;
        
        case 3: 
            #code ... 
            if(strlen($input) < $length){
                $status = false;
            }    
            break;

        case 4: 
            #code ... 
            if(!filter_var($input,FILTER_VALIDATE_URL)){
                $status = false;
            }    
            break; 

        case 5: 
            #code ... 
            if(!filter_var($input,FILTER_VALIDATE_INT)){
                $status = false;
            }  
            break;


        case 6: 
            # code ... 
            $allowdEx  = ['png','jpg','jpeg'];
 
             if(!in_array($input,$allowdEx)){
                 $status = false;

             }
             break;


        case 7:
            #code .... 
            
            if(!preg_match('/^[a-zA-Z\s]*$/',$input)){
                $status = false;
            }

            break;
             

            case 8:
                #code .... 
                
                if(!preg_match('/^01[0-2,5][0-9]{8}$/',$input)){
                    $status = false;
                }
    
                break;     
             
    }
    return $status;

}

//Print Messages
function  printMessages($txt){
    if(isset($_SESSION['Message']))
    {
        foreach ($_SESSION['Message'] as $key => $value) {
            # code...
            echo '* '.$value.'<br>';
        }
           unset($_SESSION['Message']);

    }
    else
    {
         echo $txt;
    }
    
}


}
















?>