<?php
$title = "Edit Record";
require_once 'includes/header.php';
require_once 'db/connection.php';

$result = $crud->getSpecialities();

if (!isset($_GET['id'])) {
    echo '<br>';
    include 'includes/errormessage.php';
    
} else {
    $id = $_GET['id'];
    $attendee = $crud->getAttendeeDetails($id);

?>

    <br>
    <hr>
    <h4>Edit Attendee Details</h4>
    <br>
    <!-- start -->
    <form class="w-50 p-3" method="post" action="editpost.php">
        <input type="hidden" value="<?php echo $attendee['id'] ?>" name="id">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" placeholder="firstname" name="fname" value="<?php echo $attendee['firstname'] ?>">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" placeholder="Lastname" name="lname" value="<?php echo $attendee['lastname'] ?>">
        </div>
        <div class="form-group md-3">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $attendee['email'] ?>">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="contact_number">Contact Number</label>
            <input type="text" class="form-control" id="contact_number" placeholder="Number" name="contact" value="<?php echo $attendee['phone'] ?>">
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" placeholder="Date" name="dob" value="<?php echo $attendee['birthdate'] ?>">
        </div>
        <div class="form-group">
            <label for="speciality">Area of Expertise</label>
            <select class="form-control" name="speciality" id="speciality" value="<?php echo $attendee['name'] ?>">
                <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $r['speciality_id'] ?>" <?php if ($r['speciality_id'] == $attendee['speciality_id']) {
                                                                            echo 'selected';    
                                                                        } ?>>
                        <?php echo $r['name'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success" name="submit">Save Changes</button>
    </form>
<?php } ?>
<!-- end -->
<?php
require_once 'includes/footer.php';
?>