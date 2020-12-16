<!--- IF there are errors, FOREACH error, ECHO errors in unordered list  -->

<?php if (! empty($errors)):?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo $error ?></li>
        <?php endforeach; ?>
    </ul>
        <?php endif; ?>

<!--- form  -->

<form class="articleForm" method="post">
    <div>
        <label for="title">Title</label>
        <!---  htmlspecialchars as value - this way content is kept if submit was not sucessful 1st time-->
        
        <input name="title" id="title" placeholder="Article title" value="<?php echo htmlspecialchars($title); ?>"> 
    </div>
    <div>
        <label for="content">Content</label><textarea name="content" rows="4" cols="40" id="content" placeholder="Article content"><?= htmlspecialchars($content); ?></textarea>
    </div>


    <!-- datum -->
   
   
    <div>
        <label for="published_at">Publication date and time </label>
        <input type="datetime-local" name="published_at" id="published_at" value="<?php echo htmlspecialchars($published_at); ?>">
    </div>
    
    



   


    <!-- <div><label for="content"> Content proba</label><textarea name="content" placeholder="Article content" rows="4" cols="40" id="content"  value="<?php echo htmlspecialchars($title); ?>"></textarea></div> -->





    <button>Save</button>
</form>




