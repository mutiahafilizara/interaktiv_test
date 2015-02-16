<?php
if ( ! defined('BASEPATH')) exit('No direct file access!');
//Begin email.php
$config['protocol'] = 'smtp'; 
$config['smtp_host'] = 'ssl://smtp.googlemail.com'; 
$config['smtp_port'] = '465'; 
$config['smtp_timeout'] = '45'; 
// *** Replace with your Gmail *** 
$config['smtp_user'] = 'fortestmutia@gmail.com'; 
// *** Replace with your Gmail password *** 
$config['smtp_pass'] = 'fortest123'; 
$config['charset']='utf-8'; 
$config['newline']="\r\n";
//End email.php
