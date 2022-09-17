<?php
$title = "Delete Record";
require_once 'includes/auth_check.php';
require_once 'db/connection.php';

//crud operation
if (!isset($_GET['id'])) {
   include 'includes/errormessage.php';
}else {
    $id = $_GET['id'];
    $result = $crud->deleteAttendeeDetails($id);

    if ($result) {
        header("Location: viewrecords.php");
    } else {
        echo '<br>';
        include 'includes/errormessage.php';
    }
    
}
//redirect
?>
<?php
require_once 'includes/footer.php';
?>