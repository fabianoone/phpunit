<?php //declare(strict_types=1);

/**
 * User
 * 
 * A user of the system
 */
class User
{
    /**
     * First name
     * @var string
     */
    public $first_name;

    /**
     * Last name
     * @var string
     */
    public $last_name;

    /**
     * Get the user's full name from their first name and last name
     * @return string The user's full name
     */
    public function getFullName()
    {
        return trim("$this->first_name $this->last_name");
    }
}