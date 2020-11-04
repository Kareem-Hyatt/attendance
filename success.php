<?php
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $contact, $specialty);

        if($isSuccess){
            echo "<h1 class='text-center text-success'>You have been Successfully REGISTERED!</h1>";
        }
        else{
            echo "<h1 class='text-center text-danger'>There was an ERROR in processing!</h1>";

        }
    }
?>


<!-- This code useing the GET METHOD -->
    <!-- <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php //echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php //echo 'Specialization: ' . $_GET['specialty']; ?></h6>
            <p class="card-text"><?php// echo 'DOB: ' . $_GET['dob']; ?></p>
            <p class="card-text"><?php// echo 'Email Address: ' . $_GET['email']; ?></p>
            <p class="card-text"><?php //echo 'Contact Number: ' . $_GET['phone']; ?></p>
        </div>
    </div> -->

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Specialization: ' . $_POST['specialty']; ?></h6>
            <p class="card-text"><?php echo 'DOB: ' . $_POST['dob']; ?></p>
            <p class="card-text"><?php echo 'Email Address: ' . $_POST['email']; ?></p>
            <p class="card-text"><?php echo 'Contact Number: ' . $_POST['phone']; ?></p>
        </div>
    </div>

<?php require_once 'includes/footer.php'; ?>