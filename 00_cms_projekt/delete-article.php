<?php

require 'includes/database.php';
require 'includes/article.php';
require 'includes/url.php';

$conn = getDB();


if (isset($_GET['id'])) {

    $article = getArticle($conn, $_GET['id'],'id');

    if ($article) {
        $id = $article['id'];


    } else {
        die("article not found");
    }

} else {
    die("id not supplied, article not found");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$sql = "DELETE FROM article 
        WHERE id=?";
  
  //prepare
  $stmt = mysqli_prepare($conn, $sql);
  
  //check for querry errors , return result
  if ($stmt === false) {
  
      echo mysqli_error($conn);
  
  } else {  
      
 
  
  
      mysqli_stmt_bind_param($stmt, "i", $id);
  
  
  if (mysqli_stmt_execute($stmt)) {
  
      
      
  // ovo je za redirect za starije browsere, standard samo copy apste, ne  treba razumijet
  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
      $protocol = 'https';
  }else {
      $protocol = 'http';
  }
  
      // redirects to created article
      header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/index.php");
       header("Location: index.php");
    //   header("http://localhost/udemy/php_dave/00%20cms/article.php?id=80");

      exit;
  
  } else {
      echo mysqli_stmt_error($stmt);
  }  // end -> echo mysqli_stmt_error($stmt); 
  }  // end -> else {mysqli_stmt_bind_param } 
}

?>
<?php require 'includes/header.php';?>

<h2>Delete article</h2>
<p>Are you sure</p>
<form method="post">
<button>Delete</button>
<a href="article.php?id=<?php echo $article['id']; ?>">Cancel</a>

</form>
<?php require 'includes/footer.php';?>

