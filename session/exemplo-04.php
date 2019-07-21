<?php 

session_id('bl9ckbvp75s7ldalu1l1kgci93');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>