<?php
try
{
        $bdd = new PDO('mysql:host=localhost;dbname=bd_pak;charset=utf8', 'root', '');
        //$bdd = new PDO('mysql:host=localhost;dbname=proye178_pak;charset=utf8', 'proye178_pak', '@Pr0y3ct04k');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
