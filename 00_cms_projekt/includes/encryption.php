<?php 
// ------------------------
//         VARIABLES 
// ------------------------

//----------shared -------

// Store the cipher method 
$ciphering = "AES-128-CTR"; 
  
// Use OpenSSl Encryption method 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
 
//----------encryption------

// Non-NULL Initialization Vector for encryption 
$encryption_iv = '1234567891011121'; 
  
// Store the encryption key 
$encryption_key = "comhard"; 

//----------decryption------

// Non-NULL Initialization Vector for decryption 
$decryption_iv = '1234567891011121'; 
  
// Store the decryption key 
$decryption_key = "comhard"; 

  
// ------------------------
//         FUNCTIONS 
// ------------------------

/**
 * function that encrypts password
 * @param string  user inputed password
 * @return encrypted password 
 */

function encryption($password){
    global  $ciphering, 
    $encryption_key, $options, $encryption_iv;
    return openssl_encrypt($password, $ciphering, 
    $encryption_key, $options, $encryption_iv); }

  /**
   * decrypts password
   * @param string - encrypted password - encryption($password)
   * @return decrypted password
   */

function decryption ($encryption) {
    global $ciphering,  
    $decryption_key, $options, $decryption_iv;
    return openssl_decrypt ($encryption, $ciphering,  
        $decryption_key, $options, $decryption_iv);
}
 
// ------------------------------
//         TESTING
// ------------------------------

// // Display the original string 
// echo "Original String: " . "Lovro"; 

// // Display the encrypted string 
// echo "Encrypted String: " .  encryption("Lovro") . "\n"; 

// // Display the decrypted string 
// echo "Decrypted String: " .  decryption (encryption("Lovro")); 
  
?> 