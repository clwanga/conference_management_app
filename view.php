<?php
$title = "View Records";
require_once 'includes/header.php';
require_once 'db/connection.php';

//get attendee details
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $crud->getAttendeeDetails($id);
}
?>
<br>
<hr>
<br>
<!-- beginning of card -->
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php
            echo $result['firstname'] . ' ' . $result['lastname'];
            ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php
            echo $result['name'];
            ?>
        </h6>

        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    </div>
</div>
<!-- end of card-->
<?php
require_once 'includes/footer.php';
?>