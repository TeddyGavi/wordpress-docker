<?php
// Database connection settings
$cfg['Servers'][1]['host'] = getenv('PMA_HOST');
$cfg['Servers'][1]['port'] = getenv('PMA_PORT');
$cfg['Servers'][1]['user'] = 'root';
$cfg['Servers'][1]['password'] = getenv('MYSQL_ROOT_PASSWORD');

$cfg['Servers'][1]['auth_type'] = 'cookie';  // Can be 'cookie', 'config', 'http', 'signon'
$cfg['Servers'][1]['AllowNoPassword'] = false;

// Security settings
// $cfg['LoginCookieValidity'] = 3600;  // Cookie validity time in seconds
