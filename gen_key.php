<?php
$config = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 4096,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);
//creating private key
$private_key = openssl_pkey_new($config);
openssl_pkey_export_to_file($private_key, 'keys/private.pem');

$test_private_key = openssl_get_privatekey(file_get_contents('keys/private.pem'));
if ($test_private_key === false) {
  //var_dump(openssl_error_string());
} else {
  //var_dump($testprivatekey);
  $key_details = openssl_pkey_get_details($test_private_key);
  $public_key = $key_details["key"];
  file_put_contents('keys/public.pem', $public_key);
}
