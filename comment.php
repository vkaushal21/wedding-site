<?php
include 'function.php';
$name=addslashes($_POST['name']);
$email=addslashes($_POST['email']);
$comment=addslashes($_POST['comments']);

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comments']))
{
writeCommnet(array(
				'name'=>$name,
				'email'=>$email,
				'comments'=>$comment,
				'date'=>date("F j Y g:iA")
			));
}
?>
