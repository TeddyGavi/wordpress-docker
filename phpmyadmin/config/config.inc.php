<?php
// Database connection settings
$cfg['Servers'][$i]['host'] = 'database';  // Docker service name
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['user'] = 'root';      // MySQL root user
$cfg['Servers'][$i]['password'] = '${DATABASE_ROOT_PASSWORD}';  // Password from environment variable

$cfg['Servers'][$i]['auth_type'] = 'cookie';  // Can be 'cookie', 'config', 'http', 'signon'
$cfg['Servers'][$i]['AllowNoPassword'] = false;

// Security settings
// $cfg['LoginCookieValidity'] = 3600;  // Cookie validity time in seconds
