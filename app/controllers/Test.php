<?php
include '../core/Db.php';
include '../core/Template.php';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123$%^&*';
$dbname = 'testdb';
$db = new db($dbhost, $dbuser, $dbpass, $dbname);

class Test {

	public function __construct() {
	
	}

    public function index() {
        Template::view('../views/index.html', [
            'title' => 'Home Page',
            'colors' => ['red','blue','green']
        ]);
    }
}

$testObj = new Test();
$testObj->index();

?>