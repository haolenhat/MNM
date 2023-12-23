<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
if ($action=='index')
{
    include 'views/map/contact.php';
}

?>