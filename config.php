<?php
    $db_host ="localhost";
	$db_username = 'root';
	$db_password = '';
	$db_name = "tac_db";

    try{
        $db = new PDO ("mysql:host={$db_host};dbname={$db_name}";$db_user;$db_password)
    }

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
        $e->getMessage(;)
    }
?>