<?php
require 'includes/url.php';
require 'classes/Database.php';
require 'includes/encryption.php';
session_start();
$error='';
$usernameLogged = "";
$db_log = new Database ();
$conn_log = $db_log->getConn();

$sql_log = "SELECT * FROM user";
$results_log = $conn_log->query($sql_log);
$users = $results_log -> fetchALl(PDO::FETCH_ASSOC);
?>

<!-- ****************************************** -->
<ul>
<?php foreach ($users as $user): ?>
    <li> 
       
   <h2><?php echo htmlspecialchars($user['username']); ?></h2>
   <p><?php echo htmlspecialchars($user['email']); ?></p>
   <p><?php echo htmlspecialchars($user['pwhash']); ?></p>
   <p><?php echo decryption(htmlspecialchars($user['pwhash']))?></p>
   
   <?php if (decryption(htmlspecialchars($user['pwhash']))== "secret"): ?>
<p>password matches</p>
<?php else: ?>
    <p>wrong password</p>;
    <?php endif ?>
    </li>
  <?php endforeach ?>  
  <!-- **************************************** -->
</ul>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['username'] == 'dave' && $_POST['password'] == 'secret' ){
       
         session_regenerate_id(true);
        
         $_SESSION['is_logged_in'] = true;

        redirect('/index.php');
    }else{
        $error ="login incorrect";
    }

}
?>
<?php require 'includes/header.php';?>
<p><?php echo $error ?></p>
<h2>Login</h2>
<?php if (!empty($error)): ?>

<?php endif; ?>

<form method="post"> 
    <div>
        <label for="username"> Username </label> 
        <input name="username" id="username">
    </div>
    <div>
        <label for="password"> Password </label> 
        <input name="password" id="password">
    </div>

    <button>Log in</button>

</form>

<?php if ($usernameLog =="dave"): ?>
<p><?php echo "welcome " . $usernameLog ; ?></p>
<?php elseif ($usernameLog != ""):  ?>
    <p>Wrong user</p>
    <?php endif; ?>

<?php require 'includes/footer.php';?>

