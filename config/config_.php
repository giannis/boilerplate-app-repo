<?php
/*
 * Configurations
 * 
 * Please if you are developing LOCALLY 
 * do the following:
 * 
 * duplicate: config/local/giannis.php file
 * name it somehow, ex: mitsos.php
 * 
 * change the variables inside the file 
 * to match you local settings, 
 * usually you just need to update DB_USER and DB_PASSWORD
 * 
 * then change the $dev_conf variable below to match 
 * the name of the file above. 
 * ex: $dev_conf = "mitsos"
 * 
 * don't forget to add the file in the repo :)
 * and don't worry if you commit this one ;)
 * 
 */

//we choose our enviroment
switch ($_SERVER["SERVER_NAME"]) {
    case "dev.domain.com":
        $server_env = "dev";
        break;
    case "domain.com":
        $server_env = "live";
        break;
    case "localhost":
    default:
        $server_env = "local";
        $dev_conf   = "";
        break;
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_unicode_ci');

/* Database Table prefix. */
define("DB_PREFIX", "");

require_once __DIR__ . "/$server_env/db_" . DELI_RUNNINT_APP . ".php";

if (isset($dev_conf))
    require_once __DIR__ . "/$server_env/$dev_conf.php";
?>