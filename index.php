<?php
    $title = 'Home';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>

<h1 class='text-center'>Registration for IT Conference</h1>

<form method='post' action='success.php'>
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group">
        <label for="specialty">Area of Specialization</label>
        <select class="form-control" id="specialty" name="specialty">
            <option value='1'>Database Administrator</option>
            <option>Software Developer</option>
            <option>Web Administrator</option>
            <option>Other</option>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Your Email Address">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="phone" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="Enter Your Contact Number">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
    </div>
    
    <button type="submit" name='submit' class="btn btn-primary">Submit</button>
</form>

<?php require_once 'includes/footer.php'; ?>


