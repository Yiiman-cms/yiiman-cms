<?php
/**
 * Site: https://yiiman.ir
 * AuthorName: gholamreza beheshtian
 * AuthorNumber:+989353466620 | +17272282283
 * AuthorCompany: YiiMan
 *
 *
 */
define( 'ROOTDIRECTORY',realpath( __DIR__));
use YiiMan\YiiBasics\lib\Core;
Core::$uploadDir =YII_PUBLIC_HTML_DIR.'/upload';
Core::$uploadURL = '/upload';
Core::$SiteURL = 'http://ph.tst';
Core::$SiteAdminURL = Core::$SiteURL.'/admin123456adminadmin/';

Core::$dbHost='127.0.0.1';
Core::$dbPort='3306';
Core::$dbName='parhizkar';
Core::$dbUsername='root';
Core::$dbPassword='';

Core::$enabledLanguage = true;
Core::$enabledCache = false;


$config=
[
	'content_folder'=>  realpath(__DIR__.'/crm_include')
];
global $config;
