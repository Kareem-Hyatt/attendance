<?php
    class crud
    {
        private $db;

        function __construct($conn)
        {
            $this->db = $conn;
        }

        public function insertAttendees($fname, $lname, $dob, $email, $contact, $specialty){
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

        public function getAttendees(){
            $sql = "SELECT * FROM attendance_db.attendee a INNER JOIN attendance_db.specialties s ON a.specialty_id = s.specialty_id";
            $result = $this->db->query($sql);
            return $result;
        }

        public function getSpecialties(){
            $sql = "SELECT * FROM attendance_db.specialties";
            $result = $this->db->query($sql);
            return $result;
        }

        public function getAttendeeDetails($id){
            $sql = "SELECT * FROM attendance_db.attendee a INNER JOIN attendance_db.specialties s ON a.specialty_id = s.specialty_id WHERE attendee_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }

        public function editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty){
            try{
                $sql = "UPDATE attendance_db.attendee SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,
                `emailaddress`=:email,`contactnumber`=:contact,`specialty_id`=:specialty WHERE attendee_id = :id";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':id',$id);
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