<?php

class participants {

    private $id;
    private $name;
    private $email;
    private $profile_picture;
    private $batch;
    private $graduation_status;

    public function __construct($id, $name, $email, $profile_picture, $batch, $graduation_status=false){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->profile_picture = $profile_picture;
        $this->batch = $batch;
        $this->graduation_status = $graduation_status;
    }

    public static function validate_email($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validate_batch($batch) {
        $valid_batches = ["FSE", "UIX", "FCS"];
        if (in_array($batch, $valid_batches)) {
            return true;
        } else {
            return false;
        }
    }



    
    


}


?>