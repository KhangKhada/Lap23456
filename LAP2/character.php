/* The `Character` class represents a character with a full name and a country code, providing methods
to retrieve these details. */
<?php
/**
 * Class Character
 * 
 * Represents a character with a full name and a country code.
 */
class character
{
    // Private properties to store full name and country code
    private $fullname;
    private $countrycode;

    /**
     * Constructor for Character class.
     * 
     * @param string $fullname The full name of the character.
     * @param string $countrycode The country code of the character.
     */
    public function __construct($fullname, $countrycode)
    {
        // Assigning values to the properties
        $this->fullname = $fullname;
        $this->countrycode = $countrycode;
    }
    /**
     * Getter method for retrieving the full name of the character.
     * 
     * @return string The full name of the character.
     */
    public function get_fullname()
    {
    return $this->fullname;
    }
    /**
     * Getter method for retrieving the country code of the character.
     * 
     * @return string The country code of the character.
     */
    public function get_countrycode()
    {
    return $this->countrycode;
    }
}
