<?php
$title = "Delete Record";
require_once 'db/connection.php';

//crud operation
if (!isset($_GET['id'])) {
   echo 'error'; 
}else {
    $id = $_GET['id'];
    $result = $crud->deleteAttendeeDetails($id);

    if ($result) {
        header("Location: viewrecords.php");
    } else {
        echo 'error';
    }
    
}
//redirect
?>
<?php
require_once 'includes/footer.php';
?>