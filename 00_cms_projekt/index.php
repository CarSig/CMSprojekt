<?php
require 'classes/Database.php';
require 'includes/auth.php';


session_start();
$db = new Database ();
$conn = $db->getConn();  // method objekta klase database , return je POD object


//variable to store mysql querry
$sql = "SELECT * 
        FROM article 
        ORDER BY published_at";

//send SQL query to database
$results = $conn->query($sql);  // method PDO objekta



 $articles = $results->fetchAll(PDO::FETCH_ASSOC);


?>
<?php require 'includes/header.php';?>



<?php if (isLoggedIn()): ?>
  
<p>You are logged in <a href="logout.php">Log out</a></p>
<p><a href="new-article.php"> New article</a></p>
<?php else: ?>

<p>You are not logged in <a href="login.php">Log in</a></p>
<p>Not registered yet? <a href="
form.html">Register</a></p>


<?php endif; ?>

<div class="articleIndex">
      <?php if (empty($articles)): ?>
        <p>No articles found </p>
      <?php else: ?>
        <ul class="articleUl">
        <?php foreach ($articles as $article): ?>
          <li class ="articleLi"> 
            <!--htmlspecail char vs XSS attack --> 
          <h2><a href="article.php?id=<?php echo $article['id']; ?>"><?php echo htmlspecialchars($article['title']); ?><a></h2>
         <p><?php echo htmlspecialchars($article['content']); ?></p>
          </li>
        <?php endforeach; ?>  
      </ul>
        <?php endif; ?>
        </div>
<?php require 'includes/footer.php';?>