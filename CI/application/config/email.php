<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*$config['protocol']  = 'mail'; // O protocolo para envio do email
$config['smtp_host'] = 'smtp.gmail.com'; // Endereço do servidor SMTP
$config['smtp_user'] = 'karolaynedias12@gmail.com';
$config['smtp_pass'] = '';
$config['smtp_port'] = "465";
$config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
$config['validate'] = TRUE; // define se haverá validação dos endereços de email
$config['charset'] = 'utf-8';
$config['newline']  = "\r\n";
$config['crlf']     = "\r\n";*/

$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset']   = 'utf-8';
$config['wordwrap'] = TRUE;



