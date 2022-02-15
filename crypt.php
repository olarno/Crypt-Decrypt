<?php 
include('gen_key.php');

$data = 'plaintext data goes here';

// Encrypt the data to $encrypted using the public key
openssl_public_encrypt($data, $encrypted, openssl_pkey_get_public(file_get_contents('keys/public.pem')));

echo 'Data encrypted :'.$encrypted; 
file_put_contents('encrypt/data', $encrypted);
// Decrypt the data using the private key and store the results in $decrypted
openssl_private_decrypt($encrypted, $decrypted, openssl_get_privatekey(file_get_contents('keys/private.pem')));

echo PHP_EOL; 
echo $decrypted;