<?php

//Necessário testar em dominio com SSL
define("URL", "https://localhost/celke/");

$sandbox = true;
if($sandbox){
    define("EMAIL_PAGSEGURO", "purezanegocios@gmail.com");
    define("TOKEN_PAGSEGURO", "54D78E8346234B2FA6F2F9E17CA706DD");
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}else{
    define("EMAIL_PAGSEGURO", "purezanegocios@gmail.com");
    define("TOKEN_PAGSEGURO", "54D78E8346234B2FA6F2F9E17CA706DD");
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}