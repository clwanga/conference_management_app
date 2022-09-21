<?php
$title = "Home";
require_once 'includes/header.php';
require_once 'db/connection.php';

$result = $crud->getSpecialities();
?>
<div class="banner">
    <p id="bannerHeader">Managing meetings <br> Made Easy!</p>
    <p id="supportingText">Use our application to organise your meetings and document everything with zero trouble</p>
    <p id="services">Our Services</p>
</div>

<!-- end of banner -->
<div class="container px-4">
    <div class="row g-2 mt-5">
        <div class="col-6 ps-5">
            <img src="images/meeting.png" alt="meeting image">
        </div>
        <div class="col-6 pt-5 ps-5">
            <div class="card blueCard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-info"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Create Meeting</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-2 mt-5">
        <div class="col-6 pt-5 ps-5">
            <div class="card orangeCard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-warning"><i class="fa fa-user-plus" aria-hidden="true"> Register</i></button>
                </div>
            </div>
        </div>
        <div class="col-6">
            <img src="images/member.png" alt="meeting image">
        </div>
    </div>
</div>

<div class="memberSection">



</div>

<!-- start -->
<form class="w-50 p-3" method="post" action="success.php" enctype="multipart/form-data">
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
            <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['speciality_id'] ?>"><?php echo $r['name'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="custom-file">
        <input type="file" accept="image/*" class="custom-file-input" id="avatar" placeholder="avatar" name="avatar">
        <label class="custom-file-label" for="avatar">Choose file</label>
        <small id="avatar" class="form-text text-warning">File upload is optional</small>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<!-- end -->

<?php
require_once 'includes/footer.php';
?>