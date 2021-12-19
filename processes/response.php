<?php
class Response {
    public $status;
    public $error;
    public $value;

    function __construct()
    {
        $this->status=true;
        $this->error="";
        $this->value= null;
        $this->email_already_used = false;
    }
}
?>