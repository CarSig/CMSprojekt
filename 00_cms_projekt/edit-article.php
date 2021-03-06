<?php

require 'includes/database.php';
require 'includes/article.php';
require 'includes/url.php';

$conn = getDB();

if (isset($_GET['id'])) {

    $article = getArticle($conn, $_GET['id']);

    if ($article) {
        $id = $article['id'];
        $title = $article['title'];
        $content = $article['content'];
        $published_at = $article['published_at'];

    } else {
        die("article not found");
    }

} else {
    die("id not supplied, article not found");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];

    $errors = validateArticle($title, $content, $published_at);

    if (empty($errors)) {

      

      $sql = "UPDATE article 
              SET title=?, content=?, published_at=? 
              WHERE id=?";
  
  //prepare
  $stmt = mysqli_prepare($conn, $sql);
  
  //check for querry errors , return result
  if ($stmt === false) {
  
      echo mysqli_error($conn);
  
  } else {  
      
      if ($published_at =='') {
          $published_at =null;
      }
  
  
      mysqli_stmt_bind_param($stmt, "sssi", $title, $content, $published_at,$id);
  
  
  if (mysqli_stmt_execute($stmt)) {
  
      
      
  // ovo je za redirect za starije browsere, standard samo copy apste, ne  treba razumijet
  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
      $protocol = 'https';
  }else {
      $protocol = 'http';
  }
  
      // redirects to created article
      header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/article.php?id=$id");
      // header("Location: article.php?id=$id");
      exit;
  
  } else {
      echo mysqli_stmt_error($stmt);
  }  // end -> echo mysqli_stmt_error($stmt); 
  }  // end -> else {mysqli_stmt_bind_param } 

    }
}

?>
<?php require 'includes/header.php'; ?>

<h2>Edit article</h2>

<?php require 'includes/article-form.php'; ?>

<?php require 'includes/footer.php'; ?>
