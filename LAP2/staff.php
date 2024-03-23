/* The Staff class represents a staff member with properties for staff code, department, and methods to
retrieve these details. */
<?php
// Require the character class file
require_once("character.php");

/**
 * Class Staff
 * 
 * Represents a staff member, inheriting from the Character class.
 */
class staff extends character{
    // Private properties to store staff code and department
    private $staffcode;
    private $part;

    /**
     * Constructor for Staff class.
     * 
     * @param string $fullname_staff The full name of the staff member.
     * @param string $countrycode The country code of the staff member.
     * @param string $part The department or part the staff member belongs to.
     */
    public function __construct($fullname_staff, $countrycode, $part){
        // Call the parent constructor to set the full name and country code
        parent::__construct($fullname_staff, $countrycode);

        // Set the department and generate the staff code
        $this->part = $part;
        $this->staffcode = $this->staffcode_continue();
    }

    /**
     * Getter method for retrieving the staff code.
     * 
     * @return int The staff code.
     */
    public function get_staffcode(){
        return $this->staffcode;
    }

    /**
     * Getter method for retrieving the department.
     * 
     * @return string The department of the staff member.
     */
    public function get_part(){
        return $this->part;
    }

    /**
     * Private method to generate the staff code.
     * 
     * @return int The generated staff code.
     */
    private function staffcode_continue(){
        // Static variable to keep track of the current staff code
        static $makecode = 1;
        // Increment and return the current staff code
        return $makecode++;
    }
}
?>