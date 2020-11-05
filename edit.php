<?php
    $title = 'Edit Record';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $results = $crud->getSpecialties();
    if(!isset($_GET['id']))
    {
        echo 'ERROR';
    }
    else
    {
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
    
    
?>

<h1 class='text-center'>Edit Record</h1>

<form method='post' action='editpost.php'>
    <input type='hidden' name='id' value="<?php echo $attendee['attendee_id']?>" />
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" value = <?php echo $attendee['firstname']?> id="firstname" placeholder="Enter First Name" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" value = <?php echo $attendee['lastname']?> id="lastname" name="lastname" placeholder="Enter Last Name">
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" value = <?php echo $attendee['dateofbirth']?> id="dob" name="dob">
    </div>
    <div class="form-group">
        <label for="specialty">Area of Specialization</label>
        <select class="form-control" id="specialty" name="specialty">
            <?php  
                while($r = $results->fetch(PDO::FETCH_ASSOC)){  
            ?>
                <option value = "<?php echo $r['specialty_id']; ?>"<?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected'?>>
                    <?php echo $r['name']; ?>
                </option>
            <?php
                }        
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" value = <?php echo $attendee['emailaddress']?> id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Your Email Address">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="phone" class="form-control" value = <?php echo $attendee["contactnumber"]?> id="phone" name="phone" aria-describedby="phoneHelp" placeholder="Enter Your Contact Number">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
    </div>
    
    <button type="submit" name='submit' class="btn btn-success">Save Changes</button>
</form>

<?php
    }
?>

<?php require_once 'includes/footer.php'; ?>