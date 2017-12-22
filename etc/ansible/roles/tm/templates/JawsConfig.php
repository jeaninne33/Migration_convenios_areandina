<?php
/**
 * JawsConfig.php - Configuration variables
 *
 * @author     Jonathan Hernandez <ion@suavizado.com>
 * @author     Ali Fazelzadeh <afz@php.net>
 * @copyright  2004-2012 Jaws Development Group
 */
// Path where Jaws is installed
define('JAWS_PATH', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
define('JAWS_DATA', JAWS_PATH . 'data'. DIRECTORY_SEPARATOR);

$db = array(); //DONT RENAME/DELETE THIS VARIABLE!!
/**
 * DB Configuration
 *
 * In this section you configure some params of your DB connection, such as
 * username, password, name, host and driver.
 * The prefix is optional, just make sure it has an empty value
 */
$db['driver']   = 'mysqli';
$db['host']     = 'localhost';
$db['port']     = '';
$db['user']     = 'tm';
$db['password'] = '123';
$db['isdba']    = 'false';
$db['path']     = '';
$db['name']     = 'tm';
$db['prefix']   = '';

/**
 * Logs
 *
 * If you want to enable logging Jaws, maybe to track the errors, or to debug a good
 * idea is to configure/enable it.
 *
 * Debug: false Disable log
 *        1     Emergency log level
 *        2     Alert log and utmost levels
 *        3     Critical log and utmost levels
 *        4     Error log and utmost levels
 *        5     Warning log and utmost levels
 *        6     Notice log and utmost levels
 *        7     Info log and utmost levels
 *        8     Debug log and utmost levels
 */
define('DEBUG_ACTIVATED', false);

/**
 * Log Method
 *
 * How do you want to print/save the log?. Currently we just support:
 *
 *    LogToFile: Logs the message to a specified file.
 *     Options:
 *      file (required): File where you want to save data, IMPORTANT. PHP needs write-access to that file
 *      maxlines (optional): How many lines will contain the file. Default = 500
 *      rotatelimit (optional): How many rotated files will be created (i.e. jaws.log.1, jaws.log.2 etc). Default = 1
 *     Example:
 *        $GLOBALS['logger']['method'] = 'LogToFile';
 *        $GLOBALS['logger']['options'] = array();
 *        $GLOBALS['logger']['options']['file'] = "/tmp/jaws.log";
 *
 *
 *    LogToSyslog: Logs the message to the syslog, you can find the log of this blog just by looking to the tag you
 *    define
 *      Options:
 *       indent: String ident is added to each message. Default: "Jaws_Log"
 *      Example:
 *        $GLOBALS['logger']['method'] = 'LogToSyslog';
 *        $GLOBALS['logger']['options'] = array();
 *        $GLOBALS['logger']['options']['indent'] = 'Jaws_Log';
 *
 *    LogToWindow: All log messages are printed to new window
 *       Example:
 *        $GLOBALS['logger']['method'] = 'LogToWindow';
 *
 *    LogToApache': Prints the message to the apache error log file
 *       Example:
 *        $GLOBALS['logger']['method'] = 'LogToApache';
 *
 *    LogToFirebug: Prints the messages into the Firebugs console (The firebug extensions is required)
 *       Example:
 *        $GLOBALS['logger']['method'] = 'LogToFirebug';
 */

$GLOBALS['logger']['method'] = 'LogToFile';
$GLOBALS['logger']['options'] = array();
$GLOBALS['logger']['options']['file'] = JAWS_DATA . 'logs/.jaws.log';
