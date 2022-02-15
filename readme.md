# Crypt / decrypt

it's for testing differents solutions. 

## Hash 
using php nativ function  

``hash(  
    string $algo,  
    string $data,  
    bool $binary = false,  
    array $options = []  
): string``  

You can added ``salt`` to your ``$data``  
But this `` salt`` need to be **unique** for each **entry** and if you need to compare two hash *like password entry and password saved* 

``password_hash(string $password, string|int|null $algo, array $options = []): string``   
Using the Bcrypt Algorithm (currently the most functional)

### Algos 
Using the standard algo. You can found all :  
``hash_algos(): array`` 

### Solution selected  
**password_hash()** *with Bcrypt algorithm*

## Crypt 
Create a private key : ``$privkey = openssl_pkey_new(); ``  
Create a public key : ``$key_details = openssl_pkey_get_details($testprivatekey);``

