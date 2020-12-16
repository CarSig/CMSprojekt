<?php
require 'includes/url.php';
require 'classes/Database.php';
require 'includes/encryption.php';
session_start();
$error='';
$userLogged ="";

$db_log = new Database ();
$conn_log = $db_log->getConn();

$sql_log = "SELECT * FROM user";
$results_log = $conn_log->query($sql_log);
$users = $results_log -> fetchALl(PDO::FETCH_ASSOC);
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $userLogged;
    foreach ($users as $user){
if ($_POST['email'] =="" || $_POST['password'] == "" ){
    $error ="Please fill all fields";
}
        elseif ($_POST['email'] == ($user['email'] && $_POST['password'] == decryption($user['pwhash'])) ) {
            session_regenerate_id(true);
            $userLogged = $_POST['email'];
         $_SESSION['is_logged_in'] = true;

        redirect('/index.php');
        break;
    }else{
        $error ="Email or password incorrect";

        }
    
    }

    }

?>
<?php require 'includes/header.php';?>

<h2>Login</h2>


<form method="post"> 
    <div>
        <label for="email"> Email </label> 
        <input name="email" id="email">
    </div>
    <div>
        <label for="password"> Password </label> 
        <input type="password" name="password" id="password">
    </div>

    <button>Log in</button>

</form>
<?php if (!empty($error)): ?>
    <p class="error "><?php echo $error ?></p>
<?php endif; ?>


<?php require 'includes/footer.php';?>

