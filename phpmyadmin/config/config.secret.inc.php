<?php
/* Encryption key */
$cfg['blowfish_secret'] = getenv('ENCRYPTION_KEY') ?: 'default_encryption_key';

/* Server parameters */
$cfg['Servers'][$i]['host'] = 'database';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['user'] = 'user';
$cfg['Servers'][$i]['password'] = '${DATABASE_PASSWORD}';
