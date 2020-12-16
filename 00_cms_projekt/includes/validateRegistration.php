<?php  

function validateRegistration ($username,$zip, $email,$pwh,$repeatPw) {
    $errors = [];
if ($username == '') {
    $errors[] = 'Username is required';
}
if ($zip == '') {
    $errors[] = 'Zip code is required';
}
if ($email == '') {
    $errors[] = 'Email is required';
}
if ($pwh == '') {
    $errors[] = 'Please write a password';
}
if ($repeatPw == '' || $repeatPw != $pwh ) {
    $errors[] = 'Please repeat your password';
}

return $errors;
}

