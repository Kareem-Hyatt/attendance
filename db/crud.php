<?php
    class crud
    {
        private $db;

        function __construct($conn)
        {
            $this->db = $conn;
        }

        public function insert($fname, $lname, $dob, $email, $contact, $specialty){
            try {
                $sql = "INSERT INTO attendance_db.attendee (`firstname`, `lastname`, `dateofbirth`, `emailaddress`, `contactnumber`, `specialty_id`) 
                VALUES (:fname, :lname, :dob, :email, :contact, :specialty)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':specialty',$specialty);

                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 
    }
?>