<?php
/*
require_once './Pencilbox.php';
$a= new Pencilbox();
echo $a->name;
echo '</br>';
$a->add();
*/

require_once './Example.php';
$a = new Example();
//echo $a->name;
echo '</br>';
$a->one($_POST['name']);
//echo $_GET['name']
//echo $_POST['name'];
?>
<form action="" method="POST">
    <input type="text" name="name"/>
    <input type="submit" name="btn" value="submit"/>
</form>
