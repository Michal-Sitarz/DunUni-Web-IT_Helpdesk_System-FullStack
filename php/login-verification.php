<?php

session_start();

include '../../DB/connection.php';

/* 
 * after checking username/password against DB
 *  load either Admin version or Standard version accordingly
*/


include '../../DB/connection_close.php';
?>