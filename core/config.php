
<?PHP

if (session_status()==PHP_SESSION_NONE)session_start();

$rootDirName = basename(dirname(__DIR__));
$urlparts = explode ('/',$_SERVER['REQUEST_URI']);

$projectpath = '';
foreach ( $urlparts as $part) {
    $projectpath .= $part . '/';
    if($part==$rootDirName) break ;
}


define( 'APP_URL' , $_SERVER['REQUEST_SCHEMA'].'://'.$_SERVER['SERVER_NAME']. ':'. $_SERVER['SERVER_PORT'] . $projectpath);


define( 'APP_PATH' , $_SERVER['DOCUMENT_ROOT'] .$projectpath );
 
define ("DB_HOST","localhost");
define ("DB_USER","root");
define ("DB_PASSWORD","root");
define ("DB_NAME","318_oop_app");
?>