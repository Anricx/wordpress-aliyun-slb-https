<?php
/*
Plugin Name: Aliyun SLB HTTPS
Plugin URI:  https://github.com/Anricx/wordpress-aliyun-slb-https
Description: Prevent a redirect loop when Aliyun SLB in HTTPS mode and backend is HTTP.
Version: 1.0.0
Author: dengt (joe.dengtao@gmail.com)
Author URI: https://github.com/anricx
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: aliyun-slb-ssl
*/
// fixed The Redirect Loop
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && 'https' == $_SERVER['HTTP_X_FORWARDED_PROTO'] ) $_SERVER['HTTPS'] = 'on';
