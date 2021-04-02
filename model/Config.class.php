<?php
class Config{

//INFORMAÇÕES BASICAS DO SITE

const SITE_URL = "http://localhost";
const SITE_PASTA = "atelie";
const SITE_NOME = "Atelie - Laura Laços";
const SITE_EMAIL_ADM = "atelielauralaco@systecweb.online";
const BD_LIMIT_POR_PAG = 4;

//INFORMAÇÕES DO BANCO DE DADOS
const DB_HOST = "localhost",
      DB_USER = "root",
      DB_SENHA = "root",
      DB_BANCO = "ateliebd",
      DB_PREFIX = "cl_";

//INFORMAÇÕES PARA PHP MAILLER
const EMAIL_HOST = "mail.systecweb.online";
const EMAIL_USER = "atelielauralaco@systecweb.online";
const EMAIL_NOME = "Contato - Atelie Laura Laços";
const EMAIL_SENHA = "2G9nnHTD";
const EMAIL_PORTA = 587;
const EMAIL_SMTPAUTH = true;
const EMAIL_SMTSECURE = "tls";
const EMAIL_COPIA = "atelielauralaco@systecweb.online";
}
?>