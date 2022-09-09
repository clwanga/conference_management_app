<?php
class Crud
{
    //private database object
    private $db;

    //constructor to initialize private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;
    }

    //function to insert a new record into the users database
    public function insertAttendees($fname, $lname, $dob, $email, $contact, $speciality)
    {

        try {

            //define sql statement to be executed
            $sql = "INSERT INTO users(firstname,lastname,email,phone,birthdate,speciality_id) VALUES(:fname, :lname, :email, :contact, :dob, :speciality)";

            //prepare the sql statement for execution
            $statement = $this->db->prepare($sql);

            //bind all placeholders to the actual values
            $statement->bindparam(':fname', $fname);
            $statement->bindparam(':lname', $lname);
            $statement->bindparam(':dob', $dob);
            $statement->bindparam(':email', $email);
            $statement->bindparam(':contact', $contact);
            $statement->bindparam(':speciality', $speciality);

            $statement->execute();

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getAttendees()
    {
        $sql = "SELECT * FROM `users` a inner join `specialities` s on a.speciality_id = s.speciality_id";
        $result = $this->db->query($sql);

        return $result;
    }

    public function getSpecialities(){
        $sql = "SELECT * FROM `specialities`";
        $result = $this->db->query($sql);

        return $result;  
    }
}
