<?php

//Necessário testar em dominio com SSL
define("URL", "https://localhost/celke/");

$sandbox = true;
if ($sandbox) {
    //Credenciais do SandBox
    define("EMAIL_PAGSEGURO", "Seu e-mail no SandBox do PagSeguro");
    define("TOKEN_PAGSEGURO", "Seu token no SandBox do PagSeguro");
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
} else {
    //Credenciais do PagSeguro
    define("EMAIL_PAGSEGURO", "Seu e-mail do PagSeguro");
    define("TOKEN_PAGSEGURO", "Seu token no PagSeguro");
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}