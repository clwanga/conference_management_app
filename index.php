<?php
$title = "Home";
require_once 'includes/header.php';
require_once 'db/connection.php';

$result = $crud->getSpecialities();
?>
<br>
<hr>
<h4>Registration form</h4>
<br>
<!-- start -->
<form class="w-50 p-3" method="post" action="success.php">
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="first_name" placeholder="firstname" name="fname">
    </div>
    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" id="last_name" placeholder="Lastname" name="lname">
    </div>
    <div class="form-group md-3">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="contact_number">Contact Number</label>
        <input type="text" class="form-control" id="contact_number" placeholder="Number" name="contact">
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" id="dob" placeholder="Date" name="dob">
    </div>
    <div class="form-group">
        <label for="speciality">Area of Expertise</label>
        <select class="form-control" name="speciality" id="speciality">
            <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
            <option value="<?php echo $r['speciality_id']?>"><?php echo $r['name']?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<!-- end -->

<?php
require_once 'includes/footer.php';
?>