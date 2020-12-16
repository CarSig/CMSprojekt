<?php

require 'includes/database.php';
require 'includes/article.php';

$conn = getDB();

if (isset($_GET['id']))  {

  $article = getArticle($conn,$_GET['id']); 

} else {
  
  $article = null;
}

?>
<?php require 'includes/header.php';?>
      <?php if ($article === null): ?>
        <p>Article not found </p>
      <?php else: ?>
     <article class="articleSingle">
            <h2><?php echo htmlspecialchars($article['title']); ?></h2>
            <p><?php echo htmlspecialchars($article['content']); ?></p>
    <article>

<a href="edit-article.php?id=<?php echo $article['id']?>">Edit</a>
<a href="delete-article.php?id=<?php echo $article['id']?>">Delete</a>

        <?php endif; ?>
        <?php require 'includes/footer.php';?>
