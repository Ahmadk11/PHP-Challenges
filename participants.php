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

    public function update_with($id = null, $name = null, $email = null, $profile_picture = null, $batch = null, $graduation_status = null) {
        
        $id = $id ?? $this->$id;
        $name = $name ?? $this->name;
        $email = $email ?? $this->email;
        $profile_picture = $profile_picture ?? $this->profile_picture;
        $batch = $batch ?? $this->batch;
        $graduation_status = $graduation_status ?? $this->graduation_status;

        return new Participant($name, $email, $profile_picture, $batch, $graduation_status);
    }

    public function mark_as_graduated() {
        $this->graduation_status = true;
        return $this;
    }

    public static function generate_id() {

        return 'participant_' . random_int(1000, 100000);
    }

    public function switch_batch($new_batch) {
        switch($new_batch) {
            case "FSE":
            case "UIX":
            case "FCS":
                $this->batch = $new_batch;
                return $this;
            default:
                throw new Exception("Invalid batch: " . $new_batch);
        }
    }

}


?>