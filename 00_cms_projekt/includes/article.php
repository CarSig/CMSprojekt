<?php

//video 78

/**
 * Get the article record based on the ID
 * 
 * @param object $conn Connection to the database
 * @param integer $id the article id
 * @para, string $columns Optional list of columns for the select, defaults to '*'
 * 
 * @return mixed an assocaitive array containing the article with that ID, or null if not found
 */
function getArticle($conn,$id,$columns='*') {
    $sql =" SELECT $columns
            FROM article
            WHERE id=?";
    
    $stmt = mysqli_prepare($conn,$sql);

    if ($stmt === false) {
        echo mysqli_error($conn);
    }else{
        mysqli_stmt_bind_param($stmt, "i", $id);
    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_fetch_array($result,MYSQLI_ASSOC);

    }
    } 

}

/**
 * validate the article properties
 * missing date validation
 * @param string $title Title, required
 * @param string $content Content, required
 *  still missing @param string published_at  Published date and time, yyyy-mm-dd hh:mm:ss if not blank
 * 
 * return array Am array of validation error messages
 * */

function validateArticle ($title,$content, $published_at) {
    $errors = [];
if ($title == '') {
    $errors[] = 'Title is required';
}
if ($content == '') {
    $errors[] = 'Content is required';
}
return $errors;
}