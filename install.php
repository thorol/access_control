<?php
/*
 * Access Control AddOn
 * @author wolfgang[at]busch-dettum[dot]de Wolfgang Busch
 * @package redaxo5
 * @version Februar 2023
 */
require_once __DIR__.'/lib/class.access_control.php';
access_control::cache_guardian_users();
?>