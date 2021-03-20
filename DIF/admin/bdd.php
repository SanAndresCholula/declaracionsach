<?php
try
{
          //$bdd = new PDO('mysql:host=localhost;dbname=proye178_pak;charset=utf8', 'proye178_pak', '@Pr0y3ct04k');
            //$bdd = new PDO('mysql:host=localhost;dbname=bd_bienestar;charset=utf8', 'root', '@@itroot');
        $bdd = new PDO('mysql:host=localhost;dbname=bd_bienestar;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
