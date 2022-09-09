<?php
$title = "Success";
require_once 'includes/header.php';
require_once 'db/connection.php';

if (isset($_POST['submit'])) {
    //extract values from the $_Post Array
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $speciality = $_POST['speciality'];

    //call function to insert records into the database and track if successful or not
    $issuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $contact, $speciality);

    if ($issuccess) {
        echo '<h4 class="text-center text-success">You have been registered</h4>';
    }else {
        echo '<h4 class="text-center text-danger">There was an error in processing</h4>';
    }
}
?>

<br>
<!-- beginning of card -->
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php
            echo $_POST['fname'] . ' ' . $_POST['lname'];
            ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php
            echo $_POST['speciality'];
            ?>
        </h6>

        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    </div>
</div>
<!-- end of card-->
<?php
require_once 'includes/footer.php';
?>