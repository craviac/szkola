<?php
     $db = new mysqli('localhost', 'root', '', 'zadanie domowe');
        $title = $_POST["title"];
        $content = $_POST["content"]; 
        $data = date("Y-m-d");
        $sql = 'INSERT INTO `posty` (`id`, `tytul`, `tresc`, `data_dodania`) VALUES (NULL, \''.$title. '\', \''.$content.'\', \''.$data.'\');';
        $db->query($sql);
        header('Location: strglowna.php');
        

?>