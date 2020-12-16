<?php

require 'includes/database.php';
require 'includes/article.php';
require 'includes/url.php';
require 'includes/auth.php';

session_start();

if (! isLoggedIn()) {
    die('unauthorized');
}

$title = '';
$content = '';
$published_at = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];


$errors = validateArticle ($title,$content, $published_at) ;



//if array $errors is empty

if (empty($errors)) { //------------------

    $conn = getDB();

    $sql = "INSERT INTO article (title, content, published_at) VALUES (?, ?, ?)";

//prepare
$stmt = mysqli_prepare($conn, $sql);

//check for querry errors , return result
if ($stmt === false) {

    echo mysqli_error($conn);

} else {  
    
    if ($published_at =='') {
        $published_at =null;
    }

    //sss je za upitinike u $sql varaible--3x  string staviti na mjesto placeholdera
    mysqli_stmt_bind_param($stmt, "sss", $title, $content, $published_at);


//execute prepared statement using execute function. When we call this fucntion database 
//server inserts values in sql ( also can escape quotes if necessary)
// if it is true t worked and we can get id and insert in record
if (mysqli_stmt_execute($stmt)) {

    $id = mysqli_insert_id($conn);
    
    
// // ovo je za redirect za starije browsere, standard samo copy apste, ne  treba razumijet
// if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
//     $protocol = 'https';
// }else {
//     $protocol = 'http';
// }

//     // redirects to created article
//     // header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/article.php?id=$id");
    header("Location: article.php?id=$id");
    exit;

} else {
    echo mysqli_stmt_error($stmt);
}  // end -> echo mysqli_stmt_error($stmt); 
}  // end -> else {mysqli_stmt_bind_param } 
}  //end -> if (empty($errors))    
}  // end -> if ($_SERVER["REQUEST_METHOD"] == "POST") 
?>

<?php require 'includes/header.php'; ?>


<h2>New Article</h2>



<?php require 'includes/article-form.php';?>

<?php require 'includes/footer.php';?>
