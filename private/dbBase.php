<?php

class dbBase {
    private const pdo_name = 'mysql:localhost;dbname=teenuage';
    private const pdo_login = 'root';
    private const pdo_mdp = '';
    private $db_handle ;

    public function __construct() {
        $this->db_handle = new PDO( self::pdo_name, self::pdo_login, self::pdo_mdp );
 
    }

    function __destruct () {

    }

    public function prepare( $_request ) {
        return $this->db_handle->prepare( $_request );
    }

    public function select( $_request ) {
        $result = array();
        if ( $this->is_valid() ) {
            $verif = $this->prepare( $_request );
            if ( $verif->execute() ) {
                $result = $verif->fetchAll();

            }
            return $result;
        }
    }

    public function is_valid() {
        return isset( $this->db_handle );
    }

    public function get_handle() {
        return $this->db_handle;
    }
}
?>