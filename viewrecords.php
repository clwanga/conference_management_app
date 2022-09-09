<?php
$title = "View Records";
require_once 'includes/header.php';
require_once 'db/connection.php';

//get all attendees
$result = $crud->getAttendees();
?>

<br>
<!-- start of table -->
<table class="table table-success table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Attendee ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Speciality</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <th scope="row"><?php echo $r['id'] ?></th>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td><?php echo $r['phone'] ?></td>
                <td><?php echo $r['birthdate'] ?></td>
                <td><?php echo $r['name'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!-- end of table -->
<?php
require_once 'includes/footer.php';
?>