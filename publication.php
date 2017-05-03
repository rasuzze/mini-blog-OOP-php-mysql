<?php
include "database.php";
include "Publication.class.php";


$public = new PublicationRepository($pdo);
$id=$_GET['id'];
$publ = $public->getById($id);

	echo '<pre>';
	 var_dump ($publ);
	 echo '</pre>';
?>