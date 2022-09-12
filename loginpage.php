<?php 
$title = "Login Page";
require_once 'includes/header.php';
require_once 'db/connection.php';

//if data was submitted via a post reqeust then we do the following
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    $new_password = md5($password.$username);

    //call function to check if the user exist in our database record
    $result = $user->getUser($username, $new_password);

    if (!$result) {
        echo "<br>";
        echo '<div class="alert alert-danger" role="alert">Incorrect username or password. Please try again!</div>';
    }else {
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $result['user_id'];

        header("Location: viewrecords.php");
    }
}
?>

<html>
<title>Login | Page</title>

<head>
    <link rel="stylesheet" href="css/loginpage.css" />
</head>

<body>
    <form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="user_input">
            <label>Username</label>
            <input type="text" name="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
            <span></span>
        </div>

        <div class="user_input">
            <label>Password</label>
            <input type="password" name="password">
            <span></span>
        </div>
        <input type="submit" value="Login" class="submit_input" name="login">
        <span>Don't have an account? <a href="registration.php">Register Now</a></span>
    </form>

</body>

<?php 
require_once 'includes/footer.php';
?>

</html>