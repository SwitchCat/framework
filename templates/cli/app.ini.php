<?php
$onlineroot = ($params['app_root_online'] !== '') ? $params['app_root_online'] : '; Your app root url here';
$localroot =  ($params['app_root_local'] !== '') ? ('localhost/' . $params['app_root_local']) : '; Your local path here';
$dbuser = (isset($params['app_database_user']) && $params['app_database_user'] !== '') ? $params['app_database_user'] : '';
$dbpwd = (isset($params['app_database_pwd']) && $params['app_database_pwd'] !== '') ? $params['app_database_pwd'] : '';

echo "; SwitchCat Framework INI file

[INIT]

; >>>SESSIONS<<<
; Use sessions. [on/off]
sessions = on

[APP]

; >>>NAME<<<
; Will define namespace root for all user classes
name = '" . $params['app_name'] . "'
; >>>ROOT<<<
; Define root for your app
; # Localhost
" . $localroot . "
; # Online
" . $onlineroot . "

[DATABASE]

dbname = '" . $params['app_database'] . "'
dbuser = '" . $dbuser . "'
dbpwd = '" . $dbpwd . "'

; >>>SITE MODE<<<
; DEV { 'debugbar' : 'on', 'show_errors' : 'ALL', 'cache' : 'off' }
; ALPHA { 'debugbar' : 'off', 'show_errors' : 'E_ALL & ~E_NOTICE', 'cache' : 'off' }
; BETA { 'debugbar' : 'off', 'show_errors' : 'E_ALL & ~E_NOTICE & ~E_WARNING', 'cache' : 'on' }
; PROD {  'debugbar' : 'off', 'show_errors' : '0', 'cache' : 'on' }
mode = 'DEV'

[MODULES]

; >>>AUTHENTICATION MODULE<<<
; Dependency: Permissions module
; Authenticate users. [on/off]
authenticate = off
; Authentication level
; 0 = login/registration are optional
; 1 = login/registration required (use login/register controller if authentication fails)
auth_level = 0

; >>>PERMISSIONS MODULE<<<
; Levels: from 0 to permissions_max_level
; [0 = unregistered user | 1 = registered user | 2 = premium user | 3 = special 1 | 4 = special 2 | 5 = special 3 | 6 = developer (overrides site settings to DEV mode) | 7 = administrator ]
permissions_max_level = 2

";