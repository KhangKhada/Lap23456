<?php

// Require the hotro.php file
require_once("hotro.php");

/**
 * Class Member
 * 
 * Represents a member with full name, email, and unique identifier.
 */
class member{
    // Private properties to store full name, email, and member ID
    private $fullname;
    private $email;
    private $idmember;

    /**
     * Constructor for Member class.
     * 
     * @param string $fullname The full name of the member.
     * @param string $email The email address of the member.
     */
    public function __construct($fullname, $email){
        // Initialize properties and assign a unique ID to the member
        $this -> fullname = $fullname;
        $this -> email = $email;
        $this -> idmember = idcontinue();
    }

    /**
     * Destructor for Member class.
     * 
     * Clears the properties when the object is destroyed.
     */
    public function __destruct(){
        $this -> fullname = NULL;
        $this -> email = NULL;
        $this -> status = NULL;
        $this -> idmember = NULL;
    }

    /**
     * Getter method for retrieving the full name of the member.
     * 
     * @return string The full name of the member.
     */
    public function get_fullname(){
        return $this -> fullname;
    }

    /**
     * Getter method for retrieving the email address of the member.
     * 
     * @return string The email address of the member.
     */
    public function get_email(){
        return $this -> email;
    }

    /**
     * Getter method for retrieving the unique identifier of the member.
     * 
     * @return int The unique identifier of the member.
     */
    public function get_id(){
        return $this -> idmember;
    }
}
?>